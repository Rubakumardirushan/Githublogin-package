<?php
use Illuminate\Support\Facades\Route;
use Dirushan\Githublogin\Http\Controllers\GithubController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['web'])->group(function () {
    Route::get('/login/github', [GithubController::class, 'redirectToProvider'])->name('githublogin.login');
    Route::get('/callback', [GithubController::class, 'handleProviderCallback']);
    Route::get('/github', [GithubController::class, 'welcome'])->name('githublogin.welcome');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('githublogin.logout');
});