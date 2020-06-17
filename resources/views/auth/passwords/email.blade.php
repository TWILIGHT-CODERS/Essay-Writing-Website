@extends('dashboard.authBase')

@section('content')

<div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>{{ __('Reset Password') }}</h1>
                <p class="text-muted">Input your email address to request for a password reset link.</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                     <div class="form-group">
                        <label class="form-col-form-label" for="email">{{ __('E-Mail Address') }}</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="text" placeholder="{{ __('E-Mail Address') }}" autofocus="autofocus" value="{{ $email ?? old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      
                    <div class="row">
                    <div class="col-8">
                        <button class="btn btn-primary px-4" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </div>
                    </form>
                    <div class="col-4 text-right">
                        <a href="{{ route('login') }}" class="btn btn-link px-0"> Or {{ __('login') }}</a>
                    </div>
                    </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Not Having an account yet? Please Click on the Button below to register your own awesome account and access our amazing services.</p>
                    <a href="{{ route('register') }}" class="btn btn-info active mt-3">{{ __('Register') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
