<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\DepartementCreateRequest;
use App\Http\Requests\DepartementUpdateRequest;

use App\Gestion\ImgGestionInterface;
use App\Repositories\DepartementRepository;
use App\Repositories\PersonnelRepository;
use App\Repositories\MediaRepository;
use App\Repositories\RespDeptRepository;


use App\Departement;
use App\Personnel;
use App\Media;
use Illuminate\Http\Request;

class DepartementController extends Controller 
{

  protected $departementRepository;
  protected $mediaRepository;
  protected $nbrPerPage = 10;
  protected $nbrPerPageMedia = 100;
  protected $respDeptRepository;
  protected $personnelRepository;
    
  public function __construct(DepartementRepository $departementRepository,MediaRepository $mediaRepository, RespDeptRepository $respDeptRepository,PersonnelRepository $personnelRepository)
    {
        $this->departementRepository = $departementRepository;
        $this->respDeptRepository = $respDeptRepository;
        $this->mediaRepository = $mediaRepository;
        $this->personnelRepository = $personnelRepository;
        

    }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

  public function responsablesManage()
  {
     $resps = DB::select(' SELECT  DISTINCT (per.id),per.gradePers,per.nomPers, per.prenomPers,per.postePers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and dept.id = ?
      ',[session('idDept')]);
       
    return view('backend.respdept.responsables.responsablesManage',compact('resps'));
  }
  public function index()
  {
    $depts = $this->departementRepository->getPaginate($this->nbrPerPage);
    $medias= $this->mediaRepository->getPaginate($this->nbrPerPageMedia);
    $links = $depts->render();

    if( url()->current() == 'http://fgi-udo.local/departementNA') 
     {
      return view('frontend.departements.indexDept', compact('depts', 'links','medias'));

     }else{

      return view('backend.admin.departement.indexDept',compact('depts', 'links','medias')); 
      
     }

       
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('backend/admin/departement/createDept');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(DepartementCreateRequest $request, ImgGestionInterface $imggestion)
    {
      $request->request->add(['matPers' => $request->input('ABBR')]);
      $request->request->add(['description' => '']);
       
      $matPers = $request->input('matPers'); 
      $idMedia = 0;

      if($imggestion->save($request->all())) {

          $idMedia = DB::table('medias')->where('titre', $matPers )->value('id');
          $request->request->add(['media_id' => $idMedia]);
          $departement = $this->departementRepository->store($request->all());

          return redirect('admin/homeAdmin');

      }else{

        return back();
      }

    }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
     $respAcad = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and  dept.id = ? and tp.libelleTypePersonnel = ? 
      ',[$id,'RespAcad']);
        

            $respStage = DB::select(' SELECT per.id,per.gradePers,per.nomPers, per.prenomPers

                           FROM personnel per, typepersonnel_personnel tpp,departement dept, typepersonnel tp

                           WHERE per.Departement_idDepartement = dept.id and 
                           per.id = tpp.Personnel_idPers and tpp.TypePersonnel_idTypePersonnel =tp.idTypePersonnel and  dept.id = ? and tp.libelleTypePersonnel = ? 
      ',[$id,'RespStage']);

    $dept = $this->departementRepository->getById($id);
    $media = $this->mediaRepository->getById($dept->media_id);
    $respDept = $this->respDeptRepository->getById($dept->id_responsable);

   
    
    return view('frontend.departements.showDept',['dept' => $dept,'media' => $media,'respDept' =>$respDept,'respStage' => $respStage,'respAcad' => $respAcad]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $departement = $this->departementRepository->getById($id);

    if (session('role') == 'respdept') {

     return view('backend.respdept.editDept', compact('departement'));

    }elseif (session('role') == 'admin') {

     return view('backend.admin.departement.editDept', compact('departement'));

    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(DepartementUpdateRequest $request, $id)
    {
        $this->departementRepository->update($id, $request->all());
        $departement = $this->departementRepository->getById($id);
   
       return back()->withOk("Mise a du département  $departement->nomDept effectué");
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