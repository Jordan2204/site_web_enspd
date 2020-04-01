<?php

Route::get('/homeRespCom', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respcom')->user();

    //dd($users);
     $communiquerET  = DB::table('communiquer')->where('destinataireCom','etudiants')->first();
     $communiquerPU  = DB::table('communiquer')->where('destinataireCom','public')->first();


    session(['id_user' => Auth::user()->id,'auth' => Auth::user()->auth,
    		'name' => Auth::user()->name,'prenom' => Auth::user()->prenom,
    		'communiquerET' => $communiquerET,'communiquerPU' =>  $communiquerPU,
            'role' => 'respcom']);

    return view('respcom.homeRespCom');
})->name('home');

