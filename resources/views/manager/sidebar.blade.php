<nav id="sidebar" class="nav-down">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="#" class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">SM</h1>
            <p>Manager</p>
        </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{ url('home') }}"> <i class="icon-home"></i>Home </a></li>
        <li>
            <a href="#department_drop_down" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Employee Management
            </a>
            <ul id="department_drop_down" class="collapse list-unstyled">
                <li><a href="{{ url('view_employee/production') }}">Production</a></li>
                <li><a href="{{ url('view_employee/finance') }}">Finance</a></li>
                <li><a href="{{ url('view_employee/marketing') }}">Marketing</a></li>
                <li><a href="{{ url('add_new_employee') }}">Add New Employee</a></li>
                <li><a href="{{ url('Register_employee') }}">Register Employee</a></li>

            </ul>
        </li>
        <li>
            <a href="#attendence_drop_down" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Attendance and<br>leave Management
            </a>
            <ul id="attendence_drop_down" class="collapse list-unstyled">
                <li><a href="{{ url('view_attendance_report') }}">Attendance and time tracking</a></li>
                <li><a href="{{ url('view_leave_application_of_employees') }}">Leave applications</a></li>
            </ul>
        </li>
        <li><a href="{{ url('payroll_management') }}"> <i class="icon-grid"></i>Payroll management </a></li>
        <li>
            <a href="#recruitment_drop_down" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Recruitment management</a>
            <ul id="recruitment_drop_down" class="collapse list-unstyled">
                <li><a href="{{ url('view_all_job_circular') }}">View Job Circular</a></li>
                <li><a href="{{ url('create_job_circular') }}">Create Job Circular</a></li>
                <li><a href="{{ url('view_job_appliation') }}">View new recruitment application</a></li>
            </ul>
        </li>
        <li><a href="performance_feedback"> <i class="icon-logout"></i>Performance Feedback</a></li>
        <li>
            <a href="#notice_drop_down" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Notice
            </a>
            <ul id="notice_drop_down" class="collapse list-unstyled">
                <li><a href="{{ url('view_notice_board') }}">View Notice</a></li>
                <li><a href="{{ url('notice_board') }}">Add New Notice</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- Sidebar Navigation end-->
