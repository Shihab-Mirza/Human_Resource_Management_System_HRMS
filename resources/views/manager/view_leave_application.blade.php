<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Application Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('manager.css')
</head>
<body>
    @include('manager.navigation')
    @include('manager.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2>Leave Applications Status</h2>

                <table class="leave-application-table">
                    <tr>
                        <th>SI</th>
                        <th>Leave Application ID</th>
                        <th>Employee Name</th>
                        <th>Leave Type</th>
                        <th>Leave Period</th>
                        <th>Status</th>
                        <th>View Action</th>
                    </tr>
                    @foreach($data as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->leave_application_id }}</td>
                        <td>{{ $data->employee_name }}</td>
                        <td>{{ $data->leave_type }}</td>
                        <td>{{ $data->leave_start_date }} to {{ $data->leave_end_date }}</td>
                        <td class="status-{{ strtolower($data->status) }}">
                            {{ $data->status }}
                        </td>
                        <td ><a href="{{ url('view_full_leave', $data->id) }}" class="btn btn-info" >View</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

    @include('manager.js')
</body>
</html>
