<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="your-path-to-css-file.css"> <!-- Link to your CSS file -->
    @include ('manager.css')
    <style>
        /* General Styles */
        .employee-form {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        .employee-form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Full width */
            margin: auto;
            overflow: hidden; /* Prevent overflow */
        }

        .employee-form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 13px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .form-row {
            font-size: 13px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Space between fields */
            margin-bottom: 15px;
        }

        .form-field {
            font-size: 13px;
            flex: 1;
            min-width: 220px; /* Minimum width for responsiveness */
        }

        label {
            font-size: 13px;
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            padding: 3px;
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
                min-width: 100%; /* Full width on small screens */
            }
        }
    </style>
</head>
<body class="employee-form-full">
    <main class="scrollable-content">
    @include('manager.navigation')
    @include('manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="employee-form-container">
                    <h1 class="employee-form-title">New Employee Form</h1>
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

                    <form class="employee-form" action="{{ url('submit_new_employee_form') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Personal Information -->
                        <fieldset class="personal-info-fieldset">
                            <legend class="personal-info-legend">Personal Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="first-name">First Name:</label>
                                    <input type="text" name="first_name" required value="{{ old('first_name') }}">
                                </div>
                                <div class="form-field">
                                    <label for="last-name">Last Name:</label>
                                    <input type="text" name="last_name" required value="{{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" name="dob" required>
                                </div>
                                <div class="form-field">
                                    <label for="gender">Gender:</label>
                                    <select name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-field">
                                <label for="profile-photo">Employee Profile Photo:</label>
                                <input type="file" name="employee_image" accept="image/jpeg, image/png">
                            </div>
                        </fieldset>

                        <!-- Contact Information -->
                        <fieldset class="contact-info-fieldset">
                            <legend class="contact-info-legend">Contact Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="email">Email:</label>
                                    <input type="email" name="employee_email" required value="{{ old('employee_email') }}">
                                </div>
                                <div class="form-field">
                                    <label for="phone">Phone Number:</label>
                                    <input type="number" name="phone" required value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" required value="{{ old('address') }}">
                                </div>
                                <div class="form-field">
                                    <label for="city">City:</label>
                                    <input type="text" name="city" required value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="form-field">
                                <label for="country">Country:</label>
                                <input type="text" name="country" required value="{{ old('country') }}">
                            </div>
                        </fieldset>

                        <!-- Employment Information -->
                        <fieldset class="employment-info-fieldset">
                            <legend class="employment-info-legend">Employment Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="department">Department:</label>
                                    <select id="department" name="department" required>
                                        <option value="">Select a department</option>
                                        <option value="production">Production</option>
                                        <option value="finance">Finance</option>
                                        <option value="marketing">Marketing</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label for="position">Position:</label>
                                    <input type="text" id="position" name="position" required value="{{ old('position') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="joining_date">Joining Date:</label>
                                    <input type="date" id="joining_date" name="joining_date" required>
                                </div>
                            </div>
                        </fieldset>

                        <div class="submit-button-field">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('manager.js')
</main>
</body>
</html>
