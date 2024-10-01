<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>stok</th>
                <th>harga</th>
                <th>deskripsi</th>
                <th>created At</th>
                <th>updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->stok }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>