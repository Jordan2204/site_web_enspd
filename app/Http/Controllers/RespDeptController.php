<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\RespDeptRepository;

use Illuminate\Http\Request;

class RespDeptController extends Controller
{
     protected $respDeptRepository;

    protected $nbrPerPage = 4;

    public function __construct(RespDeptRepository $respDeptRepository)
    {
        $this->respDeptRepository = $respDeptRepository;
    }

    public function index()
    {
        $respDepts = $this->respDeptRepository->getPaginate($this->nbrPerPage);
        $links = $respDepts->render();

        return view('index', compact('respDepts', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createRespDept');
    }

    public function store(UserCreateRequest $request)
    {
        $auth = $request->input('auth','0');
        $respDept = $this->respDeptRepository->store($request->all());

        return redirect('admin/usersManage')->withOk("L'utilisateur " . $respDept->name . " a été créé.");
    }

    public function show($id)
    {
        $respDept = $this->respDeptRepository->getById($id);

        if (session('role') == 'respdept') {

            return view('backend.respdept.showRespDept',  compact('respDept'));

        }elseif (session('role') == 'admin') {

            return view('backend.admin.users.showRespDept',  compact('respDept'));
        }
       
    }

        

    public function edit($id)
    {
        $respDept = $this->respDeptRepository->getById($id);

        return view('backend.admin.users.editRespDept',  compact('respDept'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        if (!$request->has('auth')) {
             $request->request->add(['auth' => '0']);

        }
       
        $this->respDeptRepository->update($id, $request->all());
        return redirect('admin/usersManage')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->respDeptRepository->destroy($id);

        return back();
    }

}