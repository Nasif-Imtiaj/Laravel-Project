@extends('students.layout')

@section('content')
      @include('main.header')
@section('content')
<div class="container">
    <style >
        .text_login{
            color:white;
        }
    </style>
    <br>
     <br>
      <br>
       <br>
        <br>
         <br>
    <center><div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <h1 class="text_login">Welcome to Admin login page</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
  <br>
                        <div class="form-group row">
                            <label class="text_login" for="email" class="col-md-4 col-form-label 
                            text-md-right">{{ __('E-Mail Address') }}</label>
  <br>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  <br>
                        <div class="form-group row">
                            <label class="text_login" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  <br>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text_login" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                      <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></center>
@endsection
