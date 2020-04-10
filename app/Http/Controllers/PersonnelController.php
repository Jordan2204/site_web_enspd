<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Gestion\ImgGestionInterface;
use App\Http\Requests\ImagesRequest;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\File;
use App\Media;

use App\Http\Requests\PersonnelCreateRequest;
use App\Repositories\PersonnelRepository;


class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $personnelRepository;
    protected $mediaRepository;
    protected $nbrPerPage = 20;
    
    public function __construct(PersonnelRepository $personnelRepository,MediaRepository $mediaRepository)
    {
        $this->personnelRepository = $personnelRepository;
        $this->mediaRepository = $mediaRepository;

    }

    public function adminCentsManage()
    {
        $persoAdminCents = DB::select('
          SELECT p.id as idPers,p.gradePers,p.nomPers,p.matPers,p.prenomPers, p.postePers,md.id as idM,md.chemin,md.nom
          from personnel p, medias md, typepersonnel tp, typepersonnel_personnel tpp
          where p.media_id = md.id and
                           p.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel = tp.idTypePersonnel and tp.libelleTypePersonnel = ?
      ',['MAdminCent']);
       
        if( url()->current() == 'http://fgi-udo.local/adminCentNA') 
         {
           return view('frontend.administrationcentrale',compact('persoAdminCents'));

         }else{

          return view('backend.admin.adminCent.index',compact('persoAdminCents')); 
          
         }
   
    }
    public function index(Request $request)
    {
        $choixM = $request->input('ChoixM');
        $personnels = $this->personnelRepository->getPaginate($this->nbrPerPage);
        $links = $personnels->render();
        return view('backend.respecoledoct.searchPersonnel',compact('personnels','link','choixM'));
    }

   
    public function add($choixM, $perId)
    {
         $idM = DB::table('typepersonnel')->where('libelleTypePersonnel',$choixM)->value('idTypePersonnel');

        DB::update('UPDATE personnel SET Labo_idLabo = ? where id = ? ',[1,$perId]);
        DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idM, $perId,1,null]);

         return redirect('respecoledoct/membersManage')->withOk("Le Membre " . " a été créer.");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(url()->current() == 'http://fgi-udo.local/respecoledoct/personnel/create'){

            return view('backend.respecoledoct.createMembre');

        }elseif(url()->current() == 'http://fgi-udo.local/respdept/personnelDept/create'){

            return view('backend.respdept.responsables.createResponsable');

        }elseif(url()->current() == 'http://fgi-udo.local/admin/personnel/create') {

            return view('backend.admin.adminCent.createAdminCent');
        }
       
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonnelCreateRequest $request, ImgGestionInterface $imggestion)
    {
        $request->request->add(['matPers' => str_random(8)]);
        $request->request->add(['description' => '']);
        $matPers = $request->input('matPers'); 
        $idMedia = 0;
        if($request->is('admin/*')){

            if($imggestion->save($request->all())) {

                $idMedia = DB::table('medias')->where('titre', $matPers )->value('id');
               
            }
            $request->request->add(['media_id' => $idMedia]);
            $adminCent = $this->personnelRepository->store($request->all());

            $idType = DB::table('typepersonnel')->where('libelleTypePersonnel','MAdminCent')->value('idTypePersonnel');
            $idPers = DB::table('personnel')->where('matPers',$matPers)->value('id');
            DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idType, $idPers,1,null]);
           
            return redirect('/admin/adminCent');

        }elseif($request->is('respecoledoct/*')){
            $membre = $this->personnelRepository->store($request->all());

            $idType = DB::table('typepersonnel')->where('libelleTypePersonnel',$request->input('typeMLabo'))->value('idTypePersonnel');
            //$idLab = DB::table('labo')->where('id',$request->input('Labo_idLabo'))->value('id');
            $idMemebre = DB::table('personnel')->where('matPers',$request->input('matPers'))->value('id');
            DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idType, $idMemebre,1,null]);

     
            return redirect('respecoledoct/membersManage')->withOk("Le membre " . $membre->nomPers . " a été créé.");

        }elseif($request->is('respdept/*')){

            $idDept = session('idDept');
            $lieuDeServicePers = 'Université de Douala';
            $request->request->add(['lieuDeServicePers' => $lieuDeServicePers ]);
            $request->request->add(['Departement_idDepartement' =>  $idDept  ]);
            $idRespAcad = DB::table('typepersonnel')->where('libelleTypePersonnel','RespAcad')->value('idTypePersonnel');
            $idRespStage = DB::table('typepersonnel')->where('libelleTypePersonnel','RespStage')->value('idTypePersonnel');
             
            if (empty($request->input('respStage')) && empty($request->input('respAcad'))) 
            {
                 return redirect('respdept/responsablesManage')->withOk("Le responsable " . $pers->nomPers . " n'a pas été créé.");
            }   
            if ($request->input('respStage') && $request->input('respAcad') ) {
                $request->request->add(['postePers' => 'Responsable Académique et Stage']);
                $pers = $this->personnelRepository->store($request->all());

                $idPers = DB::table('personnel')->where('matPers',$request->input('matPers'))->value('id');
               
                 DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespAcad, $idPers,1,null]);
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespStage, $idPers,1,null]);


            }else{

                if ($request->input('respStage')) {
                $request->request->add(['postePers' => 'Responsable Stage']);
                $pers = $this->personnelRepository->store($request->all());

                $id = DB::table('personnel')->where('matPers',$request->input('matPers'))->value('id');
              
                $idRespStage = DB::table('typepersonnel')->where('libelleTypePersonnel','RespStage')->value('idTypePersonnel');
             
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespStage, $id,1,null]);

         
                }
            if ($request->input('respAcad')) {
               $request->request->add(['postePers' => 'Responsable Académique']);
               $pers = $this->personnelRepository->store($request->all());

                $id = DB::table('personnel')->where('matPers',$request->input('matPers'))->value('id');
                $idRespAcad = DB::table('typepersonnel')->where('libelleTypePersonnel','RespAcad')->value('idTypePersonnel');
                       
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespAcad, $id,1,null]);
                
                } 
            }
           
         
            return redirect('respdept/responsablesManage')->withOk("Le responsable " . $pers->nomPers . " a été créer.");
            }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          if( session('role') == 'respecoledoct')
        {
            $membre = $this->personnelRepository->getById($id);
          
            return view('backend.respecoledoct.showMembre',compact('membre'));

        }elseif(session('role') == 'respdept'){
            $resp = $this->personnelRepository->getById($id);

            return view('backend.respdept.responsables.showResponsable', compact('resp'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if( session('role') == 'respecoledoct')
        {
            $membre = DB::table('personnel')->where('id',$id)->first();

            return view('backend.respecoledoct.editMembre',compact('membre'));

        }elseif(session('role') == 'respdept'){

            $resp = DB::table('personnel')->where('id',$id)->first();
            $etaitrespAcad = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and per.id = ? and tp.libelleTypePersonnel = ?
      ',[$id,'RespAcad']);
        

            $etaitrespStage = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and  per.id = ? and tp.libelleTypePersonnel = ? 
      ',[$id,'RespStage']);

        return view('backend.respdept.responsables.updateResponsable',compact('resp','etaitrespAcad','etaitrespStage'));
        }elseif (session('role') == 'admin') {

            $adminCent = DB::table('personnel')->where('id',$id)->first();
             return view('backend.admin.adminCent.editAdmincent',compact('adminCent'));
            
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ( session('role') == 'admin')
        {
            $this->personnelRepository->update($id, $request->all()); 
            return redirect('admin/adminCent')->withOk("Le responsable " . $request->input('nomPers') . " a été modifié.");


        }elseif( session('role') == 'respecoledoct')
        { 
            
            $this->personnelRepository->update($id, $request->all()); 



            return redirect('respecoledoct/membersManage')->withOk("Le responsable " . $request->input('nomPers') . " a été modifié.");

        }elseif(session('role') == 'respdept')
        {

            $this->personnelRepository->update($id, $request->all());

    //Vérification de l'état d'avant
        $resp = DB::table('personnel')->where('id',$id)->first();
        $etaitrespAcad = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and per.id = ? and tp.libelleTypePersonnel = ?
      ',[$id,'RespAcad']);
        

        $etaitrespStage = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and  per.id = ? and tp.libelleTypePersonnel = ? 
      ',[$id,'RespStage']);


        $idRespAcad = DB::table('typepersonnel')->where('libelleTypePersonnel','RespAcad')->value('idTypePersonnel');
        $idRespStage = DB::table('typepersonnel')->where('libelleTypePersonnel','RespStage')->value('idTypePersonnel');

        //Nouveau cas
        if (empty($request->input('respStage')) && empty($request->input('respAcad'))) 
        {
             return redirect('respdept/responsablesManage')->withOk("Le responsable " . $pers->nomPers . " n'a pas été modifié.");
        }  
           
        if ($request->input('respStage') && $request->input('respAcad') ) {
            //IL n'était pas responsable de stage
            if (empty($etaitrespStage)) {
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespStage, $id,1,null]);
            }
            //IL n'était pas responsable académique
            if (empty($etaitrespAcad)) {
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespAcad, $id,1,null]);
            }
            //Mise a jour des autre champ
            $request->request->add(['postePers' => 'Responsable Académique et Stage']);
            $pers = $this->personnelRepository->update($id, $request->all());


        }else{

            if ($request->input('respStage')) {
            $request->request->add(['postePers' => 'Responsable Stage']);
             //IL n'était pas responsable de stage
            if (empty($etaitrespStage)) {
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespStage, $id,1,null]);
            }
            //IL était pas responsable académique
            if (!empty($etaitrespAcad)) {
                DB::delete('DELETE FROM typepersonnel_personnel WHERE Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id,$idRespAcad]);
            }
              $pers = $this->personnelRepository->update($id,$request->all());
         
            }
        if ($request->input('respAcad')) {
           $request->request->add(['postePers' => 'Responsable Académique']);
            //IL n'était pas responsable académique
            if (empty($etaitrespAcad)) {
                DB::insert('INSERT INTO typepersonnel_personnel VALUES(?,?,?,?) ',[$idRespAcad, $id,1,null]);
            }
             //IL était  responsable de stage
            if (!empty($etaitrespStage)) {
                DB::delete('DELETE FROM typepersonnel_personnel WHERE Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id,$idRespStage]);
            }

            $pers = $this->personnelRepository->update($id,$request->all());

            } 
        }
        
        return redirect('respdept/responsablesManage')->withOk("Le responsable " . $request->input('name') . " a été modifié.");
        }


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $this->personnelRepository->destroy($id);
    
        return back();
    }

    public function destroyP($id,$choixM)
    {
        $personnel = $this->personnelRepository->getById($id);
       
        if( session('role') == 'respecoledoct')
        { 
            $idType = DB::table('typepersonnel')->where('libelleTypePersonnel',$choixM)->value('idTypePersonnel');
           
            DB::update('UPDATE personnel set Labo_idLabo = ? WHERE id = ?',[0,$id]);

            DB::delete('DELETE  from typepersonnel_personnel where Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id, $idType]);

        }elseif(session('role') == 'respdept')
        {
            $idType = DB::table('typepersonnel')->where('libelleTypePersonnel','RespAcad')->value('idTypePersonnel');
            $idType2 = DB::table('typepersonnel')->where('libelleTypePersonnel','RespStage')->value('idTypePersonnel');

           DB::delete('DELETE  from typepersonnel_personnel where Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id, $idType]);
           DB::delete('DELETE  from typepersonnel_personnel where Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id, $idType2]);

        }elseif (session('role') == 'admin') {
            $media = DB::table('medias')->where('titre',$personnel->matPers)->first();
     
            $idType = DB::table('typepersonnel')->where('libelleTypePersonnel',$choixM)->value('idTypePersonnel');
           
           DB::delete('DELETE  from typepersonnel_personnel where Personnel_idPers = ? AND TypePersonnel_idTypePersonnel = ? ',[$id, $idType]);

            //Suppression du media
            $image_path = $media->chemin.'/'.$media->nom;
            if ($this->destroyInStorage($image_path)) {
                DB::delete('DELETE  from medias where titre = ? ',[$personnel->matPers]);
            }
                     
        }

        $perso = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

           FROM personnel per, typepersonnel_personnel tpp

           WHERE per.id = tpp.Personnel_idPers and per.id = ?',[$id]);
       
        if (empty($perso)) {

            $this->destroy($id);
        }

         return back();
    }

    public function destroyInStorage($image_path)
    {
     if(File::exists($image_path)){

      File::delete($image_path);
      return true;

    }else{
   
      return false;
    }
  }

}
