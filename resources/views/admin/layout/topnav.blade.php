 <!-- Top Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
     <div class="container-fluid">
         <button class="btn btn-outline-primary" id="sidebarToggle"><i class="bi bi-list"></i></button>
         <div class="d-flex align-items-center">
             <span class="navbar-text me-3">Welcome, {{ Auth::user()->fullname }}</span>
             <button name="logoutButton" onclick="logout()" class="btn btn-outline-danger btn-sm"><i
                     class="bi bi-box-arrow-right"></i>
                 Logout</button>
         </div>
     </div>
 </nav>
 <form id="logoutForm" action="{{ route('auth.logout') }}" method="POST">@csrf</form>
