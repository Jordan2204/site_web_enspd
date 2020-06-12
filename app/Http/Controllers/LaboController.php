<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Repositories\LaboRepository;
use App\Repositories\PartenaireLaboRepository;

use App\PartenaireLabo;
use App\Labo;
use App\Medias;

class LaboController extends Controller 
{
  protected $membresLaboRepository;
  protected $partenaireLaboRepository;
  protected $laboRepository;
  protected $mbresHs;
  protected $mbres;
  protected $coords;
  protected $partnaires;
  
  protected $nbrPerPage = 10;

  public function __construct(LaboRepository $laboRepository,PartenaireLaboRepository $partenaireLaboRepository)
  {
        $this->laboRepository = $laboRepository;
        $this->partenaireLaboRepository = $partenaireLaboRepository;

       $this->mbresHs = DB::select('SELECT p.id,p.gradePers,p.nomPers,p.prenomPers,p.lieuDeServicePers,p.postePers,l.nomLabo
                            FROM personnel p, typepersonnel tp, labo l, typepersonnel_personnel tpp
                            where p.Labo_idLabo = l.id and p.id = tpp.Personnel_idPers and tp.idTypePersonnel = tpp.TypePersonnel_idTypePersonnel and tp.libelleTypePersonnel = ? ',['MbH']);

       $this->mbres =  DB::select('SELECT p.id,p.gradePers,p.nomPers,p.prenomPers,p.lieuDeServicePers,p.postePers,l.nomLabo
                            FROM personnel p, typepersonnel tp, labo l, typepersonnel_personnel tpp
                            where p.Labo_idLabo  = l.id and p.id = tpp.Personnel_idPers and tp.idTypePersonnel = tpp.TypePersonnel_idTypePersonnel and tp.libelleTypePersonnel = ? ',['Mb']);

      $this->coords =  DB::select('SELECT p.id,p.gradePers,p.nomPers,p.prenomPers,p.lieuDeServicePers,p.postePers,l.nomLabo
                            FROM personnel p, typepersonnel tp, labo l, typepersonnel_personnel tpp
                            where p.Labo_idLabo  = l.id and p.id = tpp.Personnel_idPers and tp.idTypePersonnel = tpp.TypePersonnel_idTypePersonnel and tp.libelleTypePersonnel = ? ',['Coord']);

      $this->partnaires = DB::select('SELECT p.id,p.raison_socialePLabo,p.villePLabo,l.nomLabo
                                from partenairesLabo p, labo l
                                where  l.id = p.idLabo');



     
  }


  public function membersManage()
  {
    
    if (session('role') == 'admin') {

      return view('backend.admin.labo.membersManage',['mbresHs' => $this->mbresHs ,'mbres' => $this->mbres , 
            'coords' => $this->coords, 'partnaires' => $this->partnaires ]);
    }elseif (session('role') == 'respecoledoct') {

      return view('backend.respecoledoct.membersManage',['mbresHs' => $this->mbresHs ,'mbres' => $this->mbres , 
            'coords' => $this->coords, 'partnaires' => $this->partnaires ]);
    }
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('backend.admin.labo.createLabo');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $labo = $this->laboRepository->store($request->all());

    //recuperation de l'id du media
          $id =  DB::table('medias')->where('titre',$Labo->nomLabo)->value('id');

          //Mise a jour du media
          DB::update('update labo set media_id = ? where nomLabo = ?',[$id,$labo->nomLabo]);

     return redirect('admin/homeAdmin');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
   
    $labo = $this->laboRepository->getById($id);
    $media  =  DB::table('medias')->where('id',$labo->media_id)->first();
    return view('frontend.labo.showLabo',['labo' => $labo,'mbresHs' => $this->mbresHs ,'mbres' => $this->mbres , 
            'coords' => $this->coords, 'partnaires' => $this->partnaires,'media' => $media ]);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $labo = $this->laboRepository->getById($id);

    if (session('role') == 'admin') {

      return view('backend.admin.labo.updateLabo',compact('labo'));

   }elseif (session('role') == 'respecoledoct') {

     return view('backend.respecoledoct.labo.updateLabo',compact('labo'));
  }

   }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
     $this->laboRepository->update($id, $request->all());
        
      return back()->withOk("Mise a jour effectuée");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>