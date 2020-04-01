<?php

Route::get('/homeDoyen', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('doyen')->user();

    //dd($users);
     session(['id_user' => Auth::user()->id,'auth' => Auth::user()->auth,
    	'name' => Auth::user()->name,'prenom' => Auth::user()->prenom]);
    return view('doyen.homeDoyen');
})->name('home');

