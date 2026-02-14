<nav class="navbar dashboard-header" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="{$base_url}studentform/dashboard">Student Dashboard</a>
    <div class="d-flex justify-content-end align-items-center custom-dropdown">
      <div class="dropdown-center">
        <button class="btn btn-outline-info dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" 
          aria-expanded="false">
          <img src="{$base_url}images/img2.jpg" alt="Profile" class="rounded-circle me-2"
            style="width: 25px; height: 25px;">
          <p class="text-white">Welcome, {$studentData.teacherName|default:"Guest"}</p>
        </button>
        <ul class="dropdown-menu dropdown-menu-end me-0">
          <li><a class="dropdown-item" href="{$base_url}studentform/profile">Profile
              <i class="fa-solid fa-user"></i>
            </a></li>
          <li class="custom-logout"><a class="dropdown-item text-danger " onclick="logout(event)">Logout
              <i class="fa-solid fa-right-from-bracket"></i>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>