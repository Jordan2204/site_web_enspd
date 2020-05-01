<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\InfosFGIUpdateRequest;
use App\Http\Requests\InfoFGICreateRequest;
use App\Gestion\ImgGestionInterface;

use App\Repositories\InfosFGIRepository;
use App\Repositories\MediaRepository;

use App\FormEnseigChoixBref;
use App\Media;


class InfosFGIController extends Controller 
{

  protected $infosFGIRepository;
  protected $mediaRepository;
  protected $nbrPerPage = 10;

  public function __construct(InfosFGIRepository $infosFGIRepository, MediaRepository $mediaRepository)
    {
        $this->infosFGIRepository = $infosFGIRepository;
        $this->mediaRepository = $mediaRepository;

       
  }


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

     $infosFGI = DB::select("
      SELECT  info.id as idInfo,info.titreFECB, md.id as idMD,md.chemin,md.nom,md.description
      FROM formenseigchoixbref info, medias md
      where md.id = info.media_id 
      ");
    
     if (session('role') == 'admin') {
       return view('backend.admin.infosFGI.indexInfosFGI',compact('infosFGI'));

      }elseif (session('role') == 'respform') {
       return view('backend.respform.indexInfosFGI',compact('infosFGI'));

      }
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('backend.admin.infosFGI.createInfoFGI');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(InfoFGICreateRequest $request, ImgGestionInterface $imggestion)
  {
    
      $request->request->add(['codeFECB' => str_random(8)]);
      $request->request->add(['matPers' => $request->input('codeFECB')]);
      $request->request->add(['description' => '']);
      $codeFECB = $request->input('codeFECB'); 
      $idMedia = 0;

      if($imggestion->save($request->all())) {

          $idMedia = DB::table('medias')->where('titre', $codeFECB )->value('id');
          $request->request->add(['media_id' => $idMedia]);
          $infosFGI = $this->infosFGIRepository->store($request->all());

          return redirect('admin/homeAdmin');

      }else {
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
   
    $infosFGI = $this->infosFGIRepository->getById($id);
    $media = $this->mediaRepository->getById($infosFGI->media_id);


    return view('frontend.infosFGI.showInfosFGI',compact('infosFGI','media'));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $infosFGI = $this->infosFGIRepository->getById($id);

   if (session('role') == 'admin') {
     return view('backend.admin.infosFGI.editInfosFGI',compact('infosFGI'));

    }elseif (session('role') == 'respform') {
     return view('backend.respform.editInfosFGI',compact('infosFGI'));

    }
  }

  /**s
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(InfosFGIUpdateRequest $request, $id)
  {

   $this->infosFGIRepository->update($id, $request->all());
        
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