<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; //library pdf

class LaporanController extends Controller
{
    public function index(){
        //menampilkan halaman laporan
        return view('laporan');
    }

    public function export(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('laporan_pdf', ['data' => 'Laporan Pdf Peminjaman']);
        //mendownload laporan.pdf
    	return $data->download('laporanpeminjaman.pdf');
    }
}