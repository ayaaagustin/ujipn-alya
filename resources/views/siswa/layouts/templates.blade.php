<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/dashboardsiswa.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

<!-- TOPBAR -->
<header class="topbar">
    <div class="left">
        <span class="menu">☰</span>
        <h2>Dashboard Siswa</h2>
    </div>

    <div class="right">
        <!-- Nama user -->
        <span class="user"><i class="fa-solid fa-user"></i> {{ auth()->user()->username }}</span>

        <!-- Logout pakai form POST -->
        <form action="{{ route('logout') }}" method="GET" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>
</header>

<!-- CONTENT -->
<div class="container">
    @yield('content')

</div>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>