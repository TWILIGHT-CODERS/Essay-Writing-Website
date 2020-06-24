@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
      <div class="card">
        <div class="card-header"> Messages</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-xl-12">
              <ul class="list-group">
                <li class="list-group-item  list-group-item-secondary">
                  <h3>Unread Messages</h3>
                </li>
              </ul>
              <br>
              <ul class="list-group list-group-item-action  list-group-item-light mb-2">
                <li class="list-group-item">
                  <div class="row" style="border-bottom: 1px dotted #ccc;">
                    <div class="col-sm-8 text-muted">
                      <h5>
                        <a href="#">Order #234567</a> | Humans are important than computers
                      </h5>
                    </div>
                    <div class="col-sm-4 text-muted" style="text-align: right;">
                      a few seconds ago
                    </div>
                  </div>
                  <!-- ./row -->
                  <div class="row pt-2">
                    <div class="col-sm-8">
                    <a href="#" style="color: inherit;">
                      <p class="mb-0">Dear {{$user->Profile->firstname}}, could you please tell us more about the assignment?
                      </p>
                    </a>
                    </div>
                    <div class="col-sm-4" style="text-align: right;">
                      <span class="badge badge-primary badge-pill ml-auto" style="float: right;">unread</span>
                    </div>
                  </div>
                  <!-- ./row -->
                </li>
              </ul>

              <ul class="list-group mb-2">
                <li class="list-group-item list-group-item-action justify-content-between align-items-center">
                  <div class="row" style="border-bottom: 1px dotted #ccc;">
                    <div class="col-sm-8 text-muted">
                      <h5>
                        <a href="#">Order #234567</a> | Humans are important than computers
                      </h5>
                    </div>
                    <div class="col-sm-4 text-muted" style="text-align: right;">
                      a few seconds ago
                    </div>
                  </div>
                  <!-- ./row -->
                  <div class="row pt-2">
                    <div class="col-sm-8">
                      <a href="#" style="color: inherit;">
                        <p class="mb-0">
                          Dear {{$user->Profile->firstname}}, could you please tell us more about the assignment?
                        </p>
                      </a>
                    </div>
                    <div class="col-sm-4" style="text-align: right;">
                      <a class="badge badge-dark" href="#">closed</a>
                    </div>
                  </div>
                  <!-- ./row -->
                </li>
              </ul>

              <div class="list-group">
                <a class="list-group-item list-group-item-info list-group-item-action flex-column align-items-start " href="#">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                      Order #234567 | Humans are important than computers
                    </h5>
                    <small>
                      a few seconds ago
                    </small>
                  </div>
                  <p class="mb-1">
                    Dear {{$user->Profile->firstname}}, could you please tell us more about the assignment?
                  </p>
                  <small>
                    Johnson (Support)
                  </small>
                </a>

                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                      Order #234567 | Humans are important than computers
                    </h5><small class="text-muted">
                      3 days ago
                    </small>
                  </div>
                  <p class="mb-1">
                    Dear {{$user->Profile->firstname}}, could you please tell us more about the assignment?
                  </p>
                  <small class="text-muted">
                    Johnson (Support)
                  </small>
                </a>
              </div>

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

