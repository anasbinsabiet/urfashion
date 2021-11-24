<div id="sidebar" class="sidebar">

    <div data-scrollbar="true" data-height="100%">

        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="@if(!empty(Auth::user()->image)) {{asset( Auth::user()->image ) }} @else {{asset('defaults/avatar/avatar.png')}} @endif" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>{{Auth::user()->name}}
                        <small>Admin</small>
                    </div>
                </a>
            </li>

            <li>
                <ul class="nav nav-profile">
                    <li><a href="{{route('admin.profile.index')}}"><i class="fa fa-user-circle"></i>Profile</a></li>
                    <li><a href="{{route('admin.profile.ep')}}"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>


        <ul class="nav">
            <li class="nav-header">General</li>
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/setting/edit/4')}}">
                    <i class="fa fa-gear"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/menus')}}">
                    <i class="fa fa-circle"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-tags"></i>
                    <span>Attributes</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('category.index')}}">Category</a></li>
                    <li><a href="{{route('brand.index')}}">Brand</a></li>
                    <li><a href="{{route('color.index')}}">Color</a></li>
                    <li><a href="{{route('size.index')}}">Size</a></li>
                    <!-- <li><a href="{{route('productiontime.index')}}">Production Time</a></li>
                    <li><a href="{{route('imprintmethod.index')}}">Imprint Method</a></li>
                    <li><a href="{{route('fit.index')}}">Fit</a></li>
                    <li><a href="{{route('style.index')}}">Style</a></li>
                    <li><a href="{{route('fabric.index')}}">Fabric</a></li>
                    <li><a href="{{route('sleevelength.index')}}">Sleeve Length</a></li> -->
                    <!-- <li><a href="{{route('packagingoption.index')}}">Packaging Option</a></li> -->
                    <li><a href="{{route('shippingmethod.index')}}">Delivery Charge</a></li>
                    <li><a href="{{route('paymentmethod.index')}}">Payment Method</a></li>
                    <li><a href="{{route('cardtype.index')}}">Card Type</a></li>
                    <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                </ul>
            </li>

            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gear"></i>
                    <span>Generic, Type & Size</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('generic.index')}}">Generic</a></li>
                    <li><a href="{{route('type.index')}}">Type</a></li>
                    
                </ul>
            </li> -->
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-product-hunt"></i>
                    <span>Product</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('product.create')}}"><i class="fa fa-plus-circle"></i> Add Product</a></li>
                    <li><a href="{{route('product.index')}}"><i class="fa fa-list"></i> Product List</a></li>
                    <li><a href="{{route('product.trash.list')}}"><i class="fa fa-trash"></i> Product Trash List</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gear"></i>
                    <span>Coupon</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('coupon.index')}}">Coupon</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle"></i>
                    <span>Frontend Submission</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('livechat')}}"><i class="fa fa-plus-circle"></i> Offline Messages</a></li>
                    <li><a href="{{route('producthelp')}}"><i class="fa fa-plus-circle"></i> Product Help</a></li>
                    <li><a href="{{route('subscribers')}}"><i class="fa fa-plus-circle"></i> Subscribers</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('order.pending')}}">
                    <i class="fa fa-circle"></i>
                    <span>Orders</span>
                </a>
            </li>
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-map-marker"></i>
                    <span>District</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('division.index')}}"><i class="fa fa-plus-list"></i> District List</a></li>
                </ul>
            </li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-map-marker"></i>
                    <span>Area</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('district.index')}}"><i class="fa fa-plus-list"></i> Area List</a></li>
                </ul>
            </li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle"></i>
                    <span>Others</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('newslater.index')}}"><i class="fa fa-plus-circle"></i> Newslater</a></li>
                </ul>
            </li> -->
            <li>
                <a href="{{route('notice.index')}}">
                    <i class="fa fa-bullhorn"></i>
                    <span>Notice Board</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Help Desk</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('help.create')}}"><i class="fa fa-plus-circle"></i> Add Help Desk</a></li>
                    <li><a href="{{route('help.index')}}"><i class="fa fa-list"></i> Help Desk List</a></li>
                    <li><a href="{{route('helpcategory.index')}}"><i class="fa fa-list"></i> Help Desk Category</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-newspaper-o"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('blog.create')}}"><i class="fa fa-plus-circle"></i> Add Blog</a></li>
                    <li><a href="{{route('blog.index')}}"><i class="fa fa-list"></i> Blog List</a></li>
                    <li><a href="{{route('blogcategory.index')}}"><i class="fa fa-list"></i> Blog Category</a></li>
                </ul>
            </li>
            {{-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('report.today.order')}}">Today Order</a></li>
                    <li><a href="{{route('report.today.delivered')}}">Today Delivered</a></li>
                    <li><a href="{{route('report.this.month')}}">This Month</a></li>
                    <li><a href="{{route('report.search')}}">Search Report</a></li>
                </ul>
            </li> --}}
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i>
                    <span>Member List</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('reseller.index')}}">Reseller</a></li>
                    <li><a href="{{route('admin.index')}}">Admin</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

        </ul>

    </div>

</div>
<div class="sidebar-bg"></div>