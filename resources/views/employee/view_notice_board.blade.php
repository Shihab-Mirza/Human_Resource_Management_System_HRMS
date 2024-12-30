<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('employee.css')
</head>
<body>
@include('employee.navigation')
@include('employee.sidebar')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Notice Board</h2>
            <table class="notice-table-employee">
                <tr>
                    <th>SI</th>
                    <th>Title</th>
                    <th>To</th>
                    <th>Notice</th>
                    <th>Date Created</th>
                </tr>
                @foreach($data as $index => $data)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->notice_to}}</td>
                    <td>{{$data->message}}</td>
                    <td>{{$data->date_created}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('employee.js')
</body>
</html>
