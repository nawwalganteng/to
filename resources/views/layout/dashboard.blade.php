@extends('layout.app')
  
@section('title', 'Informasi - Cafe ')
  
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Styling for sections */
        section {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Styling for section headings */
        h2 {
            color: #333;
            font-size: 24px;
            margin-top: 0;
        }
        
        /* Styling for section paragraphs */
        p {
            color: #666;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <section id="tentang-aplikasi">
        <h2>Tentang Aplikasi</h2>
        <p>Aplikasi ini mempermudah segalanya</p>
    </section>
    <section id="layanan-aplikasi">
        <h2>Layanan Aplikasi</h2>
        <p>Selalu ada barang disini</p>
    </section>
    <section id="sejarah-aplikasi">
        <h2>Sejarah Aplikasi</h2>
        <p>Aplikasi dibuat dicampur sama bantuan tangan teman</p>
    </section>
</body>
</html>

@endsection