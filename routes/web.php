<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\PartnersController;
use App\Http\Controllers\Web\ClientsController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\QuoteController;
use App\Http\Controllers\Web\PrivacyController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\TermsController;
use App\Http\Controllers\Web\ThankYouController;
use App\Http\Controllers\Web\TechnologiesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/terms', [TermsController::class, 'index'])->name('terms');
Route::get('/thank-you', [ThankYouController::class, 'index'])->name('thank-you');
Route::get('/technologies', [TechnologiesController::class, 'index'])->name('technologies');
