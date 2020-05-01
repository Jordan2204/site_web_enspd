  @extends('admin/layouts/templateAdmin')

  @section('title')
    Responsable cellule communication | Mise a jour des communiqués
  @endsection

  @section('dashboard')
    Gestion des communiqués
  @endsection

  @section('apresHome')
    CommuniquésUpdate
  @endsection

@section('content')
   @include('backend.layouts.communiquer.updateCom')
@endsection
