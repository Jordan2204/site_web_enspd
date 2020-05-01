  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Gestion des insolites
  @endsection

  @section('dashboard')
    Insolites
  @endsection

  @section('apresHome')
    InsolitesManage
  @endsection

@section('content')
  @include('backend.layouts.insolite.insolitesManage')
@endsection
