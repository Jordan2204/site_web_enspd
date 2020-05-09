<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\FormationsDoctoralesRepository;


class FormationsDoctoralesController extends Controller 
{

  protected $formationsDoctoralesRepository;
  protected $nbrPerPage = 10;

  public function __construct(FormationsDoctoralesRepository $formationsDoctoralesRepository)
  {
    $this->formationsDoctoralesRepository = $formationsDoctoralesRepository;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

   $formationsDoct = $this->formationsDoctoralesRepository->getPaginate($this->nbrPerPage);
   return view('frontend.showFormationsDoctorales',compact('formationsDoct'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $formationsDoct = $this->formationsDoctoralesRepository->getById($id);
     return view('backend.respecoledoct.editFormationsDoctorales',compact('formationsDoct'));
  }
  

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    $this->formationsDoctoralesRepository->update($id, $request->all());
        
        return back();
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