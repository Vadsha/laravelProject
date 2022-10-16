@extends('layouts.home')

@section('title')
    Edit Brand
@endsection

@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h1 class="text-center">Edit Brand</h1>
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('brands.update',$brand->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <input type="text" name="title" value="{{ $brand->title }}">
                                    <button class="btn btn-outline-primary btn-sm">Edit</button>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer">
                            <div><a href="{{ route('brands.index') }}" class="btn btn-success btn-sm">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
