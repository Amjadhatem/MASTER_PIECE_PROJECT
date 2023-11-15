<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="fa-solid fa-circle-user" style="color: #fafcff;"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Admin <sup>1</sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-3">
  
  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fa-solid fa-user" style="color: #ffffff;"></i>
      <span>Profile</span></a>
  </li>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('users') }}">
      <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i>
      <span>Users</span></a>
  </li>
  

  <hr class="sidebar-divider my-0">
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('Blogs') }}">
      <i class="fa-solid fa-blog" style="color: #ffffff;"></i>
      <span>Blogs</span></a>
  </li>

  <hr class="sidebar-divider my-0">
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('Barbers') }}">
      <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i>
      <span>Barbers</span></a>
  </li>

  <hr class="sidebar-divider my-0">

  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('services') }}">
      <i class="fa-solid fa-scissors fa-rotate-90" style="color: #ffffff;"></i>
      <span>Services</span></a>
  </li>

  <hr class="sidebar-divider my-0">


  <li class="nav-item">
    <a class="nav-link" href="{{ route('Rese') }}">
      <i class="fa-solid fa-calendar-check" style="color: #ffffff;"></i>
      <span>Reservation</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>

<script src="https://kit.fontawesome.com/abdaddd2d7.js" crossorigin="anonymous"></script>