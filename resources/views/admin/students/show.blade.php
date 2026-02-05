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
                                        {{ $student->first_name ?? '-' }}
                                        {{ $student->last_name ?? '-' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $student->date_of_birth?->format('d M Y') ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td class="text-capitalize">{{ $student->gender ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Nationality</td>
                                    <td>{{ $student->nationality ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Religion</td>
                                    <td>{{ $student->religion ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Mother Tongue</td>
                                    <td>{{ $student->mother_tongue ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Current Address</td>
                                    <td>
                                        {{ $student->current_address ?? '-' }},
                                        {{ $student->city ?? '-' }},
                                        {{ $student->state ?? '-' }},
                                        {{ $student->country ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Applying Grade</td>
                                    <td>{{ $student->applying_grade ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Academic Year</td>
                                    <td>{{ $student->academic_year ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="card-header">Address Information</h5>
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
                                    <td>Current Address</td>
                                    <td>
                                        {{ $student->current_address ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>City</td>
                                    <td>
                                        {{ $student->city ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>State</td>
                                    <td>
                                        {{ $student->state ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Postal Code</td>
                                    <td>
                                        {{ $student->postal_code ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Country</td>
                                    <td>
                                        {{ $student->country ?? '-' }}

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

                <h5 class="card-header">Additional Information</h5>
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
                                    <td>How Did You Hear About School</td>
                                    <td>
                                        {{ $student->heard_about_school ?? '-' }}

                                    </td>
                                </tr>

                                <tr>
                                    <td>Why Join This School</td>
                                    <td>
                                        {{ $student->why_join_school ?? '-' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td>Hobbies and Interests</td>
                                    <td>
                                        {{ $student->student_hobbies ?? '-' }}

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

                        {{-- <div class="mb-4">
                            <label for="consultant" class="form-label">Consultant</label>
                            <textarea class="form-control" id="consultant" name="consultant" placeholder="Consultant" rows="4">{{ old('consultant', ${$name}->consultant) }}</textarea>
                            @error('consultant')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div> --}}

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
                                                href="{{ asset('storage/' . $student->student_photo) }}">
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
                                                href="{{ asset('storage/' . $student->birth_certificate) }}">
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
                                                href="{{ asset('storage/' . $student->transfer_certificate) }}">
                                                View
                                            </a>
                                        @else
                                            <span class="text-muted">Not uploaded</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Passport Size Photos</td>
                                    <td>
                                        @if (!empty($student->passport_photos) && is_array($student->passport_photos))
                                            @foreach ($student->passport_photos as $index => $photo)
                                                <a class="fancybox btn btn-sm btn-primary mb-1"
                                                    data-fancybox="passport-photos" data-type="image"
                                                    href="{{ asset('storage/' . $photo) }}">
                                                    View {{ $index + 1 }}
                                                </a>
                                            @endforeach
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
                <h5 class="card-header">Medical Information</h5>
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
                                    <td>Medical Conditions</td>
                                    <td>{{ $student->medical_conditions ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td>{{ $student->blood_group ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Emergency Contact Name</td>
                                    <td>{{ $student->emergency_contact_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Emergency Contact Number</td>
                                    <td>
                                        @if ($student->emergency_contact_number)
                                            <a
                                                href="tel:{{ $student->emergency_contact_number }}">{{ $student->emergency_contact_number }}</a>
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

            <div class="card mt-4">
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
                                <!-- Guardian Info -->
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $student->guardian_name ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Relationship</td>
                                    <td>{{ $student->guardian_relationship ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        @if ($student->guardian_phone)
                                            <a
                                                href="tel:{{ $student->guardian_phone }}">{{ $student->guardian_phone }}</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>
                                        @if ($student->guardian_email)
                                            <a
                                                href="mailto:{{ $student->guardian_email }}">{{ $student->guardian_email }}</a>
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
