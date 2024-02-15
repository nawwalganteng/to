@extends('layout.app')
  
@section('title', 'Tambah Stok ')
  
@section('contents')
    <h1 class="mb-0">Tambah</h1>
    <hr />
    <form action="{{ route('stok.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="stok" class="form-control" placeholder="stok">
            </div>
            </div>

            <div class="row mb-3">
            <div class="col">
                <input type="text" name="qty" class="form-control" placeholder="qty">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-info">Kirim</button>
            </div>
        </div>
    </form>
@endsection