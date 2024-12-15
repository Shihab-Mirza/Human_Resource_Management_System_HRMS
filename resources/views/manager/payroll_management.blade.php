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
            <h2>Payroll Management</h2>

            <table>
                <tr>
                    <th>SI</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Base salary monthly</th>
                    <th>Base salary yearly</th>
                    <th>Bonus</th>
                    <th>Total Salary</th>
                    <th>Action</th>
                </tr>
                @foreach($employee as $index => $employee)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $employee->employee_unique_id }}</td>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->department }}</td>
                    <td>{{ $employee->position }}</td>
                    <td name = "base_salary_month">{{ $employee->payroll->base_salary_monthly }}</td>
                    <td>{{ $employee->payroll->base_salary_yearly }}</td>
                    <td>{{ $employee->payroll->bonus }}</td>
                    <td>{{ $employee->payroll->total_salary }}</td>
                    <td><a href="{{ url('update_payroll', $employee->id) }}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
