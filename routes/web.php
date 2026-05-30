<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SubscribeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('service');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/Complete-Guide-How-We-Will-Save-Your-Documents-and-Business', function () {
    return view('blogs.CompleteGuide');
});

Route::get('/annual-review', function () {
    return view('blogs.AnnualReview');
});

Route::get('/will-and-a-trust-differences', function () {
    return view('blogs.will_and_a_trust_differences');
});

Route::get('/steps-for-selling-property-in-india-and-repatriation-of-money-to-usa', function () {
    return view('blogs.steps-for-selling-property-in-india-and-repatriation-of-money-to-usa');
});

Route::get('/4-main-areas-of-focus-for-the-first-quarter-2022', function () {
    return view('blogs.gale-ranch-notary-apostille-and-financial-services');
});

Route::get('/how-to-change-your-legal-name-in-california-and-acorss-the-us', function () {
    return view('blogs.how-to-change-your-legal-name-in-california-and-acorss-the-us');
});

Route::get('/estate-planning-contains-following-documents', function () {
    return view('blogs.estate-planning-contains-following-documents');
});

Route::get('/estate-planning-will-trust-advance-health-care-directive-2', function () {
    return view('blogs.estate-planning-will-trust-advance-health-care-directive-2');
});

Route::get('/power-of-attorney-to-india-steps', function () {
    return view('blogs.power-of-attorney-to-india-steps');
});

Route::get('/usa-to-india-and-india-to-usa-travel-requirements', function () {
    return view('blogs.usa-to-india-and-india-to-usa-travel-requirements');
});

Route::get('/life-insurance-tips', function () {
    return view('blogs.life_insurance_tips');
});

Route::get('/POAGaleRanchNotary', function () {
    return view('blogs.POAGaleRanchNotary');
});

Route::get('/beneficiary-designations-override-your-Will-or-Trust', function () {
    return view('blogs.beneficiary-designations-override-your-Will-or-Trust');
});

Route::get('/buy-a-car-extended-warranty', function () {
    return view('blogs.buy-a-car-extended-warranty');
});

Route::get('/Protection-Tips-for-Families-&-Professionals', function () {
    return view('blogs.Protection-Tips-for-Families-&-Professionals');
});

Route::get('/current-outbreak-of-COVID-19', function () {
    return view('blogs.current-outbreak-of-COVID-19');
});

Route::get('/subscribe', function () {
    return view('subscribeForm');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/sitemap.xml', function () {
    return view('siteMap.index');
});

Route::get('/apostille-service', function () {
    return view('apostille_service');
});

Route::get('/mobile-notary', function () {
    return view('mobileNotary');
});

Route::get('/legalservice', function () {
    return view('legalservice');
});

Route::get('/document-notarization', function () {
    return view('documentNotarization');
});





Route::post('/sendemail',[SendEmailController::class, 'send'])->name('sendemail');
Route::post('/sendemailApostille',[SendEmailController::class, 'sendemailApostille'])->name('sendemailApostille');
Route::post('/sendsubscribeemail',[SubscribeController::class, 'send'])->name('sendSubscribeemail');
Route::post('/sendBlogEmail',[BlogController::class, 'sendCompleteGuideForm'])->name('sendBlogEmail');
