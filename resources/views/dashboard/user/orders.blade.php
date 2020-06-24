@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header"> Orders</div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="myTab1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#current" role="tab" aria-controls="home" aria-selected="true">
                    <i class="c-icon cil-av-timer"></i>
                     Current
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#unpaid" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="c-icon cil-cash"></i>
                     Unpaid
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="c-icon cil-list"></i>
                     All Orders
                  </a>
                </li>

              </ul>
              <div class="tab-content" id="myTab1Content">
                <div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="home-tab">
                  <table class="table table-responsive-sm">
                        <thead>
                          <tr>
                            <th>Order#</th>
                            <th>Topic</th>
                            <th>Price (USD)</th>
                            <th>Deadline</th>
                            <th>status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">7265627</a></td>
                            <td>Humans are better than computers</td>
                            <td>272</td>
                            <td>20 days</td>
                            <td><span class="badge badge-warning">Waiting Payments</span></td>
                            <td><a href="#" class="btn btn-outline-dark">Details</a></td>
                          </tr>
                          <tr>
                            <td><a href="#">7825627</a></td>
                            <td>Computer Design</td>
                            <td>30</td>
                            <td>14 days</td>
                            <td><span class="badge badge-success">In progress</span></td>
                            <td><a href="#" class="btn btn-outline-dark">Details</a></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="unpaid" role="tabpanel" aria-labelledby="profile-tab">
                  Tab2
                </div>
                <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="contact-tab">
                  Tab 3
                </div>
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

