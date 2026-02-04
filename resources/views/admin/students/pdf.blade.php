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

    <h1>Student Detail</h1>

    <!-- Basic Info -->
    <div class="section">
        <h2>Basic Information</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <td>{{ $student->full_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ $student->note ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Priority</th>
                <td>{{ $student->priority ?? ' -' }}</td>
            </tr>
        </table>
    </div>

    <!-- Academic Qualification -->
    <div class="section">
        <h2>Academic Qualification</h2>
        <table>
            <tr>
                <th>Qualification</th>
                <td>{{ $student->qualification ?? ' -' }}</td>
            </tr>
            <tr>
                <th>SEE School Name</th>
                <td>{{ $student->see_school_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>SEE GPA</th>
                <td>{{ $student->see_gpa ?? ' -' }}</td>
            </tr>
            <tr>
                <th>SEE Passed Year</th>
                <td>{{ $student->see_passed_year ?? ' -' }}</td>
            </tr>

            <tr>
                <th>+2 College Name</th>
                <td>{{ $student->plus_two_college_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>+2 GPA</th>
                <td>{{ $student->plus_two_gpa ?? ' -' }}</td>
            </tr>
            <tr>
                <th>+2 Passed Year</th>
                <td>{{ $student->plus_two_passed_year ?? ' -' }}</td>
            </tr>

            <tr>
                <th>Bachelor College</th>
                <td>{{ $student->bachelor_college_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Bachelor GPA</th>
                <td>{{ $student->bachelor_gpa ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Bachelor Passed Year</th>
                <td>{{ $student->bachelor_passed_year ?? ' -' }}</td>
            </tr>

            <tr>
                <th>Master College</th>
                <td>{{ $student->master_college_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Master GPA</th>
                <td>{{ $student->master_gpa ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Master Passed Year</th>
                <td>{{ $student->master_passed_year ?? ' -' }}</td>
            </tr>
        </table>
    </div>

    <!-- Additional Info -->
    <div class="section">
        <h2>Additional Information</h2>
        <table>
            <tr>
                <th>Marital Status</th>
                <td>{{ $student->marital_status ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $student->address ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $student->mobile ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $student->email ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Phone (Alternate)</th>
                <td>{{ $student->phone2 ?? ' -' }}</td>
            </tr>
        </table>
    </div>

    <!-- Guardian Info -->
    <div class="section">
        <h2>Guardian Information</h2>
        <table>
            <tr>
                <th>Parent's Name</th>
                <td>{{ $student->parents_name ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Guardian Address</th>
                <td>{{ $student->g_address ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Guardian Mobile</th>
                <td>{{ $student->g_mobile ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Guardian Email</th>
                <td>{{ $student->g_email ?? ' -' }}</td>
            </tr>
        </table>
    </div>

    <!-- Other Details -->
    <div class="section">
        <h2>Other Details</h2>
        <table>
            <tr>
                <th>Preferred Country</th>
                <td>{{ $student->preferred_country ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Language Test</th>
                <td>{{ $student->language_test ?? ' -' }}</td>
            </tr>
            <tr>
                <th>Previous Institution</th>
                <td>{{ $student->previous_institution_name ?? ' -' }}</td>
            </tr>

            <tr>
                <th>Source</th>
                <td>
                    @if ($student->source && is_array($student->source))
                        <ul>
                            @foreach ($student->source as $source)
                                <li>{{ $source ?? ' -' }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ is_string($student->source) ? $student->source : 'N/A' ?? ' -' }}
                    @endif
                </td>
            </tr>

            <tr>
                <th>Message</th>
                <td>{{ $student->message ?? ' -' }}</td>
            </tr>
            {{-- <tr>
                <th>Status</th>
                <td>{{ $student->status ?? ' -' }}</td>
            </tr> --}}
        </table>
    </div>
</body>

</html>
