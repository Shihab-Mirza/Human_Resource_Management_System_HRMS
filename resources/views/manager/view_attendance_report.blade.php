<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attendance Report</title>
    @include('manager.css')
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
            <table class="attendance-report-view">
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
                        <td><a href="{{ url('generate_attendance_pdf/'.$data->attendance_date.'/'.$data->department) }}"  class="btn btn-warning">View Report</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('manager.js')
</body>
</html>
