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
                                <td>Age</td>
                                <td class="text-capitalize">{{ $student->age ?? '-' }}</td>
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
                                <td>Class Last Attended</td>
                                <td>{{ $student->last_class_attended ?? '-' }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Academic Qualification -->
            <div class="section">
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
                                        <td>Class Last Attended</td>
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
                                <td>Address</td>
                                <td>
                                    {{ $student->guardian_address ?? '-' }}

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
                            <!-- Guardian Info -->
                            <tr>
                                <td>Brother/Sister studying in this school</td>
                                <td>
                                    {{ $student->has_sibling ?? '-' }}

                                </td>
                            </tr>

                            <tr>
                                <td>Sibling 1 - Name/class</td>
                                <td>
                                    {{ $student->sibling1_name ?? '-' }}/{{ $student->sibling1_class ?? '-' }}

                                </td>
                            </tr>

                            <tr>
                                <td>Sibling 2 - Name/class</td>
                                <td>
                                    {{ $student->sibling2_name ?? '-' }}/{{ $student->sibling2_class ?? '-' }}

                                </td>
                            </tr>

                            <tr>
                                <td>Sibling 3 - Name/class</td>
                                <td>
                                    {{ $student->sibling3_name ?? '-' }}/{{ $student->sibling3_class ?? '-' }}

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
                            <!-- Guardian Info -->
                            <tr>
                                <td>Require school bus</td>
                                <td>{{ $student->bus_required ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td>Pick-up Point</td>
                                <td>{{ $student->bus_pickup_point ?? '-' }}</td>
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
</body>

</html>
