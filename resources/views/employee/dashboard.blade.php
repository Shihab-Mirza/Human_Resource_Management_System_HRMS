<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
@include('employee.css')

  </head>
  <body>
@include ('employee.navigation')
@include('employee.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            @include('employee.body')
          </div>
      </div>
    </div>
@include('employee.js')
  </body>
</html>

