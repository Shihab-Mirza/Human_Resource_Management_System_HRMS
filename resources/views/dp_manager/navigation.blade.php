<header class="header ">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="#" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Human Resource Management System</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">HRMS</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">
          <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
          <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
            <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                  <div class="status online"></div>

                  <div class="status offline"></div>
                </div>
                <div class="content">   <strong class="d-block">*</strong><span class="d-block"></span><small class="date d-block"></small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
          </div>

  <!-- edit profile -->
<div class="list-inline-item logout">
        <a href="{{ route('profile.show') }}" class="font-semibold text-xl text-gray-800 leading-tight" >Settings </a>
    </div>
  <!-- Log out -->
  <div class="list-inline-item logout">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <input class="btn btn-primary" type="submit" value="Logout">
    </form>
  </div>
</div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch"></br>

