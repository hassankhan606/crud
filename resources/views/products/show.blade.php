@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0"><i class="fas fa-eye"></i> Product Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Product Name:</strong>
                            <p class="fs-5">{{ $product->name }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Price:</strong>
                            <p class="fs-5 text-success">${{ number_format($product->price, 2) }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Quantity:</strong>
                            <p>
                                <span class="badge {{ $product->quantity > 10 ? 'bg-success' : 'bg-warning' }} fs-6">
                                    {{ $product->quantity }} in stock
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Category:</strong>
                            <p class="fs-6">{{ $product->category }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Created At:</strong>
                            <p>{{ $product->created_at->format('M d, Y h:i A') }}</p>
                        </div>

                        <div class="mb-3">
                            <strong>Last Updated:</strong>
                            <p>{{ $product->updated_at->format('M d, Y h:i A') }}</p>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <strong>Description:</strong>
                    <p class="border p-3 rounded bg-light">
                        {{ $product->description ?: 'No description provided.' }}
                    </p>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-md-2">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning me-md-2">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Are you sure you want to delete this product?')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection