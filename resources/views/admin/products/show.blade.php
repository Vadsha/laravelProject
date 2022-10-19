@extends('layouts.home')

@section('title')
    {{ $product->title }} Details
@endsection

@section('content')
    <div class="container">
        <div class="d-flex row justify-content-center">
            <div class="col-7">
                <div class="card mt-3 " style="background-color: #B0C8FD;">
                    <div class="d-flex row justify-content-center">
                        <img src="{{ asset('storage/products') }}/{{ $product->image }}" alt="" class="col-4 mt-2" height="240px">
                    </div>
                    <div class="card-body mt-1">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color: #B0C8FD;">Title - {{ $product->title }}</li>
                            <li class="list-group-item" style="background-color: #B0C8FD;">Description - {{ $product->description }}</li>
                            <li class="list-group-item" style="background-color: #B0C8FD;">Price - ${{ $product->price }}</li>
                            <li class="list-group-item" style="background-color: #B0C8FD;">Category - {{ $product->category->title }}</li>
                            <li class="list-group-item" style="background-color: #B0C8FD;">Brand - {{ $product->brand->title }}</li>
                        </ul>
                    </div>
                    <div class="card-footer  mt-1">
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="{{ route('products.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Back</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning ms-1"> Edit</a>
                            <button class="btn btn-danger ms-1" onclick="return confirm('Are you sure to delete this item?');">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
