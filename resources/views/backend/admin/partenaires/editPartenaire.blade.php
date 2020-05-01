@extends('admin/layouts/templateAdmin')

	@section('title')
	    Admin
	@endsection

  @section('dashboard')
    Gestion des Partenaires
  @endsection

  @section('apresHome')
    UserManage/edit Partenaire
  @endsection


@section('content')
   @include('backend.layouts.partenaires.editPartenaire')
@endsection