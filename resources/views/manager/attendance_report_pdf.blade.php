<!DOCTYPE html>
<html>
<head>
    <style>
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
    <h2>Attendance Report</h2>
    <p><strong>Date:</strong> {{ $attendance_date }}</p>
    <p><strong>Department:</strong> {{ $department }}</p>
    <table>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Status</th>
        </tr>
        @foreach($attendanceReport as $attendance)
            <tr>
                <td>{{ $attendance->first_name }} {{ $attendance->last_name }}</td>
                <td>{{ $attendance->position }}</td>
                <td>{{ $attendance->status }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
