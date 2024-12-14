<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Application Review</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('manager.css')
    <style>
        /* General Styles */
        .leave-form {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .leave-form-container {
            background-color: #fff;
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
            font-size: 24px;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
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

        .button-field {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px; /* Space between buttons */
        }

        .approve-button, .reject-button {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .approve-button {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .approve-button:hover {
            background-color: #218838;
        }

        .reject-button {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .reject-button:hover {
            background-color: #c82333;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .form-field {
                min-width: 100%; /* Full width on small screens */
            }
        }
    </style>
</head>
<body class="leave-form-full">
    <main class="scrollable-content">
    @include('manager.navigation')
    @include('manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="leave-form-container">
                    <h1 class="leave-form-title">Leave Application Review</h1>

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

                    <form class="leave-application-form" action="{{ url('change_leave_application_status', $leaveApplication->id) }}" method="post" >
                        @csrf

                    <fieldset class="employee-details-fieldset">
                        <legend class="employee-details-legend">Employee Details</legend>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="employee-name">Employee Name:</label>
                                <input type="text" name="employee_name" readonly value="{{ $leaveApplication->employee_name }}">
                            </div>
                            <div class="form-field">
                                <label for="employee-id">Employee ID:</label>
                                <input type="text" name="employee_id" readonly value="{{ $leaveApplication->employee_id }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="leave-type">Leave Type:</label>
                                <input type="text" name="leave_type" readonly value="{{ $leaveApplication->leave_type }}">
                            </div>
                            <div class="form-field">
                                <label for="leave-dates">Leave Start Date:</label>
                                <input type="date" name="leave_start_date" readonly value="{{ $leaveApplication->leave_start_date }}">
                            </div>
                            <div class="form-field">
                                <label for="leave-dates">Leave End Date:</label>
                                <input type="date" name="leave_end_date" readonly value="{{ $leaveApplication->leave_end_date }}">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="leave-details-fieldset">
                        <legend class="leave-details-legend">Leave Application Details</legend>
                        <div class="form-row">
                            <div class="form-field">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" readonly value="{{ $leaveApplication->subject }}">
                            </div>
                        </div>
                        <div class="form-field">
                            <label for="application">Application:</label>
                            <textarea name="application" id="application" rows="30" disabled>{{ $leaveApplication->application }}</textarea>
                        </div>
                    </fieldset>
                    <fieldset class="leave-details-fieldset">
                        <legend class="leave-details-legend"><A>Add comment for rejection (optional)</A></legend>

                        <div class="form-field">
                            <label for="application">Addtional notes</label>
                            <textarea name="additional_notes"  rows="5" ></textarea>
                        </div>
                    </fieldset>


                    <div class="button-field">
                        <button type="submit" class="approve-button" value="accepted" name="accepted">Accept Application</button>
                        <button type="submit" class="reject-button" value="rejected" name="rejected">Reject Application</button>
                    </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('manager.js')
    </main>
</body>
</html>
