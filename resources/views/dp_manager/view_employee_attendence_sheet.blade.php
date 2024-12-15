<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('dp_manager.css')
    <style>
      body {
        background-color: white; /* White background for the entire body */
        color: #333; /* Dark text for good contrast */
        font-family: Arial, sans-serif;
      }

      .attendance-form {
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9; /* Light background for the form */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
      }

      .attendance-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }

      .attendance-table th,
      .attendance-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
      }

      .attendance-radio {
        margin: 0 10px;
      }

      .form-actions {
        text-align: center;
      }

      .submit-btn {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px; /* Rounded corners for the button */
      }

      .submit-btn:hover {
        background-color: #45a049;
      }

      .date-input {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        width: 100%;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    @include ('dp_manager.navigation')
    @include('dp_manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="attendance-form">
                    <h2>Attendance Form</h2>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
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
                    <form action="{{ url('submit_attendance') }}" method="POST">
                        @csrf

                        <table class="attendance-table">
                            <thead>
                                <tr><th>SI</th>
                                    <th>Employee ID</th>
                                    <th>Employee name</th>
                                    <th>Department</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                    <th>Leave</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employee as $index=> $employee)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $employee->employee_unique_id }}</td>
                                        <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                        <td>{{ $employee->department }}</td>
                                        <td>
                                            <input type="radio" name="attendance[{{ $employee->id }}]" value="present" required>
                                        </td>
                                        <td>
                                            <input type="radio" name="attendance[{{ $employee->id }}]" value="absent" required>
                                        </td>
                                        <td>
                                            <input type="radio" name="attendance[{{ $employee->id }}]" value="leave" required>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="form-group">
                            <label for="attendance_date">Select Date:</label>
                            <input type="date" id="attendance_date" name="attendance_date" class="date-input" required>
                          </div>
                        <div class="form-actions">
                            <button type="submit" class="submit-btn">Submit Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('dp_manager.js')
  </body>
</html>
