<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommuniquerRepository;
use App\Communiquer;

class CommuniquerController extends Controller 
{

  private $CommuniquerRepository; 

  public function __construct(CommuniquerRepository $communiquer)
  {
    $this->CommuniquerRepository = $communiquer;
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
    $communiquer = $this->CommuniquerRepository->getById($id);

        return view('frontend.showCommuniquer',  compact('communiquer'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $communiquer = $this->CommuniquerRepository->getById($id);

        return view('backend.respcom.communiquer.updateCom',  compact('communiquer'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
     $this->CommuniquerRepository->update($id, $request->all());

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