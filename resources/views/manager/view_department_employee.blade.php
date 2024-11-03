
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
            width: 99%;
            border-collapse: collapse;
            table-layout: fixed; /* Use fixed layout */

        }
        th{   border: 1px solid #ddd; /* Add borders to cells */
    padding: 8px; /* Add padding for better spacing */
    word-wrap: break-word; /* Allow long words to break onto the next line */
    white-space: normal; /* Ensure text can wrap */
    overflow-wrap: break-word; /* Ensure long words wrap */

    background-color: #f2f2f2;}

        td {
    border: 1px solid #ddd; /* Add borders to cells */
    padding: 8px; /* Add padding for better spacing */
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
            <h2>{{ $department_name }} department</h2>
            <table>
                <tr>
                    <th>Employee Photo</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Joining Date</th>
                    <th>View full Profile</th>
                    <th>Update Profile</th>
                    <th>Delete Profile</th>
                     </tr>

                @foreach($employee_data as $employee_data)
                <tr>
                    <td>{{ $employee_data->employee_unique_id }}</td>
                    <td>{{ $employee_data->employee_unique_id }}</td>
                    <td>{{ $employee_data->first_name }} {{ $employee_data->last_name }}</td>
                    <td>{{ $employee_data->department }}</td>
                    <td>{{ $employee_data->position }}</td>
                    <td>{{ $employee_data->joining_date }}</td>
                    <td><a href="{{ url('view_full_profile',$employee_data->id) }}">View</a></td>
                    <td><a href="{{ url('update_employee_profile',$employee_data->id) }}">Update</a></td>
                    <td><a href="{{ url("delete_employee_profile",$employee_data->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>

</html>
