<header class="header ">
    <nav class="navbar navbar-expand-lg">
          <!-- Navbar Header--><a href="#" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Human Resource Management System</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">HRMS</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
  <!-- edit profile -->
    <div class="ml-auto d-flex align-items-center">
    <div class="list-inline-item settings">
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
</div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch"></br>

