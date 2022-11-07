@extends('layouts.master')
@section('content')
   <!-- ########## START: MAIN PANEL ########## -->
   <div class="br-mainpanel">
      <div class="pd-x-30">
        <h4 class="tx-gray-800 mg-b-5">Site Admin Dashboard</h4>
        <p class="mg-b-0"> </p>
      </div><!-- d-flex -->

      <div class="mg-t-10 pd-x-30">
        <a href="{!! route('index') !!}" target="blank" class="btn btn-success">VISIT SITE <i class="fa fa-globe"></i></a>
      </div>

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Users</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-balance-scale tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Vendor Balance</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-envelope-o tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Campaign <span class="badge badge-pill badge-success">Today</span></p>
                  <p class="tx-20 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-shield tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Masks</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

      


  </div>
</div>



@endsection