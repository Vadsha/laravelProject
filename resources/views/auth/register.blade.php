@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="background-image:url(/images/sky.jpg); background-size:cover;color:transparent; border:none;">
                <div class="head mt-5">
                    <h1 class=" display-3 w-75 text-center" style="margin-left:70px; pointer-events:none; font-weight:bolder; background-image:url(/images/headtext.jpeg); background-size:cover;color:transparent; -webkit-background-clip:text;">ATHENA</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 ">
                            <label for="name" class="col-md-4 col-form-label text-dark  text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" placeholder="Full Name" style="border: 1px solid black" type="text" class="bg-transparent form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-dark text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" placeholder="example@gmail.com" style="border: 1px solid black" type="email" class="bg-transparent form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-dark text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" placeholder="password" style="border: 1px solid black" type="password" class="bg-transparent form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-dark text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" placeholder="re-type password" style="border: 1px solid black" type="password" class="form-control bg-transparent" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <a class="btn w-50" href="{{ route('login') }}" style="text-decoration:none; color:black;">Already have an account?</a>
                            <div class="text-end" style="margin-top:-35px; margin-left: -3px;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
