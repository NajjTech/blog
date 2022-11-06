<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Twitter -->
        <meta content="@themepixels" name="twitter:site"/>
        <meta content="@themepixels" name="twitter:creator"/>
        <meta content="summary_large_image" name="twitter:card"/>
        <meta content="SMSBangladesh" name="twitter:title"/> 
        
        <title>SMSBangladesh WebSite</title>
        <meta property="og:image" content="{{url('favicon.ico')}}"/>
        <meta name="description" content="SMSBangladesh -Professional SMS Communication.We are A2P SMS Aggregator Provider in Bangladesh licensed by BTRC"/>
        <!-- vendor css -->
        <link href="{{url('templates/lib/fontawesome/css/all.css')}}" rel="stylesheet"/>
        <link href="{{url('templates/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet"/>
        <link href="{{url('templates/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
        <link href="{{url('templates/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet"/>
        <link href="{{url('templates/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet"/>
        <link href="{{url('templates/css/bracket.css')}}" rel="stylesheet"/>
        <link href="{{url('css/tooltip.css')}}" rel="stylesheet"/>


        <!-- Chartist Pie Chart -->
        <script src="{{ url('templates/js/chartist.min.js')}}"></script>
        <link href="{{url('templates/css/chartist.min.css')}}" rel="stylesheet"/>
        <!-- Chartist Pie Chart -->

        <!-- Multi Select Bulk -->
        <link href="{{url('templates/css/bootstrap-select.css')}}" rel="stylesheet"/>
        <script src="{{ url('templates/js/jquery.min.js')}}"></script>
        <script src="{{ url('templates/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url('templates/js/bootstrap-select.min.js')}}"></script>
        <!-- Chartist Pie Chart -->
 
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ url('css/toastr.min.css')}}"> 
        <link rel="stylesheet" href="{{ url('css/prizelist.css')}}"> 
        <!-- Chartist Pie Chart -->

        <!-- DataTables -->
        <link href="{{url('datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{url('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <script src="{{url('datatables/jquery.js')}}"></script>
        <script src="{{url('datatables/jquery.validate.js')}}"></script>
        <script src="{{url('datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('datatables/bootstrap.min.js')}}"></script>
        <script src="{{url('datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- DataTables -->
    

    </head>

<body>
    @if(Request::is('admin*'))
    @include('layouts.partial.sidebar')
    @endif
    <div class="main-panel">
        @if(Request::is('admin*'))
        @include('layouts.partial.topbar')
           @endif

    @yield('content')

       @include('layouts.partial.footer')






  
<!-- Toastr -->
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/toastr.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="{{url('templates/lib/popper.js/popper.js')}}"></script>
<script src="{{url('templates/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{url('templates/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{url('templates/lib/moment/moment.js')}}"></script>
<script src="{{url('templates/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{url('templates/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
<script src="{{url('templates/lib/peity/jquery.peity.js')}}"></script>
<script src="{{url('templates/lib/chartist/chartist.js')}}"></script>
<script src="{{url('templates/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{url('templates/lib/d3/d3.js')}}"></script>
<script src="{{url('templates/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{url('templates/js/bracket.js')}}"></script>
<script src="{{url('templates/js/ResizeSensor.js')}}"></script>
<!-- <script src="{{url('templates/js/chart.chartjs.js">')}}"></script> -->
<script src="{{url('templates/lib/chart.js/Chart.js')}}"></script>
<script src="{{url('templates/lib/highlightjs/highlight.pack.js')}}"></script>
 
<script src="{{url('js/bootbox.min.js')}}"></script>


{{-- Chart JS --}}
<script src="{{url('templates/lib/chartist/chartist.min.js')}}"></script>
{{-- Chart JS --}}


{!! Toastr::message() !!}

<script>
 
  $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
    });
</script>

</body>
</html>