@extends('admin.master')
@section('content')
<div class="content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Start Content-->
    <div class="container-fluid">
        {{ $slot }}
        
    </div> <!-- container -->

</div> <!-- content -->
@endsection
