@extends('dashboard.base')

@section('content')

<div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> New Order</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <form class="formTest" method="post" action="/test">
                        @csrf
                        <div class="form-group col-sm-6">
                          <label for="test">Name</label>
                          <input type="text" name="test" value="" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection


@section('javascript')
    <script src="{{ asset('js/colors.js') }}"></script>
@endsection

