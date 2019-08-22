<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'FrontendController@index')->name('index');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('home', 'FrontendController@index')->name('home');
Route::get('room', 'FrontendController@room')->name('room');
Route::get('room/{slug}', 'FrontendController@roomSingle')->name('roomSingle.view');
Route::get('event', 'FrontendController@event')->name('event');
Route::get('event/{slug}', 'FrontendController@eventSingle')->name('eventSingle');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');


Route::match(['get', 'post'], '/cms', 'AdminController@login')->name('admin.login');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/change_password', 'AdminController@change_password')->name('change_password');
    Route::post('/check/password', 'AdminController@check_password')->name('check_password');


    //permisssion
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/create', 'PermissionController@create')->name('permission.create');
        Route::post('/store', 'PermissionController@store')->name('permission.store');
        Route::get('/edit/{id}', 'PermissionController@edit')->name('permission.edit');
        Route::post('/update/{id}', 'PermissionController@update')->name('permission.update');
        Route::get('/updateStatus/{id}', 'PermissionController@updateStatus')->name('permission.status');
    });

    //Roles
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/add', 'RoleController@rolePermission')->name('roles');
        Route::get('/index', 'RoleController@index')->name('roles.index');

        Route::get('/create', 'RoleController@rolePermission')->name('roles.create');

        Route::post('/store', 'RoleController@store')->name('roles.store');
        Route::get('/edit/{id}', 'RoleController@edit')->name('roles.edit');
        Route::post('/update/{id}', 'RoleController@update')->name('roles.update');
        Route::get('/updateStatus/{id}', 'RoleController@updateStatus')->name('roles.status');
    });


    //Site Setting
    Route::group(['prefix' => 'site'], function () {
        Route::get('/', 'SiteSettingController@sitesetting')->name('sitesetting');
        Route::post('/update/{id}', 'SiteSettingController@update')->name('sitesetting.update');
    });

    //Menu Routes
    Route::group(['prefix' => 'menus'], function () {
        Route::get('/index', 'MenuController@index')->name('menu.index');
        Route::post('/store', 'MenuController@store')->name('menu.store');
        Route::post('/update/{id}', 'MenuController@update')->name('menu.update');
        Route::get('/delete/{id}', 'MenuController@delete')->name('menu.delete');
        Route::get('/updateStatus/{id}', 'MenuController@updateStatus')->name('menu.status');
    });

    //About Us Routes
    Route::group(['prefix' => 'aboutus'], function () {
        Route::get('/', 'AboutController@about')->name('aboutus');
        Route::post('/update/{id}', 'AboutController@aboutupdate')->name('about.update');
    });

    //Contact
    Route::group(['prefix' => 'contactus'], function () {
        Route::get('/index', 'ContactController@index')->name('contact.index');

        Route::get('/view/{id}', 'ContactController@view')->name('contact.view');
        Route::get('/delete/{id}', 'ContactController@delete')->name('contact.delete');
        Route::get('/updateStatus/{id}', 'ContactController@updateStatus')->name('contact.updateStatus');
    });



    //About Us Routes
    Route::group(['prefix' => 'contactpage'], function () {
        Route::get('/', 'ContactController@contactpage')->name('contactpage');
        Route::post('/update/{id}', 'ContactController@contactpageupdate')->name('contactpage.update');
    });


    //Event Routes
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', 'SliderController@index')->name('slider.index');
        Route::get('/create', 'SliderController@create')->name('slider.create');
        Route::post('/store', 'SliderController@store')->name('slider.store');
        Route::get('/edit/{id}', 'SliderController@edit')->name('slider.edit');
        Route::get('/view/{id}', 'SliderController@view')->name('slider.view');
        Route::post('/update/{id}', 'SliderController@update')->name('slider.update');
        Route::get('/delete/{id}', 'SliderController@delete')->name('slider.delete');
        Route::get('/updateStatus/{id}', 'SliderController@updateStatus')->name('slider.updateStatus');
    });

    //Event Page

    //Room Routes
    Route::group(['prefix' => 'rooms'], function () {
        Route::get('/index', 'RoomController@index')->name('room.index');
        Route::get('/create', 'RoomController@create')->name('room.create');
        Route::post('/store', 'RoomController@store')->name('room.store');
        Route::get('/edit/{id}', 'RoomController@edit')->name('room.edit');
        Route::get('/view/{id}', 'RoomController@view')->name('room.view');
        Route::post('/update/{id}', 'RoomController@update')->name('room.update');
        Route::get('/delete/{id}', 'RoomController@delete')->name('room.delete');
        Route::get('/updateStatus/{id}', 'RoomController@updateStatus')->name('room.updateStatus');
        Route::get('/addImages/{id}', 'RoomController@addImages')->name('room.addImages');
        Route::post('/addImages/store', 'RoomController@addImagesStore')->name('room.addImagesStore');
        Route::get('/addImages/delete/{id}', 'RoomController@addImagesDelete')->name('addImages.delete');
    });

    //Room Page Routes
    Route::group(['prefix' => 'roompage'], function () {
        Route::get('/', 'RoomController@roompage')->name('roompage');
        Route::post('/update/{id}', 'RoomController@roompageupdate')->name('roompage.update');
    });

    //Event Routes
    Route::group(['prefix' => 'events'], function () {
        Route::get('/index', 'EventController@index')->name('event.index');
        Route::get('/create', 'EventController@create')->name('event.create');
        Route::post('/store', 'EventController@store')->name('event.store');
        Route::get('/edit/{id}', 'EventController@edit')->name('event.edit');
        Route::get('/view/{id}', 'EventController@view')->name('event.view');
        Route::post('/update/{id}', 'EventController@update')->name('event.update');
        Route::get('/delete/{id}', 'EventController@delete')->name('event.delete');
        Route::get('/updateStatus/{id}', 'EventController@updateStatus')->name('event.updateStatus');
    });

    //Event Page Routes
    Route::group(['prefix' => 'eventpage'], function () {
        Route::get('/', 'EventController@eventpage')->name('eventpage');
        Route::post('/update/{id}', 'EventController@eventpageupdate')->name('eventpage.update');
    });



    //Our Hotel Staffs
    Route::group(['prefix' => 'hotelstaff'], function () {
        Route::get('/', 'HotelStaffController@index')->name('hotelstaff.index');
        Route::get('/create', 'HotelStaffController@create')->name('hotelstaff.create');
        Route::post('/store', 'HotelStaffController@store')->name('hotelstaff.store');
        Route::get('/edit/{id}', 'HotelStaffController@edit')->name('hotelstaff.edit');
        Route::get('/view/{id}', 'HotelStaffController@view')->name('hotelstaff.view');
        Route::post('/update/{id}', 'HotelStaffController@update')->name('hotelstaff.update');
        Route::get('/delete/{id}', 'HotelStaffController@delete')->name('hotelstaff.delete');
        Route::get('/updateStatus/{id}', 'HotelStaffController@updateStatus')->name('hotelstaff.status');
    });

    //Our Galleries
    Route::group(['prefix' => 'galleries'], function () {
        Route::get('/index', 'GalleryController@index')->name('gallery.index');
        Route::post('/store', 'GalleryController@store')->name('gallery.store');
        Route::get('/view/{id}', 'GalleryController@view')->name('gallery.view');
        Route::get('/edit/{id}', 'GalleryController@edit')->name('gallery.edit');
        Route::post('/update/{id}', 'GalleryController@update')->name('gallery.update');
        Route::get('/delete/{id}', 'GalleryController@delete')->name('gallery.delete');
        Route::get('/updateStatus/{id}', 'GalleryController@updateStatus')->name('gallery.status');
    });

    //Gallery Page Routes
    Route::group(['prefix' => 'gallerypage'], function () {
        Route::get('/', 'GalleryController@gallerypage')->name('gallerypage');
        Route::post('/update/{id}', 'GalleryController@gallerypageupdate')->name('gallerypage.update');
    });

    //Staff Page Routes
    Route::group(['prefix' => 'staffpage'], function () {
        Route::get('/', 'HotelStaffController@staffpage')->name('staffpage');
        Route::post('/update/{id}', 'HotelStaffController@staffpageupdate')->name('staffpage.update');
    });
});


Route::get('/admin-logout', 'AdminController@logout')->name('admin.logout');