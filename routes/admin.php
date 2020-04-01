<?php

Route::get('/homeAdmin', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

     session(['id_user' => Auth::user()->id,'auth' => Auth::user()->auth,
    	'name' => Auth::user()->name,'prenom' => Auth::user()->prenom,'role' => 'admin']);

    return view('admin.homeAdmin');
})->name('home');

