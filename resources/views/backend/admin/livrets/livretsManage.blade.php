  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Livrets
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Livrets Etudiant
  @endsection

  @section('apresHome')
    LivretsManage
  @endsection

@section('content')
  @include('backend.layouts.livrets.livretsManage')
@endsection
