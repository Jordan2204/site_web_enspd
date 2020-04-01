<?php
	
Route::get('/homeRespDept', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('respdept')->user();

    //dd($users);
  
    //Recuperation du departement correspondant
     $departement  = DB::table('departement')->where('ABBR',Auth::user()->refDept)->first();
     $mini_icone  = DB::table('medias')->where([['titre',$departement->ABBR],['description','mini_icone_dept']])->first();

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

       return view('respdept.homeRespDept',['departement ' => $departement]);

})->name('home');

