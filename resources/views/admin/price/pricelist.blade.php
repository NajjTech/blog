@extends('layouts.master')
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active">PriceList</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">

                        <form method="POST">
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">New Price <i class="fa fa-plus"></i></a>



                                <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>

                            </div>
                        </form>
                    </div>
                    <br />

                    <div style="overflow-x:auto;">
                        <div class="table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Min Order</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($price) > 0)
                                    @foreach($price as $p)
                                    <tr>
                                        <td>{{$p->title}}</td>
                                        <td>{{$p->price}}</td>
                                        <td>{{$p->order}}</td>
                                        <td>{{date('d-m-y h:i a', strtotime($p->created_at))}}</td>
                                        <td>{{date('d-m-y h:i a', strtotime($p->updated_at))}}</td>
                                        <td>
                                            @if($p->status == 1 )
                                            <span class="badge badge-success"> Active </span>
                                            @else
                                            <span class="badge badge-danger"> Inactive </span>
                                            @endif
                                        </td>

                                        <td>

                                            <div class="dropdown show">
                                                <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="#">
                                                        @if($p->status == 0)
                                                        <a href="{{url('/admin/price_status/'.$p->id.'/1')}}" class="dropdown-item">
                                                            <div><i class="fa fa-check"></i> Active</div>
                                                        </a>
                                                        @else
                                                        <a href="{{url('/admin/price_status/'.$p->id.'/0')}}" class="dropdown-item">
                                                            <div><i class="fa fa-pause"></i> Pause</div>
                                                        </a>
                                                        @endif
                                                    </a>
                                                    <a class="dropdown-item" href="{{url('/admin/edit_price/'.$p->id)}}">
                                                        <div><i class="fa fa-pencil"></i> Modify</div>
                                                    </a>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#delete" data-id="{{ $p->id }}" class="dropdown-item" href="#">
                                                        <div><i class="fa fa-trash"></i> Delete</div>
                                                    </a>
                                                </div>
                                            </div>
                                            </br></br>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No Data Found !!!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $price->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}</p>
                </div>
            </div>
        </div>
        <br />
        <br />

    </div>
    <!-- br-pagebody -->
</div>

<!-- CREATE USER MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Price Details</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <form class="form-horizontal" method="POST" action="{{ url('/admin/price_store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row gx-0">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter Price">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Order</label>
                                <input type="number" name="order" class="form-control" placeholder="Enter Order">
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end mg-t-30">
                        <button type="submit" class="btn btn-info mx-2">Save <i class="fa fa-store"></i></button>
                        <button type="reset" class="btn btn-secondary ">Reset <i class="fa fa-eraser"></i></button>
                    </div>

                </form>



            </div><!-- modal-body -->
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->





<div id="delete" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
                    <h4 class="modal-title">Are you sure?</h4>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-flex justify-content-center">
                <p>Do you really want to delete these records?</p>
            </div>

            <div class="modal-body pd-25 wd-300">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="del_title" value="" readonly="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a id="deleteprc" href="" type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Delete <i class="ion-trash-a"></i></a>
                <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div><!-- modal-dialog -->
</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('#delete').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'get',
                url: '{{ url('/admin/viewprice/') }}/' + id,
                success: function(data) {
                    $('#del_title').val(data.title);
                    $("#deleteprc").attr('href', '/admin/delete_price/' + data.id);
                }
            });
        });
    });
</script>

@endsection