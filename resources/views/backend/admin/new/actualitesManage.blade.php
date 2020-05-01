  @extends('admin/layouts/templateAdmin')

  @section('title')
   Admin
  @endsection

  @section('dashboard')
    News
  @endsection

  @section('apresHome')
    ActualitésManage
  @endsection

@section('content')
  @include('backend.layouts.new.actualitesManage')
@endsection
