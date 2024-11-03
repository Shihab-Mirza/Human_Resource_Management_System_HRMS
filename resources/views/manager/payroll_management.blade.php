<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <base href="public">
    @include('manager.css')
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .hidden {
            display: none;
        }
    </style>
    <script>
        function editRow(row) {
            var cells = row.getElementsByTagName('td');
            for (var i = 4; i < cells.length - 1; i++) { // Start from base salary monthly to Total Salary
                // Skip the Base Salary Yearly (index 5) and Total Salary (index 7) columns
                if (i === 5 || i === 7) continue;

                var input = document.createElement('input');
                input.type = 'text';
                input.value = cells[i].innerText; // Set input value to the current cell's text
                cells[i].innerText = '';
                cells[i].appendChild(input);
            }
            // Replace the update link with a save button
            var actionCell = cells[cells.length - 1];
            actionCell.innerHTML = '<button onclick="saveRow(this)">Save</button>';
        }

        function saveRow(button) {
            var row = button.closest('tr');
            var cells = row.getElementsByTagName('td');
            for (var i = 4; i < cells.length - 1; i++) {
                // Skip the Base Salary Yearly (index 5) and Total Salary (index 7) columns
                if (i === 5 || i === 7) continue;

                var input = cells[i].getElementsByTagName('input')[0];
                cells[i].innerText = input.value; // Save input value
            }
            // Replace save button with update link
            var actionCell = cells[cells.length - 1];
            actionCell.innerHTML = '<a href="javascript:void(0);" onclick="editRow(this.closest(\'tr\'))">Update</a>';
        }
    </script>
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Payroll Management</h2>
            <form method="post" action="{{url('update_payroll')}}">
                @csrf
            <table>
                <tr>
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
                @foreach($employee as $employee)
                <tr>
                    <td>{{ $employee->employee_unique_id }}</td>
                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td>{{ $employee->department }}</td>
                    <td>{{ $employee->position }}</td>
                    <td name = "base_salary_month">{{ $employee->payrolls->base_salary_monthly }}</td>
                    <td>{{ $employee->payrolls->base_salary_yearly }}</td>
                    <td>{{ $employee->payrolls->bonus }}</td>
                    <td>{{ $employee->payrolls->total_salary }}</td>
                    <td><a href="javascript:void(0);" onclick="editRow(this.closest('tr'))">Update</a></td>
                </tr>
                @endforeach
            </table>
        </form>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
