 <!-- Sidebar Navigation-->
 <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="#" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">SM</h1>
        <p>Manager</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="#"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#department_drop_down" aria-expanded="false" data-toggle="collapse"font-size="6"> <i class="icon-windows" ></i>Employee Management </a>
                <ul id="department_drop_down" class="collapse list-unstyled ">
                  <li><a href="{{ url('view_employee/production') }}">Production</a></li>
                  <li><a href="{{ url('view_employee/finance') }}">Finance</a></li>
                  <li><a href="{{ url('view_employee/marketing') }}">Marketing</a></li>
                  <li><a href="{{ url('add_new_employee') }}">Add New Employee</a></li>
                </ul>
              </li>
            <li><a href="#attendence_drop_down" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Attendance and <br>leave Management </a>
                <ul id="attendence_drop_down" class="collapse list-unstyled ">
                  <li><a href="#">Attendence and time tracking</a></li>
                  <li><a href="#">  Leave applications</a></li>
                </ul>
              </li>
            <li><a href="{{ url('payroll_management') }}"> <i class="icon-grid"></i>Payroll management </a></li>

            <li><a href="#"> <i class="icon-padnote"></i>New Recruitment Applications</a></li>
            <li><a href="#"> <i class="icon-logout"></i>Performence Feedback</a></li>
    <ul class="list-unstyled">
        <li><a href="#notice_drop_down" aria-expanded="false" data-toggle="collapse"font-size="6"> <i class="icon-windows" ></i>Notice</a>
            <ul id="notice_drop_down" class="collapse list-unstyled ">
                <li><a href="{{ url('view_notice_board') }}">View Notice</a></li>
                <li><a href="{{ url('notice_board') }}">Add New Notice</a></li>
            </ul>
          </li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i> </a></li>
      <li> <a href="#"> <i class="icon-chart"></i> </a></li>
    </ul>
  </nav>
  <!-- Sidebar Navigation end-->
