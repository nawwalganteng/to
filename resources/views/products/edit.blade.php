@extends('layout.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="nama_produk" value="{{ $product->nama_produk}}" >
            </div>
            
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="{{ $product->deskripsi}}" >
            </div>
            </div>

            <div class="row">
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga}}" >
            </div>
            </div>

            <div class="row">
            <div class="col mb-3">
                <label class="form-label">img</label>
                <input type="text" name="Img" class="form-control" placeholder="img" value="{{ $product->img}}" >
           
                </div>
                </div>
         <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Perbarui</button>
           
        </div>
    </form>
@endsection