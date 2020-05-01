  @extends('admin/layouts/templateAdmin')

  @section('title')
    Admin | Gestion des citations
  @endsection

  @section('dashboard')
    Citations
  @endsection

  @section('apresHome')
    CitationsManage
  @endsection

@section('content')
   @include('backend.layouts.citation.citationsManage')
@endsection
