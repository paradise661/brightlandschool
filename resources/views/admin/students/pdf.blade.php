<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Detail PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
            line-height: 1.6;
            color: #333;
        }

        h1,
        h2 {
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .section {
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            width: 30%;
        }

        ul {
            margin: 0;
            padding-left: 18px;
        }
    </style>
</head>

<body>

    <div class="d-flex align-items-center justify-content-between mb-4">
        <!-- Left side -->
        <h1 class="mb-0">Student Detail</h1>

        <!-- Right side -->
        <div>
            @if (!empty($student->student_photo))
                <img class="rounded border" src="{{ asset('storage/' . $student->student_photo) }}" alt="Student Photo"
                    style="width: 120px; height: 140px; object-fit: cover;">
            @else
                <div class="border rounded d-flex align-items-center justify-content-center text-muted"
                    style="width: 120px; height: 140px;">
                    No Photo
                </div>
            @endif
        </div>
    </div>

    <!-- Basic Info -->
    <div class="section">
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

    <!-- Academic Qualification -->
    <div class="section">
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

    </div>

    <div class="section">
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
</body>

</html>
