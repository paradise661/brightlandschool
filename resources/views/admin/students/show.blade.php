@extends('layouts.admin.master')
@section('title', 'Inquiry')
@php
    $name = 'student';
@endphp

@section('content')
    @include('admin.includes.message')

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Show Student Enquiry</h5>
            <small class="text-muted float-end">
                <a class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2"
                    href="{{ route($name . '.index') }}">
                    <i class='ri-arrow-left-line ri-lg'></i>
                    Back
                </a>
            </small>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">General Information</h5>

                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Full Name</td>
                                    <td>
                                        {{ $student->name ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of Birth(AD)</td>
                                    <td>{{ $student->dob_ad ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth(BS)</td>
                                    <td>{{ $student->dob_bs ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td class="text-capitalize">{{ $student->gender ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Religion</td>
                                    <td>{{ $student->father_religion ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Current Address</td>
                                    <td>
                                        {{ $student->father_address ?? '-' }},

                                    </td>
                                </tr>
                                <tr>
                                    <td>Medical History</td>
                                    <td>
                                        {{ $student->medical_history ?? '-' }},

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Father Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Full Name</td>
                                    <td>
                                        {{ $student->father_name ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        {{ $student->father_occupation ?? '-' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        @if ($student->father_phone)
                                            <a
                                                href="tel:{{ $student->father_phone }}">{{ $student->father_phone ?? '-' }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        @if ($student->father_email)
                                            <a
                                                href="mailto:{{ $student->father_email }}">{{ $student->father_email ?? '-' }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Mother Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Full Name</td>
                                    <td>
                                        {{ $student->mother_name ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        {{ $student->mother_occupation ?? '-' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        @if ($student->mother_phone)
                                            <a
                                                href="tel:{{ $student->mother_phone }}">{{ $student->mother_phone ?? '-' }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        @if ($student->mother_email)
                                            <a
                                                href="mailto:{{ $student->mother_email }}">{{ $student->mother_email ?? '-' }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Guardian Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Name</td>
                                    <td>
                                        {{ $student->guardian_name ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Relationship</td>
                                    <td>
                                        {{ $student->guardian_relationship ?? '-' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        {{ $student->guardian_phone ?? '-' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        {{ $student->guardian_address ?? '-' }}

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Brother/Sister Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Brother/Sister studying in this school</td>
                                    <td>
                                        {{ $student->has_sibling ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Sibling 1 - Name/class</td>
                                    <td>
                                        {{ $student->sibling1_name && $student->sibling1_class
                                            ? $student->sibling1_name . '/' . $student->sibling1_class
                                            : '-' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sibling 2 - Name/class</td>
                                    <td>
                                        {{ $student->sibling2_name && $student->sibling2_class
                                            ? $student->sibling2_name . '/' . $student->sibling2_class
                                            : '-' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sibling 3 - Name/class</td>
                                    <td>
                                        {{ $student->sibling3_name && $student->sibling3_class
                                            ? $student->sibling3_name . '/' . $student->sibling3_class
                                            : '-' }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Agreement and Declaration OF Parent / Guardian</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Name</td>
                                    <td>
                                        {{ $student->agreement_name ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Relation</td>
                                    <td>
                                        {{ $student->agreement_relations ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Date</td>
                                    <td>
                                        {{ $student->agreement_date ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Authorised Signature</td>
                                    <td>
                                        @if ($student->declaration_sign)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->declaration_sign, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->declaration_sign }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route($name . '.update', ${$name}->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="form-label" for="status">status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1" @if (old('status', ${$name}->status) == 1) selected @endif>Checked
                                </option>
                                <option value="0" @if (old('status', ${$name}->status) == 0) selected @endif>Unchecked
                                </option>
                            </select>

                            @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 ">
                            <label class="form-label" for="priority">Priority</label>
                            <select class="form-select" id="priority" name="priority">
                                <option value="high" @if (old('priority', ${$name}->priority) == 'high') selected @endif>
                                    High
                                </option>
                                <option value="medium" @if (old('priority', ${$name}->priority) == 'medium') selected @endif>Medium
                                </option>
                                <option value="low" @if (old('priority', ${$name}->priority) == 'low') selected @endif>Low
                                </option>
                            </select>
                            @error('priority')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="note">Note</label>
                            <textarea class="form-control" id="note" name="note" placeholder="Note" rows="4">{{ old('note', ${$name}->note) }}</textarea>
                            @error('note')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button class="btn btn-sm btn-primary mt-4" type="submit">
                            <i class='bx bx-refresh'></i>
                            Update
                        </button>

                        <a class="btn btn-sm btn-info mt-4" href="{{ route('student.download', $student->id) }}">
                            <i class='bx bxs-file-pdf'></i> Download PDF
                        </a>

                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <h5 class="card-header">Payments Details</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Payment Status:</td>
                                    <td>{{ $student->payment_status ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Transcation Code:</td>
                                    <td>{{ $student->esewa_transaction_code ?? '-' }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <h5 class="card-header">Student's Details</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Class Last Attended:</td>
                                    <td>{{ $student->last_class_attended ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Result</td>
                                    <td>{{ $student->result ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Name and Address of the School</td>
                                    <td>{{ $student->school_name_address ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Give Detail of Child's Illness</td>
                                    <td>{{ $student->medical_history ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <h5 class="card-header">Students Documents</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>Student Photo</td>
                                    <td>
                                        @if ($student->student_photo)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->student_photo, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->student_photo }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Birth Certificate</td>
                                    <td>
                                        @if ($student->birth_certificate)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->birth_certificate, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->birth_certificate }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Report Card</td>
                                    <td>
                                        @if ($student->last_report_card)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->last_report_card, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->last_report_card }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transfer Certificate</td>
                                    <td>
                                        @if ($student->transfer_certificate)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->transfer_certificate, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->transfer_certificate }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Character Certificate</td>
                                    <td>
                                        @if ($student->character_certificate)
                                            <a class="fancybox btn btn-sm btn-primary" data-fancybox
                                                data-type="{{ Str::endsWith($student->character_certificate, '.pdf') ? 'iframe' : 'image' }}"
                                                href="{{ $student->character_certificate }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <h5 class="card-header">School Bus Information</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <tr>
                                    <td>Require school bus</td>
                                    <td>{{ $student->bus_required ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Pick-up Point</td>
                                    <td>{{ $student->bus_pickup_point ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Guardian's Name for Bus</td>
                                    <td>{{ $student->bus_guardian_name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $student->bus_address ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Contact Number</td>
                                    <td>
                                        @if ($student->bus_phone)
                                            <a href="tel:{{ $student->bus_phone }}">{{ $student->bus_phone }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
