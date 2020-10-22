<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\AdminRepository;
use App\Repositories\PersonnelRepository;
use App\Repositories\DoyenRepository;
use App\Repositories\RespComRepository;
use App\Repositories\RespFormRepository;
use App\Repositories\RespCentIncRepository; 
use App\Repositories\RespEcoleDoctRepository;

use App\Repositories\RespDeptRepository;

use App\Http\Controllers\DoyenController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\RespComController;
use App\Http\Controllers\RespFormController;
use App\Http\Controllers\RespCentIncController;
use App\Http\Controllers\RespEcoleDoctController;
use App\Http\Controllers\RespDeptController;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $adminRepository;
    protected $personnelRepository;
    protected $doyenRepository;
    protected $respComRepository;
    protected $repFormRepository;
    protected $respCentIncRepository;
    protected $respEcoleDoctRepository;
    protected $respDeptRepository;

    


    protected $nbrPerPage = 10;

    public function __construct(AdminRepository $adminRepository,PersonnelRepository $personnelRepository,DoyenRepository $doyenRepository,RespComRepository $respComRepository, RespFormRepository $repFormRepository, RespCentIncRepository $respCentIncRepository, RespEcoleDoctRepository $respEcoleDoctRepository, RespDeptRepository 
        $respDeptRepository)
    {
        $this->adminRepository = $adminRepository;
        $this->personnelRepository = $personnelRepository;
        $this->doyenRepository = $doyenRepository;
        $this->respComRepository = $respComRepository;
        $this->repFormRepository = $repFormRepository;
        $this->respCentIncRepository = $respCentIncRepository;
        $this->respEcoleDoctRepository = $respEcoleDoctRepository;
        $this->respDeptRepository = $respDeptRepository;
         }

    

    public function usersManage()

    {
     
        $admins = $this->adminRepository->getPaginate($this->nbrPerPage);
        $links1 = $admins->render();

        $doyens = $this->doyenRepository->getPaginate($this->nbrPerPage);
        $links2 = $doyens->render();

        $respComs = $this->respComRepository->getPaginate($this->nbrPerPage);
        $links3 = $respComs->render();

        $respDepts = $this->respDeptRepository->getPaginate($this->nbrPerPage);
        $links4 = $respDepts->render();

        $respForms = $this->repFormRepository->getPaginate($this->nbrPerPage);;
        $links5 = $respForms->render();

        $respCentIncs = $this->respCentIncRepository->getPaginate($this->nbrPerPage);
        $links6 = $respCentIncs->render();

        $respEcoleDocts = $this->respEcoleDoctRepository->getPaginate($this->nbrPerPage);
        $links7 = $respEcoleDocts->render();

        return view('backend.admin.usersManage',['admins' => $admins ,'links1' => $links1 , 
            'doyens' => $doyens ,'links2' => $links2, 'respComs' => $respComs, 'respDepts' => $respDepts, 'links4' => $links4, 'respForms' => $respForms, 'respEcoleDocts' => $respEcoleDocts, 'respCentIncs' => $respCentIncs]);
    }

    public function index()
    {
        $admins = $this->adminRepository->getPaginate($this->nbrPerPage);
        $links = $admins->render();

        return view('backend.admin.users.index', compact('admins', 'links'));
    }

    public function create()
    {
        return view('backend.admin.users.createAdmin');
    }

    public function store(UserCreateRequest $request)
    {
        $admin = $this->adminRepository->store($request->all());

        return redirect('admin/usersManage')->withOk("L'utilisateur " . $admin->name . " a été créé.");
    }

    public function show($id)
    {
        $admin = $this->adminRepository->getById($id);

        return view('backend.admin.users.showAdmin',  compact('admin'));
    }

    public function edit($id)
    {
        $admin = $this->adminRepository->getById($id);

        return view('backend.admin.users.editAdmin',  compact('admin'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->adminRepository->update($id, $request->all());
        
        return redirect('admin/usersManage')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->adminRepository->destroy($id);

        return redirect('/admin/departementAdmin');
    }

}