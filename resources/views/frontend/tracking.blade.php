@extends('frontend.layouts.master')
@section('title','Tracking Order')
@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4 m-0 text-left">Track Order</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="javascript:void(0);">"Track Order"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="container text-left">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-8 mx-auto">
                <form id="to_form">
                    <div class="bg-white rounded shadow-sm">
                        <div class="fs-15 fw-600 p-3 border-bottom text-center">
                            Check Your Order Status
                        </div>
                        <div class="form-box-content p-3">
                            <div class="form-group">
                                <input type="hidden" name="user_id" id="user_id" @auth value="{{auth::user()->id}}" @endauth>
                                <input type="number" class="form-control mb-3" placeholder="Order Code" name="order_id" id="order_id" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Track Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $("#to_form").submit(function(e) {
            e.preventDefault();
            let order_id = $('#order_id').val();
            let user_id = $('#user_id').val();
            if(user_id && order_id){
                $.ajax({
                    url: "{{ route('order.check') }}",
                    type: "get",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        user_id: user_id,
                        order_id: order_id,
                    },
                    success: function(response) {
                        if(response == 'success'){
                            window.location.href = "{{ url('orderdetail')}}/" + order_id;
                        }else if(response == 'failed'){
                            toastr["warning"]("Order Not Found!");
                        }else if(response == 'guest'){
                            toastr["warning"]("Login to continue!");
                        }else{
                            toastr["error"]("Failed!");
                        }
                    }
                });
            }else{
                toastr["error"]("Login to continue!");
            }
        });
    });
</script>
@endsection