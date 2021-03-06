<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\RespDeptCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\RespDeptRepository;

use Illuminate\Http\Request;
use App\Departement;


class RespDeptController extends Controller
{
     protected $respDeptRepository;

    protected $nbrPerPage = 10;

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
        $Depts = DB::table("departement")->get();
        return view('backend.admin.users.createRespDept',compact('Depts'));
        //return view('backend.admin.users.createRespDept');
   
    }

    public function store(RespDeptCreateRequest $request)
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
        $respDept = $this->respDeptRepository->getById($id);

        if (!$request->has('auth')) {
            $request->request->add(['auth' => '0']);
             if ($respDept->auth) {
                 $request->request->add(['date_Auth' => NULL]);
            }

        }

        if (!$respDept->auth) {
            DB::update('UPDATE respdepts 
                        SET date_Auth = NOW()
                        WHERE id = ?',[$id]);
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