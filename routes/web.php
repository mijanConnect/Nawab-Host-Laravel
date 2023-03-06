<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('domain', 'domain')->name('domain');
    Route::get('cpanel', 'cpanel')->name('cpanel');
    Route::get('cloud-hosting', 'cloudhosting')->name('cloud-hosting');
    Route::get('reseller-hosting', 'resellerhosting')->name('reseller-hosting');
    Route::get('ssd-vps', 'ssdvps')->name('ssd-vps');
    Route::get('dedicated-server', 'dedicatedserver')->name('dedicated-server');
    Route::get('help-support', 'helpsupport')->name('help-support');
    Route::get('login', 'login')->name('login');
    Route::get('signup', 'signup')->name('signup');
    Route::get('cart', 'cart')->name('cart');
    Route::get('search', 'search')->name('search');

    Route::get('evergreen/{name}-hosting', 'evergreen')->name('evergreen');
    Route::get('page/{name}', 'page')->name('page');
});

// Redirects old routes
Route::redirect('/domain-registrations.html', '/domain', 301);
Route::redirect('/premium-cpanel-ssd-hosting.html', '/hosting', 301);
Route::redirect('/extreme-shared-hosting.html', '/hosting', 301);
Route::redirect('/cpanel-whm-reseller-hosting.html', '/reseller', 301);
Route::redirect('/pure-ssd-vps-hosting.html', '/vps', 301);
Route::redirect('/dedicated-servers.html', '/server', 301);
Route::redirect('/faqs.html', '/page/faqs', 301);
Route::redirect('/about-us.html', '/page/about-us', 301);
Route::redirect('/contact.html', '/page/feedback', 301);
Route::redirect('/support-center.html', '/page/support-center', 301);
Route::redirect('/terms-of-services.html', '/page/terms-of-services', 301);
Route::redirect('/privacy-policy.html', '/page/privacy-policy', 301);
Route::redirect('/refund-policy.html', '/page/refund-policy', 301);
