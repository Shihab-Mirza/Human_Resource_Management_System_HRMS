<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('none_employee.css')

</head>
<body>
@include('none_employee.navigation')
@include('none_employee.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Job Circular</h2>
            <table class="job-circular-table-ne">
                <tr>
                    <th>SI</th>
                    <th>Job title</th>
                    <th>Employment type</th>
                    <th>Salary range</th>
                    <th>Application deadline</th>
                    <th>View Full circular</th>
                    <th>Apply Action</th>
                </tr>
                @foreach($job_circular_data as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->job_title }}</td>
                    <td>{{ $data->employment_type }}</td>
                    <td>{{ $data->salary_range }}</td>
                    <td>{{ $data->application_deadline }}</td>
                    <td><a href="{{ url('view_full_circular_none_employee',$data->id) }}" class="btn btn-info">View</a></td>
                    <td><a href="{{ url('apply_job_none_employee',$data->id) }}" class="btn btn-danger">Apply</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('none_employee.js')
</body>
</html>
