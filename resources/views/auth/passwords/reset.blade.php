@extends('dashboard.authBase')

@section('content')

 <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>{{ __('Reset Password') }}</h1>
                <p class="text-muted">Thanks for confirming your e-mail. You can now proceed to reset your password.</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                     <div class="form-group">
                        <label class="form-col-form-label" for="email">Email</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="text" placeholder="{{ __('E-Mail Address') }}" autofocus="autofocus" value="{{ $email ?? old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                     <div class="form-group">
                        <label class="form-col-form-label" for="password">Password</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror" id="email" type="password" placeholder="{{ __('Password') }}">
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
                    <div class="col-12">
                        <button class="btn btn-primary px-4" type="submit">{{ __('Reset Password') }}</button>
                    </div>
                    </form>
                    </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div class="c-sidebar-brand mb-3"><img class="c-sidebar-brand-full" src="/assets/brand/coreui-signet-white.svg" width="100" height="100" alt="Essay Writing Logo"></div>
                <div>
                  <h2>Login</h2>
                  <p>Having second thoughts? Please Click on the Button below to login your own awesome account and access our amazing services.</p>
                    <a href="{{ route('login') }}" class="btn btn-info active mt-3">{{ __('Login') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection
