<?php

Route::get('/homeRespEcoleDoct', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respecoledoct')->user();

    //dd($users);
    $file_E3M_ID  = DB::table('medias')->where([['titre','E3M'],['chemin','storage/fichiers']])->value('id');
    $file_UFD_ID = DB::table('medias')->where([['titre','UFD'],['chemin','storage/fichiers']])->value('id');
 	 //Gestion des autorisations
     $date_gestion = DB::select('SELECT date_Auth,UNIX_TIMESTAMP(ADDDATE(date_Auth, INTERVAL 2 DAY)) AS heure_ajouter,UNIX_TIMESTAMP(NOW()) as heure_maintenant,TIMEDIFF(ADDDATE(date_Auth, INTERVAL 2 DAY),NOW()) as difference
                                FROM respecoledocts
                                WHERE id = ?',[Auth::user()->id]);

     if(!empty($date_gestion[0]->date_Auth))
     {
        if ( $date_gestion[0]->heure_ajouter <=  $date_gestion[0]->heure_maintenant)
         {
           DB::update('UPDATE respecoledocts
                       SET auth = 0,date_Auth = null
                       WHERE id = ?', [Auth::user()->id]);
        }
     }


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

    return view('respecoledoct.homeRespEcoleDoct',['date_gestion' => $date_gestion[0]]);
})->name('home');

