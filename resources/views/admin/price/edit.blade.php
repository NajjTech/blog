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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Price Edit</h6>
                        <form class="form-horizontal" method="POST" action="{{url('admin/update_price/'.$price->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="row gx-0">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$price->title}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control" value="{{$price->price}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Order</label>
                                        <input type="number" name="order" class="form-control" value="{{$price->order}}">
                                    </div>
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
            <div class="col-md-3"></div>

        </div><!-- row -->

    </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->



@endsection