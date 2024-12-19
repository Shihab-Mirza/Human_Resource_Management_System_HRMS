<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attendance Report</title>
    @include('manager.css')

    <style>
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table a {
            color: #007bff;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Attendance Report</h2>
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table>
                <tr>
                    <th>SI</th>
                    <th>Date</th>
                    <th>Department</th>
                    <th>View Report</th>
                </tr>
                @foreach($attendanceData as $index=> $data)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $data->attendance_date }}</td>
                        <td>{{ $data->department }}</td>
                        <td><a href="{{ url('generate_attendance_pdf/'.$data->attendance_date.'/'.$data->department) }}">View Report</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('manager.js')
</body>
</html>
