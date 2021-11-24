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
</style>
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4 m-0 text-left">{{$sblog->title_en}}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{url('help')}}">Tutorial</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="javascript:void(0);">"{{$sblog->title_en}}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div id="indexc">
	<div class="container">
		<div class="aboutprotext">
			<main id="main" class="site-main" role="main">
            <div class="row">
					<div data-v-347aff46="" id="categories-block-container">
						<div data-v-347aff46="" id="categories-block-wrapper" class="grid">
							@php
							$help = App\Models\HelpCategory::all();
							@endphp
							@foreach($help as $row)
							<div data-v-20a3e84e="" data-v-347aff46="" class="category-block grid"><a data-v-20a3e84e="" href="{{url('help-category', $row->slug_en)}}" class="link">
									<div data-v-20a3e84e="" class="category-icon icon-wrapper" style="color: rgb(0, 189, 86);"><svg data-v-20a3e84e="" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
											<circle data-v-20a3e84e="" cx="9" cy="21" r="1"></circle>
											<circle data-v-20a3e84e="" cx="20" cy="21" r="1"></circle>
											<path data-v-20a3e84e="" d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
										</svg></div>
									<div data-v-20a3e84e="" class="category-details">
										<div data-v-20a3e84e="" class="title" style="color: rgb(55, 55, 55);">
											{{$row->category_name_en}}
										</div>
										<div data-v-20a3e84e="" class="description ts" style="display: none;">
											all the issues related to how to order on CIRCLE
										</div>
										<div data-v-20a3e84e="" class="written-details">
											<div data-v-20a3e84e="" class="authors-avatar" style="display: none;">
												<div data-v-20a3e84e="" class="author-avatar"><img data-v-20a3e84e="" src="https://tawk.link/avatar/female-48.svg"></div>
											</div>
											<!-- <div data-v-20a3e84e="" class=""><span data-v-20a3e84e="" class="total" style="color: rgb(0, 189, 86);">2 articles
												</span> <span data-v-20a3e84e="" class="time" style="display: none;">
													Maushumi Sharmin
												</span></div> -->
										</div>

									</div>
								</a>
							</div>
							@endforeach
						</div>
						<div data-v-644ea9c9="" data-v-347aff46="" class="infinite-loading-container">
							<div data-v-644ea9c9="" class="infinite-status-prompt" style="color: rgb(102, 102, 102); font-size: 14px; padding: 10px 0px; display: none;"><i data-v-46b20d22="" data-v-644ea9c9="" class="loading-default"></i></div>
							<div data-v-644ea9c9="" class="infinite-status-prompt" style=""><span data-v-347aff46="" data-v-644ea9c9=""></span></div>
							<div data-v-644ea9c9="" class="infinite-status-prompt" style="display: none;"><span data-v-347aff46="" data-v-644ea9c9=""></span></div>
							<div data-v-644ea9c9="" class="infinite-status-prompt" style="color: rgb(102, 102, 102); font-size: 14px; padding: 10px 0px; display: none;">
								<div data-v-347aff46="" data-v-644ea9c9="">
									<p data-v-347aff46="" data-v-644ea9c9="">Unable to load categories.</p> <button data-v-347aff46="" data-v-644ea9c9="" id="retry-categories" onclick="return false;" class="btn" style="color: rgb(55, 55, 55); background-color: rgb(255, 255, 255);">
										Retry
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 ">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">
								<article id="post-3414" class="post-3414 post type-post status-publish format-standard has-post-thumbnail hentry category-branding-2 category-business-marketing category-promotional-products-2 tag-advertising-calendar tag-business-card-magnet-calendars tag-personalized-calanders tag-personalized-calendars-custom-desk-calendars tag-personalized-monthly-planner tag-promotional-calendars">
									<header class="single-entry-header">
										<h1 class="single-entry-title entry-title m-0 text-left">{{$sblog->title_en}}</h1>
									</header><!-- .entry-header -->
									<div class="article-featured-image pt-2">
                                    <!--  -->
                                    <iframe width="100%" height="360" src="{!!$sblog->title_bn!!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img width="744" height="425" @if($sblog->image) src="{{url($sblog->image)}}" @else src="{{url('defaults/noimage/no_img.jpg')}}" @endif class="attachment-featured-slider size-featured-slider wp-post-image" alt="" loading="lazy" sizes="(max-width: 744px) 100vw, 744px"> -->
									</div>
									<br/>
									<div class="entry-content">
										{!! $sblog->description_en !!}
									</div><!-- .entry-content -->
									<div class="entry-content">
										@php
										$himage = App\HelpImage::where('help_id', $sblog->id)->get();
										@endphp
										@foreach($himage as $row)
										<img src="{{asset($row->help_image)}}" width="100%" />
										@endforeach
									</div><!-- .entry-content -->
								</article><!-- #post-## -->
							</main><!-- #main -->
						</div><!-- #primary -->
					</div><!-- .bootstrap cols -->
					<div class="col-xs-12 col-sm-6 col-md-4">

						<div id="secondary" class="main-widget-area" role="complementary">
							<aside id="text-12" class="widget widget_text">
								<div class="textwidget">
									<h2>Recent Post</h2>
									<nav class="navigation post-navigation" role="navigation">
										<div class="nav-links">
											<ul>
										@foreach($blogs as $row)
											<li><a href="{{url(route('help'))}}/{{$row->slug_en}}">{{$row->title_en}}</a></li>
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
<style>
	@media only screen and (min-width: 800px) {
		.category-block.grid[data-v-20a3e84e] {
			width: 10% !important;
		}

		.category-block.grid .title[data-v-20a3e84e] {
			text-transform: capitalize !important;
			font-size: 15px !important;
		}
	}
</style>
<style data-vue-ssr-id="2998b330:0 3191d5ad:0 20f4381e:0 72ef622c:0 63472785:0 241820a6:0 c8a58028:0">
	html {
		word-spacing: 1px;
		-ms-text-size-adjust: 100%;
		-webkit-text-size-adjust: 100%;
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		box-sizing: border-box
	}

	body {
		overflow: hidden;
		overflow-y: auto
	}

	*,
	:after,
	:before {
		box-sizing: border-box;
		margin: 0;
		line-height: 1.5em;
		font-size: 15px
	}

	a {
		text-decoration: none;
		color: inherit
	}

	.pagination-wrapper .vue-ads-flex {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.page-enter-active,
	.page-leave-active {
		transition: opacity .2s ease
	}

	.page-enter,
	.page-leave-to {
		opacity: 0
	}

	.modal-backdrop {
		position: fixed;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: rgba(55, 55, 55, .35);
		display: flex;
		justify-content: center;
		align-items: center;
		z-index: 2000000000
	}

	.message-us:hover {
		text-decoration: underline
	}

	.btn {
		border: 0;
		padding: 8px;
		border-radius: 2px;
		box-shadow: none
	}

	.btn,
	.btn:focus {
		outline: 0
	}

	@media only screen and (max-width:767px) {

		#rc-imageselect,
		.g-recaptcha {
			transform: scale(.77);
			-webkit-transform: scale(.77)
		}

		.rtl #rc-imageselect,
		.rtl .g-recaptcha {
			transform-origin: right;
			-webkit-transform-origin: right
		}
	}

	.nuxt-progress {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		height: 2px;
		width: 0;
		opacity: 1;
		transition: width .1s, opacity .4s;
		background-color: #fff;
		z-index: 999999
	}

	.nuxt-progress.nuxt-progress-notransition {
		transition: none
	}

	.nuxt-progress-failed {
		background-color: red
	}

	.dropdown .dropdown-toggle {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.rtl .caret {
		margin-right: 10px
	}

	.ltr .caret {
		margin-left: 10px
	}

	.input-text {
		font-family: inherit;
		border-radius: 4px;
		outline: 0;
		background: #fff;
		border: 1px solid #eee;
		padding: 13px 20px;
		color: #373737;
		font-size: 16px;
		height: 45px;
		width: 100%
	}

	.input-text::-webkit-input-placeholder {
		color: #d3d3d3
	}

	.input-text:-moz-placeholder,
	.input-text::-moz-placeholder {
		color: #d3d3d3
	}

	.input-text:-ms-input-placeholder {
		color: #d3d3d3
	}

	#pagination-container {
		width: 100%;
		background: #fff;
		border: 1px solid #eee;
		padding: 21px 33px;
		text-align: center;
		margin-bottom: 26px;
		border-radius: 5px
	}

	#pagination-container .page-button {
		font-size: 16px;
		width: 40px;
		height: 40px;
		padding: 0;
		margin: 0;
		color: #9c9aa6
	}

	#pagination-container .page-button.active {
		color: #373737;
		font-weight: 700
	}

	#pagination-container .page-button:hover {
		color: var(--text-color);
		background: var(--primary-color);
		border-radius: 50%
	}

	#pagination-container .page-button.disabled {
		cursor: default
	}

	#pagination-container .page-button.disabled:hover {
		color: #9c9aa6;
		background: inherit;
		border-radius: 0
	}

	#pagination-container .page-button[title=next],
	#pagination-container .page-button[title=previous] {
		color: #9c9aa6 svg;
		color-margin-top: 8px
	}

	#pagination-container .page-button[title=next]:hover,
	#pagination-container .page-button[title=previous]:hover {
		color: var(--text-color)
	}

	#pagination-container .page-button[title=next].disabled,
	#pagination-container .page-button[title=previous].disabled {
		color: #eee
	}

	#pagination-container .page-button[title=next].disabled:hover,
	#pagination-container .page-button[title=previous].disabled:hover {
		color: #eee;
		background: inherit
	}

	#pagination-container .vue-ads-ml-1 {
		background: none;
		border: none;
		box-shadow: none;
		outline: none;
		cursor: pointer
	}

	@media (max-width:480px) {
		#pagination-container {
			padding: 20px
		}
	}

	.title {
		font-weight: 700;
		font-size: 23px
	}

	.sub-title,
	.title {
		text-align: center;
		color: #373737
	}

	.sub-title {
		font-weight: 400;
		font-size: 15px
	}

	.icon-wrapper {
		display: inline-flex;
		-moz-justify-content: center;
		justify-content: center
	}

	.border-color {
		border-color: #eee
	}

	.p-20 {
		padding: 20px
	}

	.authors-avatar {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.author-avatar {
		width: 32px;
		height: 32px;
		border: 1px solid #fff;
		position: relative;
		z-index: 3;
		background: #fff;
		border-radius: 3px
	}

	.author-avatar img {
		width: 100%;
		height: 100%;
		border-radius: 3px
	}

	.author-avatar:nth-child(2) {
		z-index: 2
	}

	.author-avatar:nth-child(3) {
		z-index: 1
	}

	.grey-2 {
		color: #9c9aa6
	}

	.ltr .ms-5 {
		margin-left: 5px
	}

	.ltr .ms-10 {
		margin-left: 10px
	}

	.ltr .authors-avatar,
	.ltr .me-10 {
		margin-right: 10px
	}

	.ltr .ms-20 {
		margin-left: 20px
	}

	.ltr .me-20 {
		margin-right: 20px !important
	}

	.ltr .ts {
		text-align: left
	}

	.ltr .te {
		text-align: right
	}

	.ltr .author-avatar:nth-child(2),
	.ltr .author-avatar:nth-child(3),
	.ltr .ms-10-ve {
		margin-left: -10px
	}

	.ltr .dropdown-menu,
	.ltr .pos-end {
		right: 0
	}

	.ltr .ms-auto {
		margin-left: auto
	}

	.ltr .me-auto {
		margin-right: auto
	}

	.ltr .font-13 {
		font-size: 13px
	}

	.ltr .time {
		color: #9c9aa6;
		font-size: 11px
	}

	.rtl .icon-wrapper {
		transform: scaleX(-1)
	}

	.rtl .me-5,
	.rtl .ms-5 {
		margin-right: 5px
	}

	.rtl .ms-10 {
		margin-right: 10px
	}

	.rtl .authors-avatar,
	.rtl .me-10 {
		margin-left: 10px
	}

	.rtl .ms-20 {
		margin-right: 20px
	}

	.rtl .me-20 {
		margin-left: 20px !important
	}

	.rtl .ts {
		text-align: right
	}

	.rtl .te {
		text-align: left
	}

	.rtl .author-avatar:nth-child(2),
	.rtl .author-avatar:nth-child(3),
	.rtl .ms-10-ve {
		margin-right: -10px
	}

	.rtl .dropdown-menu,
	.rtl .pos-end {
		left: 0
	}

	.rtl .ms-auto {
		margin-right: auto
	}

	.rtl .me-auto {
		margin-left: auto
	}

	.rtl .font-13 {
		font-size: 15px
	}

	.rtl .time {
		color: #9c9aa6;
		font-size: 13px
	}

	#body-container {
		min-height: 100vh;
		flex-direction: column
	}

	#body-container,
	#content {
		background: #fafafa;
		display: -moz-flex;
		display: flex;
		-moz-flex-direction: column
	}

	#content {
		flex-direction: column;
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	header {
		transition: all .5s
	}

	#kb-header {
		width: 80%;
		margin: 0 10%;
		transition: all .5s ease-in-out
	}

	#kb-header #header-top {
		padding: 20px 0 0
	}

	#kb-header #header-top,
	#kb-header .logo {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#kb-header .logo img {
		max-width: 300px;
		max-height: 80px
	}

	#kb-header #kb-title {
		font-size: 20px;
		margin: 0 20px
	}

	#kb-header .hompage-link {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#kb-header #header-logo {
		height: 80px
	}

	#kb-header #side-navigation-header .logo img {
		max-width: 150px;
		max-height: 80px
	}

	#banner-panel {
		transition: height 1s ease;
		height: auto;
		padding: 20px 0
	}

	#banner-panel.home #search-container {
		margin: 40px 0 170px
	}

	#banner-panel.home #banner-content {
		max-width: 800px
	}

	#banner-panel #banner-content {
		width: 100%;
		margin: 0 auto;
		transition: all 1s ease-in-out
	}

	#banner-panel #search-input-container {
		max-width: 100% !important
	}

	#banner-panel #banner-title {
		font-size: 34px;
		padding-bottom: 15px;
		font-weight: 700;
		text-align: center
	}

	#banner-panel #banner-subtitle {
		font-size: 20px;
		text-align: center
	}

	#banner-panel .input-text {
		height: 60px
	}

	#kb-footer {
		background: #fff;
		padding: 10px 10%;
		min-height: 70px
	}

	#kb-footer,
	#kb-footer #footer-content {
		width: 100%;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#kb-footer #footer-content {
		position: relative;
		height: 100%
	}

	#kb-footer .logo {
		width: 30px;
		height: 30px;
		-moz-flex: none;
		flex: none
	}

	#kb-footer .logo img {
		width: 100%;
		height: 100%
	}

	#kb-footer #branding {
		font-size: 15px;
		color: #9c9aa6;
		text-align: center;
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	#kb-footer #branding #branding-text {
		display: inline-block;
		padding: 8px 15px
	}

	#kb-footer #branding #branding-text:hover {
		background: #fafafa;
		border-radius: 3px
	}

	#kb-footer #branding img {
		margin-left: -5px;
		margin-right: -5px;
		height: 3ex;
		width: auto;
		min-height: 20px;
		min-width: 20px;
		display: inline-block;
		vertical-align: middle
	}

	#kb-footer #branding #tawkto-link {
		direction: ltr;
		color: #9c9aa6;
		-moz-justify-content: center;
		justify-content: center
	}

	#kb-footer #branding #tawkto-link,
	#kb-footer #social-links {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#kb-footer #social-links {
		position: absolute;
		-moz-flex: none;
		flex: none
	}

	#kb-footer #social-links.left {
		left: 0
	}

	#kb-footer #social-links.right {
		right: 0
	}

	#kb-footer #social-links .social-icon {
		width: 40px;
		height: 40px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center;
		-moz-justify-content: center;
		justify-content: center
	}

	#kb-footer #social-links .social-icon:hover {
		background: #fafafa;
		border-radius: 3px
	}

	.dropdown-menu {
		position: absolute;
		min-width: 160px;
		top: 100%;
		height: 0;
		overflow: hidden;
		transition: all .3s ease-out;
		z-index: 101;
		box-shadow: 2px 2px 7px rgba(0, 0, 0, .15);
		border-radius: 5px
	}

	.dropdown-menu>ul {
		list-style: none;
		background: #fff;
		color: #373737;
		border-radius: 5px;
		margin: 10px 0 0;
		padding: 0
	}

	.dropdown-menu>ul:after,
	.dropdown-menu>ul:before {
		display: block;
		width: 100%;
		height: 5px;
		content: ""
	}

	.dropdown-menu>ul li {
		padding: 10px 15px;
		cursor: pointer;
		transition: background-color .3s ease
	}

	.dropdown-menu>ul li:hover {
		background: #eee
	}

	#language-selection {
		position: relative
	}

	#language-selection:hover .dropdown-menu {
		height: auto
	}

	#page-container {
		height: 100%;
		width: 100%;
		padding: 20px 0 0;
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	#page {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	#page-sidebar {
		width: 280px;
		border: 1px solid #eee;
		text-align: center;
		margin-bottom: 30px;
		background: #fff;
		position: -webkit-sticky;
		position: sticky;
		top: 0;
		flex: none;
		border-radius: 5px
	}

	#page-sidebar #page-sidebar-header {
		position: relative;
		padding: 10px 20px 20px
	}

	.ltr #page-sidebar {
		margin-right: 60px
	}

	.rtl #page-sidebar {
		margin-left: 60px !important
	}

	#page-content {
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	#page-wrapper {
		margin: 0 auto;
		width: 80%
	}

	#page-footer {
		height: 300px;
		width: 100%
	}

	#page-footer .title {
		color: #9c9aa6;
		padding: 30px
	}

	.vueperslides .vueperslides__arrow {
		background: #fff !important;
		border-radius: 50%;
		width: 60px;
		height: 60px;
		color: #9c9aa6;
		transform: translateY(-50%) translateZ(0)
	}

	.vueperslides .vueperslides__parallax-wrapper {
		margin: 0 20px !important
	}

	.vueperslides .vueperslides__arrow svg {
		padding: 0;
		width: auto;
		stroke-width: 2px
	}

	.vueperslides .vueperslides__bullet .default {
		background-color: #d3d3d3;
		border: none;
		box-shadow: none;
		transition: .3s;
		width: 6px;
		height: 6px
	}

	.vueperslides .vueperslides__bullet--active .default {
		background-color: #9c9aa6
	}

	.vueperslides .vueperslides__arrow--next {
		right: -3.5em
	}

	.vueperslides .vueperslides__arrow--prev {
		left: -3.5em
	}

	.vueperslides.vueperslides--fixed-height {
		min-height: 150px;
		height: 100%;
		padding-bottom: 4em;
		margin: 0 !important
	}

	@media (min-width:800px) {
		.space-out .vueperslide {
			margin: 0 auto !important
		}
	}

	@media (max-width:979px) {
		#kb-header {
			margin: 0
		}

		#kb-header,
		#page-wrapper {
			width: 100%;
			padding: 0 20px
		}
	}

	@media (max-width:480px) {
		#page {
			flex-direction: column;
			align-items: center;
			margin: 0 20px
		}

		.ltr #page-sidebar,
		.rtl #page-sidebar {
			max-width: 100%;
			position: static;
			width: 100%;
			margin: 0 0 20px !important
		}

		#page-content {
			width: 100%
		}

		#page-container {
			padding: 20px 0 0
		}

		#kb-footer {
			height: 100%
		}

		#kb-footer #footer-content {
			height: 100%;
			flex-direction: column
		}

		#kb-footer #footer-content .logo {
			order: 0;
			margin: 20px 0
		}

		#kb-footer #footer-content #social-links {
			order: 1;
			margin: 20px 0;
			position: static
		}

		#kb-footer #footer-content #branding {
			order: 2;
			margin: 20px 0
		}

		.vueperslides__arrow--next {
			right: 0 !important
		}

		.vueperslides__arrow--prev {
			left: 0 !important
		}

		#banner-panel.home #search-container {
			margin: 40px 0
		}
	}

	.dropdown .dropdown-toggle[data-v-6ffd45e8] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.rtl .caret[data-v-6ffd45e8] {
		margin-right: 10px
	}

	.ltr .caret[data-v-6ffd45e8] {
		margin-left: 10px
	}

	.input-text[data-v-6ffd45e8] {
		font-family: inherit;
		border-radius: 4px;
		outline: 0;
		background: #fff;
		border: 1px solid #eee;
		padding: 13px 20px;
		color: #373737;
		font-size: 16px;
		height: 45px;
		width: 100%
	}

	.input-text[data-v-6ffd45e8]::-webkit-input-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-6ffd45e8]:-moz-placeholder,
	.input-text[data-v-6ffd45e8]::-moz-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-6ffd45e8]:-ms-input-placeholder {
		color: #d3d3d3
	}

	#pagination-container[data-v-6ffd45e8] {
		width: 100%;
		background: #fff;
		border: 1px solid #eee;
		padding: 21px 33px;
		text-align: center;
		margin-bottom: 26px;
		border-radius: 5px
	}

	#pagination-container .page-button[data-v-6ffd45e8] {
		font-size: 16px;
		width: 40px;
		height: 40px;
		padding: 0;
		margin: 0;
		color: #9c9aa6
	}

	#pagination-container .page-button.active[data-v-6ffd45e8] {
		color: #373737;
		font-weight: 700
	}

	#pagination-container .page-button[data-v-6ffd45e8]:hover {
		color: var(--text-color);
		background: var(--primary-color);
		border-radius: 50%
	}

	#pagination-container .page-button.disabled[data-v-6ffd45e8] {
		cursor: default
	}

	#pagination-container .page-button.disabled[data-v-6ffd45e8]:hover {
		color: #9c9aa6;
		background: inherit;
		border-radius: 0
	}

	#pagination-container .page-button[title=next][data-v-6ffd45e8],
	#pagination-container .page-button[title=previous][data-v-6ffd45e8] {
		color: #9c9aa6 svg;
		color-margin-top: 8px
	}

	#pagination-container .page-button[title=next][data-v-6ffd45e8]:hover,
	#pagination-container .page-button[title=previous][data-v-6ffd45e8]:hover {
		color: var(--text-color)
	}

	#pagination-container .page-button[title=next].disabled[data-v-6ffd45e8],
	#pagination-container .page-button[title=previous].disabled[data-v-6ffd45e8] {
		color: #eee
	}

	#pagination-container .page-button[title=next].disabled[data-v-6ffd45e8]:hover,
	#pagination-container .page-button[title=previous].disabled[data-v-6ffd45e8]:hover {
		color: #eee;
		background: inherit
	}

	#pagination-container .vue-ads-ml-1[data-v-6ffd45e8] {
		background: none;
		border: none;
		box-shadow: none;
		outline: none;
		cursor: pointer
	}

	@media (max-width:480px) {
		#pagination-container[data-v-6ffd45e8] {
			padding: 20px
		}
	}

	.title[data-v-6ffd45e8] {
		font-weight: 700;
		font-size: 23px
	}

	.sub-title[data-v-6ffd45e8],
	.title[data-v-6ffd45e8] {
		text-align: center;
		color: #373737
	}

	.sub-title[data-v-6ffd45e8] {
		font-weight: 400;
		font-size: 15px
	}

	.icon-wrapper[data-v-6ffd45e8] {
		display: inline-flex;
		-moz-justify-content: center;
		justify-content: center
	}

	.border-color[data-v-6ffd45e8] {
		border-color: #eee
	}

	.p-20[data-v-6ffd45e8] {
		padding: 20px
	}

	.authors-avatar[data-v-6ffd45e8] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.author-avatar[data-v-6ffd45e8] {
		width: 32px;
		height: 32px;
		border: 1px solid #fff;
		position: relative;
		z-index: 3;
		background: #fff;
		border-radius: 3px
	}

	.author-avatar img[data-v-6ffd45e8] {
		width: 100%;
		height: 100%;
		border-radius: 3px
	}

	.author-avatar[data-v-6ffd45e8]:nth-child(2) {
		z-index: 2
	}

	.author-avatar[data-v-6ffd45e8]:nth-child(3) {
		z-index: 1
	}

	.grey-2[data-v-6ffd45e8] {
		color: #9c9aa6
	}

	.ltr .ms-5[data-v-6ffd45e8] {
		margin-left: 5px
	}

	.ltr .ms-10[data-v-6ffd45e8] {
		margin-left: 10px
	}

	.ltr .authors-avatar[data-v-6ffd45e8],
	.ltr .me-10[data-v-6ffd45e8] {
		margin-right: 10px
	}

	.ltr .ms-20[data-v-6ffd45e8] {
		margin-left: 20px
	}

	.ltr .me-20[data-v-6ffd45e8] {
		margin-right: 20px !important
	}

	.ltr .ts[data-v-6ffd45e8] {
		text-align: left
	}

	.ltr .te[data-v-6ffd45e8] {
		text-align: right
	}

	.ltr .author-avatar[data-v-6ffd45e8]:nth-child(2),
	.ltr .author-avatar[data-v-6ffd45e8]:nth-child(3),
	.ltr .ms-10-ve[data-v-6ffd45e8] {
		margin-left: -10px
	}

	.ltr .pos-end[data-v-6ffd45e8] {
		right: 0
	}

	.ltr .ms-auto[data-v-6ffd45e8] {
		margin-left: auto
	}

	.ltr .me-auto[data-v-6ffd45e8] {
		margin-right: auto
	}

	.ltr .font-13[data-v-6ffd45e8] {
		font-size: 13px
	}

	.ltr .time[data-v-6ffd45e8] {
		color: #9c9aa6;
		font-size: 11px
	}

	.rtl .icon-wrapper[data-v-6ffd45e8] {
		transform: scaleX(-1)
	}

	.rtl .me-5[data-v-6ffd45e8],
	.rtl .ms-5[data-v-6ffd45e8] {
		margin-right: 5px
	}

	.rtl .ms-10[data-v-6ffd45e8] {
		margin-right: 10px
	}

	.rtl .authors-avatar[data-v-6ffd45e8],
	.rtl .me-10[data-v-6ffd45e8] {
		margin-left: 10px
	}

	.rtl .ms-20[data-v-6ffd45e8] {
		margin-right: 20px
	}

	.rtl .me-20[data-v-6ffd45e8] {
		margin-left: 20px !important
	}

	.rtl .ts[data-v-6ffd45e8] {
		text-align: right
	}

	.rtl .te[data-v-6ffd45e8] {
		text-align: left
	}

	.rtl .author-avatar[data-v-6ffd45e8]:nth-child(2),
	.rtl .author-avatar[data-v-6ffd45e8]:nth-child(3),
	.rtl .ms-10-ve[data-v-6ffd45e8] {
		margin-right: -10px
	}

	.rtl .pos-end[data-v-6ffd45e8] {
		left: 0
	}

	.rtl .ms-auto[data-v-6ffd45e8] {
		margin-right: auto
	}

	.rtl .me-auto[data-v-6ffd45e8] {
		margin-left: auto
	}

	.rtl .font-13[data-v-6ffd45e8] {
		font-size: 15px
	}

	.rtl .time[data-v-6ffd45e8] {
		color: #9c9aa6;
		font-size: 13px
	}

	#navigation-container[data-v-6ffd45e8] {
		-moz-flex: none;
		flex: none
	}

	#full-navigation[data-v-6ffd45e8],
	#navigation-container[data-v-6ffd45e8] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#full-navigation #ticket-submit-link[data-v-6ffd45e8] {
		-moz-flex: none;
		flex: none
	}

	#full-navigation .nav-item[data-v-6ffd45e8] {
		padding: 8px 15px;
		border-radius: 5px;
		transition: background-color .3s ease
	}

	#full-navigation .nav-item[data-v-6ffd45e8]:hover {
		background: hsla(0, 0%, 100%, .1)
	}

	#full-navigation.hideMenu[data-v-6ffd45e8] {
		position: absolute;
		left: -999999999px
	}

	#min-navigation-container[data-v-6ffd45e8] {
		width: 0;
		transition: all .5s, background-color .1s ease;
		background: transparent;
		opacity: 0;
		-moz-justify-content: flex-start;
		justify-content: flex-start
	}

	#min-navigation-container[data-v-6ffd45e8]:after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: 0 0;
		cursor: pointer;
		transition: background .3s .3s;
		z-index: -1
	}

	#min-navigation-container.show[data-v-6ffd45e8] {
		width: 100%;
		opacity: 1
	}

	#min-navigation-container.show[data-v-6ffd45e8]:after {
		background: rgba(0, 0, 0, .6);
		transition: background .3s 0s
	}

	#min-navigation-container .nav-item[data-v-6ffd45e8] {
		padding: 15px 32px;
		text-decoration: none;
		color: inherit;
		display: block;
		transition: .3s
	}

	#min-navigation-container .nav-item[data-v-6ffd45e8]:hover {
		background: rgba(0, 0, 0, .1)
	}

	#min-navigation-container #language-dropdown[data-v-6ffd45e8] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#side-navigation[data-v-6ffd45e8] {
		display: -moz-flex;
		display: flex;
		-moz-flex-direction: column;
		flex-direction: column
	}

	#side-navigation-links[data-v-6ffd45e8] {
		overflow: auto
	}

	#side-navigation-header[data-v-6ffd45e8] {
		padding: 32px;
		border-bottom: 1px solid #ddd;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#slide-down-language[data-v-6ffd45e8] {
		display: none
	}

	#slide-down-language.open[data-v-6ffd45e8] {
		display: block
	}

	.ltr #min-navigation-container[data-v-6ffd45e8] {
		left: -100%
	}

	.ltr #min-navigation-container.show[data-v-6ffd45e8] {
		left: 0
	}

	.rtl #min-navigation-container[data-v-6ffd45e8] {
		right: -100%
	}

	.rtl #min-navigation-container.show[data-v-6ffd45e8] {
		right: 0
	}

	.dropdown .dropdown-toggle {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.rtl .caret {
		margin-right: 10px
	}

	.ltr .caret {
		margin-left: 10px
	}

	.input-text {
		font-family: inherit;
		border-radius: 4px;
		outline: 0;
		background: #fff;
		border: 1px solid #eee;
		padding: 13px 20px;
		color: #373737;
		font-size: 16px;
		height: 45px;
		width: 100%
	}

	.input-text::-webkit-input-placeholder {
		color: #d3d3d3
	}

	.input-text:-moz-placeholder,
	.input-text::-moz-placeholder {
		color: #d3d3d3
	}

	.input-text:-ms-input-placeholder {
		color: #d3d3d3
	}

	#pagination-container {
		width: 100%;
		background: #fff;
		border: 1px solid #eee;
		padding: 21px 33px;
		text-align: center;
		margin-bottom: 26px;
		border-radius: 5px
	}

	#pagination-container .page-button {
		font-size: 16px;
		width: 40px;
		height: 40px;
		padding: 0;
		margin: 0;
		color: #9c9aa6
	}

	#pagination-container .page-button.active {
		color: #373737;
		font-weight: 700
	}

	#pagination-container .page-button:hover {
		color: var(--text-color);
		background: var(--primary-color);
		border-radius: 50%
	}

	#pagination-container .page-button.disabled {
		cursor: default
	}

	#pagination-container .page-button.disabled:hover {
		color: #9c9aa6;
		background: inherit;
		border-radius: 0
	}

	#pagination-container .page-button[title=next],
	#pagination-container .page-button[title=previous] {
		color: #9c9aa6 svg;
		color-margin-top: 8px
	}

	#pagination-container .page-button[title=next]:hover,
	#pagination-container .page-button[title=previous]:hover {
		color: var(--text-color)
	}

	#pagination-container .page-button[title=next].disabled,
	#pagination-container .page-button[title=previous].disabled {
		color: #eee
	}

	#pagination-container .page-button[title=next].disabled:hover,
	#pagination-container .page-button[title=previous].disabled:hover {
		color: #eee;
		background: inherit
	}

	#pagination-container .vue-ads-ml-1 {
		background: none;
		border: none;
		box-shadow: none;
		outline: none;
		cursor: pointer
	}

	@media (max-width:480px) {
		#pagination-container {
			padding: 20px
		}
	}

	.title {
		font-weight: 700;
		font-size: 23px
	}

	.sub-title,
	.title {
		text-align: center;
		color: #373737
	}

	.sub-title {
		font-weight: 400;
		font-size: 15px
	}

	.icon-wrapper {
		display: inline-flex;
		-moz-justify-content: center;
		justify-content: center
	}

	.border-color {
		border-color: #eee
	}

	.p-20 {
		padding: 20px
	}

	.authors-avatar {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.author-avatar {
		width: 32px;
		height: 32px;
		border: 1px solid #fff;
		position: relative;
		z-index: 3;
		background: #fff;
		border-radius: 3px
	}

	.author-avatar img {
		width: 100%;
		height: 100%;
		border-radius: 3px
	}

	.author-avatar:nth-child(2) {
		z-index: 2
	}

	.author-avatar:nth-child(3) {
		z-index: 1
	}

	.grey-2 {
		color: #9c9aa6
	}

	.ltr .ms-5 {
		margin-left: 5px
	}

	.ltr .ms-10 {
		margin-left: 10px
	}

	#search-container #recent-list .result-item .ltr .icon,
	#search-container #results-list .result-item .ltr .icon,
	.ltr #search-container #recent-list .result-item .icon,
	.ltr #search-container #results-list .result-item .icon,
	.ltr .authors-avatar,
	.ltr .me-10 {
		margin-right: 10px
	}

	.ltr .ms-20 {
		margin-left: 20px
	}

	.ltr .me-20 {
		margin-right: 20px !important
	}

	.ltr .ts {
		text-align: left
	}

	.ltr .te {
		text-align: right
	}

	.ltr .author-avatar:nth-child(2),
	.ltr .author-avatar:nth-child(3),
	.ltr .ms-10-ve {
		margin-left: -10px
	}

	.ltr .pos-end {
		right: 0
	}

	.ltr .ms-auto {
		margin-left: auto
	}

	.ltr .me-auto {
		margin-right: auto
	}

	#search-container #results-list .result-item .ltr .snippet,
	#search-container .ltr #search-results,
	.ltr #search-container #results-list .result-item .snippet,
	.ltr #search-container #search-results,
	.ltr .font-13 {
		font-size: 13px
	}

	.ltr .time {
		color: #9c9aa6;
		font-size: 11px
	}

	.rtl .icon-wrapper {
		transform: scaleX(-1)
	}

	.rtl .me-5,
	.rtl .ms-5 {
		margin-right: 5px
	}

	.rtl .ms-10 {
		margin-right: 10px
	}

	#search-container #recent-list .result-item .rtl .icon,
	#search-container #results-list .result-item .rtl .icon,
	.rtl #search-container #recent-list .result-item .icon,
	.rtl #search-container #results-list .result-item .icon,
	.rtl .authors-avatar,
	.rtl .me-10 {
		margin-left: 10px
	}

	.rtl .ms-20 {
		margin-right: 20px
	}

	.rtl .me-20 {
		margin-left: 20px !important
	}

	.rtl .ts {
		text-align: right
	}

	.rtl .te {
		text-align: left
	}

	.rtl .author-avatar:nth-child(2),
	.rtl .author-avatar:nth-child(3),
	.rtl .ms-10-ve {
		margin-right: -10px
	}

	.rtl .pos-end {
		left: 0
	}

	.rtl .ms-auto {
		margin-right: auto
	}

	.rtl .me-auto {
		margin-left: auto
	}

	#search-container #results-list .result-item .rtl .snippet,
	#search-container .rtl #search-results,
	.rtl #search-container #results-list .result-item .snippet,
	.rtl #search-container #search-results,
	.rtl .font-13 {
		font-size: 15px
	}

	.rtl .time {
		color: #9c9aa6;
		font-size: 13px
	}

	#search-container {
		position: relative
	}

	#search-container #search-input-container {
		background: #fff;
		border: 1px solid #eee;
		padding: 0 20px;
		border-radius: 4px;
		height: 60px;
		min-width: 200px;
		max-width: 600px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#search-container #search-input-container .input-text {
		font-family: inherit;
		outline: 0;
		padding: 0;
		color: #373737;
		font-size: 16px;
		height: 58px;
		width: 100%;
		border: none;
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	#search-container #search-icon {
		color: #9c9aa6;
		-moz-flex: none;
		flex: none
	}

	#search-container #search-results {
		background: #fff;
		box-shadow: 0 0 40px rgba(156, 154, 166, .15), 0 1px 2px rgba(0, 0, 0, .15);
		border-radius: 5px;
		width: 100%;
		position: absolute;
		top: 65px;
		z-index: 100;
		color: #9c9aa6;
		transition: all .5s ease-in-out;
		max-height: 100vh;
		overflow: auto
	}

	#search-container #results-list {
		list-style: none;
		padding: 0;
		margin: 0
	}

	#search-container #results-list .result-item {
		font-size: 16px;
		color: #373737
	}

	#search-container #results-list .result-item.active-item,
	#search-container #results-list .result-item:hover {
		background: #eee
	}

	#search-container #results-list .result-item .link {
		padding: 18px 20px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#search-container #results-list .result-item .highlight {
		font-weight: 700
	}

	#search-container #results-list .result-item .snippet {
		margin-top: 5px
	}

	#search-container #results-list .result-item .icon {
		color: #9c9aa6;
		width: 24px;
		-moz-flex: none;
		flex: none;
		display: -moz-flex;
		display: flex
	}

	#search-container #results-list .result-item .icon svg {
		margin: 0 auto
	}

	#search-container #more-results {
		background: #fafafa;
		font-size: 16px;
		border-radius: 5px 5px 0 0
	}

	#search-container #more-results .link,
	#search-container #more-results .more-icon {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#search-container #more-results .more-icon {
		-moz-flex: none;
		flex: none
	}

	#search-container #more-results #enter-icon {
		visibility: hidden
	}

	#search-container #more-results.active-item #enter-icon,
	#search-container #more-results:hover #enter-icon {
		visibility: visible
	}

	#search-container #more-results #more-text {
		margin: 0 10px;
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	#search-container #search-loader {
		padding: 18px 20px;
		text-align: center
	}

	#search-container #recent-list {
		list-style: none;
		padding: 0;
		margin: 0
	}

	#search-container #recent-list .result-item {
		font-size: 16px;
		color: #373737
	}

	#search-container #recent-list .result-item.active-item {
		background: #eee
	}

	#search-container #recent-list .result-item .link {
		padding: 18px 20px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	#search-container #recent-list .result-item .icon {
		color: #9c9aa6;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center;
		-moz-flex: none;
		flex: none
	}

	#search-container #recent-list .result-item:hover {
		background: #eee
	}

	#search-container #recent-list #recent-header {
		padding: 18px 20px;
		border-radius: 5px 5px 0 0;
		background: #fafafa;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.dropdown .dropdown-toggle[data-v-347aff46] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.rtl .caret[data-v-347aff46] {
		margin-right: 10px
	}

	.ltr .caret[data-v-347aff46] {
		margin-left: 10px
	}

	.input-text[data-v-347aff46] {
		font-family: inherit;
		border-radius: 4px;
		outline: 0;
		background: #fff;
		border: 1px solid #eee;
		padding: 13px 20px;
		color: #373737;
		font-size: 16px;
		height: 45px;
		width: 100%
	}

	.input-text[data-v-347aff46]::-webkit-input-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-347aff46]:-moz-placeholder,
	.input-text[data-v-347aff46]::-moz-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-347aff46]:-ms-input-placeholder {
		color: #d3d3d3
	}

	#pagination-container[data-v-347aff46] {
		width: 100%;
		background: #fff;
		border: 1px solid #eee;
		padding: 21px 33px;
		text-align: center;
		margin-bottom: 26px;
		border-radius: 5px
	}

	#pagination-container .page-button[data-v-347aff46] {
		font-size: 16px;
		width: 40px;
		height: 40px;
		padding: 0;
		margin: 0;
		color: #9c9aa6
	}

	#pagination-container .page-button.active[data-v-347aff46] {
		color: #373737;
		font-weight: 700
	}

	#pagination-container .page-button[data-v-347aff46]:hover {
		color: var(--text-color);
		background: var(--primary-color);
		border-radius: 50%
	}

	#pagination-container .page-button.disabled[data-v-347aff46] {
		cursor: default
	}

	#pagination-container .page-button.disabled[data-v-347aff46]:hover {
		color: #9c9aa6;
		background: inherit;
		border-radius: 0
	}

	#pagination-container .page-button[title=next][data-v-347aff46],
	#pagination-container .page-button[title=previous][data-v-347aff46] {
		color: #9c9aa6 svg;
		color-margin-top: 8px
	}

	#pagination-container .page-button[title=next][data-v-347aff46]:hover,
	#pagination-container .page-button[title=previous][data-v-347aff46]:hover {
		color: var(--text-color)
	}

	#pagination-container .page-button[title=next].disabled[data-v-347aff46],
	#pagination-container .page-button[title=previous].disabled[data-v-347aff46] {
		color: #eee
	}

	#pagination-container .page-button[title=next].disabled[data-v-347aff46]:hover,
	#pagination-container .page-button[title=previous].disabled[data-v-347aff46]:hover {
		color: #eee;
		background: inherit
	}

	#pagination-container .vue-ads-ml-1[data-v-347aff46] {
		background: none;
		border: none;
		box-shadow: none;
		outline: none;
		cursor: pointer
	}

	@media (max-width:480px) {
		#pagination-container[data-v-347aff46] {
			padding: 20px
		}
	}

	.title[data-v-347aff46] {
		font-weight: 700;
		font-size: 23px
	}

	.sub-title[data-v-347aff46],
	.title[data-v-347aff46] {
		text-align: center;
		color: #373737
	}

	.sub-title[data-v-347aff46] {
		font-weight: 400;
		font-size: 15px
	}

	.icon-wrapper[data-v-347aff46] {
		display: inline-flex;
		-moz-justify-content: center;
		justify-content: center
	}

	.border-color[data-v-347aff46] {
		border-color: #eee
	}

	.p-20[data-v-347aff46] {
		padding: 20px
	}

	.authors-avatar[data-v-347aff46] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.author-avatar[data-v-347aff46] {
		width: 32px;
		height: 32px;
		border: 1px solid #fff;
		position: relative;
		z-index: 3;
		background: #fff;
		border-radius: 3px
	}

	.author-avatar img[data-v-347aff46] {
		width: 100%;
		height: 100%;
		border-radius: 3px
	}

	.author-avatar[data-v-347aff46]:nth-child(2) {
		z-index: 2
	}

	.author-avatar[data-v-347aff46]:nth-child(3) {
		z-index: 1
	}

	.grey-2[data-v-347aff46] {
		color: #9c9aa6
	}

	.ltr .ms-5[data-v-347aff46] {
		margin-left: 5px
	}

	.ltr .ms-10[data-v-347aff46] {
		margin-left: 10px
	}

	.ltr .authors-avatar[data-v-347aff46],
	.ltr .me-10[data-v-347aff46] {
		margin-right: 10px
	}

	.ltr .ms-20[data-v-347aff46] {
		margin-left: 20px
	}

	.ltr .me-20[data-v-347aff46] {
		margin-right: 20px !important
	}

	.ltr .ts[data-v-347aff46] {
		text-align: left
	}

	.ltr .te[data-v-347aff46] {
		text-align: right
	}

	.ltr .author-avatar[data-v-347aff46]:nth-child(2),
	.ltr .author-avatar[data-v-347aff46]:nth-child(3),
	.ltr .ms-10-ve[data-v-347aff46] {
		margin-left: -10px
	}

	.ltr .pos-end[data-v-347aff46] {
		right: 0
	}

	.ltr .ms-auto[data-v-347aff46] {
		margin-left: auto
	}

	.ltr .me-auto[data-v-347aff46] {
		margin-right: auto
	}

	.ltr .font-13[data-v-347aff46] {
		font-size: 13px
	}

	.ltr .time[data-v-347aff46] {
		color: #9c9aa6;
		font-size: 11px
	}

	.rtl .icon-wrapper[data-v-347aff46] {
		transform: scaleX(-1)
	}

	.rtl .me-5[data-v-347aff46],
	.rtl .ms-5[data-v-347aff46] {
		margin-right: 5px
	}

	.rtl .ms-10[data-v-347aff46] {
		margin-right: 10px
	}

	.rtl .authors-avatar[data-v-347aff46],
	.rtl .me-10[data-v-347aff46] {
		margin-left: 10px
	}

	.rtl .ms-20[data-v-347aff46] {
		margin-right: 20px
	}

	.rtl .me-20[data-v-347aff46] {
		margin-left: 20px !important
	}

	.rtl .ts[data-v-347aff46] {
		text-align: right
	}

	.rtl .te[data-v-347aff46] {
		text-align: left
	}

	.rtl .author-avatar[data-v-347aff46]:nth-child(2),
	.rtl .author-avatar[data-v-347aff46]:nth-child(3),
	.rtl .ms-10-ve[data-v-347aff46] {
		margin-right: -10px
	}

	.rtl .pos-end[data-v-347aff46] {
		left: 0
	}

	.rtl .ms-auto[data-v-347aff46] {
		margin-right: auto
	}

	.rtl .me-auto[data-v-347aff46] {
		margin-left: auto
	}

	.rtl .font-13[data-v-347aff46] {
		font-size: 15px
	}

	.rtl .time[data-v-347aff46] {
		color: #9c9aa6;
		font-size: 13px
	}

	.container[data-v-347aff46] {
		width: 100%;
		text-align: center;
		max-width: 981px;
		margin: -150px auto 0;
		padding-bottom: 30px
	}

	.container.page-leave-active[data-v-347aff46] {
		visibility: hidden
	}

	.links[data-v-347aff46] {
		padding-top: 15px
	}

	#list-type[data-v-347aff46] {
		text-align: center;
		margin-bottom: 30px
	}

	#list-type[data-v-347aff46],
	#list-type .btn[data-v-347aff46] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center;
		-moz-justify-content: center;
		justify-content: center
	}

	#list-type .btn[data-v-347aff46] {
		background: #f7f7f9;
		border-radius: 2px;
		width: 40px;
		height: 40px;
		font-size: 18px;
		color: #92929e;
		outline: 0;
		cursor: pointer;
		border: 0;
		padding: 8px;
		opacity: .4;
		margin: 0 5px
	}

	#list-type .btn[data-v-347aff46]:focus {
		outline: 0
	}

	#list-type .btn.active[data-v-347aff46] {
		opacity: 1
	}

	#list-type .btn[data-v-347aff46]:hover {
		transform: scale(1.1);
		opacity: 1
	}

	#categories-block-container #categories-block-wrapper[data-v-347aff46] {
		margin: 0 20px;
		min-height: 200px;
		display: -moz-flex;
		display: flex;
		-moz-flex-direction: column;
		flex-direction: column;
		flex-wrap: wrap;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	#categories-block-container #categories-block-wrapper.grid[data-v-347aff46] {
		margin: 0;
		-moz-flex-direction: row;
		flex-direction: row;
		-moz-justify-content: center;
		justify-content: center
	}

	#retry-categories[data-v-347aff46] {
		border: 1px solid #eee;
		border-radius: 5px;
		margin: 5px 0
	}

	@media (max-width:480px) {
		.container[data-v-347aff46] {
			margin-top: -40px
		}

		#categories-block-container #categories-block-wrapper.grid[data-v-347aff46] {
			margin: 0 20px !important
		}

		#list-type[data-v-347aff46] {
			display: none
		}
	}

	.dropdown .dropdown-toggle[data-v-20a3e84e] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.rtl .caret[data-v-20a3e84e] {
		margin-right: 10px
	}

	.ltr .caret[data-v-20a3e84e] {
		margin-left: 10px
	}

	.input-text[data-v-20a3e84e] {
		font-family: inherit;
		border-radius: 4px;
		outline: 0;
		background: #fff;
		border: 1px solid #eee;
		padding: 13px 20px;
		color: #373737;
		font-size: 16px;
		height: 45px;
		width: 100%
	}

	.input-text[data-v-20a3e84e]::-webkit-input-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-20a3e84e]:-moz-placeholder,
	.input-text[data-v-20a3e84e]::-moz-placeholder {
		color: #d3d3d3
	}

	.input-text[data-v-20a3e84e]:-ms-input-placeholder {
		color: #d3d3d3
	}

	#pagination-container[data-v-20a3e84e] {
		width: 100%;
		background: #fff;
		border: 1px solid #eee;
		padding: 21px 33px;
		text-align: center;
		margin-bottom: 26px;
		border-radius: 5px
	}

	#pagination-container .page-button[data-v-20a3e84e] {
		font-size: 16px;
		width: 40px;
		height: 40px;
		padding: 0;
		margin: 0;
		color: #9c9aa6
	}

	#pagination-container .page-button.active[data-v-20a3e84e] {
		color: #373737;
		font-weight: 700
	}

	#pagination-container .page-button[data-v-20a3e84e]:hover {
		color: var(--text-color);
		background: var(--primary-color);
		border-radius: 50%
	}

	#pagination-container .page-button.disabled[data-v-20a3e84e] {
		cursor: default
	}

	#pagination-container .page-button.disabled[data-v-20a3e84e]:hover {
		color: #9c9aa6;
		background: inherit;
		border-radius: 0
	}

	#pagination-container .page-button[title=next][data-v-20a3e84e],
	#pagination-container .page-button[title=previous][data-v-20a3e84e] {
		color: #9c9aa6 svg;
		color-margin-top: 8px
	}

	#pagination-container .page-button[title=next][data-v-20a3e84e]:hover,
	#pagination-container .page-button[title=previous][data-v-20a3e84e]:hover {
		color: var(--text-color)
	}

	#pagination-container .page-button[title=next].disabled[data-v-20a3e84e],
	#pagination-container .page-button[title=previous].disabled[data-v-20a3e84e] {
		color: #eee
	}

	#pagination-container .page-button[title=next].disabled[data-v-20a3e84e]:hover,
	#pagination-container .page-button[title=previous].disabled[data-v-20a3e84e]:hover {
		color: #eee;
		background: inherit
	}

	#pagination-container .vue-ads-ml-1[data-v-20a3e84e] {
		background: none;
		border: none;
		box-shadow: none;
		outline: none;
		cursor: pointer
	}

	@media (max-width:480px) {
		#pagination-container[data-v-20a3e84e] {
			padding: 20px
		}
	}

	.title[data-v-20a3e84e] {
		font-weight: 700;
		font-size: 23px
	}

	.sub-title[data-v-20a3e84e],
	.title[data-v-20a3e84e] {
		text-align: center;
		color: #373737
	}

	.sub-title[data-v-20a3e84e] {
		font-weight: 400;
		font-size: 15px
	}

	.icon-wrapper[data-v-20a3e84e] {
		display: inline-flex;
		-moz-justify-content: center;
		justify-content: center
	}

	.border-color[data-v-20a3e84e] {
		border-color: #eee
	}

	.p-20[data-v-20a3e84e] {
		padding: 20px
	}

	.authors-avatar[data-v-20a3e84e] {
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.author-avatar[data-v-20a3e84e] {
		width: 32px;
		height: 32px;
		border: 1px solid #fff;
		position: relative;
		z-index: 3;
		background: #fff;
		border-radius: 3px
	}

	.author-avatar img[data-v-20a3e84e] {
		width: 100%;
		height: 100%;
		border-radius: 3px
	}

	.author-avatar[data-v-20a3e84e]:nth-child(2) {
		z-index: 2
	}

	.author-avatar[data-v-20a3e84e]:nth-child(3) {
		z-index: 1
	}

	.grey-2[data-v-20a3e84e] {
		color: #9c9aa6
	}

	.ltr .ms-5[data-v-20a3e84e] {
		margin-left: 5px
	}

	.ltr .ms-10[data-v-20a3e84e] {
		margin-left: 10px
	}

	.ltr .authors-avatar[data-v-20a3e84e],
	.ltr .me-10[data-v-20a3e84e] {
		margin-right: 10px
	}

	.ltr .ms-20[data-v-20a3e84e] {
		margin-left: 20px
	}

	.ltr .me-20[data-v-20a3e84e] {
		margin-right: 20px !important
	}

	.category-block.slider .ltr .category-details[data-v-20a3e84e],
	.ltr .category-block.slider .category-details[data-v-20a3e84e],
	.ltr .ts[data-v-20a3e84e] {
		text-align: left
	}

	.ltr .te[data-v-20a3e84e] {
		text-align: right
	}

	.ltr .author-avatar[data-v-20a3e84e]:nth-child(2),
	.ltr .author-avatar[data-v-20a3e84e]:nth-child(3),
	.ltr .ms-10-ve[data-v-20a3e84e] {
		margin-left: -10px
	}

	.ltr .pos-end[data-v-20a3e84e] {
		right: 0
	}

	.ltr .ms-auto[data-v-20a3e84e] {
		margin-left: auto
	}

	.ltr .me-auto[data-v-20a3e84e] {
		margin-right: auto
	}

	.ltr .font-13[data-v-20a3e84e] {
		font-size: 13px
	}

	.ltr .time[data-v-20a3e84e] {
		color: #9c9aa6;
		font-size: 11px
	}

	.rtl .icon-wrapper[data-v-20a3e84e] {
		transform: scaleX(-1)
	}

	.rtl .me-5[data-v-20a3e84e],
	.rtl .ms-5[data-v-20a3e84e] {
		margin-right: 5px
	}

	.rtl .ms-10[data-v-20a3e84e] {
		margin-right: 10px
	}

	.rtl .authors-avatar[data-v-20a3e84e],
	.rtl .me-10[data-v-20a3e84e] {
		margin-left: 10px
	}

	.rtl .ms-20[data-v-20a3e84e] {
		margin-right: 20px
	}

	.rtl .me-20[data-v-20a3e84e] {
		margin-left: 20px !important
	}

	.category-block.slider .rtl .category-details[data-v-20a3e84e],
	.rtl .category-block.slider .category-details[data-v-20a3e84e],
	.rtl .ts[data-v-20a3e84e] {
		text-align: right
	}

	.rtl .te[data-v-20a3e84e] {
		text-align: left
	}

	.rtl .author-avatar[data-v-20a3e84e]:nth-child(2),
	.rtl .author-avatar[data-v-20a3e84e]:nth-child(3),
	.rtl .ms-10-ve[data-v-20a3e84e] {
		margin-right: -10px
	}

	.rtl .pos-end[data-v-20a3e84e] {
		left: 0
	}

	.rtl .ms-auto[data-v-20a3e84e] {
		margin-right: auto
	}

	.rtl .me-auto[data-v-20a3e84e] {
		margin-left: auto
	}

	.rtl .font-13[data-v-20a3e84e] {
		font-size: 15px
	}

	.rtl .time[data-v-20a3e84e] {
		color: #9c9aa6;
		font-size: 13px
	}

	.category-block[data-v-20a3e84e] {
		background: #fff;
		border: 1px solid #eee;
		margin: 10px 5px;
		transition: transform .5s ease;
		position: relative;
		z-index: 1;
		border-radius: 5px
	}

	.category-block[data-v-20a3e84e]:hover {
		transform: translateY(-5px);
		border-color: var(--hover-color)
	}

	.category-block:hover.slider[data-v-20a3e84e] {
		border-color: var(--hover-color);
		transform: translate(0)
	}

	.category-block .link[data-v-20a3e84e] {
		padding: 27px 0;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.category-block.full[data-v-20a3e84e] {
		width: 100%;
		margin: 0 auto 10px;
		max-width: 850px
	}

	.category-block.full .link[data-v-20a3e84e] {
		padding: 28px 32px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: center;
		align-items: center
	}

	.category-block.full .category-icon[data-v-20a3e84e] {
		width: 120px;
		-moz-flex: none;
		flex: none
	}

	.category-block.full .category-details[data-v-20a3e84e] {
		-moz-flex: 1 1 auto;
		flex: 1 1 auto
	}

	.category-block.full .written-details[data-v-20a3e84e] {
		margin-top: 10px;
		display: -moz-flex;
		display: flex;
		-moz-align-items: flex-start;
		align-items: flex-start
	}

	.category-block.grid[data-v-20a3e84e] {
		width: 317px;
		text-align: center;
		min-height: 198px
	}

	.category-block.grid .link[data-v-20a3e84e] {
		-moz-flex-direction: column;
		flex-direction: column
	}

	.category-block.grid .category-icon[data-v-20a3e84e] {
		margin-bottom: 30px
	}

	.category-block.grid .title[data-v-20a3e84e] {
		font-size: 20px;
		display: block;
		font-weight: 700;
		padding: 0 !important;
		margin-bottom: 10px
	}

	.category-block.slider[data-v-20a3e84e] {
		width: auto;
		height: 150px;
		margin: 0;
		min-height: 0
	}

	.category-block.slider .link[data-v-20a3e84e] {
		padding: 40px 30px;
		width: 100%;
		-moz-flex-direction: row;
		flex-direction: row
	}

	.category-block.slider .category-icon[data-v-20a3e84e] {
		margin-bottom: 0
	}

	.category-block.slider .category-icon svg[data-v-20a3e84e] {
		width: 40px;
		height: 40px
	}

	.category-block.slider .category-details .title[data-v-20a3e84e] {
		font-size: 17px
	}

	.category-block.slider .category-details .written-details[data-v-20a3e84e] {
		margin-top: 15px
	}

	.category-block .category-details[data-v-20a3e84e],
	.category-block .category-icon[data-v-20a3e84e] {
		text-align: center
	}

	.category-block .category-icon .fa[data-v-20a3e84e] {
		color: green;
		font-size: 40px
	}

	.category-block .total[data-v-20a3e84e] {
		display: block;
		font-size: 13px
	}

	.category-block .description[data-v-20a3e84e] {
		color: #9c9aa6;
		font-size: 15px;
		margin-top: 6px
	}

	@media (max-width:480px) {
		#categories-block-container .category-block.full[data-v-20a3e84e] {
			width: 100%;
			margin: 10px 0
		}

		#categories-block-container .category-block.full .link[data-v-20a3e84e] {
			padding: 20px;
			width: 100%;
			display: -moz-flex;
			display: flex
		}

		#categories-block-container .category-block.full .category-icon[data-v-20a3e84e] {
			width: auto
		}

		#categories-block-container .category-block.full .category-icon svg[data-v-20a3e84e] {
			width: 40px;
			height: 40px
		}

		#categories-block-container .category-block.full .category-details[data-v-20a3e84e] {
			margin-top: 0
		}

		#categories-block-container .category-block.full .category-details .title[data-v-20a3e84e] {
			font-size: 17px
		}

		#categories-block-container .category-block.full .category-details .written-details[data-v-20a3e84e] {
			margin-top: 15px;
			display: -moz-flex;
			display: flex
		}
	}
</style>
@endsection