@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
 
        <div class="row mx-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('products') }}" type="button" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </form>
@endsection