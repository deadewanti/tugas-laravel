<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - dheadewanti</title>
    <style>
        /* General */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar */
        .header {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar .container {
            max-width: 1200px;
            /* Batas lebar konten navbar */
            margin: 0 auto;
            /* Memusatkan navbar */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            /* Menambahkan padding untuk mencegah isi navbar menyentuh tepi layar */
        }

        .logo a {
            font-size: 1.8rem;
            color: #333;
            text-decoration: none;
            font-weight: 700;
        }

        .logo span {
            color: #f39c12;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #f39c12;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-color: cornsilk;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            z-index: 1;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        .cta-btn {
            padding: 12px 30px;
            background-color: #f39c12;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        .cta-btn:hover {
            background-color: #e67e22;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: #fff;
            text-align: center;
        }

        .features .container {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .feature-item {
            width: 30%;
            padding: 20px;
            background-color: #fafafa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-item i {
            font-size: 2rem;
            color: #f39c12;
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .feature-item p {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            font-size: 0.9rem;
        }
    </style>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>


    <!-- Navbar -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="#">Dhea<span>Dewanti</span></a>
                </div>
                <ul class="nav-links">
                    <li><a href="/home">Beranda</a></li>
                    <li><a href="/gallery">Poto</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Hallo Guys 👋</h1>
            <p class="hero-subtitle">Saya Dhea Dewanti</p>
            <a href="#" class="cta-btn">Masuk</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="feature-item">
                <i class="fas fa-pencil-ruler"></i>
                <h3>Desain Inovatif</h3>
                <p>Saya menciptakan desain unik yang menarik dari yang lain.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cogs"></i>
                <h3>Teknologi</h3>
                <p>Menggunakan teknologi terkini untuk pengalaman pengguna terbaik.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-leaf"></i>
                <h3>Keberlanjutan</h3>
                <p>Desain yang ramah lingkungan dan berkelanjutan.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy;Hak Cipta Dilindungi Undang-Undang 2024.</p>
        </div>
    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Book List</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f39c12;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Pesan */
        .message {
            margin: 20px 0;
            padding: 10px;
            background-color: #f39c12;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Daftar Buku</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book['Judul'] }}</td>
                <td>{{ $book['Pengarang'] }}</td>
                <td>{{ $book['Tahun'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menampilkan pesan jika ada -->
    @if($message)
    <div class="message">
        <p>{{ $message }}</p>
    </div>
    @endif
</body>

</html>