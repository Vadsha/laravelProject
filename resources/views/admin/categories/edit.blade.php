@extends('layouts.home')

@section('title')
    Edit Category
@endsection

@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h1 class="text-center">Edit Category</h1>
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('categories.update',$category->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <input type="text" name="title" value="{{ $category->title }}">
                                    <button class="btn btn-outline-primary btn-sm">Edit</button>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer">
                            <div><a href="{{ route('categories.index') }}" class="btn btn-success btn-sm">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
