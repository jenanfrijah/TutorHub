<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .bg-gradient-purple {
    background: #4C1D95;
}

    </style>
</head>
<body id="page-top"> 
    <div id="wrapper">

<!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-purple sidebar sidebar-dark accordion"  id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">  
                <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/students')}}">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Students Table</span></a>
            </li>

    
            <hr class="sidebar-divider my-0">

                <li class="nav-item">
                <a class="nav-link" href="{{url('/tutors')}}">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Tutors Table</span></a>
            </li>

            <hr class="sidebar-divider my-0">

                <li class="nav-item">
                <a class="nav-link" href="{{url('/subjects')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Subjects Table</span></a>
            </li>

            <hr class="sidebar-divider my-0">

                <li class="nav-item">
                <a class="nav-link" href="{{url('/grades')}}">
                   <i class="fas fa-fw fa-chart-line"></i>
                    <span>Grades Table</span></a>
            </li>

            <hr class="sidebar-divider my-0">

                <li class="nav-item">
                <a class="nav-link" href="{{url('/logout')}}">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            </ul>
          <!-- Content Wrapper Start -->

             <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">

                 <div class="container-fluid">
                    @yield('content')

                </div>
                </div>
           
    
    
       <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;TutorHub2026</span>
                    </div>
                </div>
            </footer>
      </div>  
       </div> 
     <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

</body>
</html>