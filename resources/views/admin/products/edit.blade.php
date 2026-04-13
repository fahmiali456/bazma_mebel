@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header bg-warning text-dark">
                    <h4>Edit Produk: {{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga ($)</label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control"
                                rows="3">{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini</label>
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $product->image) }}" width="120" class="img-thumbnail">
                            </div>
                            <label class="form-label">Ganti Gambar (Opsional)</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-warning">Update Data</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection