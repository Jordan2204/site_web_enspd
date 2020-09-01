<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\DB;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\File;
use App\Media;

use App\Gestion\ImgGestionInterface;


class PostController extends Controller
{

   protected $postRepository;
   protected $mediaRepository;

    protected $nbrPerPage = 10;

    public function __construct(PostRepository $postRepository,MediaRepository $mediaRepository)
    {
      
        $this->postRepository = $postRepository;
        $this->mediaRepository = $mediaRepository;
    }

     public function postsManage()
    {
        $posts = $this->postRepository->getPaginate($this->nbrPerPage);
        $medias = DB::table('medias')->get();
        $links = $posts->render();

        return view('backend.admin.posts.postsManage', compact('posts', 'links','medias'));
    }

    public function getPost($id)
    {
        $post = $this->postRepository->getById($id);
        $media = DB::table('medias')->where('id',$post->media_id)->first();
     
        return view('frontend.getPost',compact('post','media'));
    }
    public function index()
    {
        $posts = $this->postRepository->getPaginate($this->nbrPerPage);
        $links = $posts->render();

        return view('frontend.indexPost', compact('posts', 'links'));
    }

    public function indexPost()
    {
        $posts = $this->postRepository->getPaginate($this->nbrPerPage);
        $links = $posts->render();

        return view('frontend.indexPost', compact('posts', 'links'));
    }

    public function create()
    {
        return view('backend.admin.posts.addPost');
    }

    public function store(PostRequest $request,ImgGestionInterface $imggestion)
    {
        $request->request->add(['description' => 'post']);
        $matPers = $request->input('matPers'); 
        $request->request->add(['user_role' => session('role')]);
        $idMedia = 0;

        if($imggestion->save($request->all())) {

            $idMedia = DB::table('medias')->where('titre', $request->input('titre') )->value('id');
               
            }
        $request->request->add(['media_id' => $idMedia]);
        $post = $this->postRepository->store($request->all());

       
        return redirect('/admin/postsManage');
    }

     public function edit($id)
    {
        $post = $this->postRepository->getById($id);

        return view('backend.admin.posts.editPost',  compact('post'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
        $this->postRepository->update($id, $request->all());
        
        return redirect('admin/postsManage')->withOk("Mise a jour de l'article " . $request->input('titre') . " éffectuée.");
    }

     public function destroyInStorage($image_path)
    {
     if(File::exists($image_path)){

      File::delete($image_path);
      return true;

    }else{
   
      return false;
    }
  }

    public function destroy($id)
    {
        $post = $this->postRepository->getById($id);
        $media = DB::table('medias')->where('id',$post->media_id)->first();
        if (!empty($media)) {
            //Suppression du media
            $image_path = $media->chemin.'/'.$media->nom;
            if ($this->destroyInStorage($image_path)) {
            DB::delete('DELETE  from medias where titre = ? ',[$post->titre]);
            }
        }
       
        $this->postRepository->destroy($id);

        return redirect()->back();
    }

   
}
