<!-- resources/views/manager/performance_report_pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Performance Feedback Report</title>
    <style>
        /* Style for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Performance Feedback Report</h2>
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <p><strong>Employee ID:</strong> {{ $data->employee_unique_id }}</p>
    <p><strong>Employee Name:</strong> {{ $data->first_name }} {{ $data->last_name }}</p>
    <p><strong>Department:</strong> {{ $data->department }}</p>
    <p><strong>Month:</strong> {{ $data->month }}</p>
    <p><strong>Year:</strong> {{ $data->year }}</p>

    <table>
        <tr>
            <th>Job Knowledge</th>
            <td>{{ $data->job_knowledge }}</td>
        </tr>
        <tr>
            <th>Quality of Work</th>
            <td>{{ $data->quality_of_work }}</td>
        </tr>
        <tr>
            <th>Attendance</th>
            <td>{{ $data->attendance }}</td>
        </tr>
        <tr>
            <th>Communication</th>
            <td>{{ $data->communication }}</td>
        </tr>
        <tr>
            <th>Strengths</th>
            <td>{{ $data->strengths }}</td>
        </tr>
        <tr>
            <th>Areas of Improvement</th>
            <td>{{ $data->areas_of_improvement }}</td>
        </tr>
        <tr>
            <th>Overall Score</th>
            <td>{{ $data->overall_score }}</td>
        </tr>
    </table>

</body>
</html>
