<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Penerbit;
use App\Katalog;
use App\Buku;
use App\Peminjaman;
use App\Pengarang;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $total_anggota = Anggota::count();
        $total_buku = Buku::count();
        $total_peminjaman = Peminjaman::whereMonth('tgl_pinjam', date('m'))->count();
        $total_penerbit = Penerbit::count();
        
        return view('admin.dashboard');
    }

    public function katalog() {
        $data_katalog = Katalog::all();
      
        return view('admin.katalog.katalog', compact('data_katalog'));
    }

    public function penerbit() {
        $data_penerbit = Penerbit::all();

        return view('admin.penerbit', compact('data_penerbit'));
    }

    public function pengarang() {
        $data_pengarang = Pengarang::all();

        return view('admin.pengarang', compact('data_pengarang'));
    }

    public function anggota() {
        $total_anggota = Anggota::all();

        return view('admin.anggota');
    }
}
