@extends('layouts.master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">SMS</a>
            <span class="breadcrumb-item active">Modify</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit</h6>
                        <form class="form-horizontal" method="POST" action="{{url('admin/update_price/'.$price->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="name" value="{{$price}}" class="form-control"/>  
                                </div>
                            </div>



                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back</a>
                            </div>

                        </form>

                    </div><!-- form-layout -->

                </div><!-- br-section-wrapper -->

            </div><!-- col-lg-6 -->


        </div><!-- row -->

    </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->



@endsection
