<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('dp_manager.css')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Use fixed layout */

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
@include('dp_manager.navigation')
@include('dp_manager.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Notice Board</h2>
             <table>
                <tr>
                    <th>SI</th>
                    <th>Tittle</th>
                    <th>To</th>
                    <th>Notice</th>
                    <th>Date Created</th>
                </tr>
                @foreach($data as $index => $data)
                <tr>
                    <td>{{$index + 1}}</td>
                 <td>{{$data->title}}</td>
                 <td>{{$data->notice_to}}</td>
                 <td>{{$data->message }}</td>
                 <td>{{$data->date_created }}</td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('dp_manager.js')
</body>
</html>