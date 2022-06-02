@extends('frontend/layouts.template')
@section('content')
<!--main content start-->

<div class="container">
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row align-items-center">
          <div class="col-md-6 col-8 align-self-center">
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">

                      </ol>
                  </nav>
              </div>
          </div>
      </div>
      <br><br><br>
      <div>
        <div class="service">
            <div class="title">

                Edit Profile User
            </div>
        </div>
      </div>
  </div>

  <br><br>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
<!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="{{ asset('frontend/assets/img/profil.png')}}"
                                        class="rounded-circle" width="150" />
                                        <h4 class="card-title mt-2"></h4>

                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="col-lg-8"> -->
                                    <form class="form-horizontal form-material mx-2" action="{{ isset($profileuser) ? route('profileuser.update',$profileuser->id) : route('profileuser.store') }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! isset($profileuser) ? method_field('PUT') : '' !!}
                                    <input type="hidden" name="id" value="{{ isset($profileuser) ? $profileuser->id : ''}}">
                                      <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Nama</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="name" id="name" minlenght="5" value="{{ isset($profileuser) ? $profileuser->name : ''}}" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Username</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="username" id="username" minlenght="5" value="{{ $profileuser->username }}" disabled/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Email</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="email" name="email" id="email" value="{{ $profileuser->email }}" disabled/>
                                        </div>
                                      </div>
                                      <div class="btn-group mt-3">
                                        <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="{{ route('profileuser.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
                                        </div>
                                      </div>
                                    </form>
                                  <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
</div>
@endsection

