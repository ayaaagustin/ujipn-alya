<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Siswa;
use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run(): void
     {
        $dataUser = [
            [
                'nama' => 'Slamet Kuatno, S.pd',
                'username' => 'slametkuatno',
                'email' => 'slametkuatno@gmail.com',
                'jabatan' => 'waka Sarpras',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'nama' => 'Maya Safitri, S.pd',
                'username' => 'user-12345678',
                'email' => 'mayasafitri@gmail.com',
                'jabatan' => '',
                'password' => bcrypt('123456'),
                'role' => 'siswa'
            ],
            [
                'nama' => 'Cecep Spidermen',
                'username' => 'user-12345668',
                'email' => 'spidermen@gmail.com',
                'jabatan' => '',
                'password' => bcrypt('123456'),
                'role' => 'siswa'
            ],
        ];

        foreach($dataUser as $user){
            User::create($user);
        }

        $dataSiswa = [
            [
                'user_id' => 2,
                'nis' => '12345678',
                'kelas' => '12 RPL',
                'jurusan' => 'PPLG'
            ],
            [
                'user_id' => 3,
                'nis' => '12345679',
                'kelas' => '12 RPL',
                'jurusan' => 'PPLG'
            ],
        ];

        foreach($dataSiswa as $siswa){
            Siswa::create($siswa);
        }

        $dataKategori = [
            [
                'nama_kategori' => 'Ruang Kelas',
                'deskripsi' => 'Sarana dan prasarana ruang kelas siswa'
            ],
            [
                'nama_kategori' => 'Toilet',
                'deskripsi' => 'Sarana dan prasana kamar mandi/toilet siswa'
            ],
            [
                'nama_kategori' => 'Sekolah',
                'deskripsi' => 'Sarana dan prasana sekolah'
            ],
            [
                'nama_kategori' => 'Laboratorium Komputer',
                'deskripsi' => 'Sarana dan prasana laboratorium komputer sekolah'
            ],
        ];

        foreach($dataKategori as $kategori){
            Kategori::create($kategori);
        }

        $dataAspirasi = [
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'AC kurang dingin',
                'isi' => 'Mohon di cek, AC di Ruang Kelas 12 RPL kurang dingin',
                'status' => 'menunggu',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Lampu mati',
                'isi' => 'Mohon di cek, Lampu di Ruang Kelas 12 RPL mati',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Kursi kurang',
                'isi' => 'Mohon di cek, Kursi di Ruang Kelas 12 RPL kurang',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 2,
                'kategori_id' => 2,
                'judul' => 'Toilet mampet',
                'isi' => 'Mohon di cek, Toilet perempuan di kamar 2, saluran pembuangannya mampet',
                'status' => 'menunggu',
            ],
        ];

        foreach($dataAspirasi as $aspirasi){
            Aspirasi::create($aspirasi);
        }
    }
}
