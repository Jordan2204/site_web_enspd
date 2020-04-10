<?php 

namespace App\Http\Controllers;
use App\Http\Requests\FilesRequest;
use App\Http\Requests\ImagesCreateRequest;
use App\Http\Requests\ImagesUpdateRequest;
use App\Http\Requests\FilesUpdateRequest;
use App\Gestion\ImgGestionInterface;
use App\Http\Requests\ImagesRequest;
use App\Gestion\FilesGestionInterface;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\DB;


use App\News;
use App\Media;
use App\Repositories\MediaRepository;

use Illuminate\Http\Request;

class MediaController extends Controller 
{

  protected $mediaRepository;

  public function __construct(MediaRepository $mediaRepository)
    {
        $this->mediaRepository = $mediaRepository;
    }
  

  public function getFormImg()
    {
        return view('backend/admin/medias/img');
    }

    public function postFormImg(ImagesRequest $request, ImgGestionInterface $imggestion)
    {

      $ok = 'Image reçu et enregistrée';
      $error = 'Désolé l\'image ne peut pas être envoyée !';

      if ($request->is('respcom/insolitesManage')) {

            $request->request->add(['description' => 'Insolite']);

        }elseif($request->is('respcom/newsManage')){

          $request->request->add(['description' => 'News']);
        }

        if($imggestion->save($request->all())) {

          if ($request->is('admin/*')) {

             return view('backend/admin/medias/mediaOk',['ok' => $ok]);

          }elseif ($request->is('respcom/insolitesManage')) {

            return view('backend/respcom/medias/mediaOk',['ok' => $ok]);

          }elseif ($request->is('respcom/newsManage')) {
            //On actualise la table news
            $request->input('url','null');
            $idMedia = DB::table('medias')->where('titre',$request->input('titre'))->value('id');
            DB::insert('insert into news (categorie,media_id,NumPos,pos,url) values(?,?,?,?,?)',[$request->input('categorie'),$idMedia,$request->input('NumPos'),$request->input('pos'),$request->input('url')]);

            return view('backend/respcom/news/mediaOk',['ok' => $ok]);
          }
           
        } 

        if ($request->is('admin/*')) {

           return view('backend/admin/medias/mediaError',['error' => $error]);

        }elseif ($request->is('respcom/insolitesManage')) {

            return view('backend/respcom/medias/mediaError',['error' => $error]);

        }elseif ($request->is('respcom/newsManage')) {

            return view('backend/respcom/news/mediaError',['error' => $error]);

        }

    }

   
    public function getFormFile()
    {
        return view('backend/admin/medias/file');
    }

    public function postFormFile(FilesRequest $request, FilesGestionInterface $fileGestion)
    {

      $ok = 'Image reçu et enregistrée';
      $error = 'Désolé l\'image ne peut pas être envoyée !';

      if ($request->is('respcom/insolitesManage')) {

            $request->request->add(['description' => 'Insolite']);

        }elseif($request->is('respcom/newsManage')){

          $request->request->add(['description' => 'News']);
        }

        if($fileGestion->save($request->all())) {

          if ($request->is('admin/*')) {

             return view('backend/admin/medias/mediaOk',['ok' => $ok]);

          }elseif ($request->is('respcom/insolitesManage')) {

            return view('backend/respcom/medias/mediaOk',['ok' => $ok]);

          }elseif ($request->is('respcom/newsManage')) {
            //On actualise la table news
            $idMedia = DB::table('medias')->where('titre',$request->input('titre'))->value('id');
            DB::insert('insert into news (categorie,media_id) values(?,?)',[$request->input('categorie'),$idMedia]);

            return view('backend/respcom/news/mediaOk',['ok' => $ok]);
          }
           
        } 

        if ($request->is('admin/*')) {

           return view('backend/admin/medias/mediaError',['error' => $error]);

        }elseif ($request->is('respcom/insolitesManage')) {

            return view('backend/respcom/medias/mediaError',['error' => $error]);

        }elseif ($request->is('respcom/newsManage')) {

            return view('backend/respcom/news/mediaError',['error' => $error]);

        }

    }

    public function getFormVideo()
    {
        return view('photo');
    }

    public function postFormVideo(ImagesRequest $request, ImgGestionInterface $imggestion)
    {

       
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
    return view('backend.admin.users.createAdmin');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ImagesRequest $request, ImgGestionInterface $imggestion)
  {

     if($imggestion->save($request->all())) {
            return view('admin/mediaManage');
        } 
        return redirect('admin/mediaManage/error')
            ->with('error','Désolé mais votre media ne peut pas être envoyée !');
    
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
    $media = $this->mediaRepository->getById($id);
   // $medias = DB::table('medias')->where('titre',$titre)->first;

    if (session('role') == 'admin') {
        
        return view('backend.admin.medias.editImg',compact('media'));

      }elseif(session('role') == 'respcom')
      {

         return view('backend.admin.medias.editImg',compact('media'));

      }elseif(session('role') == 'respform')
      {
        
         return view('backend.respform.medias.editImg',compact('media'));

      }elseif(session('role') == 'respdept')
      {
        
         return view('backend.respdept.medias.editImg',compact('media'));

      }elseif(session('role') == 'respecoledoct')
      {
        
         return view('backend.respecoledoct.medias.editFile',compact('media'));

      }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(ImgGestionInterface $imggestion,ImagesUpdateRequest $request,FilesGestionInterface $filesgestion,$id)
  {
   $media = $this->mediaRepository->getById($id);
   $media_path = $media->chemin.'/'.$media->nom;
    
    if ($this->destroyInStorage($media_path)) {
      if (session('role') == 'respecoledoct') {

        $nom = $filesgestion->updateFile($request->all());
        if($nom != false) {
          $request->request->add(['nom' => $nom]);
          $this->mediaRepository->update($id, $request->all());
        }
      }else{
        $nom = $imggestion->updateImg($request->all());
        if($nom != false) {
          $request->request->add(['nom' => $nom]);
          $this->mediaRepository->update($id, $request->all());
       }
      }
      
    }   

           
      if (session('role') == 'admin') {
        
        return redirect('admin/adminCent');

      }elseif(session('role') == 'respcom')
      {

         return redirect('admin/adminCent');

      }elseif(session('role') == 'respform')
      {
        
         return redirect('respform/homeRespForm');


      }elseif(session('role') == 'respdept')
      {
        
         return redirect('respdept/homeRespDept');

      }elseif(session('role') == 'respecoledoct')
      {
        
         return redirect('respecoledoct/homeRespEcoleDoct');


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
    $insolite =  DB::table('medias')->where('id', $id)->first();
    $image_path = $insolite->chemin.'/'.$insolite->nom;

    if ($this->destroyInStorage($image_path)) {

      $this->mediaRepository->destroy($id);

    }else{

      return 'Pas trouver image';
    }
   
     
      return back();
  }

  public function destroyInStorage($media_path)
  {
     if(File::exists($media_path)){

      File::delete($media_path);
      return true;

    }else{
   
      return false;
    }
  }
  
}

?>