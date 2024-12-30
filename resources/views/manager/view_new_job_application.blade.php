<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Applications</title>
    @include('manager.css')

</head>
<body>
@include('manager.navigation')
@include('manager.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2>Job Applications</h2>

            <table class="job-application-table">
                <tr>
                    <th>SI</th>
                    <th>Application ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Application Date</th>
                    <th>Status</th>
                    <th>View Full Application</th>
                    <th>Delete Action</th>
                </tr>
                @foreach($data as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->cv_application_id }}</td>
                    <td>{{ $data->first_name }}  {{ $data->last_name }}</td>
                    <td>{{ $data->position }}</td>
                    <td>{{ $data->application_date }}</td>
                    <td>{{ $data->status }}</td>
                    <td><a href="{{ url('view_job_application_submitted',$data->id) }}"  class="btn btn-info">view</a></td>
                    <td><a href="{{ url('Delete_job_application',$data->id) }}"  class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('manager.js')
</body>
</html>
