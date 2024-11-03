<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Payroll - HRMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('manager.css')

    <style>
        .payroll-form {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .payroll_container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .payroll-form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .payroll-submit-button-field {
            display: flex;
            justify-content: center; /* Center the button */
            margin-top: 20px; /* Add some space above the button */
        }

        .payroll-submit-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .payroll-submit-button:hover {
            background-color: #218838;
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    @include('manager.navigation')
    @include('manager.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="payroll_container">
                    <h1>Update Payroll </h1>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('submitted_payroll_data',$existing_payroll_data->id) }}" method="post" class="payroll-form">
                        @csrf
                        <div class="payroll-form-group">
                            <label for="employee_name">Employee Name:</label>
                            <input type="text"  Value={{"$existing_payroll_data->first_name"}} {{"$existing_payroll_data->first_name"}} readonly>
                        </div>
                        <div class="payroll-form-group">
                            <label for="employee_id">Employee ID:</label>
                            <input type="text"  Value={{"$existing_payroll_data->employee_unique_id"}} readonly>
                        </div>
                        <div class="payroll-form-group">
                            <label for="department">Department:</label>
                            <input type="text" value={{"$existing_payroll_data->department"}} readonly>
                        </div>
                        <div class="payroll-form-group">
                            <label for="position">Position:</label>
                            <input type="text"  value={{"$existing_payroll_data->position"}} readonly>
                        </div>
                        <div class="payroll-form-group">
                            <label for="base_salary_monthly">Base Salary Monthly:</label>
                            <input type="number" name="base_salary_monthly"required value={{"$payroll_data->base_salary_monthly"}} >
                        </div>

                        <div class="payroll-form-group">
                            <label for="bonus">Bonus:</label>
                            <input type="number" name="bonus" value={{"$payroll_data->bonus"}} required>
                        </div>
                        <div class="payroll-submit-button-field">
                            <button class="payroll-submit-button" type="submit">Update Payroll</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('manager.js')
</body>
</html>
