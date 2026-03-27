<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentsRequest;
use App\Mail\StudentFormMail;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdmissionController extends Controller
{
    public function admission()
    {
        return view('frontend.admission.index');
    }

    public function studentStore(StoreStudentsRequest $request)
    {

        try {
            $data = $request->all();

            // File uploads
            $files = ['student_photo', 'birth_certificate', 'last_report_card', 'transfer_certificate', 'character_certificate', 'agreement_sign', 'declaration_sign'];

            foreach ($files as $file) {
                if ($request->hasFile($file)) {
                    $data[$file] = fileUpload($request, $file, 'Admission');
                }
            }

            // Save student
            $data['payment_status'] = 'Pending';
            $student = Student::create($data);


            // Decode source if needed
            if ($student->source) {
                $student->source = is_array($student->source)
                    ? $student->source
                    : json_decode($student->source, true);
            }

            // Generate PDF
            $pdf = Pdf::loadView('admin.students.pdf', compact('student'));

            $studentName = trim($student->name);
            $fileName = 'student-' . Str::slug($studentName) . '-' . $student->id . '.pdf';

            // Send email to admin
            // Mail::to('rosahnhumagain54@gmail.com')
            //     ->send(new StudentFormMail($pdf->output(), $fileName));


            // esewa
            $amount = 300;
            $transaction_uuid = $student->id . '_' .  Str::uuid()->toString();
            $product_code = "EPAYTEST";
            $secret = "8gBm/:&EnhH.1/q";

            $signature = $this->generateEsewaSignature($amount, $transaction_uuid, $product_code, $secret);

            $data = [
                "amount" => $amount,
                "failure_url" => route('esewa.failure', ['transaction_uuid' => $transaction_uuid]),
                "product_delivery_charge" => "0",
                "product_service_charge" => "0",
                "product_code" => $product_code,
                "signature" => $signature,
                "signed_field_names" => "total_amount,transaction_uuid,product_code",
                "success_url" => route('esewa.success'),
                "tax_amount" => "0",
                "total_amount" => $amount,
                "transaction_uuid" => $transaction_uuid,
            ];

            return response()->json([
                'success' => true,
                'message' => 'Student saved successfully!',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function generateEsewaSignature($total_amount, $transaction_uuid, $product_code, $secret)
    {
        $message = "total_amount={$total_amount},transaction_uuid={$transaction_uuid},product_code={$product_code}";

        return base64_encode(hash_hmac('sha256', $message, $secret, true));
    }

    public function esewaSuccess(Request $request)
    {
        $data = json_decode(base64_decode($request->data), true);

        if ($data['status'] === 'COMPLETE') {

            $response = Http::get('https://rc-epay.esewa.com.np/api/epay/transaction/status/', [
                'product_code' => $data['product_code'],
                'total_amount' => $data['total_amount'],
                'transaction_uuid' => $data['transaction_uuid'],
            ]);

            $result = $response->json();

            if (isset($result['status']) && $result['status'] === 'COMPLETE') {

                $id = explode('_', $data['transaction_uuid']);

                $student = Student::findOrFail($id[0]);

                $student->update([
                    'esewa_transaction_code' => $data['transaction_code'],
                    'esewa_details' => json_encode($data),
                    'payment_status' => 'Paid',
                ]);

                return redirect()->route('esewa.confirmation')->with('success', 'Payment Verified & Successful');
            }
            return redirect()->route('esewa.confirmation')->with('error', 'Verification Failed');
        }

        return redirect()->route('esewa.confirmation')->with('error', 'Payment Failed');
    }

    public function esewaFailure(Request $request)
    {
        if ($request->has('transaction_uuid')) {
            $id = explode('_', $request->transaction_uuid);
            $student = Student::find($id[0]);

            if ($student) {
                $student->update([
                    'esewa_transaction_code' => null,
                    'esewa_details' => null,
                    'payment_status' => 'Failed',
                ]);
            }
        }

        return redirect()->route('esewa.confirmation')->with('error', 'Payment Failed or Cancelled');
    }

    public function confirmation()
    {
        return view('frontend.admission.paymentconfirmation');
    }
}
