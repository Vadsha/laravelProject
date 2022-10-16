@extends('layouts.home')

@section('title')
    Create Brand
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
            <div class="col-6">
                <div class="card mt-3">
                    <div class="card-header">
                        <h1 class="text-center">Create Brand</h1>
                    </div>
                    <div class="card-body text-center">
                        <form action="{{ route('brands.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title">
                                <button class="btn btn-outline-primary btn-sm">Create</button>
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
