@extends('siswa.layouts.templates')

@section('content')
    <div class="main-content">
        @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
            @endif
        <div class="photo" style="display: flex; justify-content: center; margin-bottom: 20px;">
        </div>
        <h2 style="text-align: center; color: #333E5D; margin-bottom: 20px">Selamat datang
            <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span>
        </h2>
        <div class="cards">
            <div class="card blue" data-icon="&#xf15c;">
                <h3>Total Aspirasi</h3>
                <p>{{ $total_aspirasi }}</p>
            </div>

            <div class="card orange" data-icon="&#xf017;">
                <h3>Menunggu</h3>
                <p>{{ $aspirasi_menunggu }}</p>
            </div>

            <div class="card green" data-icon="&#xf110;">
                <h3>Diproses</h3>
                <p>{{ $aspirasi_diproses }}</p>
            </div>

            <div class="card teal" data-icon="&#xf058;">
                <h3>Selesai</h3>
                <p>{{ $aspirasi_selesai }}</p>
            </div>
            <div class="card bg-danger" data-icon="&#xf058;">
                <h3>Ditolak</h3>
                <p>{{ $aspirasi_ditolak }}</p>
            </div>
        </div>

        <div class="submit-box">
            <a href="{{ route('siswa.tambah-aspirasi') }}" class="btn btn-success px-5 mx-auto"><i class="fa-solid fa-plus"></i> Ajukan Aspirasi</a>
    </div>
        </div>

        <div class="table-box">
            <h3>Riwayat Aspirasi</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Detail Aduan</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aspirasi as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($aspirasi->currentPage() - 1) * $aspirasi->perPage() }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->kategori->nama_kategori }}</td>
                            <td>{{ $item->isi }}</td>
                            <td><span class="status {{ $item->status }} text-center"
                                    style="text-transform: capitalize;">{{ $item->status }}</span></td>

                            <td class="text-center" width="200">
                            {{-- Tombol Edit --}}
                            <a class="btn btn-sm btn-info {{ $item->status != 'menunggu' ? 'disabled' : '' }}"
                            href="{{ route('siswa.edit-tambah', $item->id) }}">
                        Edit
                    </a>

                    <a class="btn btn-sm btn-danger {{ $item->status == 'diproses' ? 'disabled' : '' }}"
                       href="{{ route('siswa.edit-aspirasi', $item->id) }}"
                       onclick="return confirm('Yakin data aspirasi ini akan dihapus???')">Hapus
                    </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $aspirasi->links() }}
            </div>
        </div>
    </div>
@endsection