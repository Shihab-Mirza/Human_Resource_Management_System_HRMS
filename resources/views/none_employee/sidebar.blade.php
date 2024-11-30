<nav id="sidebar" class="nav-down">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="#" class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">SM</h1>
            <p>user</p>
        </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li>
            <a href="#recruitment_drop_down" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>new recruitment</a>
            <ul id="recruitment_drop_down" class="collapse list-unstyled">
                <li><a href="{{ url('view_all_job_circular_none_employee') }}">View Job Circular</a></li>
                <li><a href="{{ url('view_application_status') }}">View Application Status</a></li>

            </ul>
        </li>
    </ul>
    <ul class="list-unstyled">
        <li><a href="#"> <i class="icon-writing-whiteboard"></i>1</a></li>
        <li><a href="#"> <i class="icon-chart"></i>2</a></li>
        <li><a href="#"> <i class="icon-chart"></i>3</a></li>

    </ul>
</nav>
<!-- Sidebar Navigation end-->
