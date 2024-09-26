<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Data buku dalam bentuk array
        $books = [
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'year' => 1925],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'year' => 1960],
            ['title' => '1984', 'author' => 'George Orwell', 'year' => 1949],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813],
            ['title' => 'Moby-Dick', 'author' => 'Herman Melville', 'year' => 1851],
        ];

        // Mengirim data ke view
        return view('home', ['books' => $books]);
    }
}
