<?php

namespace App\Http\Controllers\Admin;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index() 
    {
        $data = [
            'title' => 'Data Siswa',
            'siswa' => Siswa::all()
        ];

        return view('admin.data-siswa', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Siswa',
        ];

        return view('admin.form-siswa', $data);
    }
}
