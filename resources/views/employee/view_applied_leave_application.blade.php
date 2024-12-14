<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Application Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('employee.css')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            word-wrap: break-word;
            white-space: normal;
        }

        th {
            background-color: #f2f2f2;
        }

        .status-approved {
            color: green;
        }

        .status-rejected {
            color: red;
        }

        .status-pending {
            color: orange;
        }
    </style>
</head>
<body>
    @include('employee.navigation')
    @include('employee.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2>Leave Applications Status</h2>

                <table>
                    <tr>
                        <th>Leave application ID</th>
                        <th>Employee Name</th>
                        <th>Leave Type</th>
                        <th>Leave Period</th>
                        <th>Status</th>
                        <th>additional notes</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{ $data->leave_application_id }}</td>
                        <td>{{ $data->employee_name }}</td>
                        <td> {{ $data->leave_type }}</td>
                        <td>{{ $data->leave_start_date }} to {{ $data->leave_end_date }}</td>
                        <td > {{ $data->status }}  </td>
                        <td > {{ $data->additional_notes }}  </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
    @include('employee.js')
</body>
</html>
