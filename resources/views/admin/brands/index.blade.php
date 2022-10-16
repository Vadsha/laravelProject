@extends('layouts.home')

@section('title')
    View Brands
@endsection

@section('content')

    @if (session('created'))
        <div class="alert alert-success" role="alert">
            {{ session('created') }}
            <p id="time"></p>
        </div>
    @endif

    @if (session('edited'))
        <div class="alert alert-primary" role="alert">
            {{ session('edited') }}
            <p id="time"></p>
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-danger" role="alert">
            {{ session('deleted') }}
            <p id="time"></p>
        </div>
    @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">
                                    <a href="{{ route('brands.create') }}" class="btn btn-success btn-sm">Create</a>
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($brands as $brand)

                            <tr>
                                <th class="text-center">{{ $brand->id }}</th>
                                <th class="text-center">{{ $brand->title }}</th>
                                <th class="text-center">
                                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('brands.edit' , $brand->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this item?');">Delete</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script>
            let date = new Date();
            document.getElementById("time").innerHTML = date.getHours()+ ": " + date.getMinutes() + ": " + date.getSeconds();
        </script>

@endsection
