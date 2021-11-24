@extends('frontend.layouts.master')
@section('title','Notice Board')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.sidenav')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <b class="h4">Notice Board</b>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm rounded bg-white mb-3">
                    <!-- <div class="box-title border-bottom">
                        <h6 class="m-0">Recent (new)</h6>
                    </div> -->
                    <div class="box-body p-0">
                        @php
                        $blog = App\Models\Blog::where('category_id', 3)->get();
                        @endphp
                        @foreach($blog as $row)
                        <a href="{{url('notice',$row->slug_en)}}" style="color: #63666b;" class="py-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">{{$row->title_en}}</div>
                                <div class="small">{!! \Illuminate\Support\Str::words($row->description_en, 28)  !!}</div>
                            </div>
                        </a>
                        @endforeach
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
<script type="text/javascript">
    $(document).ready(function() {
        $(".delwatchbtn").click(function(e) {
            var product_id = this.id;
            var user_id = $('#user_id').val();
            if (confirm('Are you sure to remove from wishlist?')) {
                $.ajax({
                    url: "{{ route('wishlist.delete') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        user_id: user_id,
                        product_id: product_id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload();
                        }
                    },
                });
            }
        });
    });
</script>
@endsection