<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Performance Feedback Report</title>
    @include('manager.css')
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Performance Feedback Report</h2>
            <table class="performance-feedback-report-table">
                <tr>
                    <th>SI</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>View Report</th>
                </tr>
                @foreach($performance_data as $index=> $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->employee_unique_id }}</td>
                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                        <td>{{ $data->department }}</td>
                        <td>{{ $data->month }}</td>
                        <td>{{ $data->year }}</td>
                        <td><a href="{{ url('generate_performance_feedback_pdf/'.$data->id.'/'.$data->month.'/'.$data->year) }}" class="btn btn-warning">View Report</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('manager.js')
</body>
</html>
