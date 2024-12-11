<?php

use App\Livewire\Admin\Education;
use App\Livewire\Admin\Experience;
use App\Livewire\Admin\Overview;
use App\Livewire\Admin\Service;
use App\Livewire\Blog;
use App\Livewire\Home;
use App\Livewire\Portfolio;
use App\Livewire\Admin\Portfolio as Port;
use App\Livewire\Resume;
use App\View\Components\AdminLayout;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Info;

Route::get("/",Home::class)->name('home');
Route::get('resume',Resume::class)->name('resume');
Route::get('portfolio',Portfolio::class)->name('portfolio');
Route::get('blog',Blog::class)->name('blog');

Route::get("/language/{locale}",function($locale){
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::prefix('admin')->group(function () {
    Route::get('info', Info::class)->name('info');
    Route::get('edu', Education::class)->name('edu');
    Route::get('overview', Overview::class)->name('ove');
    Route::get('experience', Experience::class)->name('exp');
    Route::get('service', Service::class)->name('ser');
    Route::get('port',Port::class)->name('port');


});