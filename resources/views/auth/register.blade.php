@extends('dashboard.authBase')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Sign Up</h1>
                <p class="text-muted">Register Essay Writing account</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                     <div class="form-group">
                        <label class="form-col-form-label" for="email">Name</label>
                        <input name="name" class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus="autofocus">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                     <div class="form-group">
                        <label class="form-col-form-label" for="email">{{ __('E-Mail Address') }}</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>


                      <div class="form-group">
                        <label class="form-col-form-label" for="password">{{ __('Password') }}</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="{{ __('Password') }}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label class="form-col-form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                        <input name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" type="password" placeholder="{{ __('Confirm Password') }}">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                    <div class="row">
                    <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">{{ __('Register') }}</button>
                    </div>
                    </form>
                    </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Login</h2>
                  <p>Already having an account? Please Click on the Button below to login your own awesome account and access our amazing services.</p>
                  <a href="{{ route('login') }}" class="btn btn-info active mt-3">{{ __('Login') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('javascript')

@endsection