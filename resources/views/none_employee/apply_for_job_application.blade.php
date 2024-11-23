<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="your-path-to-css-file.css"> <!-- Link to your CSS file -->
    @include ('none_employee.css')
    <style>
        /* General Styles */
        .job-application-form {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .job-application-form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Full width */
            margin: auto;
            overflow: hidden; /* Prevent overflow */
        }

        .job-application-form-title {
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
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="number"],
        input[type="numeric"],
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
<body class="job-application-form-full">
    <main class="scrollable-content">
    @include('none_employee.navigation')
    @include('none_employee.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="job-application-form-container">
                    <h1 class="job-application-form-title">Job Application Form</h1>
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

                    <form class="job-application-form" action="{{ url('submit_job_application') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                        </fieldset>

                        <fieldset class="contact-info-fieldset">
                            <legend class="contact-info-legend">Contact Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" required value="{{ old('email') }}">
                                </div>
                                <div class="form-field">
                                    <label for="phone">Phone Number:</label>
                                    <input type="numeric" name="phone" required value="{{ old('phone') }}">
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
                        </fieldset>

                        <fieldset class="employment-info-fieldset">
                            <legend class="employment-info-legend">Employment Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="position">Position Applying For:</label>
                                    <input type="text" id="position" name="position" required value="{{ old('position') }}">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="cv-upload-fieldset">
                            <legend class="cv-upload-legend">Upload CV</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="cv">Upload your CV (PDF, DOC, DOCX):</label>
                                    <input type="file" name="cv" accept=".pdf,.doc,.docx" required>
                                </div>
                            </div>
                        </fieldset>

                        <div class="submit-button-field">
                            <button type="submit" class="submit-button">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('none_employee.js')
</main>
</body>
</html>
