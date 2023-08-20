
<nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #FFC38C;">

     <a class="navbar-brand mr-1" href="admin-dashboard.php" style="color: black">Ambulance Booking System</a>

     <!-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
         <i class="fas fa-bars"></i>
     </button> -->

     <!-- Navbar Search -->
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
     </form>
  
     <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">

    
        <li class="nav-item active">
         <a class="nav-link" href="admin-dashboard.php"style="color: black">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span>
         </a>
        </li>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black">
             <i class="fas fa-fw fa-users"></i>
             <span>Users</span>
         </a>
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">

             <a class="dropdown-item" href="admin-add-user.php"style="color: black">Add</a>
             <a class="dropdown-item" href="admin-view-user.php"style="color: black">View</a>
             <a class="dropdown-item" href="admin-manage-user.php"style="color: black">Manage</a>
         </div>
     </li>
     <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black">
             <i class="fas fa-fw fa-id-card"></i>
             <span>Drivers</span>
         </a>
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">

             <a class="dropdown-item" href="admin-add-driver.php"style="color: black">Add</a>
             <a class="dropdown-item" href="admin-view-driver.php"style="color: black">View</a>
             <a class="dropdown-item" href="admin-manage-driver.php"style="color: black">Manage</a>
         </div>
     </li>
     <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black">
             <i class="fas fa-fw fa-bus"></i>
             <span>Ambulance</span>
         </a>
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">

             <a class="dropdown-item" href="admin-add-vehicle.php"style="color: black">Add</a>
             <a class="dropdown-item" href="admin-view-vehicle.php"style="color: black">View</a>
             <a class="dropdown-item" href="admin-manage-vehicle.php"style="color: black">Manage</a>
         </div>
     </li>
     <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black">
             <i class="fas fa-fw fa-book"></i>
             <span>Bookings</span>
         </a>
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">

             <a class="dropdown-item" href="admin-add-booking.php"style="color: black">Add</a>
             <a class="dropdown-item" href="admin-view-booking.php"style="color: black">View</a>
             <a class="dropdown-item" href="admin-manage-booking.php"style="color: black">Manage</a>
         </div>
     </li>
     <!-- <li class="nav-item">
         <a class="nav-link" href="admin-view-syslogs.php">
             <i class="fas fa-fw fa fa-history"></i>
             <span>System Logs</span></a>
     </li> -->

     <li class="nav-item">
         <a class="nav-link" href="#"style="color: black">
             <i class="fa fa-cog" aria-hidden="true"></i>
             <span>Settings</span></a>
     </li>
         <li class="nav-item dropdown no-arrow">
             <a style="display: flex;" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black">
                 <i class="fas fa-user-circle fa-fw"style="color: black"></i>
                 <h6 style="color: black;    margin-top: -2px;">Admin</h6>
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="admin-profile.php"style="color: black">Profile</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"style="color: black">Logout</a>
             </div>
         </li>
     </ul>
 
 </nav>