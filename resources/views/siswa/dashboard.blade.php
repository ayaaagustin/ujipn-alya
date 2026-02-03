@extends('siswa.layouts.templates')

@section('content')
    <div class="main-content">
        <h1 class="welcome">Selamat datang, <b>{{ auth()->user()->username }} (X RPL 1)</b></h1>

    <!-- INFO BOX -->
    <div class="cards">
        <div class="card blue">
            <p>Total Aspirasi</p>
            <h2>{{ $total_aspirasi ?? 0 }}</h2>
        </div>
        <div class="card orange">
            <p>Menunggu</p>
            <h2>{{ $aspirasi_menunggu ?? 0 }}</h2>
        </div>
        <div class="card green">
            <p>Diproses</p>
            <h2>{{ $aspirasi_diproses ?? 0 }}</h2>
        </div>
        <div class="card teal">
            <p>Selesai</p>
            <h2>{{ $aspirasi_selesai ?? 0 }}</h2>
        </div>
    </div>
        <!-- BUTTON -->
    <div class="submit-box">
        <a href="{{ route('siswa.tambah-aspirasi') }}" class="btn btn-success px-5 mx-auto"><i class="fa-solid fa-plus"></i> Ajukan Aspirasi</a>
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
                    <td><span class="status {{ $item->status }}" style="text-transform: capitalize">{{ $item->status }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection