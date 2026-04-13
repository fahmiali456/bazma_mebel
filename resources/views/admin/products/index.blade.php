@extends('layouts.admin')

@section('content')
<style>
    /* Custom Styling untuk sentuhan premium */
    body {
        background-color: #f8f9fa;
        font-family: 'Inter', sans-serif;
    }

    .card {
        border: none;
        border-radius: 15px;
    }

    .table thead th {
        background-color: #f1f3f5;
        color: #495057;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        border: none;
    }

    .table tbody tr {
        border-bottom: 1px solid #f1f3f5;
        transition: 0.3s;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
        transform: scale(1.002);
    }

    .product-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
    }

    .badge-price {
        background-color: #e7f5ff;
        color: #1971c2;
        font-weight: 600;
        padding: 0.5em 0.8em;
        border-radius: 8px;
    }

    .btn-action {
        border-radius: 8px;
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
    }
</style>

<div class="container py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold mb-0">Manajemen Produk</h2>
            <p class="text-muted">Kelola inventaris mebel Anda dengan mudah.</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-action shadow-sm">
                <i class="fas fa-plus me-2"></i> Tambah Produk Baru
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <strong>Berhasil!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th class="text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/' . $product->image) }}"
                                        class="product-img me-3 shadow-sm border" alt="{{ $product->name }}">
                                    <div>
                                        <h6 class="mb-0 fw-bold">{{ $product->name }}</h6>
                                        <small class="text-muted">ID:
                                            #{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </td>
                            <td class="text-muted">
                                {{ Str::limit($product->description, 60) }}
                            </td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-outline-warning btn-action">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-action">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection