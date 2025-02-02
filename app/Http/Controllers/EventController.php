<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Menampilkan halaman index event
    public function index()
    {
        // Logika untuk mengambil data event jika ada
        // Misalnya jika ingin menampilkan data dari database
        // $events = Event::all();  // Ambil semua data event dari database
        
        // Jika tidak ada data dari database, bisa kirim data statis atau kosong
        return view('event.event');  // Menampilkan view event.blade.php
    }
}