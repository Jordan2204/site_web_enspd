  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Partenaires
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Partenaires
  @endsection

  @section('apresHome')
    PartenairesManage
  @endsection

@section('content')
  @include('backend.layouts.nosPartenaires.nosPartenairesManage')
@endsection
