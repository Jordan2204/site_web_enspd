@extends('admin/layouts/templateAdmin')
	@section('title')
	  FGI RespDept |  Gestion des départements
	@endsection

	@section('dashboard')
	 Gestion des départements
	@endsection

	@section('apresHome')
	  Departement edit
	@endsection

	@section('content')
		@include('backend.layouts.departement.editDept')
	@endsection

   
   
