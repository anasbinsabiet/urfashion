@extends('frontend.layouts.master')
@section('title','Dashboard')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.sidenav')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <b class="h4">Dashboard</b>
                        </div>
                    </div>
                </div>
                <div class="row gutters-5 cart-empty" style="display: none;">
                    <div class="col">
                        <div class="text-center bg-white p-4 rounded shadow">
                            <img class="mw-100 h-200px" src="https://circle.com.bd/public/assets/img/nothing.svg" alt="Image">
                            <h5 class="mb-0 h5 mt-3">There isn't anything added yet</h5>
                        </div>
                    </div>
                </div>
                <div class="aiz-pagination">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection