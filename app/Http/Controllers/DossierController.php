<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DossierFGIRepository;

class DossierController extends Controller 
{

  protected $dossierFGIRepository;
  protected $nbrPerPage = 10;

  public function __construct(DossierFGIRepository $dossierFGIRepository )
  {
    $this->dossierFGIRepository = $dossierFGIRepository;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $dossiersPartenaires = $this->dossierFGIRepository->getPaginate($this->nbrPerPage);
    $links1 = $dossiersPartenaires->render();

    return view('backend.admin.dossiersPartenaires.dossiersManage',compact('dossiersPartenaires'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('backend.admin.dossiersPartenaires.createDossier');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $dossiersPartenaires = $this->dossierFGIRepository->store($request->all());

    return redirect('admin/dossiersManage')->withOk("Le dossier " . $dossiersPartenaires->nomDOC . " a été créé.");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
     $dossierPartenaire = $this->dossierFGIRepository->getById($id);

        return view('backend.admin.dossiersPartenaires.showDossier',  compact('dossierPartenaire'));
  }

  public function getDossiers()
  {
    $dossiersPartenaires = $this->dossierFGIRepository->getPaginate($this->nbrPerPage);
    $links1 = $dossiersPartenaires->render();

    return view('frontend.dossiers.showDossiers', compact('dossiersPartenaires'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
     $dossierPartenaire = $this->dossierFGIRepository->getById($id);

    return view('backend.admin.dossiersPartenaires.editDossier',  compact('dossierPartenaire'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
     $this->dossierFGIRepository->update($id, $request->all());
        
      return redirect('admin/dossiersManage')->withOk("Le dossier " . $request->input('nomDOC') . " a été  modifié.");
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