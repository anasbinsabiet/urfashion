<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WishlistController;

//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully'; //Return anything
});
    
    Route::get('/searchajax','Frontend\FrontendController@SearchautoComplete')->name('searchproductajax');
    Route::post('/searching','Frontend\FrontendController@result');
    Route::get('gallery','Frontend\FrontendController@gallery')->name('gallery');
    Route::get('categories','Frontend\FrontendController@categories')->name('categories');
    Route::post('changeImage', 'Frontend\FrontendController@changeImage')->name('changeImage.post');
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::post('cart-store', 'CartController@store')->name('cart.store');
    Route::post('help-store', 'Frontend\FrontendController@help_store')->name('help.store');
    Route::post('address-store', 'Frontend\FrontendController@address_store')->name('address.store');
    Route::post('newaddress-store', 'Frontend\FrontendController@new_address_store')->name('newaddress.store');
    Route::get('order-confirmed', 'Frontend\FrontendController@order_confirmed')->name('order.confirmed');
    Route::get('order-check', 'Frontend\FrontendController@order_check')->name('order.check');
    Route::post('chat-store', 'Frontend\FrontendController@chat_store')->name('chat.store');
    Route::delete('remove-from-cart', 'CartController@remove')->name('remove.from.cart');
    Route::get('checkout', 'CartController@checkout')->name('checkout');
    Route::get('orderconfirm', 'CartController@orderconfirm')->name('orderconfirm');
    Route::get('imprintoption/{order_id}/{product_id}', 'CartController@imprintoption')->name('imprintoption');
    Route::post('imprintoption-store', 'CartController@imprintoption_store')->name('imprintoption.store');
    Route::get('myaccount', 'CartController@myaccount')->name('myaccount')->middleware('auth');
    Route::get('orderstatus', 'CartController@orderstatus')->name('orderstatus')->middleware('auth');
    Route::get('ntstatus-change', 'CartController@ntstatusChange')->name('ntstatus.change');
    Route::get('orderdetail/{id}', 'CartController@orderdetail')->name('orderdetail');
    Route::get('artwork', 'CartController@artwork')->name('artwork');
    // Route::get('wishlist', 'CartController@wishlist')->name('wishlist');
    Route::get('viewartwork', 'CartController@viewartwork')->name('viewartwork');
    Route::get('address', 'CartController@address')->name('address');
    Route::get('logininfo', 'CartController@logininfo')->name('logininfo');
    Route::get('help', 'CartController@help')->name('help');
    Route::get('aboutus', 'CartController@aboutus')->name('aboutus');
    Route::get('contactinfo', 'CartController@contactinfo')->name('contactinfo');
    Route::get('browsingHistory', 'CartController@browsingHistory')->name('browsingHistory');
    Route::post('billing-store', 'CartController@billing_store')->name('billing.store');
    Route::post('shipping-store', 'CartController@shipping_store')->name('shipping.store');
    Route::post('order-store', 'CartController@order_store')->name('order.store');
    Route::post('wishlist-store', 'CartController@wishlist_store')->name('wishlist.store');
    Route::post('wishlist-delete', 'CartController@wishlist_delete')->name('wishlist.delete');
    
    Route::get('accessibility', 'Frontend\FrontendPagesController@accessibility')->name('accessibility');
    Route::get('return', 'Frontend\FrontendController@customers')->name('return');
    Route::get('privacy', 'Frontend\FrontendPagesController@privacy')->name('privacy');
    Route::get('low_price', 'Frontend\FrontendPagesController@low_price')->name('low_price');
    Route::get('free-artwork-email-proof', 'Frontend\FrontendPagesController@free_artwork_email_proof')->name('free-artwork-email-proof');
    Route::get('blog', 'Frontend\FrontendPagesController@blog')->name('blog');
    Route::get('blog/{slug}', 'Frontend\FrontendPagesController@single_blog')->name('single_blog');
    Route::get('notice/{slug}', 'Frontend\FrontendPagesController@single_notice')->name('single_notice');
    Route::get('help/{slug}', 'Frontend\FrontendPagesController@single_help')->name('single_help');
    Route::get('help-category/{slug}', 'Frontend\FrontendPagesController@single_help_category')->name('single_help_category');
    Route::get('wishlist', 'Frontend\FrontendPagesController@wishlist')->name('wishlist');
    Route::get('notification', 'Frontend\FrontendPagesController@notification')->name('notification')->middleware('auth');
    Route::get('notice-board', 'Frontend\FrontendPagesController@noticeBoard')->name('notice.board');
    Route::get('dashboard', 'Frontend\FrontendPagesController@dashboard')->name('dashboard');

    // Route::get('menus','MenuController@index');
    // Route::get('menus-show','MenuController@show');
    Route::get('/ajax-refill-data/{id}','MenuController@refillData')->name('ajax.refill.data');
    Route::post('/ajax-refill-data/{id}','MenuController@refillData')->name('ajax.refill.data');
    Route::get('/searchajax','MenuController@SearchautoComplete')->name('searchproductajax');
    Route::post('/searching','MenuController@result');

    Route::get('/livechat-upload','Frontend\FrontendController@livechat_upload');
    Route::post('/livechat-store','Frontend\FrontendController@livechat_store');
    Route::post('/contact-store','Frontend\FrontendController@contact_store');

    Route::get('/product-inquiry','Frontend\FrontendController@product_inquiry');
    Route::get('/refill-request','Frontend\FrontendController@refill_request');
    Route::get('/how-to-order','Frontend\FrontendController@how_to_order');
    Route::get('/news','Frontend\FrontendController@news');
    Route::get('/about-us','Frontend\FrontendController@about_us');
    Route::get('/contact-us','Frontend\FrontendController@contact_us');
    Route::get('/policy','Frontend\FrontendController@policy');
    Route::get('/category/{slug}','Frontend\FrontendController@category');
    Route::get('/offer/{category_slug}','Frontend\FrontendController@offer');
    Route::get('/products','Frontend\FrontendController@products');
    // Route::get('/category/{id}','Frontend\FrontendController@category');
    Route::get('/subcategory/{slug}','Frontend\FrontendController@subcategory');

    Route::get('/promotional-on-sale','Frontend\FrontendPagesController@promotional_on_sale');
    Route::get('/page/{category_slug}','Frontend\FrontendController@category_slug');
    // Route::get('/promotional-bags','Frontend\FrontendPagesController@promotional_bags');
    // Route::get('/promotional-health_wellness','Frontend\FrontendPagesController@promotional_health_wellness');
    // Route::get('/promotional-writting','Frontend\FrontendPagesController@promotional_writting');
    // Route::get('/promotional-drinkware','Frontend\FrontendPagesController@promotional_drinkware');
    // Route::get('/promotional-technology-electeronics','Frontend\FrontendPagesController@promotional_technology_electeronics');
    // Route::get('/promotional-business-gifts','Frontend\FrontendPagesController@promotional_business_gifts');

/////////////////////////Frontend routes////////////////////////////////
Route::group(['namespace' => 'Frontend'], function () {

    // Route::get('order-email', [WishlistController::class, 'orderEmail'])->name('order.email');
    Route::get('cart-data', [WishlistController::class, 'cartData'])->name('cart.data');
    Route::get('cart-total', [WishlistController::class, 'cartTotal'])->name('cart.total');
    Route::get('cart-item-total', [WishlistController::class, 'cartItemTotal'])->name('cart.item.total');
    Route::get('selling-total', [WishlistController::class, 'sellingTotal'])->name('selling.total');
    Route::get('cart-count', [WishlistController::class, 'cartCount'])->name('cart.count');
    Route::get('nt-count', [WishlistController::class, 'ntCount'])->name('nt.count');
    Route::get('wishlist-count', [WishlistController::class, 'wishlistCount'])->name('wishlist.count');
    Route::get('populate-available', [WishlistController::class, 'populateAvailable'])->name('populate.available');
    // Route::get('cart', [WishlistController::class, 'cart'])->name('cart');
    // Route::get('add-to-cart/{id}', [WishlistController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [WishlistController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [WishlistController::class, 'remove'])->name('remove.from.cart');

    Route::get('/', 'FrontendController@index');
    Route::get('/user/login', 'FrontendController@userLogin')->name('user.login');
    Route::get('/user/register', 'FrontendController@userRegister')->name('user.register');
    Route::post('/user/store', 'FrontendController@userStore')->name('user.store');
    Route::post('/user/update', 'FrontendController@userUpdate')->name('user.update');
    Route::post('/user/validate', 'FrontendController@userValidate')->name('user.validate');
    Route::get('/product/{product_slug}', 'FrontendController@productDetails')->name('product.details');
    Route::get('/product/details/{id}', 'FrontendController@productDetailsSearch');
    Route::post('/newslater/store', 'FrontendController@newslaterStore')->name('newslater.store');
});


//Social Login
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

//Wishlist
Route::get('/wishlist/store/{id}', 'Frontend\WishlistController@store');
Route::get('/wishlist/count', 'Frontend\WishlistController@wishlistCount');
Route::get('calculate-delivery', 'Frontend\WishlistController@calculateDelivery')->name('calculate.delivery');

//Cart
// Route::get('/cart/store/{id}', 'Frontend\CartController@store')->name('add.to.cart');
Route::get('/cart/count', 'Frontend\CartController@cartCount');
// Route::get('/cart/data', 'Frontend\CartController@cartData');
// Route::get('/cart/total', 'Frontend\CartController@cartTotal');
Route::post('/apply/coupon', 'Frontend\CartController@applyCoupon')->name('apply.coupon');
Route::get('/coupon/remove', 'Frontend\CartController@couponRemove')->name('coupon.remove');

//Payment method
Route::post('/payment/process', 'Frontend\PaymentController@paymentProcess')->name('payment.process');
Route::post('/stripe/charge', 'Frontend\PaymentController@stripeCharge')->name('stripe.charge');

//Order tracking
Route::get('/track-order', 'Frontend\PaymentController@tracking')->name('tracking.order');


/*User dashboard*/
// Route::get('/customer/dashboard', 'Frontend\DashboardController@user_dashboard')->name('user.dashboard');
Route::group(['prefix' => '/customer', 'namespace' => 'Frontend', 'middleware' => ['auth', 'user']], function () {

    //User profile
    Route::get('/dashboard', 'DashboardController@user_dashboard')->name('user.dashboard');
    
    Route::get('/profile', 'DashboardController@user_profile')->name('user.profile');
    Route::get('edit/profile', 'DashboardController@user_edit_profile')->name('user.edit.profile');
    Route::post('update/profile/{id}', 'DashboardController@user_update_profile')->name('user.update.profile');
    Route::get('/change/password', 'DashboardController@user_change_password')->name('user.change.password');
    Route::post('/update/password', 'DashboardController@user_update_password')->name('user.update.password');

    //Orders
    Route::get('/orders', 'DashboardController@orders')->name('user.orders');
    Route::get('/orders/details/{id}', 'DashboardController@order_details')->name('user.order.details');
});

//Auth route
Auth::routes();


/////////////////////////Default routes////////////////////////////////
//Get Data ajax
Route::group(['namespace' => 'DefaultController'], function () {

    Route::get('/get/subcategory/{id}', 'DefaultController@get_subcategory')->name('get.subcategory');
    Route::get('/get/division/{id}', 'DefaultController@get_district')->name('get.district');
});

/////////////////////////Backend routes////////////////////////////////
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', 'Backend\DashboardController@admin_dashboard')->name('home');

    Route::get('menus','MenuController@index')->name('menus.index');
    Route::get('menus-show/','MenuController@show');
    Route::get('/edit-menu/{id}','MenuController@edit');
    Route::post('menus','MenuController@store')->name('menus.store');
    Route::post('/edit-menu/{id}','MenuController@update');
    Route::post('/delete-menu/{id}','MenuController@destroy');

    // Route::get('menus','MenuController@index');
    // Route::get('menus-show','MenuController@show');
    // Route::post('menus','MenuController@store')->name('menus.store');

    //Admin
    Route::group(['as' => 'admin.', 'prefix' => '/admin', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'AdminController@index')->name('index');
        Route::get('/create', 'AdminController@create')->name('create');
        Route::post('/store', 'AdminController@store')->name('store');
        Route::get('/edit/{id}', 'AdminController@edit')->name('edit');
        Route::post('/update/{id}', 'AdminController@update')->name('update');
        Route::get('/destroy/{id}', 'AdminController@destroy')->name('destroy');
    });
   
    Route::group(['as' => 'reseller.', 'prefix' => '/reseller', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ResellerController@index')->name('index');
        Route::get('/create', 'ResellerController@create')->name('create');
        Route::post('/store', 'ResellerController@store')->name('store');
        Route::get('/edit/{id}', 'ResellerController@edit')->name('edit');
        Route::post('/update/{id}', 'ResellerController@update')->name('update');
        Route::get('/destroy/{id}', 'ResellerController@destroy')->name('destroy');
    });

    //Admin Profile
    Route::group(['as' => 'admin.profile.', 'prefix' => '/admin/profile', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ProfileController@index')->name('index');
        Route::get('/edit', 'ProfileController@edit')->name('edit');
        Route::post('/update', 'ProfileController@update')->name('update');
        Route::get('/edit/password', 'ProfileController@editPassword')->name('ep');
        Route::get('/change/status', 'ProfileController@changeStatus')->name('cs');
        Route::post('/update/password', 'ProfileController@updatePassword')->name('up');
    });

    //Division
    Route::group(['as' => 'division.', 'prefix' => '/division', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'DivisionController@index')->name('index');
        Route::get('/create', 'DivisionController@create')->name('create');
        Route::post('/store', 'DivisionController@store')->name('store');
        Route::get('/edit/{id}', 'DivisionController@edit')->name('edit');
        Route::post('/update/{id}', 'DivisionController@update')->name('update');
        Route::get('/destroy/{id}', 'DivisionController@destroy')->name('destroy');
    });

    //District
    Route::group(['as' => 'district.', 'prefix' => '/district', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'DistrictController@index')->name('index');
        Route::get('/create', 'DistrictController@create')->name('create');
        Route::post('/store', 'DistrictController@store')->name('store');
        Route::get('/edit/{id}', 'DistrictController@edit')->name('edit');
        Route::post('/update/{id}', 'DistrictController@update')->name('update');
        Route::get('/destroy/{id}', 'DistrictController@destroy')->name('destroy');
    });

    //Category
    Route::group(['as' => 'category.', 'prefix' => '/category', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('update');
        Route::get('/destroy/{id}', 'CategoryController@destroy')->name('destroy');
    });

    //Subcategory
    Route::group(['as' => 'subcategory.', 'prefix' => '/subcategory', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'SubcategoryController@index')->name('index');
        Route::get('/create', 'SubcategoryController@create')->name('create');
        Route::post('/store', 'SubcategoryController@store')->name('store');
        Route::get('/edit/{id}', 'SubcategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'SubcategoryController@update')->name('update');
        Route::get('/destroy/{id}', 'SubcategoryController@destroy')->name('destroy');
    });

    //Setting
    Route::group(['as' => 'setting.', 'prefix' => '/setting', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'SettingController@index')->name('index');
        Route::get('/create', 'SettingController@create')->name('create');
        Route::post('/store', 'SettingController@store')->name('store');
        Route::get('/edit/{id}', 'SettingController@edit')->name('edit');
        Route::post('/update/{id}', 'SettingController@update')->name('update');
        Route::get('/destroy/{id}', 'SettingController@destroy')->name('destroy');
    });

    //Brand
    Route::group(['as' => 'brand.', 'prefix' => '/brand', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'BrandController@index')->name('index');
        Route::get('/create', 'BrandController@create')->name('create');
        Route::post('/store', 'BrandController@store')->name('store');
        Route::get('/edit/{id}', 'BrandController@edit')->name('edit');
        Route::post('/update/{id}', 'BrandController@update')->name('update');
        Route::get('/destroy/{id}', 'BrandController@destroy')->name('destroy');
    });
    //Production time
    Route::group(['as' => 'productiontime.', 'prefix' => '/productiontime', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ProductionTimeController@index')->name('index');
        Route::get('/create', 'ProductionTimeController@create')->name('create');
        Route::post('/store', 'ProductionTimeController@store')->name('store');
        Route::get('/edit/{id}', 'ProductionTimeController@edit')->name('edit');
        Route::post('/update/{id}', 'ProductionTimeController@update')->name('update');
        Route::get('/destroy/{id}', 'ProductionTimeController@destroy')->name('destroy');
    });
    //Imprint Method
    Route::group(['as' => 'imprintmethod.', 'prefix' => '/imprintmethod', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ImprintMethodController@index')->name('index');
        Route::get('/create', 'ImprintMethodController@create')->name('create');
        Route::post('/store', 'ImprintMethodController@store')->name('store');
        Route::get('/edit/{id}', 'ImprintMethodController@edit')->name('edit');
        Route::post('/update/{id}', 'ImprintMethodController@update')->name('update');
        Route::get('/destroy/{id}', 'ImprintMethodController@destroy')->name('destroy');
    });
    //Sleeve Length
    Route::group(['as' => 'sleevelength.', 'prefix' => '/sleevelength', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'SleeveLengthController@index')->name('index');
        Route::get('/create', 'SleeveLengthController@create')->name('create');
        Route::post('/store', 'SleeveLengthController@store')->name('store');
        Route::get('/edit/{id}', 'SleeveLengthController@edit')->name('edit');
        Route::post('/update/{id}', 'SleeveLengthController@update')->name('update');
        Route::get('/destroy/{id}', 'SleeveLengthController@destroy')->name('destroy');
    });
    //Sleeve Length
    Route::group(['as' => 'packagingoption.', 'prefix' => '/packagingoption', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'PackagingOptionController@index')->name('index');
        Route::get('/create', 'PackagingOptionController@create')->name('create');
        Route::post('/store', 'PackagingOptionController@store')->name('store');
        Route::get('/edit/{id}', 'PackagingOptionController@edit')->name('edit');
        Route::post('/update/{id}', 'PackagingOptionController@update')->name('update');
        Route::get('/destroy/{id}', 'PackagingOptionController@destroy')->name('destroy');
    });
    Route::group(['as' => 'shippingmethod.', 'prefix' => '/shippingmethod', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ShippingMethodController@index')->name('index');
        Route::get('/create', 'ShippingMethodController@create')->name('create');
        Route::post('/store', 'ShippingMethodController@store')->name('store');
        Route::get('/edit/{id}', 'ShippingMethodController@edit')->name('edit');
        Route::post('/update/{id}', 'ShippingMethodController@update')->name('update');
        Route::get('/destroy/{id}', 'ShippingMethodController@destroy')->name('destroy');
    });
    Route::group(['as' => 'paymentmethod.', 'prefix' => '/paymentmethod', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'PaymentMethodController@index')->name('index');
        Route::get('/create', 'PaymentMethodController@create')->name('create');
        Route::post('/store', 'PaymentMethodController@store')->name('store');
        Route::get('/edit/{id}', 'PaymentMethodController@edit')->name('edit');
        Route::post('/update/{id}', 'PaymentMethodController@update')->name('update');
        Route::get('/destroy/{id}', 'PaymentMethodController@destroy')->name('destroy');
    });
    Route::group(['as' => 'cardtype.', 'prefix' => '/cardtype', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'CardTypeController@index')->name('index');
        Route::get('/create', 'CardTypeController@create')->name('create');
        Route::post('/store', 'CardTypeController@store')->name('store');
        Route::get('/edit/{id}', 'CardTypeController@edit')->name('edit');
        Route::post('/update/{id}', 'CardTypeController@update')->name('update');
        Route::get('/destroy/{id}', 'CardTypeController@destroy')->name('destroy');
    });
    Route::group(['as' => 'gallery.', 'prefix' => '/gallery', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'GalleryController@index')->name('index');
        Route::get('/create', 'GalleryController@create')->name('create');
        Route::post('/store', 'GalleryController@store')->name('store');
        Route::get('/edit/{id}', 'GalleryController@edit')->name('edit');
        Route::post('/update/{id}', 'GalleryController@update')->name('update');
        Route::get('/destroy/{id}', 'GalleryController@destroy')->name('destroy');
    });
    //Color
    Route::group(['as' => 'color.', 'prefix' => '/color', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ColorController@index')->name('index');
        Route::get('/create', 'ColorController@create')->name('create');
        Route::post('/store', 'ColorController@store')->name('store');
        Route::get('/edit/{id}', 'ColorController@edit')->name('edit');
        Route::post('/update/{id}', 'ColorController@update')->name('update');
        Route::get('/destroy/{id}', 'ColorController@destroy')->name('destroy');
    });
    //Fit
    Route::group(['as' => 'fit.', 'prefix' => '/fit', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'FitController@index')->name('index');
        Route::get('/create', 'FitController@create')->name('create');
        Route::post('/store', 'FitController@store')->name('store');
        Route::get('/edit/{id}', 'FitController@edit')->name('edit');
        Route::post('/update/{id}', 'FitController@update')->name('update');
        Route::get('/destroy/{id}', 'FitController@destroy')->name('destroy');
    });
    //Style
    Route::group(['as' => 'style.', 'prefix' => '/style', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'StyleController@index')->name('index');
        Route::get('/create', 'StyleController@create')->name('create');
        Route::post('/store', 'StyleController@store')->name('store');
        Route::get('/edit/{id}', 'StyleController@edit')->name('edit');
        Route::post('/update/{id}', 'StyleController@update')->name('update');
        Route::get('/destroy/{id}', 'StyleController@destroy')->name('destroy');
    });
    //Style
    Route::group(['as' => 'fabric.', 'prefix' => '/fabric', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'FabricController@index')->name('index');
        Route::get('/create', 'FabricController@create')->name('create');
        Route::post('/store', 'FabricController@store')->name('store');
        Route::get('/edit/{id}', 'FabricController@edit')->name('edit');
        Route::post('/update/{id}', 'FabricController@update')->name('update');
        Route::get('/destroy/{id}', 'FabricController@destroy')->name('destroy');
    });

    //Coupon
    Route::group(['as' => 'coupon.', 'prefix' => '/coupon', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'CouponController@index')->name('index');
        Route::get('/create', 'CouponController@create')->name('create');
        Route::post('/store', 'CouponController@store')->name('store');
        Route::get('/edit/{id}', 'CouponController@edit')->name('edit');
        Route::post('/update/{id}', 'CouponController@update')->name('update');
        Route::get('/destroy/{id}', 'CouponController@destroy')->name('destroy');
    });

    Route::get('/livechat', 'Backend\NewslaterController@livechat')->name('livechat');
    Route::get('/producthelp', 'Backend\NewslaterController@producthelp')->name('producthelp');
    Route::get('/subscribers', 'Backend\NewslaterController@subscribers')->name('subscribers');

    //Newslater
    Route::group(['as' => 'newslater.', 'prefix' => '/newslater', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'NewslaterController@index')->name('index');
        Route::get('/destroy/{id}', 'NewslaterController@destroy')->name('destroy');
    });

    //Generic
    Route::group(['as' => 'generic.', 'prefix' => '/generic', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'GenericController@index')->name('index');
        Route::get('/create', 'GenericController@create')->name('create');
        Route::post('/store', 'GenericController@store')->name('store');
        Route::get('/edit/{id}', 'GenericController@edit')->name('edit');
        Route::post('/update/{id}', 'GenericController@update')->name('update');
        Route::get('/destroy/{id}', 'GenericController@destroy')->name('destroy');
    });

    //Type
    Route::group(['as' => 'type.', 'prefix' => '/type', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'TypeController@index')->name('index');
        Route::get('/create', 'TypeController@create')->name('create');
        Route::post('/store', 'TypeController@store')->name('store');
        Route::get('/edit/{id}', 'TypeController@edit')->name('edit');
        Route::post('/update/{id}', 'TypeController@update')->name('update');
        Route::get('/destroy/{id}', 'TypeController@destroy')->name('destroy');
    });

    //Size
    Route::group(['as' => 'size.', 'prefix' => '/size', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'SizeController@index')->name('index');
        Route::get('/create', 'SizeController@create')->name('create');
        Route::post('/store', 'SizeController@store')->name('store');
        Route::get('/edit/{id}', 'SizeController@edit')->name('edit');
        Route::post('/update/{id}', 'SizeController@update')->name('update');
        Route::get('/destroy/{id}', 'SizeController@destroy')->name('destroy');
    });

    //Product
    Route::group(['as' => 'product.', 'prefix' => '/product', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'ProductController@index')->name('index');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/store', 'ProductController@store')->name('store');
        Route::get('/show/{id}', 'ProductController@show')->name('show');
        Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
        Route::get('/images-edit/{id}', 'ProductController@images_edit')->name('images_edit');
        Route::post('/images-update/{id}', 'ProductController@images_update')->name('images_update');
        Route::post('/update/{id}', 'ProductController@update')->name('update');
        Route::get('/cimage_delete/{id}', 'ProductController@cimageDelete')->name('cimage_delete');
        Route::get('/himage_delete/{id}', 'HelpController@himageDelete')->name('himage_delete');

        Route::get('/trash/{id}', 'ProductController@trash')->name('trash');
        Route::get('/trashed/list', 'ProductController@trash_list')->name('trash.list');
        Route::get('/restore/{id}', 'ProductController@restore')->name('restore');
        Route::post('/status/{id}', 'ProductController@status')->name('status');
        Route::get('/destroy/{id}', 'ProductController@destroy')->name('destroy');
    });

    //Blog Category
    Route::group(['as' => 'helpcategory.', 'prefix' => '/help/category', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'HelpCategoryController@index')->name('index');
        Route::get('/create', 'HelpCategoryController@create')->name('create');
        Route::post('/store', 'HelpCategoryController@store')->name('store');
        Route::get('/edit/{id}', 'HelpCategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'HelpCategoryController@update')->name('update');
        Route::get('/destroy/{id}', 'HelpCategoryController@destroy')->name('destroy');
    });

    //Blog Category
    Route::group(['as' => 'blogcategory.', 'prefix' => '/blog/category', 'namespace' => 'Backend'], function () {

        Route::get('/index', 'BlogCategoryController@index')->name('index');
        Route::get('/create', 'BlogCategoryController@create')->name('create');
        Route::post('/store', 'BlogCategoryController@store')->name('store');
        Route::get('/edit/{id}', 'BlogCategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'BlogCategoryController@update')->name('update');
        Route::get('/destroy/{id}', 'BlogCategoryController@destroy')->name('destroy');
    });

    //Blog
    Route::group(['as' => 'help.', 'prefix' => '/help', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'HelpController@index')->name('index');
        Route::get('/create', 'HelpController@create')->name('create');
        Route::post('/store', 'HelpController@store')->name('store');
        Route::get('/show/{id}', 'HelpController@show')->name('show');
        Route::get('/edit/{id}', 'HelpController@edit')->name('edit');
        Route::post('/update/{id}', 'HelpController@update')->name('update');
        Route::get('/destroy/{id}', 'HelpController@destroy')->name('destroy');
        Route::post('/status/{id}', 'HelpController@help_status')->name('status');
    });
    
    //Blog
    Route::group(['as' => 'blog.', 'prefix' => '/blog', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'BlogController@index')->name('index');
        Route::get('/create', 'BlogController@create')->name('create');
        Route::post('/store', 'BlogController@store')->name('store');
        Route::get('/show/{id}', 'BlogController@show')->name('show');
        Route::get('/edit/{id}', 'BlogController@edit')->name('edit');
        Route::post('/update/{id}', 'BlogController@update')->name('update');
        Route::get('/destroy/{id}', 'BlogController@destroy')->name('destroy');
        Route::post('/status/{id}', 'BlogController@blog_status')->name('status');
    });
    
    //Blog
    Route::group(['as' => 'notice.', 'prefix' => '/notice', 'namespace' => 'Backend'], function () {
        Route::get('/index', 'NoticeController@index')->name('index');
        Route::get('/create', 'NoticeController@create')->name('create');
        Route::post('/store', 'NoticeController@store')->name('store');
        Route::get('/show/{id}', 'NoticeController@show')->name('show');
        Route::get('/edit/{id}', 'NoticeController@edit')->name('edit');
        Route::post('/update/{id}', 'NoticeController@update')->name('update');
        Route::get('/destroy/{id}', 'NoticeController@destroy')->name('destroy');
        Route::post('/status/{id}', 'NoticeController@notice_status')->name('status');
    });

    //Order
    Route::group(['as' => 'order.', 'prefix' => '/order', 'namespace' => 'Backend'], function () {

        Route::post('/orderstatus-change', 'OrderController@orderstatus_change')->name('orderstatus.change');
        Route::get('/pending', 'OrderController@pending')->name('pending');
        Route::get('/accept', 'OrderController@orderAccept')->name('accept');
        Route::get('/progress/delivery', 'OrderController@progressDelivery')->name('progress.delivery');
        Route::get('/success/delivery', 'OrderController@successDelivery')->name('success.delivery');
        Route::get('/cancel', 'OrderController@orderCancel')->name('cancel');

        Route::get('/order/details/{id}', 'OrderController@details')->name('details');
        Route::get('/invoice/{id}', 'OrderController@invoice')->name('invoice');

        Route::get('/payment/accept/done/{id}', 'OrderController@paymentAccept')->name('payment.accept');
        Route::get('/payment/cancel/done/{id}', 'OrderController@paymentCancel')->name('payment.cancel');
        Route::get('/progress/delivery/done/{id}', 'OrderController@deliveryProgress')->name('delivery.progress');
        Route::get('/delivery/done/{id}', 'OrderController@deliveryDone')->name('delivery.done');
    });

    //Report
    Route::group(['as' => 'report.', 'prefix' => '/report', 'namespace' => 'Backend'], function () {
        Route::get('/today/order', 'ReportController@todayOrder')->name('today.order');
        Route::get('/today/delivered', 'ReportController@todayDelivered')->name('today.delivered');
        Route::get('/this/month', 'ReportController@thisMonth')->name('this.month');
        //search report
        Route::get('/search', 'ReportController@searchReport')->name('search');
        Route::post('/search/result/date/range', 'ReportController@resultRange')->name('result.range');
        Route::post('/search/result/date', 'ReportController@resultDate')->name('result.date');
        Route::post('/search/result/month', 'ReportController@resultMonth')->name('result.month');
        Route::post('/search/result/year', 'ReportController@resultYear')->name('result.year');
    });
});
