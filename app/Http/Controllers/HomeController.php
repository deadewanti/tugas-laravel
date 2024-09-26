<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $books = [
            ['Judul' => 'The Great Gatsby', 'Pengarang' => 'F. Scott Fitzgerald', 'Tahun' => 1925],
            ['Judul' => 'To Kill a Mockingbird', 'Pengarang' => 'Harper Lee', 'Tahun' => 1960],
            ['Judul' => '1984', 'Pengarang' => 'George Orwell', 'Tahun' => 1949],
            ['Judul' => 'Pride and Prejudice', 'Pengarang' => 'Jane Austen', 'Tahun' => 1813],
            ['Judul' => 'Moby-Dick', 'Pengarang' => 'Herman Melville', 'Tahun' => 1851],
        ];
        return view('home', ['books' => $books]);
    }
}
