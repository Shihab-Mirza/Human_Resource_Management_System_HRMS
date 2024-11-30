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
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Use fixed layout */

        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            word-wrap: break-word; /* Allow long words to break onto the next line */
            white-space: normal; /* Ensure text can wrap */
            overflow-wrap: break-word; /* Ensure long words wrap */
        }
        th {
            background-color: #f2f2f2;
            word-wrap: break-word; /* Allow long words to break onto the next line */
            white-space: normal; /* Ensure text can wrap */
            overflow-wrap: break-word; /* Ensure long words wrap */
        }

    </style>

</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Job Applications</h2>

            <table>
                <tr>
                    <th>Application ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Application date</th>
                    <th>Status</th>
                    <th>View full application</th>
                    <th>Delete action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{ $data->cv_application_id }}</td>
                    <td>{{ $data->first_name }}  {{ $data->last_name }}</td>
                    <td>{{ $data->position }}</td>
                    <td>{{ $data->application_date }}</td>
                    <td>{{ $data->status }}</td>
                    <td><a href="{{ url('view_job_application_submitted',$data->id) }}">view</a></td>
                    <td><a href="{{ url('Delete_job_application',$data->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
