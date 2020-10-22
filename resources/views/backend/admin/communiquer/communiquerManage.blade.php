  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Communiqué
  @endsection

  @section('dashboard')
      <li class="fas fa-edit"></li> Communiqué
  @endsection

  @section('apresHome')
    CommuniquerManage
  @endsection

@section('content')
  @include('backend.layouts.communiquer.communiquerManage')
@endsection
