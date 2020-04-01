<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\DoyenRepository;

use Illuminate\Http\Request;

class DoyenController extends Controller
{

    protected $doyenRepository;
   
    protected $nbrPerPage = 4;

    public function __construct(DoyenRepository $doyenRepository)
    {
        $this->doyenRepository = $doyenRepository;
       
   
    }

    

    public function index()
    {
        $doyens = $this->doyenRepository->getPaginate($this->nbrPerPage);
        $links = $doyen->render();
        
        return view('index', compact('doyens', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createDoyen');
    }

    public function store(doyenCreateRequest $request)
    {
        $doyen = $this->doyenRepository->store($request->all());

        return redirect('doyen')->withOk("L'utilisateur " . $doyen->name . " a été créé.");
    }

    public function show($id)
    {
        $doyen = $this->doyenRepository->getById($id);

        return view('backend.admin.users.showDoyen',  compact('doyen'));
    }

    public function edit($id)
    {
        $doyen = $this->doyenRepository->getById($id);

        return view('backend.admin.users.editDoyen',  compact('doyen'));
    }

    public function update(doyenUpdateRequest $request, $id)
    {
        $this->doyenRepository->update($id, $request->all());
        
        return redirect('doyen')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->doyenRepository->destroy($id);

        return back();
    }

}