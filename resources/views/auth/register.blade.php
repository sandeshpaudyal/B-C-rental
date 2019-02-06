@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class = "col-md-12 ml-auto mr-auto contentmain">
            <div class ="row">
                <div class = "col-md-6 imagecol">
                    <img src="{{URL::asset('/image/ourcar.png')}}">
                </div>
                <div class = "col-md-6 start">
                    <h1>REGISTER</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>
                            
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                            
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn ourbutton">
                            {{ __('Register') }}
                            </button>
                        </div>
                        <p>
                            Already a member? <button class="btn ourbutton" href="{{ route('login') }}">{{ __('Login') }}</button>
                        </p>
                    </form>
                    <br>
                    <div class = "form-group logins">
                        <button href="#" class="btn btn-primary ourbutton2" role="button" aria-pressed="true">
                        <i class="fab fa-facebook-f"></i>&nbsp;
                        Connect With Facebook</a>
                    </div>
                    <div class = "form-group logins">
                        <a href="#" class="btn btn-danger ourbutton2" role="button" aria-pressed="true">
                        <i class="fab fa-google"></i>&nbsp;
                        Continue with Google</a>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>
</div>

<br>
<br>

<div class="container-fluid foot">
    <div class="text-center">
        <a href="#" class="foota">About</a>
        <a href="#" class="foota"> Contact</a>
        <a href="#" class="foota">Help</a> <br>
        Copyright 2019. All Rights Reserved
    </div>
</div>
@endsection