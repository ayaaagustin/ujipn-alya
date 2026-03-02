@extends('admin.layouts.templates')

@section('content')
<div class="shadow p-3">

    {{-- Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Sukses!</strong> {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Gagal!</strong> {{ session('error') }}
        </div>
    @endif

    {{-- Tombol tambah kategori --}}
    <a href="{{ route('admin.form-kategori') }}" class="btn btn-success mb-4 px-4">
        <i class="fas fa-plus"></i> Tambah Data Kategori
    </a>

    {{-- Tabel kategori --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th class="text-center" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $index => $kat)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kat->nama_kategori }}</td>
                    <td>{{ $kat->deskripsi }}</td>
                    <td class="text-center">

                        {{-- Edit --}}
                        <a href="{{ route('admin.form-edit-kategori', $kat->id) }}"
                           class="btn btn-sm btn-info me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        {{-- Hapus --}}
                        <a href="{{ route('admin.hapus-kategori', $kat->id) }}"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin kategori ini akan dihapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        Data kategori belum tersedia
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection