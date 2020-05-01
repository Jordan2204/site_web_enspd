  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Mise a jour des communiqués
  @endsection

  @section('dashboard')
    Gestion des communiqués
  @endsection

  @section('apresHome')
    CommuniquésManage
  @endsection

@section('content')
  @include('backend.layouts.communiquer.updateCom')
@endsection
