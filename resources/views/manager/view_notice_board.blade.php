<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notice Board</title>
    @include('manager.css')
</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Notice Board</h2>

            <table class="notice-board-table">
                <tr>
                    <th>SI</th>
                    <th>Title</th>
                    <th>To</th>
                    <th>Notice</th>
                    <th>Date Created</th>
                    <th>Update Action</th>
                    <th>Delete Action</th>
                </tr>
                @foreach($view_notice_data as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->notice_to }}</td>
                    <td>{{ $data->message }}</td>
                    <td>{{ $data->date_created }}</td>
                    <td><a href="{{ url('update_notice', $data->id) }}" class="btn btn-warning">Update</a></td>
                    <td><a href="{{ url('delete_notice', $data->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('manager.js')
</body>
</html>
