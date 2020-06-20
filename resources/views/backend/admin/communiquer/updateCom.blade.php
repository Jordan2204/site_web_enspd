  @extends('admin/layouts/templateAdmin')

  @section('title')
    Administrateur | Mise a jour des communiqués
  @endsection

  @section('dashboard')
      <li class="fas fa-edit"></li> Mise a jour
  @endsection

  @section('apresHome')
    CommuniquésUpdate
  @endsection

@section('content')
   @include('backend.layouts.communiquer.updateCom')
@endsection
