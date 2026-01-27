<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardsiswa.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

    <h1 class="welcome">Selamat datang, <b>{{ auth()->user()->username }} (X RPL 1)</b></h1>

    <!-- INFO BOX -->
    <div class="cards">
        <div class="card blue">
            <h3>Total Aspirasi</h3>
            <p>{{ $total_aspirasi }}</p>
        </div>
        <div class="card orange">
            <h3>Menunggu</h3>
            <p>{{ $aspirasi_menunggu }}</p>
        </div>
        <div class="card green">
            <h3>Diproses</h3>
            <p>{{ $aspirasi_diproses }}</p>
        </div>
        <div class="card teal">
            <h3>Selesai</h3>
            <p>{{ $aspirasi_selesai }}</p>
        </div>
    </div>

    <!-- BUTTON -->
    <div class="submit-box">
        <button class="submit-btn">+ Ajukan Aspirasi</button>
    </div>

    <!-- TABLE -->
    <div class="table-box">
        <h3>Riwayat Aspirasi</h3>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Detail Aduan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aspirasi as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>{{ $item->isi }}</td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td><span class="status {{ $item->status }}" style="text-transform: capitalize;">{{ $item->status }}</span></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

</div>

</body>
</html>