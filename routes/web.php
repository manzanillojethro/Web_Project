<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Group routes logreq
Route::middleware([LogRequests::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/homepage/{username?}', function ($username = 'Guest') {
        return view('homepage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('homepage');

    Route::get('/about/{username?}', function ($username = 'Guest') {
        return view('about', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('about');

    Route::get('/content/{username?}', function ($username = 'Guest') {
        return view('content', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('content');

});

// Form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');
    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }
    return redirect()->route('homepage', ['username' => $username]);
});

