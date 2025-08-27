<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\ManajemenBuku\Index;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // ini yang benar, bukan facade
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',Dashboard::class)->name('dashboard.index');
Route::get('/login',Login::class)->name('login');
Route::get('/register',Register::class)->name('register');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/buku-index', Index::class)->name('buku.index');
#logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/dashboard');
})->name('logout');

