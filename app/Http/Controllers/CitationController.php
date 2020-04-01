<?php 

namespace App\Http\Controllers;

use App\Http\Requests\CitationCreateRequest;


use App\Repositories\CitationRepository;

use Illuminate\Http\Request;

class CitationController extends Controller 
{

    protected $citationRepository;
    protected $nbrPerPageCit = 10;

    public function __construct(CitationRepository $citationRepository)
    {
        $this->citationRepository = $citationRepository;
    }


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
     $citations = $this->citationRepository->getPaginate($this->nbrPerPageCit);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     return view('backend.respcom.create.createCitation');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CitationCreateRequest $request)
  {
    $citation = $this->citationRepository->store($request->all());

        return redirect('respcom/citationsManage')->withOk("La citation avec pour auteur " . $citation->nomAuteur . " a été créé."); 
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
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

    $this->citationRepository->destroy($id);

        return back(); 
  }
  
}

?>