  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Communiqué
  @endsection

  @section('dashboard')
    Communiqué
  @endsection

  @section('apresHome')
    CommuniquerManage
  @endsection

@section('content')
  @include('backend.layouts.communiquer.communiquerManage')
@endsection
