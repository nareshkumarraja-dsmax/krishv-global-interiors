<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompletehomeinteriorsController;
use App\Http\Controllers\RenovationController;
use App\Http\Controllers\Home_automationController;
use App\Http\Controllers\UpvcController;
use App\Http\Controllers\CustomizedinteriordesignsController;
use App\Http\Controllers\FlooringController;
use App\Http\Controllers\FalseceilingController;
use App\Http\Controllers\CommercialinteriorsController;
use App\Http\Controllers\TurnkeyprojectsController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CarrerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReferandearnController;
use App\Http\Controllers\ChannelpartnerController;
// use App\Http\Controllers\DomoreController;
use App\Http\Controllers\TermsandconditionsController;
use App\Http\Controllers\PrivacypolicyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FormsController;


Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/about', [AboutController::class, "index"])->name('about');
Route::get('/complete-home-interiors', [CompletehomeinteriorsController::class, "index"])->name('complete_home_interiors');
Route::get('/renovation', [RenovationController::class, "index"])->name('renovation');
Route::get('/home-automation', [Home_automationController::class, "index"])->name('home_automation');
Route::get('/upvc', [UpvcController::class, "index"])->name('upvc');
Route::get('/customized-interior-designs', [CustomizedinteriordesignsController::class, "index"])->name('customized_interior_designs');
Route::get('/flooring', [FlooringController::class, "index"])->name('flooring');
Route::get('/false-ceiling', [FalseceilingController::class, "index"])->name('false_ceiling');
Route::get('/commercial-interiors', [CommercialinteriorsController::class, "index"])->name('commercial_interiors');
Route::get('/turnkey-projects', [TurnkeyprojectsController::class, "index"])->name('turnkey_projects');
Route::get('/tour', [TourController::class, "index"])->name('tour');
Route::get('/gallery', [GalleryController::class, "index"])->name('gallery');
Route::get('/carrer', [CarrerController::class, "index"])->name('carrer');
Route::get('/blog', [BlogController::class, "index"])->name('blog');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/contact', [ContactController::class, "index"])->name('contact');
Route::get('/referandearn', [ReferandearnController::class, "index"])->name('referandearn');
Route::get('/channel-partner', [ChannelpartnerController::class, "index"])->name('channel_partner');
// Route::get('/do-more', [DomoreController::class, "index"])->name('do_more');
Route::get('/termsandconditions', [TermsandconditionsController::class, "index"])->name('termsandconditions');
Route::get('/privacy-policy', [PrivacypolicyController::class, "index"])->name('privacy_policy');
Route::get('/faq', [FaqController::class, "index"])->name('faq');

Route::post('/enquiry-form', [ContactController::class, 'submitEnquiryForm'])->name('enquiry-form');
