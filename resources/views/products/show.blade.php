@extends('layout.app')
  
@section('title', 'Tampilan Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk" value="{{ $product->nama_produk }}" readonly>
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="{{ $product->deskripsi }}" readonly>
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga }}" readonly>
            <label class="form-label">IMG</label>
            <input type="text" name="img" class="form-control" placeholder="img" value="{{ $product->img }}" readonly>
        </div>
    </div>
@endsection