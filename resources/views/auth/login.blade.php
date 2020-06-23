@extends('dashboard.authBase')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Login to your Essay Writing account</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                     <div class="form-group">
                        <label class="form-col-form-label" for="email">Email</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="text" placeholder="{{ __('E-Mail Address') }}" autofocus="autofocus">
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
                      
                    <div class="row">
                    <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                    </div>
                    </form>
                    <div class="col-6 text-right">
                        <a href="{{ route('password.request') }}" class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a>
                    </div>
                    </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                  <div class="c-sidebar-brand mb-3"><img class="c-sidebar-brand-full" src="/assets/brand/coreui-signet-white.svg" width="100" height="100" alt="Essay Writing Logo"></div>
                <div>
                  <h2>Sign up</h2>
                  <p>Not Having an account yet? Please Click on the Button below to register your own awesome account and access our amazing services.</p>
                  @if (Route::has('password.request'))
                    <a href="{{ route('register') }}" class="btn btn-info active mt-3">{{ __('Register') }}</a>
                  @endif
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