<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notice Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('manager.css')

    <style>
        /* General Styles */
        .noticeform {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        .notice-form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            height: 100vh;
            margin: auto;
            font-size: 13px;
        }

        .notice-form-title {
            text-align: center;
            font-size: 20px;
            margin-bottom: 17px;
        }

        /* Fieldset Styles */
        .notice-info-fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .notice-info-legend {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 16px;
        }

        /* Form Group Styles */
        .notice-form-container .notice-form-group {
            margin-bottom: 15px;
        }

        /* Adjust the layout of title/subject fields */
        .notice-form-group {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Ensures space between the label and input */
        }

        .notice-form-group label {
            width: 30%; /* Adjust label width as needed */
        }

        .notice-form-group input,
        .notice-form-group textarea {
            width: 65%; /* Adjust input width to make it fit alongside the label */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Ensure padding doesn't affect width */
        }

        /* Label Styles */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        /* Button Styles */
        .notice-submit-button-field {
            display: flex;
            justify-content: center; /* Center the button */
        }

        .notice-submit-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .notice-submit-button:hover {
            background-color: #218838;
        }

        /* Alert Styles */
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

        /* Responsive Styles */
        @media (max-width: 600px) {
            .notice-form-group {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    @include('manager.navigation')
    @include('manager.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="notice-form-container">
                    <h1 class="notice-form-title">Add New Notice</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="noticeform" action="{{ url('submit_new_notice') }}" method="post">
                        @csrf
                        <!-- Notice Information -->
                        <fieldset class="notice-info-fieldset">
                            <legend class="notice-info-legend">Notice Information</legend>
                            <div class="notice-form-group">
                                <label for="title">Title/Subject:</label>
                                <input type="text" name="title" required>
                            </div>
                            <div class="notice-form-group">
                                <label for="notice_to">To:</label>
                                <input type="text" name="notice_to" required>
                            </div>
                            <div class="notice-form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" rows="8"></textarea>
                            </div>
                            <div class="notice-form-group">
                                <label for="date">Date Created:</label>
                                <input type="date" name="date" required>
                            </div>
                        </fieldset>

                        <!-- Submit Button -->
                        <div class="notice-submit-button-field">
                            <button class="notice-submit-button" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('manager.js')
</body>
</html>
