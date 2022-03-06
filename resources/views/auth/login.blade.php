@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{--  <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <span class="mb-4">Login With Social :</span>

                                <div class="form-check mt-4 mr-2">
                                   <a href="{{ url('login/facebook') }}" class="btn btn-primary">Facebook</a>
                                   <a href=""class="btn btn-danger">Google</a>
                                   <a href="{{ url('login/github') }}" class="btn btn-dark">Github</a>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <div class="col-md-6 offset-md-4">
                                <p>Login With US:</p>
                               
                       <a href="{{ url('login/facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="{{ url('login/google') }}"><i class="fa fa-google" aria-hidden="true"></i></a>
                       <a href="{{ url('login/github') }}"><i class="fa fa-github fa-5x" aria-hidden="true"></i></a>
                       <a href="{{ url('login/linkdin') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                       {{--  <a href="{{ url('login/twitter') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>  --}}
                            </div>
                        </div>
                       
                        {{--  <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>  --}}

                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
