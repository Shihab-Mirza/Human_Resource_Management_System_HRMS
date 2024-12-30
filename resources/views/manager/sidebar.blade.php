<nav id="sidebar" class="nav-down">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="title">
        </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <!-- Home -->
        <li class="{{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ url('home') }}"> <i class="icon-home"></i>Home </a>
        </li>

        <!-- Employee Management Dropdown -->
        <li class="dropdown {{ request()->is('view_employee/*') || request()->is('add_new_employee') || request()->is('Register_employee') ? 'active' : '' }}">
            <a href="#department_drop_down" aria-expanded="{{ request()->is('view_employee/*') || request()->is('add_new_employee') || request()->is('Register_employee') ? 'true' : 'false' }}" data-toggle="collapse">
                <i class="icon-windows"></i> Employee Management
            </a>
            <ul id="department_drop_down" class="collapse list-unstyled {{ request()->is('view_employee/*') || request()->is('add_new_employee') || request()->is('Register_employee') ? 'show' : '' }}">
                <li><a href="{{ url('view_employee/production') }}" class="{{ request()->is('view_employee/production') ? 'active' : '' }}">Production</a></li>
                <li><a href="{{ url('view_employee/finance') }}" class="{{ request()->is('view_employee/finance') ? 'active' : '' }}">Finance</a></li>
                <li><a href="{{ url('view_employee/marketing') }}" class="{{ request()->is('view_employee/marketing') ? 'active' : '' }}">Marketing</a></li>
                <li><a href="{{ url('add_new_employee') }}" class="{{ request()->is('add_new_employee') ? 'active' : '' }}">Add New Employee</a></li>
                <li><a href="{{ url('Register_employee') }}" class="{{ request()->is('Register_employee') ? 'active' : '' }}">Register Employee</a></li>
            </ul>
        </li>

        <!-- Attendance and Leave Management Dropdown -->
        <li class="dropdown {{ request()->is('view_attendance_report') || request()->is('view_leave_application_of_employees') ? 'active' : '' }}">
            <a href="#attendence_drop_down" aria-expanded="{{ request()->is('view_attendance_report') || request()->is('view_leave_application_of_employees') ? 'true' : 'false' }}" data-toggle="collapse">
                <i class="icon-windows"></i>Attendance and Leave Management
            </a>
            <ul id="attendence_drop_down" class="collapse list-unstyled {{ request()->is('view_attendance_report') || request()->is('view_leave_application_of_employees') ? 'show' : '' }}">
                <li><a href="{{ url('view_attendance_report') }}" class="{{ request()->is('view_attendance_report') ? 'active' : '' }}">Attendance and time tracking</a></li>
                <li><a href="{{ url('view_leave_application_of_employees') }}" class="{{ request()->is('view_leave_application_of_employees') ? 'active' : '' }}">Leave applications</a></li>
            </ul>
        </li>

        <!-- Payroll Management -->
        <li class="{{ request()->is('payroll_management') ? 'active' : '' }}">
            <a href="{{ url('payroll_management') }}"> <i class="icon-grid"></i>Payroll management</a>
        </li>

        <!-- Recruitment Management Dropdown -->
        <li class="dropdown {{ request()->is('view_all_job_circular') || request()->is('create_job_circular') || request()->is('view_job_appliation') ? 'active' : '' }}">
            <a href="#recruitment_drop_down" aria-expanded="{{ request()->is('view_all_job_circular') || request()->is('create_job_circular') || request()->is('view_job_appliation') ? 'true' : 'false' }}" data-toggle="collapse">
                <i class="icon-windows"></i>Recruitment management
            </a>
            <ul id="recruitment_drop_down" class="collapse list-unstyled {{ request()->is('view_all_job_circular') || request()->is('create_job_circular') || request()->is('view_job_appliation') ? 'show' : '' }}">
                <li><a href="{{ url('view_all_job_circular') }}" class="{{ request()->is('view_all_job_circular') ? 'active' : '' }}">View Job Circular</a></li>
                <li><a href="{{ url('create_job_circular') }}" class="{{ request()->is('create_job_circular') ? 'active' : '' }}">Create Job Circular</a></li>
                <li><a href="{{ url('view_job_appliation') }}" class="{{ request()->is('view_job_appliation') ? 'active' : '' }}">View new recruitment application</a></li>
            </ul>
        </li>

        <!-- Performance Feedback -->
        <li class="{{ request()->is('performance_feedback') ? 'active' : '' }}">
            <a href="performance_feedback"> <i class="icon-logout"></i>Performance Feedback</a>
        </li>

        <!-- Notice Dropdown -->
        <li class="dropdown {{ request()->is('view_notice_board') || request()->is('notice_board') ? 'active' : '' }}">
            <a href="#notice_drop_down" aria-expanded="{{ request()->is('view_notice_board') || request()->is('notice_board') ? 'true' : 'false' }}" data-toggle="collapse">
                <i class="icon-windows"></i>Notice
            </a>
            <ul id="notice_drop_down" class="collapse list-unstyled {{ request()->is('view_notice_board') || request()->is('notice_board') ? 'show' : '' }}">
                <li><a href="{{ url('view_notice_board') }}" class="{{ request()->is('view_notice_board') ? 'active' : '' }}">View Notice</a></li>
                <li><a href="{{ url('notice_board') }}" class="{{ request()->is('notice_board') ? 'active' : '' }}">Add New Notice</a></li>
            </ul>
        </li>
    </ul>
</nav>
