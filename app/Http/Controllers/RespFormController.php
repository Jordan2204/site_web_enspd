<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\RespFormRepository;

use Illuminate\Http\Request;
class RespFormController extends Controller
{
    protected $respFormRepository;

    protected $nbrPerPage = 4;

    public function __construct(RespFormRepository $respFormRepository)
    {
        $this->respFormRepository = $respFormRepository;
    }

    public function index()
    {
        $respForm = $this->respFormRepository->getPaginate($this->nbrPerPage);
        $links = $respForm->render();

        return view('index', compact('users', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createRespForm');
    }

    public function store(UserCreateRequest $request)
    {
        $respForm = $this->respFormRepository->store($request->all());

        return redirect('admin/usersManage')->withOk("L'utilisateur " . $respForm->name . " a été créé.");
    }

    public function show($id)
    {
        $respForm = $this->respFormRepository->getById($id);

        if (session('role') == 'respform') {

            return view('backend.respform.showRespForm',  compact('respForm'));

        }elseif (session('role') == 'admin') {

           return view('backend.admin.users.showRespForm',  compact('respForm'));
        }

        
    }

    public function edit($id)
    {
        $respForm = $this->respFormRepository->getById($id);

        return view('backend.admin.users.editRespForm',  compact('respForm'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $respForm = $this->respFormRepository->getById($id);

        if (!$request->has('auth')) {
            $request->request->add(['auth' => '0']);
             if ($respForm->auth) {
                 $request->request->add(['date_Auth' => NULL]);
            }

        }

        if (!$respForm->auth) {
            DB::update('UPDATE respforms
                        SET date_Auth = NOW()
                        WHERE id = ?',[$id]);
        }
        $this->respFormRepository->update($id, $request->all());
        
        return redirect('admin/usersManage')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->respFormRepository->destroy($id);

        return back();
    }

}