<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

@include('dp_manager.css')
</head>
<body>
@include('dp_manager.navigation')
@include('dp_manager.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid"><br>
            <h2>Performance Feedback</h2>
            <table class="performance-feedback-table">
                <tr>
                    <th>SI</th>
                    <th>Employee Photo</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Position</th>
                    <th>Feedback Action</th>
                </tr>
                @foreach($employee_data as $index => $employee_data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if($employee_data->employee_image)
                            <img src="{{ Storage::url($employee_data->employee_image) }}" alt="Employee Photo" width="100" height="100">
                        @endif
                    </td>
                    <td>{{ $employee_data->employee_unique_id }}</td>
                    <td>{{ $employee_data->first_name }} {{ $employee_data->last_name }}</td>
                    <td>{{ $employee_data->position }}</td>
                    <td><a href="{{ url('give_performance_feedback', $employee_data->id) }}" class="btn btn-warning">Give Feedback</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('dp_manager.js')
</body>
</html>
