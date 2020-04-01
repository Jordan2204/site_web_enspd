<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MembresLaboRepository;
use Illuminate\Support\Facades\DB;

use App\MembresLabo;
use App\typeMLabo;

class MembreLaboController extends Controller 
{

  protected $membresLaboRepository;

  public function __construct(MembresLaboRepository $membresLaboRepository)
    {
        $this->membresLaboRepository = $membresLaboRepository;
       
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
    return view('backend.respecoledoct.createMembre');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $membre = $this->membresLaboRepository->store($request->all());

    $id = DB::table('typemembre')->where('libelle',$request->input('typeMLabo'))->value('id');
    $idLab = DB::table('labo')->where('nomLabo',$request->input('nomLabo'))->value('id');

    DB::update('update membreslabo set id_typeMLabo = ?,idLabMLabo = ? where nomMLabo = ?',[$id, $idLab,$request->input('nomMLabo')]);


    return redirect('respecoledoct/membersManage')->withOk("L'utilisateur " . $membre->nomMLabo . " a été créé.");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $membre = $this->membresLaboRepository->getById($id);

    return view('backend.respecoledoct.showMembre',  compact('membre'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $membre = $this->membresLaboRepository->getById($id);

    return view('backend.respecoledoct.editMembre',  compact('membre')); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
     $this->membresLaboRepository->update($id, $request->all());
        
        return redirect('respecoledoct/membersManage')->withOk("L'utilisateur " . $request->input('nomMLabo') . " a été modifié.");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
     $this->membresLaboRepository->destroy($id);

      return back();
  }
  
}

?>