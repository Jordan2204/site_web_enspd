<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\DB;

use App\Media;

use App\Repositories\RespComRepository;
use App\Repositories\CitationRepository;
use App\Repositories\InsoliteRepository;

use Illuminate\Http\Request;

class RespComController extends Controller
{
    protected $respComRepository;
    protected $insoliteRepository;
    protected $citationRepository;

    protected $nbrPerPage = 4;
    protected $nbrPerPageCit = 10;

    public function __construct(RespComRepository $respComRepository,CitationRepository $citationRepository, InsoliteRepository $insoliteRepository)
    {
        $this->respComRepository = $respComRepository;
        $this->insoliteRepository = $insoliteRepository;
        $this->citationRepository = $citationRepository;
    }

/*
* By Jordan
*/

    public function citationsManage()
     {

        $citations = $this->citationRepository->getPaginate($this->nbrPerPageCit);
        $links = $citations->render();

        return view('backend/respcom/citationsManage',compact('citations','links'));
     }


    public function agendaManage()
     {

        $mediasAgenda = DB::select("
              select md.id,md.chemin,md.nom,md.description
              from news as ns, medias as md
              where md.id = ns.media_id and ns.categorie = ?
              ",['agenda']);

        return view('backend/respcom/news/agendaManage',compact('mediasAgenda'));
     }

     public function actuManage()
     {

        $mediasActu = DB::select("
              select md.id,md.chemin,md.nom,md.description
              from news as ns, medias as md
              where md.id = ns.media_id and ns.categorie = ?
              ",['actualites']);

        return view('backend/respcom/news/actualitesManage',compact('mediasActu'));
     }

     public function insolitesManage()
     {

        $insolites =  DB::table('medias')->where('description','Insolite')->get();
        //$links = $insolites->links();

        return view('backend/respcom/insolitesManage',compact('insolites','links'));
     }



    public function index()
    {
        $respCom = $this->respComRepository->getPaginate($this->nbrPerPage);
        $links = $respCom->render();

        return view('index', compact('respCom', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createRespCom');
    }

    public function store(UserCreateRequest $request)
    {
        $respCom = $this->respComRepository->store($request->all());

        return redirect('admin/usersManage')->withOk("L'utilisateur " . $respCom->name . " a été créé.");
    }

    public function show($id)
    {
        $respCom = $this->respComRepository->getById($id);

        if (session('role') == 'respcom') {

            return view('backend.respcom.showRespCom',  compact('respCom'));

        }elseif (session('role') == 'admin') {

            return view('backend.admin.users.showRespCom',  compact('respCom'));
        }

    }

    public function edit($id)
    {
        $respCom = $this->respComRepository->getById($id);

        return view('backend.admin.users.editRespCom',  compact('respCom'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        if (!$request->has('auth')) {
             $request->request->add(['auth' => '0']);

        }
        $this->respComRepository->update($id, $request->all());
        
        return redirect('admin/usersManage')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->respComRepository->destroy($id);

        return back();
    }

}