@extends('layouts.backend')
@section('content')
    <!-- Hero -->
    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-content block-content-full row">
                <div class="col-sm-12 col-12 pb-5">
                    <p class="font-weight-bold">Welcome To {{Auth::user()->name}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
