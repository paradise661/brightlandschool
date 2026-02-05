<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentsRequest;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    public function index()
    {
        //
        $student = Student::paginate(10);

        return view("admin.students.index", compact("student"));
    }


    public function create()
    {
        //
    }


    public function store(StoreStudentsRequest $request)
    {
        $input = $request->validated();

        if (isset($input['source']) && is_array($input['source'])) {
            $input['source'] = json_encode($input['source']);
        } else {
            $input['source'] = null;
        }

        Student::create($input);

        return redirect()->back()->with('success', 'Registration successful!');
    }


    public function show(Student $student)
    {

        if ($student['source'] != null || $student['source'] != "{}" || $student['source'] != "") {
            $student['source'] = json_decode($student['source']);
        } else {
            $student['source'] = null;
        }
        return view("admin.students.show", compact('student'));
    }
    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
        $input = $request->all();
        $student->update($input);

        return redirect()->route('student.index')->with("success", "Student student Updated successfully.");
    }

    public function destroy(Student $student)
    {

        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student student Delete Successfully');
    }

    public function download(Student $student)
    {
        if ($student->source) {
            $student->source = is_array($student->source)
                ? $student->source
                : json_decode($student->source, true);
        }

        $pdf = Pdf::loadView('admin.students.pdf', compact('student'));
        $studentName = trim($student->first_name . ' ' . $student->last_name);
        $fileName = 'student-' . Str::slug($studentName) . '-' . $student->id . '.pdf';

        return $pdf->download($fileName);
    }
}
