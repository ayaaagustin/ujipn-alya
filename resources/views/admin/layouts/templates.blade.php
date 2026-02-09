<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sarpas PN || {{ $title }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/dashboardadmin.css" />
    <link rel="icon" href="/logo_smkpn.jpg">
</head>
<body>
<div class="dashboard-wrapper d-flex">
    
    <!-- SIDEBAR -->
    @include('admin.layouts.sidebar')

    <!-- MAIN -->
    <main class="dashboard-main flex-grow-1">
        <!-- HEADER -->
        <header class="dashboard-header d-flex justify-content-between align-items-center px-4 py-2">
            <div class="dashboard-title fw-bold">
                <i class="fa fa-bars me-2"></i> {{ $title }}
            </div>
            
            <div class="dashboard-header-right d-flex align-items-center gap-3">
                <div class="dashboard-profile d-flex align-items-center gap-2">
                    <i class="fa-solid fa-user fa-lg"></i>
                    <span class="username">Admin</span>
                </div>
                <a href="{{ route('logout') }}" id="logoutBtn" class="btn btn-logout d-flex align-items-center gap-1">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </header>

        <!-- CONTENT -->
       @yield('content')
    </main>
</div>

<script>
    document.getElementById('logoutBtn').addEventListener('click', function(e){
        e.preventDefault();
        // Ganti dengan backend logout Laravel atau redirect
        window.location.href = this.href;
    });
</script>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>