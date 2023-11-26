@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col">
            <div class="col mb-3">
                <label class="form-label">Product_code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly>
            </div>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="col mx-0">
        <a href="{{ route('products') }}" type="button" class="btn btn-secondary">Back</a>
    </div>

@endsection