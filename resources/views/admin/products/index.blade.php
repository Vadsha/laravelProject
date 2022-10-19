@extends('layouts.home')

@section('title')
View Products
@endsection

@section('content')

    @if (session('created'))
    <div class="alert alert-success" role="alert">
        {{ session('created') }}
        <p id="time"></p>
      </div>
    @endif
    @if (session('updated'))
    <div class="alert alert-success" role="alert">
        {{ session('updated') }}
        <p id="time"></p>
      </div>
    @endif
    @if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
        <p id="time"></p>
      </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Title</th>
                            <th class="text-center"><a href="{{ route('products.create') }}" class="btn btn-success btn-sm">Create</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage\products') }}/{{ $product->image }}" alt="Product Image" width="50px" height="60px">
                            </td>
                            <td class="text-center">{{ $product->title }}</td>
                            <td class="text-center"><a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                {{ $products->links() }}
                </ul>
              </nav>
        </div>
    </div>

    <script>
        let date = new Date();
        document.getElementById("time").innerHTML = date.getHours()+ ": " + date.getMinutes() + ": " + date.getSeconds();
    </script>
@endsection
