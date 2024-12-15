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
            <h2>Job Circular</h2>
            <table>
                <tr>
                    <th>SI</th>
                    <th>Job title</th>
                    <th>Employment type</th>
                    <th>Salary range</th>
                    <th>Application deadline</th>
                    <th>Update Action</th>
                    <th>Delete Action</th>
                </tr>
                @foreach($job_circular_data as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->job_title }}</td>
                    <td>{{ $data->employment_type }}</td>
                    <td>{{ $data->salary_range }}</td>
                    <td>{{ $data->application_deadline }}</td>
                    <td><a href="{{ url('update_job_circular',$data->id) }}">Update</a></td>
                    <td><a href="{{ url('delete_job_circular',$data->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
