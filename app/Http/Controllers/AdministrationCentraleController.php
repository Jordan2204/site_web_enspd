<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Media;
use App\Repositories\MediaRepository;
use App\Repositories\AdminCentRepository;



class AdministrationCentraleController extends Controller 
{

  private $adminCentRepository;
  private $mediasRepository;
  private $nbrPerPage = 10;

  public function __construct(AdminCentRepository $adminCentRepository,MediaRepository $mediaRepository)
    {
        $this->adminCentRepository = $adminCentRepository;
        $this->mediaRepository = $mediaRepository;

    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $persoAdminCents = DB::select("
      select adminCent.nom as nomP, adminCent.poste,md.id,md.chemin,md.nom,md.description
      from administrationcentrale as adminCent, medias as md
      where md.id = adminCent.media_id 
      ");
    if( url()->current() == config('app.url').'/adminCent') 
     {

       return view('frontend.administrationcentrale',compact('persoAdminCents'));

     }else{
      
      return view('backend.admin.adminCent.index',compact('persoAdminCents')); 
      
     }
   
   
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

    $insolite =  DB::table('medias')->where('id', $id)->first();
    $image_path = $insolite->chemin.'/'.$insolite->nom;

    if(File::exists($image_path)){

      File::delete($image_path);
      $this->mediaRepository->destroy($id);

    }else{

      
      return "Pas trouver $image_path";
    }
     
      return back();
  }
  
  }

?>