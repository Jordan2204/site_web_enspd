  @extends('admin/layouts/templateAdmin')

  @section('title')
   Admin
  @endsection

  @section('dashboard')
      <li class="fas fa-edit"></li> News
  @endsection

  @section('apresHome')
    ActualitésManage
  @endsection

@section('content')
  @include('backend.layouts.new.actualitesManage')
@endsection
