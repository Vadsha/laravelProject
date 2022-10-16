@extends('layouts.app')

@section('content')
<div class="container bg-transparent">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="background-image:url(/images/sky.jpg); background-size:cover;color:transparent; border:none;">
                <div class="head mt-5">
                    <h1 class=" display-3 w-75" style="margin-left:90px; pointer-events:none; font-weight:bolder; background-image:url(/images/headtext.jpeg); background-size:cover;color:transparent; -webkit-background-clip:text;">ATHENA</h1>
                </div>
                <div class="card-body mt-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label style="font-size: large" for="email" class="col-4 col-form-label text-md-end text-dark">{{ __('Email Address') }}</label>
                            <div class="col-md-8">
                                <input placeholder="example@gmail.com" id="email" style="border: 1px solid black" type="email" class="bg-transparent form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="font-size: large" for="password" class="text-dark col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <input placeholder="password" id="password" style="border: 1px solid black;" type="password" class="bg-transparent form-control" name="password" required autocomplete="current-password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" style="border: 1px solid black;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-dark" for="remember" style="font-size: large">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="w-50" style="display: flex; flex-direction:column;">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link text-dark" style="text-decoration: none;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    <a href="{{ route('register') }}" style="text-decoration: none;" class="btn btn-link text-dark">Doesn't have account?</a>
                                </div>
                                <div class="w-50">
                                    <button type="submit" class="btn btn-primary mt-3" style="margin-left: 140px">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
