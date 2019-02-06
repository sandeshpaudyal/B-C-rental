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
          <h1>Log In</h1>
          <form method="POST" action="{{ route('login') }}">
                        @csrf
           
            <div class = "form-group">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

               @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class = "form-group">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
            </div>
            
            <div class = "form-group forg">
            <button type="submit" class="btn ourbutton">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
          </div>
          </form>

          <br>

        
          </div>
        </div>
        
      </div>
   
    </div>
</div>

<br><br>
<div class="container-fluid foot">
    <div class="text-center">
        <a href="#" class="foota">About</a>
        <a href="#" class="foota"> Contact</a>
        <a href="#" class="foota">Help</a> <br>
        Copyright 2019. All Rights Reserved
    </div>
</div>
@endsection
