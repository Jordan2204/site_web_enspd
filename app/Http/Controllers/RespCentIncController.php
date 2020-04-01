<?php

namespace App\Http\Controllers;

use App\Http\Requests\respCentIncCreateRequest;
use App\Http\Requests\respCentIncUpdateRequest;

use App\Repositories\RespCentIncRepository;

use Illuminate\Http\Request;

class RespCentIncController extends Controller
{

    protected $respCentIncRepository;

    protected $nbrPerPage = 4;

    public function __construct(RespCentIncRepository $respCentIncRepository)
    {
        $this->respCentIncRepository = $respCentIncRepository;
    }

    public function index()
    {
        $respCentInc = $this->respCentIncRepository->getPaginate($this->nbrPerPage);
        $links = $respCentInc->render();

        return view('index', compact('respCentIncs', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createRespCentInc');
    }

    public function store(respCentIncCreateRequest $request)
    {
        $respCentInc = $this->respCentIncRepository->store($request->all());

        return redirect('respCentInc')->withOk("L'utilisateur " . $respCentInc->name . " a été créé.");
    }

    public function show($id)
    {
        $respCentInc = $this->respCentIncRepository->getById($id);

        return view('backend.admin.users.showRespCentInc',  compact('respCentInc'));
    }

    public function edit($id)
    {
        $respCentInc = $this->respCentIncRepository->getById($id);

        return view('edit',  compact('respCentInc'));
    }

    public function update(respCentIncUpdateRequest $request, $id)
    {
        $this->respCentIncRepository->update($id, $request->all());
        
        return redirect('respCentInc')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->respCentIncRepository->destroy($id);

        return back();
    }

}