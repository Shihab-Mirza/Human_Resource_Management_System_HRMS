
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
            width: 80%;
            border-collapse: collapse;
        }
        th{       border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd; /* Add borders to cells */
            padding: 8px; /* Add padding for better spacing */
            word-wrap: break-word; /* Allow long words to break onto the next line */
            white-space: normal; /* Ensure text can wrap */
            background-color: #f2f2f2;}

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd; /* Add borders to cells */
            padding: 8px; /* Add padding for better spacing */
            word-wrap: break-word; /* Allow long words to break onto the next line */
            white-space: normal; /* Ensure text can wrap */ }


        .hidden {
            display: none;
        }
    </style>
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Production Department</h2>
            <table>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Joining Date</th>
                     </tr>
                @foreach($employee_data as $employee_data)
                <tr>
                    <td>{{ $employee_data->employee_unique_id }}</td>
                    <td>{{ $employee_data->first_name }} {{ $employee_data->last_name }}</td>
                    <td>{{ $employee_data->department }}</td>
                    <td>{{ $employee_data->position }}</td>
                    <td>{{ $employee_data->gender }}</td>
                    <td>{{ $employee_data->date_of_birth }}</td>
                    <td>{{ $employee_data->email }}</td>
                    <td>{{ $employee_data->phone_number }}</td>
                    <td>{{ $employee_data->address }}</td>
                    <td>{{ $employee_data->joining_date }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>

</html>
