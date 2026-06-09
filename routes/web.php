<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog-detail',[HomeController::class,'blogDetail'])->name('blog-detail');
Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/pteonline',[HomeController::class,'pteonline'])->name('pteonline');
Route::get('/pteoffline',[HomeController::class,'pteoffline'])->name('pteoffline');
Route::get('/german',[HomeController::class,'german'])->name('german');
Route::get('/ielts',[HomeController::class,'ielts'])->name('ielts');
Route::get('/englishonline',[HomeController::class,'englishonline'])->name('englishonline');
Route::get('/englishoffline',[HomeController::class,'englishoffline'])->name('englishoffline');
Route::get('/support',[HomeController::class,'support'])->name('support');
Route::get('/privacy-policy',[HomeController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/termcondition',[HomeController::class,'termCon'])->name('termcondition');
Route::get('/visa',[HomeController::class,'visa'])->name('visa');




