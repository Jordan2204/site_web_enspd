<?php

Route::get('/homeRespEcoleDoct', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respecoledoct')->user();

    //dd($users);
    $file_E3M_ID  = DB::table('medias')->where([['titre','E3M'],['chemin','storage/fichiers']])->value('id');
    $file_UFD_ID = DB::table('medias')->where([['titre','UFD'],['chemin','storage/fichiers']])->value('id');
 	
    $idLabo = 1;
    session([
    	'idLabo' => $idLabo,
    	'id_user' => Auth::user()->id,
    	'auth' => Auth::user()->auth,
    	'name' => Auth::user()->name,
    	'prenom' => Auth::user()->prenom,
    	'role' => 'respecoledoct',
    	'file_E3M_ID' => $file_E3M_ID,
    	'file_UFD_ID' => $file_UFD_ID
    ]);

    return view('respecoledoct.homeRespEcoleDoct');
})->name('home');

