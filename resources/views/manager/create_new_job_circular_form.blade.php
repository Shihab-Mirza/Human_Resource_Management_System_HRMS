<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="your-path-to-css-file.css"> <!-- Link to your CSS file -->
    @include('manager.css')
    <style>
        /* General Styles */
        .job-form {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        .job-form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Full width */
            margin: auto;
            overflow: hidden; /* Prevent overflow */
        }

        .job-form-title {
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
            font-size: 13px;
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 17px;
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
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
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
                min-width: 100%; /* Full width on small screens */
            }
        }
    </style>
</head>
<body class="job-form-full">
    <main class="scrollable-content">
    @include('manager.navigation')
    @include('manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="job-form-container">
                    <h1 class="job-form-title">Job Circular Form</h1>

                    <!-- Success or Error Messages -->
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

                    <form class="job-form" action="{{ url('submit_job_circular') }}" method="post">
                        @csrf
                        <!-- Job Details -->
                        <fieldset class="job-details-fieldset">
                            <legend class="job-details-legend">Job Details</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="job-title">Job Title:</label>
                                    <input type="text" name="job_title"  required value="{{ old('job_title') }}">
                                </div>
                                <div class="form-field">
                                    <label for="company-name">Company Name:</label>
                                    <input type="text" name="company_name" required value="{{ old('company_name') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="job-location">Job Location:</label>
                                    <input type="text" name="job_location" required value="{{ old('job_location') }}">
                                </div>
                                <div class="form-field">
                                    <label for="employment-type">Employment Type:</label>
                                    <input type="text" name="employment_type"  required value="{{ old('employment_type') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="salary">Salary Range:</label>
                                    <input type="text" name="salary"  required value="{{ old('salary') }}">
                                </div>
                                <div class="form-field">
                                    <label for="application-deadline">Application Deadline:</label>
                                    <input type="date" name="application_deadline"  required value="{{ old('application_deadline') }}">
                                </div>
                            </div>
                        </fieldset>

                        <!-- Job Description -->
                        <fieldset class="job-description-fieldset">
                            <legend class="job-description-legend">Job Description</legend>
                            <div class="form-field">
                                <label for="company-description">Company Description:</label>
                                <textarea name="company_description" id="company-description" required>{{ old('company_description') }}</textarea>
                            </div>
                            <div class="form-field">
                                <label for="responsibilities">Job Responsibilities:</label>
                                <textarea name="responsibilities" id="responsibilities" required>{{ old('responsibilities') }}</textarea>
                            </div>
                            <div class="form-field">
                                <label for="requirements">Job Requirements:</label>
                                <textarea name="requirements" id="requirements" required>{{ old('requirements') }}</textarea>
                            </div>
                            <div class="form-field">
                                <label for="skills-required">Required Skills:</label>
                                <textarea name="skills_required" id="skills-required" required>{{ old('skills_required') }}</textarea>
                            </div>
                        </fieldset>

                        <!-- Contact Information -->
                        <fieldset class="contact-info-fieldset">
                            <legend class="contact-info-legend">Contact Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="contact-address">Contact Person:</label>
                                    <input type="text" name="contact_address" id="contact-address" required value="{{ old('contact_address') }}">
                                </div>
                                <div class="form-field">
                                    <label for="contact-phone">Phone Number:</label>
                                    <input type="number" name="contact_phone" id="contact-phone" required value="{{ old('contact_phone') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="contact-email">Email Address:</label>
                                    <input type="email" name="contact_email" id="contact-email" required value="{{ old('contact_email') }}">
                                </div>
                            </div>
                        </fieldset>

                        <div class="submit-button-field">
                            <button type="submit" class="submit-button">Submit Job Circular</button>
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
