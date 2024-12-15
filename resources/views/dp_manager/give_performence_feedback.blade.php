<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Performance Feedback for Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('dp_manager.css')
    <style>

.job-form {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.job-form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 100%; /* Full width */
    margin: auto;}

.job-form-title {
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
    background-color: #fff; /* White background for input fields */
    font-size: 14px; /* Slightly smaller text for consistency */
}
select {
    border: 1px solid #ddd !important;
    outline: none !important;
}
textarea {
    resize: vertical;
}

/* Submit Button Styling */
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
        @include('dp_manager.navigation')
        @include('dp_manager.sidebar')

        <div class="page-content">
            <div class="container-fluid">
                <div class="job-form-container">
                    <h1 class="job-form-title">Performance Feedback form</h1>
                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

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

                    <form action="{{ url('save_performence_feedback',$data->id) }}" method="post" class="job-form">
                        @csrf

                        <fieldset>
                            <legend>Employee Information</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="employee_id">Employee ID:</label>
                                    <input type="number" name="employee_id" value="{{ $data->employee_unique_id}}" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="employee_name">Employee Name:</label>
                                    <input type="text" id="employee_name" name="employee_name" value="{{ $data->first_name }} {{ $data->last_name }}" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="employee_id">Department</label>
                                    <input type="text" id="employee_department" name="employee_id" value="{{ $data->department }}" readonly>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <legend>Job Performance Feedback</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="job_knowledge">Job Knowledge:</label>
                                    <select id="job_knowledge" name="job_knowledge">
                                        <option value="Good">Good</option>
                                        <option value="Neutral">Neutral</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label for="quality_of_work">Quality of Work:</label>
                                    <select id="quality_of_work" name="quality_of_work">
                                        <option value="Good">Good</option>
                                        <option value="Neutral">Neutral</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="attendance">Attendance:</label>
                                    <select id="attendance" name="attendance">
                                        <option value="Good">Good</option>
                                        <option value="Neutral">Neutral</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label for="communication">Communication:</label>
                                    <select id="communication" name="communication">
                                        <option value="Good">Good</option>
                                        <option value="Neutral">Neutral</option>
                                        <option value="Bad">Bad</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Strengths & Areas of Improvement</legend>
                            <div class="form-field">
                                <label for="strengths">Strengths:</label>
                                <textarea id="strengths" name="strengths" rows ="5"></textarea>
                            </div>

                            <div class="form-field">
                                <label for="areas_of_improvement">Areas of Improvement:</label>
                                <textarea id="areas_of_improvement" name="areas_of_improvement" rows="5"></textarea>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Additional Feedback</legend>
                            <div class="form-row">
                                <div class="form-field">
                                    <label for="overall_score">Overall Score: (Range 0-100)</label>
                                    <input type="number" id="overall_score" name="overall_score">
                                </div>
                            </div>

                            <div class="form-field">
                                <label for="additional_comments">Additional Comments:</label>
                                <textarea id="additional_comments" name="additional_comments"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-field">
                                    <label for="month">Month:</label>
                                    <select id="month" name="month" class="form-control">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-field">
                                        <label for="year">Year:</label>
                                        <select id="year" name="year" class="form-control">
                                            @for ($year = 2024; $year <= 2124; $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="submit-button-field">
                            <button type="submit" class="submit-button">Submit Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('dp_manager.js')
</html>
