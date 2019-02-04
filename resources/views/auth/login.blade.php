@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


    <div class = "col-md-10 ml-auto mr-auto contentmain">
      <div class ="row">
        <div class = "col-md-6 imagecol">
          <img src="{{URL::asset('/image/car.png')}}">
        </div>
        <div class = "col-md-6 start">
          <h3>Log In</h3>
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
            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
@endsection
