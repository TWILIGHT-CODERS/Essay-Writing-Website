@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header"><strong>Profile Settings</strong></div>
          <div class="card-body">
                @if (session('status'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data">
                @csrf

                @method('PATCH')
                <div class="row">
                  <div class="col-sm-5">
                    <a href="javascript: void(0);">
                      <img src="" class="rounded mr-75" alt="profile image" height="64" width="64">
                    </a>
                  </div>
                  <div class="col-sm-7">
                    <input type="file" class="btn btn-sm btn-info ml-50 mb-50 mb-sm-0" id="profileImage" name="profileImage">
                    @error('profileImage')
                    <strong class="text-danger ml-75 mt-10"><small><b>{{ $message }}</b></small></strong>
                    @enderror
                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max size of 800kB</small></p>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label class="form-col-form-label" for="firstname">Firstname</label>
                    <input name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" type="text" placeholder="Your Firstname" autofocus="autofocus" value="{{old('firstname') ?? $user->profile->firstname}}">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="form-col-form-label" for="lastname">Lastname</label>
                    <input name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="firstname" type="text" placeholder="Your Lastname"value="{{old('lastname') ?? $user->profile->lastname}}">
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label class="form-col-form-label" for="phone">Phone Number</label>
                    <input name="phone" class="form-control @error('phone') is-invalid @enderror" id="firstname" type="text" placeholder="Your phone" autofocus="autofocus"value="{{old('phone') ?? $user->phone}}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="form-group col-sm-8">
                    <label for="email">Email</label>
                    <input class="form-control disabled" readonly id="email" value="{{$user->email}}">
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="User Id">User Id</label>
                    <input class="form-control disabled" readonly id="user-id" value="{{$user->profile->client_id}}">
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="form-group col-sm-12">
                    <button type="submit" class="btn btn-primary px-4">Save Profile</button>
                  </div>
                </div>
                <!-- /.row-->
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-->


          <div class="col-sm-6">
            <div class="card">
              <div class="card-header"><strong>Account Settings</strong></div>
              <div class="card-body">
                @if (session('errorPassword'))
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ session('errorPassword') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                  @if (session('successPassword'))
                      <div class="alert alert-success alert-dismissible" role="alert">
                          {{ session('successPassword') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif
              <form method="POST" action="{{ route('update-password') }}">
                  @csrf

                  @method('PATCH')
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="password">Old Password</label>
                      <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Old Password" value="{{old('password')}}">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="new_password">New Password</label>
                      <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password" value="{{old('new_password')}}">
                      @error('new_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                     @enderror
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="form-group col-sm-12">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" value="{{old('confirm_password')}}">
                    @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                    </div>
                  </div>
                  <!-- /.row-->
                <div class="row">
                  <div class="form-group col-sm-12">
                    <button type="submit" class="btn btn-primary px-4">Update Password</button>
                  </div>
                </div>
                <!-- /.row-->
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- /.row-->
      </div>
    </div>

@endsection


@section('javascript')
    <script src="{{ asset('js/colors.js') }}"></script>
@endsection

