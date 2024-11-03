<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <base href="public">
@include('manager.css')
<style>

/* General Styles */
.employee_form{
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.employee-form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 800px; /* Increased width */
    margin: auto;
}

.employee-form-title {
    text-align: center;
    margin-bottom: 20px;
}

/* Fieldset Styles */
.personal-info-fieldset,
.contact-info-fieldset,
.employment-info-fieldset {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 20px;
}

.personal-info-legend,
.contact-info-legend,
.employment-info-legend {
    font-weight: bold;
    margin-bottom: 10px;
}

/* Form Group Styles */
.employee-form-container .dob-field,
.employee-form-container .gender-field,
.employee-form-container .department-field,
.employee-form-container .position-field,
.employee-form-container .start-date-field,
.employee-form-container .salary-field,
.employee-form-container .resume-field,
.employee-form-container .additional-notes-field {
    margin-bottom: 15px;
}

.first-name-field,
.last-name-field {
    display: inline-block;
    width: calc(50% - 10px); /* Adjust width for spacing */
}

.first-name-field {
    margin-right: 10px; /* Space between first and last name fields */
}

/* Label Styles */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Input Styles */
input[type="text"],
input[type="date"],
input[type="tel"],
input[type="email"],
input[type="number"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; /* Ensure padding doesn't affect width */
}

input[type="file"] {
    padding: 3px; /* Adjust for file input */
}

/* Button Styles */
.submit-button-field {
    display: flex;
    justify-content: center; /* Center the button */
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
    .first-name-field,
    .last-name-field {
        width: 100%; /* Stack on smaller screens */
        margin-right: 0;
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

}

</style>
  </head>
  <body>
@include ('manager.navigation');
@include('manager.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                <div class="employee-form-container">
                    <h1 class="employee-form-title">Employee Full Profile</h1>
                    <form class="employee-form" enctype="multipart/form-data">
                        @csrf
                        <!-- Personal Information -->
                        <fieldset class="personal-info-fieldset">
                            <legend class="personal-info-legend">Personal Information</legend>
                            <div class="personal-info-inline-group">
                                <div class="employee-unique-id-field" style="flex: 1; margin-right: 10px;">
                                    <label for="employee-unique-id" class="employee-unique-id label">Employee ID:</label>
                                    <input type="text"  name="first_name" class="employee-unique-id" value="{{ $employee_full_data->employee_unique_id }}" readonly>
                                </div>
                                <div class="first-name-field" style="flex: 1; margin-right: 10px;">
                                    <label for="first-name" class="first-name-label">First Name:</label>
                                    <input type="text"  name="first_name" class="first-name-input"  value="{{ $employee_full_data->first_name }}" readonly>
                                </div>
                                <div class="last-name-field" style="flex: 1;">
                                    <label for="last-name" class="last-name-label">Last Name:</label>
                                    <input type="text"  name="last_name" class="last-name-input"  value="{{ $employee_full_data->last_name }}" readonly>
                                </div>
                            </div>
                            <div class="dob-field">
                                <label for="dob" class="dob-label">Date of Birth:</label>
                                <input type="text"  name="dob" class="dob-input"  value="{{ $employee_full_data->date_of_birth }}" readonly>
                            </div>
                            <div class="gender-field">
                                <label for="gender" class="gender-label">Gender:</label>
                                <input type="text"  name="last_name" class="last-name-input"  value="{{ $employee_full_data->gender }}" readonly>

                            </div>
                        </fieldset>

                        <!-- Contact Information -->
                        <fieldset class="contact-info-fieldset">
                            <legend class="contact-info-legend">Contact Information</legend>
                            <div class="email-field">
                                <label for="email" class="email-label">Email:</label>
                                <input type="text" name="employee_email" class="email-input" value="{{ $employee_full_data->email }}" readonly>
                            </div>
                            <div class="phone-field">
                                <label for="phone" class="phone-label">Phone Number:</label>
                                <input type="text"  name="phone" class="phone-input"  value="{{ $employee_full_data->phone_number }}" readonly>
                            </div>
                            <div class="address-field">
                                <label for="address" class="address-label">Address:</label>
                                <input type="text"  name="address" class="address-input" value="{{ $employee_full_data->address }}" readonly>
                            </div>
                            <div class="city-field">
                                <label for="city" class="city-label">City:</label>
                                <input type="text"  name="city" class="city-input" value="{{ $employee_full_data->city }}" readonly>
                            </div>
                            <div class="country-field">
                                <label for="country" class="country-label">Country:</label>
                                <input type="text"  name="country" class="country-input" value="{{ $employee_full_data->country }}" readonly >
                            </div>
                        </fieldset>

                        <!-- Employment Information -->
                        <fieldset class="employment-info-fieldset">
                            <legend class="employment-info-legend">Employment Information</legend>
                            <div class="department-field">
                                <label for="department" class="department-label">Department:</label>
                                <input type="text" name="department" class="department-select" value="{{ $employee_full_data->department }}" readonly>

                            </div>

                            <div class="position-field">
                                <label for="position" class="position-label">Position:</label>
                                <input type="text"  name="position" class="position-input" value="{{ $employee_full_data->position }}" readonly>
                            </div>
                            <div class="start-date-field">
                                <label for="start-date" class="start-date-label">Joining Date:</label>
                                <input type="text"  name="joining_date" class="start-date-input" value="{{ $employee_full_data->joining_date }}" readonly >
                            </div>
                        </fieldset>
                    </form>
                </div>

        </div>
      </div>
    </div>
@include('manager.js')
  </body>
</html>
