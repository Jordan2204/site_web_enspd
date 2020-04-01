<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationInterfaceController extends Controller
{
   public function index()
   {
   	return view('backend.homeAdministration');
   }

   public function store(Request $request)
   {
   	if ($request->role == 'admin') {

   		return redirect('/admin/login');

   	}elseif ($request->role == 'doyen') {

         return redirect('/doyen/login');

      }elseif ($request->role == 'respDept') {
         
         return redirect('/respdept/login');

      }elseif ($request->role == 'respCentInc') {
         
         return redirect('/respcentinc/login');

      }elseif ($request->role == 'respForm') {
         
         return redirect('/respform/login');

      }elseif ($request->role == 'respEcoleDoct') {
         
         return redirect('/respecoledoct/login');

      }elseif ($request->role == 'respCom') {
         
         return redirect('/respcom/login');
      }
   
   }
}
