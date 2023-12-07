<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function find()
    {
        $mahasiswa = Mahasiswa::find(15);
        return view('tampil-mahasiswa', ['mahasiswas' => [$mahasiswa]]);

    }
}