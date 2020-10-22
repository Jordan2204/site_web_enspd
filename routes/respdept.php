<?php
	
Route::get('/homeRespDept', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respdept')->user();

    //dd($users);
  
    //Recuperation du departement correspondant
     $departement  = DB::table('departement')->where('ABBR',Auth::user()->refDept)->first();
     $mini_icone  = DB::table('medias')->where([['titre',$departement->ABBR],['description','mini_icone_dept']])->first();

     //Gestion des autorisations
     $date_gestion = DB::select('SELECT date_Auth,UNIX_TIMESTAMP(ADDDATE(date_Auth, INTERVAL 2 DAY)) AS heure_ajouter,UNIX_TIMESTAMP(NOW()) as heure_maintenant,TIMEDIFF(ADDDATE(date_Auth, INTERVAL 2 DAY),NOW()) as difference
                                FROM respdepts
                                WHERE id = ?',[Auth::user()->id]);

     if(!empty($date_gestion[0]->date_Auth))
     {
        if ( $date_gestion[0]->heure_ajouter <=  $date_gestion[0]->heure_maintenant)
         {
           DB::update('UPDATE respdepts 
                       SET auth = 0,date_Auth = null
                       WHERE id = ?', [Auth::user()->id]);
        }
     }

     $icone  = DB::table('medias')->where([['titre',$departement->ABBR],['description','icone_dept']])->first();


    session([

        'id_user' => Auth::user()->id,
        'auth' => Auth::user()->auth,
    	'name' => Auth::user()->name,
        'prenom' => Auth::user()->prenom,
        'idDept' => $departement->id,
        'role' => 'respdept',
        'icone' => $icone,
        'mini_icone' => $mini_icone

     ]);

       return view('respdept.homeRespDept',['departement ' => $departement,'date_gestion' => $date_gestion[0]]);

})->name('home');

