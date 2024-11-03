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
        .noticeform {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .notice_container {
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

        .notice-form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .notice-submit-button-field {
            display: flex;
            justify-content: center; /* Center the button */
            margin-top: 20px; /* Add some space above the button */
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

        .notices {
            margin-top: 20px;
        }

        .notice {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            background: #f9f9f9;

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
    @include ('manager.navigation')
    @include('manager.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="notice_container">
                    <h1>Add New Notice</h1>
                    @if(session('success'))
                  <div class="alert alert-success">
                 {{ session('success') }}
                   </div>
                    @endif
                    <form class="noticeform" action="{{ url('submit_new_notice') }}" method="post">
                        @csrf
                        <div class="notice-form-group">
                            <label for="title">Title/Subject:</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="notice-form-group">
                            <label for="notice_to">To</label>
                            <input type="text" name="notice_to" required>
                        </div>
                        <div class="notice-form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" required></textarea>
                        </div>
                        <div class="notice-form-group">
                            <label for="date">Date Created:</label>
                            <input type="date" name="date" required>
                        </div>
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
