  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin
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
