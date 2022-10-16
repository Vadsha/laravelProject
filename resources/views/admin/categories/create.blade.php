@extends('layouts.home')

@section('title')
    Create Category
@endsection

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Create Category</h1>
                    </div>
                    <div class="card-body text-center">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title">
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Create</button>
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
