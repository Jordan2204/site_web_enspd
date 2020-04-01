<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respcentinc')->user();

    //dd($users);

    session(['id_user' => Auth::user()->id,'auth' => Auth::user()->auth,
    	'name' => Auth::user()->name,'prenom' => Auth::user()->prenom]);

    return view('respcentinc.home');
})->name('home');

