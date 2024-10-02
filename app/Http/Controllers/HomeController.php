<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['Judul' => 'The Great Gatsby', 'Pengarang' => 'F. Scott Fitzgerald', 'Tahun' => 1925],
            ['Judul' => 'To Kill a Mockingbird', 'Pengarang' => 'Harper Lee', 'Tahun' => 1960],
            ['Judul' => '1984', 'Pengarang' => 'George Orwell', 'Tahun' => 1949],
            ['Judul' => 'Pride and Prejudice', 'Pengarang' => 'Jane Austen', 'Tahun' => 1813],
            ['Judul' => 'Moby-Dick', 'Pengarang' => 'Herman Melville', 'Tahun' => 1851],
        ];

        // Mengambil message dari session
        $message = $request->session()->get('message');

        return view('home', ['books' => $books, 'message' => $message]);
    }

    public function form(Request $request)
    {
        // Menyimpan data pesan dari form ke dalam session
        $message = $request->input('message');
        $request->session()->put('message', $message);

        // Redirect ke halaman home dengan data message
        return redirect('/home');
    }

    public function store()
    {
        $product = new Product();
        $product->nama = "Laptop";
        $product->harga = 10000;
        $product->stok = 10;
        $product->deskripsi = "Laptop murah";
        $product->save();

        return ("data sukses dikirim");
}
        public function store2()
    {
        $product = new Product();
        $product->nama = "hp vivo";
        $product->harga = 10000;
        $product->stok = 10;
        $product->deskripsi = "hp vivo murah";
        $product->save();

        return ("data sukses dikirim");
    }
    public function store3()
    {
        $product = new Product();
        $product->nama = "hp samsung";
        $product->harga = 10000;
        $product->stok = 10;
        $product->deskripsi = "hp samsung";
        $product->save();

        return ("data sukses dikirim");
    }
      public function store4()
    {
        $product = new Product();
        $product->nama = "laptop hp";
        $product->harga = 10000;
        $product->stok = 10;
        $product->deskripsi = "laptop merek hp";
        $product->save();

        return ("data sukses dikirim");
}
    public function show()
    {
        $Products = Product::all();
        return view("tableProduct", compact("Products"));
    }

    public function edit($id)
    {

        $product = Product::findOrFail($id);
        

        return view("editProduct", compact("product"));
    }
    public function update(Request $request, $id) {

        $product = Product::findOrFail($id);


        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect('/show');
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/show');
    }
    }

