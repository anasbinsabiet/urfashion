@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')
<style>
    nav.navigation.post-navigation li {
        margin: 10px 0px;
    }

    nav.navigation.post-navigation li a {
        display: grid;
    }
    .container h1 {
    text-align: left;
    margin-top: 0px;
}
</style>
<div id="indexc">
    <div class="container">
        <!-- <ul class="breadcrumb">
            <li><a href="{{url('/')}}" lang="en">Home</a></li>
            <li><a href="javascript:void(0);" lang="en">Notice</a></li>
        </ul> -->
        <div class="aboutprotext mt-5">
            <main id="main" class="site-main" role="main">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 ">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                                <article id="post-3414" class="post-3414 post type-post status-publish format-standard has-post-thumbnail hentry category-branding-2 category-business-marketing category-promotional-products-2 tag-advertising-calendar tag-business-card-magnet-calendars tag-personalized-calanders tag-personalized-calendars-custom-desk-calendars tag-personalized-monthly-planner tag-promotional-calendars">
                                    <header class="single-entry-header">
                                        <h1 class="single-entry-title entry-title">{{$sblog->title_en}}</h1>
                                    </header><!-- .entry-header -->
                                    @isset($sblog->image)
                                    <div class="article-featured-image">
                                        <img width="744" height="425" @if($sblog->image) src="{{url($sblog->image)}}" @else src="{{url('defaults/noimage/no_img.jpg')}}" @endif class="attachment-featured-slider size-featured-slider wp-post-image" alt="" loading="lazy" sizes="(max-width: 744px) 100vw, 744px">
                                    </div>
                                    @endisset
                                    <br />
                                    <div class="entry-content">
                                        {!! $sblog->description_en !!}
                                    </div><!-- .entry-content -->
                                </article><!-- #post-## -->
                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div><!-- .bootstrap cols -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <div id="secondary" class="main-widget-area" role="complementary">
                            <aside id="text-12" class="widget widget_text">
                                <div class="textwidget">
                                    <h2>Recent Notice</h2>
                                    <nav class="navigation post-navigation" role="navigation">
                                        <div class="nav-links">
                                            <ul style="list-style: auto;">
                                                @foreach($blogs as $row)
                                                <li>
                                                    <a href="{{url('notice',$row->slug_en)}}">
                                                        @isset($row->image)
                                                        <img width="auto" height="100" @if($row->image) src="{{url($row->image)}}" @else src="{{url('defaults/noimage/no_img.jpg')}}" @endif class="attachment-featured-slider size-featured-slider wp-post-image" alt="{{$row->title_en}}" loading="lazy">
                                                        @endisset
                                                        {{$row->title_en}}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div><!-- .nav-links -->
                                    </nav><!-- .navigation -->
                                </div>
                            </aside>
                        </div><!-- #secondary -->
                    </div><!-- .bootstrap cols -->
                </div>
            </main>
        </div>
    </div>
</div>
@endsection