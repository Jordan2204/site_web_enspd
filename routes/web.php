<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


if(Auth::guest()){
   //Recuperation des infos
      $ensID  = DB::table('formenseigchoixbref')->where('codeFECB','EnsFGI')->value('id');
      $formID = DB::table('formenseigchoixbref')->where('codeFECB','FormFGI')->value('id');
      $choixID = DB::table('formenseigchoixbref')->where('codeFECB','ChoixFGI')->value('id');
      $brefID = DB::table('formenseigchoixbref')->where('codeFECB','BrefFGI')->value('id');


    
      //Insolite 
       //$insolites = DB::table('medias')->where('description','insolite')->get();
       $insolites = DB::select('SELECT * from medias where description = ?',['insolite']);
       $nbreInsolite = DB::select('SELECT count(*) from medias where description = ?',['insolite']);
        $numInsolite = rand(0,intval($nbreInsolite) - 1 );
        $insolite =  $insolites[$numInsolite];
     
       
      
       //Communiqués
        $comET = DB::table('communiquer')->where('destinataireCom','etudiants')->value('id');
        $comPU = DB::table('communiquer')->where('destinataireCom','public')->value('id');
        
       //Ligne
        $line = DB::table('medias')->where('titre','line')->first();
        $iconeFGI = DB::table('medias')->where('titre','ico_fgi')->first();
        $img_home_Bk = DB::table('medias')->where('titre','Home_BK')->first();
       
        //doyen
        $doyen = DB::select('SELECT p.gradePers,p.nomPers,p.prenomPers,p.postePers,md.nom,md.chemin
                            FROM medias md, personnel p 
                            WHERE md.id = p.media_id and p.postePers = ?',['Doyen']);
        //logos
        $logom = DB::table('medias')->where('titre','img_email')->first();
        $logoy = DB::table('medias')->where('titre','logo_youtube')->first();
        $logot = DB::table('medias')->where('titre','logo_twitter')->first();
       
        //Les mini img des dept
        $mini_icones = DB::select("
              SELECT dept.id as idDept,md.titre,md.id,md.chemin,md.nom,md.description
              FROM departement as dept, medias as md
              where md.titre = dept.ABBR and md.description = ? 
              UNION
              SELECT labo.id as idLabo,md.titre,md.id,md.chemin,md.nom,md.description
              FROM  medias as md, labo
              where labo.nomLabo = md.titre and md.description = ?  ",['mini_icone_dept','mini_icone_labo']);


        //Citation 
       $citations = DB::table('citations')->get();
       $nbreCitation = DB::select('select count(*) from citations');
       $numCitation = rand(0,intval($nbreCitation) );
       $citation =  $citations[$numCitation];

       //Les news
        $mediasAgenda = DB::select("
              select md.id,md.chemin,md.nom,md.description
              from news as ns, medias as md
              where md.id = ns.media_id and ns.categorie = ?
              ",['agenda']);

        $mediasActu = DB::select("
              select md.id,md.chemin,md.nom,md.description
              from news as ns, medias as md
              where md.id = ns.media_id and ns.categorie = ?
              ",['actualites']);

        //Fichier responsable ecole doctorale
        $fileE3M  = DB::table('medias')->where([['titre','E3M'],['chemin','storage/fichiers']])->first();
        $fileUFD = DB::table('medias')->where([['titre','UFD'],['chemin','storage/fichiers']])->first();
     
      //Enregistrement des variables dans la session
      session([
          'ensID' => $ensID ,
          'formID' => $formID,
          'choixID' => $choixID,
          'brefID' => $brefID,
          'iconeFGI'=> $iconeFGI,
          'insoliteChemin' => $insolite->chemin,
          'insoliteNom' => $insolite->nom,
          'lineChemin' => $line->chemin,
          'lineNom' => $line->nom,
          'logoyChemin' => $logoy->chemin,
          'logoyNom' => $logoy->nom,
          'logotChemin' => $logot->chemin,
          'logotNom' => $logot->nom,
          'citationAuteur' => $citation->nomAuteur,
          'citationCitation' => $citation->citationAuteur,
          'citationDescriptionAuteur' => $citation->descriptionAuteur,
          'mini_icones' => $mini_icones,
          'mediasAgenda' => $mediasAgenda,
          'mediasActu' => $mediasActu,
          'doyen' => $doyen[0],
          'logom '=> $logom,
          'comPU '=> $comPU,
          'comET '=> $comET,
          'img_home_Bk_nom '=> $img_home_Bk->nom,
          'img_home_Bk_chemin '=> $img_home_Bk->chemin,
          'fileE3MN ' => $fileE3M->nom,
          'fileUFDN ' => $fileUFD->nom,
        
      ]);
}

Route::get('/', function () {

    return view('acceuil');
});

Route::group(['prefix' => '/'], function () {


  //Accès a l'interface d'admin
  Route::resource('administrationInterface','AdministrationInterfaceController');

  //Pour l'authentification
  //Route::auth();

  //Gestion du département
  Route::resource('departementNA', 'DepartementController', ['except' => ['create', 'update','store','delete']]);

  //Info FGI
      Route::resource('infosfgiNA', 'InfosFGIController');

  //Dossiers FGI
      Route::get('dossiersPartenairesNA', 'DossierController@getDossiers');

  //Communiqués
      Route::resource('communiquerNA', 'CommuniquerController', ['except' => ['create', 'update','store','delete']]);
      
  //Labo E3M
      //Route::resource('labo', 'LaboController'['except' => ['edit', 'create','store','show']]);
      Route::resource('laboNA', 'LaboController',['except' => ['edit', 'create','store']]);

  //Formations doctorales
      Route::get('formationsdoctoralesNA','FormationsDoctoralesController@index');
  //Administration centrale 
    Route::get('adminCentNA', 'PersonnelController@adminCentsManage');

   
  Route::resource('infosConcours', 'ConcoursController', ['except' => ['create', 'update','store','delete']]);

  //Route::resource('user', 'UserController');
  //Route::resource('doctsfgi', 'InfosFGIController');
  // Route::resource('concorat1', 'Doctorat1Controller');
  //Route::resource('masteriirech', 'MasterIIRechController');
  Route::resource('contactNA', 'ContactController');

  //Route::resource('etudiantconcours', 'EtudiantConcoursController');
  Route::resource('centredincubationNA', 'CentreDincubationController');
  //Route::resource('miseajour', 'MiseAJourController');
  //Route::resource('telechargement', 'TelechargementController');

  //Pour le telechargement des fichiers
  //Route::get('/download/{fichier}','FileDownloadController');

  Route::resource('dossierNA', 'DossierController');

});

Route::group(['prefix' => 'admin'], function () {

 
  Route::resource('admin', 'AdminController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('doyen', 'DoyenController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('respDept', 'RespDeptController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('respCentInc', 'RespCentIncController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('respForm', 'RespFormController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('respEcoleDoct', 'respEcoleDoctController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('respCom', 'respComController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::Resource('personnel','PersonnelController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('adminCent','PersonnelController@store')->name('personnel.admin.store');

  Route::get('usersManage', 'AdminController@usersManage')->middleware('App\Http\Middleware\RedirectIfNotAdmin');


//Gestion des medias
  Route::resource('mediasAdmin', 'MediaController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::resource('typemedia', 'TypeMediaController');
  Route::get('mediasManage/img', 'MediaController@getFormImg')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::get('mediasManage/file', 'MediaController@getFormFile')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::get('mediasManage/video', 'MediaController@getFormVideo')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  
  Route::post('mediasManage/img', 'MediaController@postFormImg')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('mediasManage/file', 'MediaController@postFormFile')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('mediasManage/video', 'MediaController@postFormVideo')->middleware('App\Http\Middleware\RedirectIfNotAdmin');


//Gestion des départements
  Route::resource('departementAdmin', 'DepartementController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

//Gestion des informations sur la FGI
   Route::resource('infosfgiAdmin', 'InfosFGIController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

//Gestion de l'administration centrale
   Route::get('adminCent', 'PersonnelController@adminCentsManage')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
   Route::delete('/personnel/destroy/{idPers}/{choixM}','PersonnelController@destroyP')->name('personnel.destroyP')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
   //Modifier le responsable
   // Route::get('personnel/show/{id}','PersonnelController@show')->name('personnel.showA')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
    //Route::post('personnel/{id}/edit','PersonnelController@edit')->name('personnel.editA')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
    Route::put('personnel/{id}','PersonnelController@update')->name('personnel.updateA')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

//Dossiers de la fgi
  Route::resource('docPartenaires', 'DossierController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::get('dossiersManage', 'DossierController@index')->middleware('App\Http\Middleware\RedirectIfNotAdmin');


//Labo E3M
    Route::resource('labo', 'LaboController')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

// Un admin peut creer un respform
  Route::get('/register/respform', 'RespformAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/respform', 'RespformAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');


  // Un admin peut creer un doyen
   Route::get('/register/doyen', 'DoyenAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/doyen', 'DoyenAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

  // Un admin peut creer un respdept
  Route::get('/register/respdept', 'RespdeptAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/respdept', 'RespdeptAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');


  // Un admin peut creer un respcentinc
 Route::get('/register/respcentinc', 'RespcentincAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/respcentinc', 'RespcentincAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

  // Un admin peut creer un respecoledoct
  Route::get('/register/respecoledoct', 'RespecoledoctAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/respecoledoct', 'RespecoledoctAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');

// Un admin peut creer un respcom
  Route::get('/register/respcom', 'RespcomAuth\RegisterController@showRegistrationForm')->name('register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');
  Route::post('/register/respcom', 'RespcomAuth\RegisterController@register')->middleware('App\Http\Middleware\RedirectIfNotAdmin');



  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::group(['prefix' => 'respform'], function () {
  Route::get('/login', 'RespformAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RespformAuth\LoginController@login');
  Route::post('/logout', 'RespformAuth\LoginController@logout')->name('logout');

  Route::resource('respformform','RespFormController')->middleware('App\Http\Middleware\RedirectIfNotRespform');
   Route::resource('mediasRespform', 'MediaController')->middleware('App\Http\Middleware\RedirectIfNotRespform');
  //Info FGIs
    Route::resource('infosfgi', 'InfosFGIController',['except' => ['create', 'store']])->middleware('App\Http\Middleware\RedirectIfNotRespform');

 // Route::get('/register', 'RespformAuth\RegisterController@showRegistrationForm')->name('register');
  //Route::post('/register', 'RespformAuth\RegisterController@register');

  Route::post('/password/email', 'RespformAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RespformAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RespformAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RespformAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'respdept'], function () {
  Route::resource('departement', 'DepartementController', ['except' => ['show', 'index','store']]);
  //Creer le responsable
  Route::post('responsable','PersonnelController@store')->name('personnel.respdept.store')->middleware('App\Http\Middleware\RedirectIfNotRespdept');

 
  Route::resource('personnelDept','PersonnelController')->middleware('App\Http\Middleware\RedirectIfNotRespdept');
  
  //Supprimer le responsable
  Route::delete('/personnel/destroyD/{idPers}/{choixM}','PersonnelController@destroyP')->name('personnel.destroyD')->middleware('App\Http\Middleware\RedirectIfNotRespdept');

   
  Route::get('responsablesManage','DepartementController@responsablesManage')->middleware('App\Http\Middleware\RedirectIfNotRespdept');

  //Gestion des médias
    Route::resource('mediasDept', 'MediaController')->middleware('App\Http\Middleware\RedirectIfNotRespdept');
  
  
   Route::resource('respdeptRD', 'RespDeptController',['except' => ['edit', 'update']])->middleware('App\Http\Middleware\RedirectIfNotRespdept');
  Route::get('/login', 'RespdeptAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RespdeptAuth\LoginController@login');
  Route::post('/logout', 'RespdeptAuth\LoginController@logout')->name('logout');

  //Route::get('/register', 'RespdeptAuth\RegisterController@showRegistrationForm')->name('register');
  //Route::post('/register', 'RespdeptAuth\RegisterController@register');

  Route::post('/password/email', 'RespdeptAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RespdeptAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RespdeptAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RespdeptAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'respcentinc'], function () {
  Route::get('/login', 'RespcentincAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RespcentincAuth\LoginController@login');
  Route::post('/logout', 'RespcentincAuth\LoginController@logout')->name('logout');

//  Route::get('/register', 'RespcentincAuth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'RespcentincAuth\RegisterController@register');

  Route::post('/password/email', 'RespcentincAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RespcentincAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RespcentincAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RespcentincAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'doyen'], function () {
  Route::get('/login', 'DoyenAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DoyenAuth\LoginController@login');
  Route::post('/logout', 'DoyenAuth\LoginController@logout')->name('logout');

//  Route::get('/register', 'DoyenAuth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'DoyenAuth\RegisterController@register');

  Route::post('/password/email', 'DoyenAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DoyenAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DoyenAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DoyenAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'respecoledoct'], function () {

  Route::resource('labo', 'LaboController',['except' => ['show']])->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');
   Route::get('/personnel/add/{choixM}/{idPers}','PersonnelController@add')->name('personnel.add');
  Route::delete('/personnel/destroy/{idPers}/{choixM}','PersonnelController@destroyP')->name('personnel.destroyP');
  Route::Resource('personnel','PersonnelController')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');
  ;
  
   Route::resource('partenairelabo', 'PartenaireLaboController')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');
  Route::resource('typemembre', 'TypeMembreController')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');

  //Gestion des membres
  Route::get('membersManage','LaboController@membersManage')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');

  //Gestion des medias
  Route::resource('mediasRespecoledoct', 'MediaController')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');
  //Formations Doctorales
   Route::resource('formationsdoctorales','FormationsDoctoralesController')->middleware('App\Http\Middleware\RedirectIfNotRespecoledoct');

  Route::get('/login', 'RespecoledoctAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RespecoledoctAuth\LoginController@login');
  Route::post('/logout', 'RespecoledoctAuth\LoginController@logout')->name('logout');

//  Route::get('/register', 'RespecoledoctAuth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'RespecoledoctAuth\RegisterController@register');

  Route::post('/password/email', 'RespecoledoctAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RespecoledoctAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RespecoledoctAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RespecoledoctAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'respcom'], function () {
  Route::resource('respcomcom', 'respComController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::resource('communiquer', 'CommuniquerController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');

  Route::resource('insolite', 'InsoliteController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::resource('news', 'NewsController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::resource('citation', 'CitationController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('/login', 'RespcomAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'RespcomAuth\LoginController@login');
  Route::post('/logout', 'RespcomAuth\LoginController@logout')->name('logout');

  //Gestion des medias
  Route::resource('mediasRespcom', 'MediaController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::resource('typemedia', 'TypeMediaController')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('mediasManage/img', 'MediaController@getFormImg')->middleware('App\Http\Middleware\RedirectIfRespcom');
  Route::get('mediasManage/file', 'MediaController@getFormFile')->middleware('App\Http\Middleware\RedirectIfRespcom');
  Route::get('mediasManage/video', 'MediaController@getFormVideo');
  
  Route::post('insolitesManage', 'MediaController@postFormImg')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::post('newsManage', 'MediaController@postFormImg')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::post('mediasManage/file', 'MediaController@getFormFile')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::post('mediasManage/video', 'MediaController@getFormVideo')->middleware('App\Http\Middleware\RedirectIfNotRespcom');


  Route::get('citationsManage', 'respComController@citationsManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('insolitesManage', 'respComController@insolitesManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('newsManage', 'respComController@newsManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('agendaManage', 'respComController@agendaManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('actualitesManage', 'respComController@actuManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  
  Route::get('communiquerEtManage', 'respComController@EtManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('communiquerVisManage', 'respComController@VisManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');
  Route::get('communiquerPersManage', 'respComController@PersManage')->middleware('App\Http\Middleware\RedirectIfNotRespcom');

//  Route::get('/register', 'RespcomAuth\RegisterController@showRegistrationForm')->name('register');
//  Route::post('/register', 'RespcomAuth\RegisterController@register');

  Route::post('/password/email', 'RespcomAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'RespcomAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'RespcomAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'RespcomAuth\ResetPasswordController@showResetForm');
});
