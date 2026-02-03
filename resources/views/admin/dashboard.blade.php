@extends('admin.layouts.templates')

@section('content')
<section class="dashboard-content p-4">

    <!-- CARDS -->
    <div class="dashboard-cards mb-4">
        <div class="dashboard-card blue">
            <div>Total Aspirasi</div>
            <h2>{{ $total_aspirasi }}</h2>
        </div>

        <div class="dashboard-card orange">
            <div>Menunggu</div>
            <h2>{{ $aspirasi_menunggu }}</h2>
        </div>

        <div class="dashboard-card green">
            <div>Diproses</div>
            <h2>{{ $aspirasi_diproses }}</h2>
        </div>

        <div class="dashboard-card teal">
            <div>Selesai</div>
            <h2>{{ $aspirasi_selesai }}</h2>
        </div>
    </div>

    <!-- TABLE -->
    <h3>Aspirasi Terbaru</h3>
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aspirasi as $item)
            <tr>
                <td>{{ $item->siswa->user->nama ?? '-' }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                <td>
                    <span class="dashboard-status {{ $item->status }}">
                        {{ ucfirst($item->status) }}
                    </span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">
                    Belum ada data aspirasi
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</section>
@endsection