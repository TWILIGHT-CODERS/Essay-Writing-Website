@extends('dashboard.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <!-- @if(Auth::user()) 
                  @role('admin') 
                    {{"Admin"}} 
                  @endrole 

                  @else{{"user"}}
                @endif -->
                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-success p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-check"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-success">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Completed</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('completed')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-primary p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-pen-alt"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-primary">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">In Progress</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('progress')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-danger p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Overdue Tasks</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('overdue')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->

                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-info p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-info">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Charged Back</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('charged-back')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->

                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-danger p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Disputes</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('disputes')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-4">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-warning p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-x-circle"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-warning">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Cancelled</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{route('cancelled')}}"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->

              <!-- /.end widgets-->


              <!-- start orders-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-notes"></use>
                      </svg>
                    My Orders</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-hover table-outline mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th class="text-center">
                              <svg class="c-icon">
                                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                              </svg>
                            </th>
                            <th>User</th>
                            <th class="text-center">Country</th>
                            <th>Usage</th>
                            <th class="text-center">Payment Method</th>
                            <th>Activity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </td>
                            <td>
                              <div>Yiorgos Avraamu</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-us c-icon-xl" id="us" title="us"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>50%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-mastercard"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </td>
                            <td>
                              <div>Avram Tarasios</div>
                              <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-br c-icon-xl" id="br" title="br"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>10%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-visa"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                            </td>
                            <td>
                              <div>Quintin Ed</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-in c-icon-xl" id="in" title="in"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>74%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-stripe"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-secondary"></span></div>
                            </td>
                            <td>
                              <div>Enéas Kwadwo</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-fr c-icon-xl" id="fr" title="fr"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>98%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-paypal"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>Last month</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </td>
                            <td>
                              <div>Agapetus Tadeáš</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-es c-icon-xl" id="es" title="es"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>22%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-apple-pay"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>Last week</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </td>
                            <td>
                              <div>Friderik Dávid</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center"><i class="flag-icon flag-icon-pl c-icon-xl" id="pl" title="pl"></i></td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>43%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#cc-amex"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->




            </div>
            <!-- /.fadein-->
          </div>
          <!-- /.container-fluid-->


@endsection


@section('javascript')
    <script src="{{ asset('js/colors.js') }}"></script>
@endsection

