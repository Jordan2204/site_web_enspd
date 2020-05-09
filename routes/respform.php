<?php

Route::get('/homeRespForm', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respform')->user();

    //dd($users);

   //Recuperation des infos
    $ensID  = DB::table('formenseigchoixbref')->where('codeFECB','EnsFGI')->value('id');
    $formID = DB::table('formenseigchoixbref')->where('codeFECB','FormFGI')->value('id');
 	$choixID = DB::table('formenseigchoixbref')->where('codeFECB','ChoixFGI')->value('id');
 	$brefID = DB::table('formenseigchoixbref')->where('codeFECB','BrefFGI')->value('id');

    //Recupération des images
    $img_ensID  = DB::table('medias')->where('titre','EnsFGI')->value('id');
    $img_formID = DB::table('medias')->where('titre','FormFGI')->value('id');
    $img_choixID = DB::table('medias')->where('titre','ChoixFGI')->value('id');
    $img_brefID = DB::table('medias')->where('titre','BrefFGI')->value('id');

    //Gestion des autorisations
     $date_gestion = DB::select('SELECT date_Auth,UNIX_TIMESTAMP(ADDDATE(date_Auth, INTERVAL 2 DAY)) AS heure_ajouter,UNIX_TIMESTAMP(NOW()) as heure_maintenant,TIMEDIFF(ADDDATE(date_Auth, INTERVAL 2 DAY),NOW()) as difference
                                FROM respforms
                                WHERE id = ?',[Auth::user()->id]);

     if(!empty($date_gestion[0]->date_Auth))
     {
        if ( $date_gestion[0]->heure_ajouter <=  $date_gestion[0]->heure_maintenant)
         {
           DB::update('UPDATE respforms
                       SET auth = 0,date_Auth = null
                       WHERE id = ?', [Auth::user()->id]);
        }
     }


   //Enregistrement des variables dans la session
    session([
        'name' => Auth::user()->name,
        'prenom' => Auth::user()->prenom,
        'auth' => Auth::user()->auth,
        'id_user' => Auth::user()->id,
        'ensID' => $ensID,
        'formID' => $formID,
        'choixID' => $choixID,
        'brefID' => $brefID,
        'img_ensID' => $img_ensID,
        'img_formID' => $img_formID,
        'img_choixID' => $img_choixID,
        'img_brefID' => $img_brefID,
        'role' => 'respform'
    ]);

    return view('respform.homeRespForm',['date_gestion' => $date_gestion[0]]);
})->name('home');

