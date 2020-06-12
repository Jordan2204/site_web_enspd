<?php

Route::get('/homeRespCom', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respcom')->user();

    //dd($users);
     $communiquerET  = DB::table('communiquer')->where('destinataireCom','etudiants')->first();
     $communiquerPU  = DB::table('communiquer')->where('destinataireCom','public')->first();

     //Gestion des autorisations
     $date_gestion = DB::select('SELECT date_Auth,UNIX_TIMESTAMP(ADDDATE(date_Auth, INTERVAL 2 DAY)) AS heure_ajouter,UNIX_TIMESTAMP(NOW()) as heure_maintenant,TIMEDIFF(ADDDATE(date_Auth, INTERVAL 2 DAY),NOW()) as difference
                                FROM respcoms
                                WHERE id = ?',[Auth::user()->id]);

     if(!empty($date_gestion[0]->date_Auth))
     {
        if ( $date_gestion[0]->heure_ajouter <=  $date_gestion[0]->heure_maintenant)
         {
           DB::update('UPDATE respcoms
                       SET auth = 0,date_Auth = null
                       WHERE id = ?', [Auth::user()->id]);
        }
     }

    session(['id_user' => Auth::user()->id,'auth' => Auth::user()->auth,
    		'name' => Auth::user()->name,'prenom' => Auth::user()->prenom,
    		'communiquerET' => $communiquerET,'communiquerPU' =>  $communiquerPU,
            'role' => 'respcom']);

    return view('respcom.homeRespCom',['date_gestion' => $date_gestion[0]]);
})->name('home');

