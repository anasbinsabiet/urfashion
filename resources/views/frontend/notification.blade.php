@extends('frontend.layouts.master')
@section('title','Notification')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.sidenav')
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <b class="h4">Notification</b>
                        </div>
                    </div>
                </div>
                @auth
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}" />
                <div class="shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom">
                        <h6 class="m-0">Recent (new)</h6>
                    </div>
                    <div class="box-body p-0">
                        @php
                        $nt = App\Models\Notification::where('user_id', auth::user()->id)->where('status', 0)->get();
                        @endphp
                        @foreach($nt as $row)
                        <div id="{{$row->id}}"  class="nc1 py-3 d-flex align-items-center bg-light border-bottom osahan-post-header" style="cursor:pointer;">
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">{{$row->title}}</div>
                                <input type="hidden" class="order_id_input" value="{{$row->reference}}" />
                                <!-- <div class="small">Income tax sops on the cards, The bias in VC funding, and other top news for you</div> -->
                            </div> 
                            <span class="ml-auto mb-auto">
                                <div class="btn-group"> <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i> </button>
                                    <div class="dropdown-menu dropdown-menu-right"> <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button> <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button></div>
                                </div> <br>
                                <div class="text-right text-muted pt-1">{{\Carbon\Carbon::parse($row->created_at)->format('H:i A - d M Y')}}</div>
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom py-3">
                        <h6 class="m-0">Earlier (read)</h6>
                    </div>
                    <div class="box-body p-0">
                        @php
                        $nt = App\Models\Notification::where('user_id', auth::user()->id)->where('status', 1)->get();
                        @endphp
                        @foreach($nt as $row)
                        <div id="{{$row->id}}"  class="nc1 py-3 d-flex align-items-center bg-light border-bottom osahan-post-header" style="cursor:pointer;">
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">{{$row->title}}</div>
                                <input type="hidden" class="order_id_input" value="{{$row->reference}}" />
                                <!-- <div class="small">Income tax sops on the cards, The bias in VC funding, and other top news for you</div> -->
                            </div> 
                            <span class="ml-auto mb-auto">
                                <div class="btn-group"> <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i> </button>
                                    <div class="dropdown-menu dropdown-menu-right"> <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button> <button class="dropdown-item" type="button"><i class="mdi mdi-close"></i> Turn Off</button></div>
                                </div> <br>
                                <div class="text-right text-muted pt-1">{{\Carbon\Carbon::parse($row->created_at)->format('H:i A - d M Y')}}</div>
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="row gutters-5 cart-empty">
                    <div class="col">
                        <div class="text-center bg-white p-4 rounded shadow">
                            <img class="mw-100 h-200px" src="https://circle.com.bd/public/assets/img/nothing.svg" alt="Image">
                            <h5 class="mb-0 h5 mt-3">Login to continue!</h5>
                        </div>
                    </div>
                </div>
                @endauth
                <div class="aiz-pagination">

                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $(".nc1").click(function(e) {
            var nt_id = this.id;
            var order_id = $(e.currentTarget).closest('.nc1').find('.order_id_input').val();
            $.ajax({
                url: "{{ route('ntstatus.change') }}",
                type: "GET",
                data: {
                    nt_id: nt_id,
                },
                success: function(response) {
                    if (response == 'success') {
                        if(order_id){
                            window.location = '{{ url('orderdetail') }}/' + order_id;
                        }
                    }
                },
            });
        });
    });
</script>
@endsection