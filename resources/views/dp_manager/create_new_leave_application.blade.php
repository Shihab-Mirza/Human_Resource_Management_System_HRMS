<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="your-path-to-css-file.css"> <!-- Link to your CSS file -->
    @include('dp_manager.css')
    <style>
        /* General Styles */
        .leave-form {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        .leave-form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Full width */
            margin: auto;
            overflow: hidden; /* Prevent overflow */
        }

        .leave-form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Space between fields */
            margin-bottom: 15px;
        }

        .form-field {
            flex: 1;
            min-width: 220px; /* Minimum width for responsiveness */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="tel"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;

        }

        .submit-button-field {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .submit-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: #218838;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .form-field {
                min-width: 100%;
            }
        }
    </style>
</head>
<body class="leave-form-full">
    <main class="scrollable-content">
    @include('dp_manager.navigation')
    @include('dp_manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="leave-form-container">
                    <h1 class="leave-form-title">Leave Application Form</h1>

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->all())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="leave-form" action="{{ url('submit_leave_application_dp') }}" method="post">
                        @csrf

                        <fieldset class="employee-details-fieldset">
                            <legend class="employee-details-legend">Employee Details</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="employee-name">Employee Name:</label>
                                    <input type="text" name="employee_name" required value="{{ old('employee_name') }}">
                                </div>
                                <div class="form-field">
                                    <label for="employee-id">Employee ID:</label>
                                    <input type="text" name="employee_id" required value="{{ old('employee_id') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="leave-type">Leave Type:</label>
                                    <select name="leave_type" required>
                                        <option value="Sick Leave" >Sick Leave</option>
                                        <option value="Casual Leave">Casual Leave</option>
                                        <option value="Annual Leave" >Annual Leave</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label for="leave-dates">Leave start Date:</label>
                                    <input type="date" name="leave_start_date" required value="{{ old('leave_start_date') }}">

                                </div>
                                <div class="form-field">
                                    <label for="leave-dates">Leave End Date:</label>
                                    <input type="date" name="leave_end_date" required value="{{ old('leave_end_date') }}">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="leave-details-fieldset">
                            <legend class="leave-details-legend">Leave Application Details</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="subject">Subject:</label>
                                    <input type="text" name="subject" required value="{{ old('subject') }}">
                                </div>
                            </div>
                            <div class="form-field">
                                <label for="application">Application:</label>
                                <textarea name="application" id="application" rows="5" required>{{ old('application') }}</textarea>
                            </div>
                        </fieldset>

                        <div class="submit-button-field">
                            <button type="submit" class="submit-button">Submit Leave Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('dp_manager.js')
    </main>
</body>
</html>
