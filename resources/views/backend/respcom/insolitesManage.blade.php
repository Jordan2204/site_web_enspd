  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Gestion des insolites
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
