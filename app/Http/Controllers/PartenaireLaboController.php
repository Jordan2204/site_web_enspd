<?php 

namespace App\Http\Controllers;

use \App\Http\Requests\PartenaireCreateRequest;
use \App\Http\Requests\PartenaireUPdateRequest;

use Illuminate\Http\Request;
use App\Repositories\PartenaireLaboRepository;
use App\PartenaireLabo;
use Illuminate\Support\Facades\DB;

class PartenaireLaboController extends Controller 
{
    protected $partenaireLaboRepository;


  public function __construct(PartenaireLaboRepository $partenaireLaboRepository )
  {
    $this->partenaireLaboRepository = $partenaireLaboRepository;
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
    if (session('role') == 'admin') {

      return view('backend.admin.partenaires.createPartenaire'); 
 
    }elseif (session('role') == 'respecoledoct') {

      return view('backend.respecoledoct.partenaires.createPartenaire'); 
 
    }
 }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(PartenaireCreateRequest $request)
  {
      $partenaire = $this->partenaireLaboRepository->store($request->all());

      if (session('role') == 'admin') {

      return redirect('admin/membersManage')->withOk("Le partenaire " . $partenaire->name . " a été créé.");

    }elseif (session('role') == 'respecoledoct') {
      
      return redirect('respecoledoct/membersManage')->withOk("Le partenaire " . $partenaire->name . " a été créé.");
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
    $partenaire = $this->partenaireLaboRepository->getById($id);

    if (session('role') == 'admin') {

      return view('backend.admin.partenaires.showPartenaire',compact('partenaire'));
 
    }elseif (session('role') == 'respecoledoct') {
      
      return view('backend.respecoledoct.partenaires.showPartenaire',compact('partenaire'));
 
    }

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
     $partenaire = $this->partenaireLaboRepository->getById($id);
      if (session('role') == 'admin') {

      return view('backend.admin.partenaires.editPartenaire',compact('partenaire'));

    }elseif (session('role') == 'respecoledoct') {
      
      return view('backend.respecoledoct.partenaires.editPartenaire',compact('partenaire'));

    }

   }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(PartenaireUpdateRequest $request,$id)
  {
     $this->partenaireLaboRepository->update($id, $request->all());
     $partenaire = $this->partenaireLaboRepository->getById($id);
      if (session('role') == 'admin') {

        return redirect('admin/membersManage')->withOk("Le partenaire " . $request->input('raison_socialePLabo') . " a été modifié.");
 
      }elseif (session('role') == 'respecoledoct') {
      
       return redirect('respecoledoct/membersManage')->withOk("Le partenaire " . $request->input('raison_socialePLabo') . " a été modifié.");
 
    }
       }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
     $this->partenaireLaboRepository->destroy($id);

     return back();
  }
  
}

?>