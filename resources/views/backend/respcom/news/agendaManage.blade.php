  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication
  @endsection

  @section('dashboard')
    News
  @endsection

  @section('apresHome')
    AgendaManage
  @endsection

@section('content')
   @include('backend.layouts.new.agendaManage')
@endsection
