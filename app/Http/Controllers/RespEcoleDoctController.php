<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\RespEcoleDoctRepository;

use Illuminate\Http\Request;

class RespEcoleDoctController extends Controller
{
    protected $respEcoleDoctRepository;

    protected $nbrPerPage = 4;

    public function __construct(RespEcoleDoctRepository $respEcoleDoctRepository)
    {
        $this->respEcoleDoctRepository = $respEcoleDoctRepository;
    }

    public function index()
    {
        $respEcoleDoct = $this->respEcoleDoctRepository->getPaginate($this->nbrPerPage);
        $links = $respEcoleDoct->render();

        return view('index', compact('respEcoleDoct', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createRespEcoleDoct');
    }

    public function store(UserCreateRequest $request)
    {
        $respEcoleDoct = $this->respEcoleDoctRepository->store($request->all());

        return redirect('admin/usersManage')->withOk("L'utilisateur " . $respEcoleDoct->name . " a été créé.");
    }

    public function show($id)
    {
        $respEcoleDoct = $this->respEcoleDoctRepository->getById($id);

        if (session('role') == 'admin') {
            return view('backend.admin.users.showRespEcoleDoct',  compact('respEcoleDoct'));
   
        }elseif (session('role') == 'respecoledoct') {
            return view('backend.respecoledoct.showRespEcoleDoct',  compact('respEcoleDoct'));
   
        }
     }

    public function edit($id)
    {
        $respEcoleDoct = $this->respEcoleDoctRepository->getById($id);

        return view('backend.admin.users.editRespEcoleDoct',  compact('respEcoleDoct'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $respEcoleDoct = $this->respEcoleDoctRepository->getById($id);

        if (!$request->has('auth')) {
            $request->request->add(['auth' => '0']);
             if ($respEcoleDoct->auth) {
                 $request->request->add(['date_Auth' => NULL]);
            }

        }

        if (!$respEcoleDoct->auth) {
            DB::update('UPDATE respecoledocts 
                        SET date_Auth = NOW()
                        WHERE id = ?',[$id]);
        }

        $this->respEcoleDoctRepository->update($id, $request->all());
        
        return redirect('admin/usersManage')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->respEcoleDoctRepository->destroy($id);

        return back();
    }

}