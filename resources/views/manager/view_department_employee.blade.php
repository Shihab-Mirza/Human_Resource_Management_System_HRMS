<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
@include('manager.css')
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>{{ $department_name }} department</h2>
            <table class="employee-table">
                <tr>
                    <th>SI</th>
                    <th>Employee Photo</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Position</th>
                    <th>View full Profile</th>
                    <th>Update Profile</th>
                    <th>Delete Profile</th>
                </tr>
                @foreach($employee_data as $index => $employee_data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if($employee_data->employee_image)
                            <img src="{{ Storage::url($employee_data->employee_image) }}" alt="Employee Photo" width="100" height="100">
                        @endif
                    </td>
                    <td >{{ $employee_data->employee_unique_id }}</td>
                    <td>{{ $employee_data->first_name }} {{ $employee_data->last_name }}</td>
                    <td>{{ $employee_data->position }}</td>
                    <td class="center-align"><a href="{{ url('view_full_profile', $employee_data->id) }}" class="btn btn-info">View</a></td>
                    <td class="center-align"><a href="{{ url('update_employee_profile', $employee_data->id) }}" class="btn btn-warning">Update</a></td>
                    <td class="center-align"><a href="{{ url("delete_employee_profile", $employee_data->id) }}" class="btn btn-danger">Delete</a></td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
