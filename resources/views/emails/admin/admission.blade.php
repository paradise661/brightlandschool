<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Application</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Times New Roman", serif;
            background-color: #eef2f7;
            color: #111827;
        }

        .wrapper {
            width: 794px;
            min-height: 1123px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #d1d5db;
        }

        .header {
            background: #1e3a5f;
            padding: 24px 40px;
            text-align: center;
            border-bottom: 3px solid #cbd5e1;
        }

        .header h1 {
            color: #fff;
            font-size: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .header p {
            font-size: 12px;
            color: #e2e8f0;
        }

        .body {
            padding: 30px 40px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-header {
            background: #f1f5f9;
            padding: 10px 18px;
            border-bottom: 2px solid #cbd5e1;
        }

        .section-header h2 {
            color: #1e293b;
            font-size: 13px;
            font-weight: 700;
        }

        table.fields {
            width: 100%;
            border-collapse: collapse;
        }

        table.fields td {
            padding: 8px 14px;
            font-size: 12.5px;
            border: 1px solid #e5e7eb;
        }

        table.fields td.label {
            background: #f9fafb;
            font-weight: 600;
            width: 40%;
        }

        .office-section {
            margin: 25px 40px;
            border: 1.5px solid #1e293b;
        }

        .office-header {
            background: #1e293b;
            padding: 8px;
            text-align: center;
        }

        .office-header h2 {
            color: #fff;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .office-table {
            width: 100%;
            border-collapse: collapse;
        }

        .office-table td {
            border: 1px solid #1e293b;
            padding: 10px;
            font-size: 12px;
        }

        .office-table .label {
            font-weight: 600;
            background: #f3f4f6;
        }

        .office-sign {
            display: flex;
            justify-content: space-between;
            padding: 30px 20px 20px;
            font-size: 12px;
        }

        .office-sign div {
            text-align: center;
            width: 45%;
        }

        .office-sign table {
            width: 100%;
            font-size: 12px;
        }

        .office-sign td {
            vertical-align: top;
        }

        .footer {
            background: #ffffff;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .footer p {
            font-size: 11px;
            color: #6b7280;
        }

        .footer .school-name {
            font-weight: bold;
            color: #111827;
        }

        .footer .divider {
            margin: 10px auto;
            width: 60%;
        }

        @media print {
            body {
                background: #fff;
            }

            .wrapper {
                margin: 0;
                border: none;
                width: 100%;
                min-height: auto;
            }
        }

        /* Card-style sections */
        .card {
            border: 1px solid #d1d5db;
            border-radius: 4px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .card-header {
            background: #f1f5f9;
            font-weight: 600;
            padding: 10px 15px;
            font-size: 13px;
            border-bottom: 1px solid #d1d5db;
        }

        .card-body {
            padding: 15px;
        }

        .table-bordered {
            border: 1px solid #e5e7eb;
            width: 100%;
            border-collapse: collapse;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #e5e7eb;
            padding: 8px 10px;
            font-size: 12px;
        }

        .table-striped tr:nth-child(even) {
            background-color: #f9fafb;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <!-- HEADER -->
        <div class="header">
            <h1>Student Admission Application</h1>
            <p>Academic Year 2083</p>
        </div>

        <!-- BODY -->
        <div class="body">

            <!-- Personal Details -->
            <div class="section">
                <div class="section-header">
                    <h2>1. Personal Details</h2>
                </div>
                <table class="fields">
                    <tr>
                        <td class="label">Full Name</td>
                        <td>{{ $student->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Date of Birth (AD)</td>
                        <td>{{ $student->dob_ad ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Date of Birth (BS)</td>
                        <td>{{ $student->dob_bs ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Gender</td>
                        <td>{{ $student->gender ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td>{{ $student->email ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Nationality</td>
                        <td>{{ $student->nationality ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Current Address</td>
                        <td>{{ $student->address ?? '-' }}</td>
                    </tr>
                </table>
            </div>

            <!-- Academic Details -->
            @if (isset($student) && $student->student_class != 'nursery')
                <div class="section">
                    <div class="section-header">
                        <h2>2. Academic Details</h2>
                    </div>
                    <table class="fields">
                        <tr>
                            <td class="label">Name of Previous School</td>
                            <td>{{ $student->school_name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Address of School</td>
                            <td>{{ $student->school_name_address ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Class Last Attended</td>
                            <td>{{ $student->last_class_attended ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Year of Passing</td>
                            <td>{{ $student->school_passed ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Result</td>
                            <td>{{ $student->result ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Reason for Leaving</td>
                            <td>{{ $student->school_reason ?? '-' }}</td>
                        </tr>

                        <tr>
                            <td class="label">Medical History</td>
                            <td>{{ $student->medical_history ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
            @endif

            <!-- Father Information -->
            <div class="section">
                <div class="section-header">
                    <h2>3. Father Information</h2>
                </div>
                <table class="fields">
                    <tr>
                        <td class="label">Full Name</td>
                        <td>{{ $student->father_name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Phone</td>
                        <td>{{ $student->father_phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Education</td>
                        <td>{{ $student->father_ethnicity ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Occupation</td>
                        <td>{{ $student->father_occupation ?? '' }}
                        </td>
                    </tr>

                    <tr>
                        <td class="label">Email</td>
                        <td>{{ $student->father_email ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Address</td>
                        <td>{{ $student->father_address ?? '-' }}</td>
                    </tr>
                </table>
            </div>

            <!-- Mother Information -->
            <div class="section">
                <div class="section-header">
                    <h2>4. Mother Information</h2>
                </div>
                <table class="fields">
                    <tr>
                        <td class="label">Full Name</td>
                        <td>{{ $student->mother_name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Phone</td>
                        <td>{{ $student->mother_phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Education</td>
                        <td>{{ $student->mother_ethnicity ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Occupation</td>
                        <td>{{ $student->mother_occupation ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Address</td>
                        <td>{{ $student->mother_address ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td>{{ $student->mother_email ?? '-' }}</td>
                    </tr>
                </table>
            </div>

            <!-- Guardian Information -->
            <div class="section">
                <div class="section-header">
                    <h2>5. Guardian Information</h2>
                </div>
                <table class="fields">
                    <tr>
                        <td class="label">Full Name</td>
                        <td>{{ $student->guardian_name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Phone</td>
                        <td>{{ $student->guardian_phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label">Education</td>
                        <td>{{ $student->guardian_qualification ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Occupation</td>
                        <td>{{ $student->guardian_occupation ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Relationship</td>
                        <td>{{ $student->guardian_relationship ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td class="label">Address</td>
                        <td>{{ $student->guardian_address ?? '-' }}</td>
                    </tr>
                </table>
            </div>

            <!-- Sibling Information -->
            @if (isset($student) && $student->has_sibling == 'yes')
                <div class="section">
                    <div class="section-header">
                        <h2>6. Sibling Information</h2>
                    </div>
                    <table class="fields">
                        <tr>
                            <td class="label">Siblings in School</td>
                            <td>{{ $student->has_sibling ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Sibling 1</td>
                            <td>{{ $student->sibling1_name ?? '-' }}/{{ $student->sibling1_class ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Sibling 2</td>
                            <td>{{ $student->sibling2_name ?? '-' }}/{{ $student->sibling2_class ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Sibling 3</td>
                            <td>{{ $student->sibling3_name ?? '-' }}/{{ $student->sibling3_class ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
            @endif

            <!-- School Bus Information -->
            @if (isset($student) && $student->bus_required == 'yes')
                <div class="section">
                    <div class="section-header">
                        <h2>7. School Bus Information</h2>
                    </div>
                    <table class="fields">
                        <tr>
                            <td class="label">Bus Required</td>
                            <td>{{ $student->bus_required ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Pick-up Point</td>
                            <td>{{ $student->bus_pickup_point ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Address</td>
                            <td>{{ $student->bus_address ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Contact Number</td>
                            <td>{{ $student->bus_phone ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
            @endif

        </div>

        <!-- OFFICE USE ONLY -->
        <div class="office-section">
            <div class="office-header">
                <h2>FOR OFFICE USE ONLY</h2>
            </div>

            <table class="office-table">
                <tr>
                    <td class="label">Entrance Test</td>
                    <td>[ ] Passed [ ] Failed</td>
                    <td class="label">Marks</td>
                    <td>________</td>
                </tr>

                <tr>
                    <td class="label">Report Card</td>
                    <td>[ ] Yes [ ] No</td>
                    <td class="label">Birth Certificate</td>
                    <td>[ ] Yes [ ] No</td>
                </tr>

                <tr>
                    <td class="label">Transfer Certificate</td>
                    <td>[ ] Yes [ ] No</td>
                    <td class="label">Character Certificate</td>
                    <td>[ ] Yes [ ] No</td>
                </tr>

                <tr>
                    <td class="label">Admission Date</td>
                    <td colspan="3">________________________</td>
                </tr>

                <tr>
                    <td class="label">Class</td>
                    <td colspan="3">________________________</td>
                </tr>
            </table>

            <div class="office-sign">
                <table width="100%">
                    <tr>
                        <td style="text-align:left; width:50%;">
                            ______________________ <br>
                            Authorized Signature
                        </td>
                        <td style="text-align:right; width:50%;">
                            ______________________ <br>
                            Date
                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p class="school-name">School Administration Office</p>
            <hr class="divider">
            <p>This is a system-generated admission record.</p>
            <p>Confidential • Not for unauthorized use</p>
        </div>

    </div>
</body>

</html>
