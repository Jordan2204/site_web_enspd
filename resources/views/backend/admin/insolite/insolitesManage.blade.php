  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Gestion des insolites
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Insolites
  @endsection

  @section('apresHome')
    InsolitesManage
  @endsection

@section('content')
  @include('backend.layouts.insolite.insolitesManage')
@endsection
