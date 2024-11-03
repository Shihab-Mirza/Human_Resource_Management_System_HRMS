<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <base href="public">
    @include('manager.css')
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }
        th{   border: 1px solid #ddd; /* Add borders to cells */
    padding: 8px; /* Add padding for better spacing */
    word-wrap: break-word; /* Allow long words to break onto the next line */
    white-space: normal; /* Ensure text can wrap */
    background-color: #f2f2f2;}

        td {
    border: 1px solid #ddd; /* Add borders to cells */
    padding: 8px; /* Add padding for better spacing */
    word-wrap: break-word; /* Allow long words to break onto the next line */
    white-space: normal; /* Ensure text can wrap */
}

td {
    max-width: 200px; /* Set a max width for cells, adjust as needed */
}
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Notice Board</h2>

            <table>
                <tr>
                    <th>Tittle</th>
                    <th>To</th>
                    <th>Notice</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
                @foreach($notice_data as $data)
                <tr>
                 <td>{{$data->Title}}</td>
                 <td>{{$data->notice_to}}</td>
                 <td>{{$data->message }}</td>
                 <td>{{$data->date_created }}</td>
                 <td><a href="{{ url('update_notice/{id}') }}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('manager.js')
</body>
</html>
