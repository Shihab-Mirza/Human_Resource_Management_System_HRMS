 <!-- Sidebar Navigation-->
 <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">SM</h1>
        <p>Manager</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#group_drop_down" aria-expanded="false" data-toggle="collapse"font-size="6"> <i class="icon-windows" ></i>Employee Management </a>
                <ul id="group_drop_down" class="collapse list-unstyled ">
                  <li><a href="#">Production</a></li>
                  <li><a href="#">Finance</a></li>
                  <li><a href="#">Marketing</a></li>
                  <li><a href="{{ url('add_new_employee') }}">Add New Employee</a></li>
                </ul>
              </li>
            <li><a href="#project_drop_down" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Attendance and <br>leave Management </a>
                <ul id="project_drop_down" class="collapse list-unstyled ">
                  <li><a href="#">Attendence and time tracking</a></li>
                  <li><a href="#">  Leave applications</a></li>
                </ul>
              </li>
            <li><a href="#"> <i class="icon-grid"></i>Payroll management </a></li>

            <li><a href="#"> <i class="icon-padnote"></i>New Recruitment Applications</a></li>
            <li><a href="#"> <i class="icon-logout"></i>Performence Feedback</a></li>
    <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Notice</a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i> </a></li>
      <li> <a href="#"> <i class="icon-chart"></i> </a></li>
    </ul>
  </nav>
  <!-- Sidebar Navigation end-->
