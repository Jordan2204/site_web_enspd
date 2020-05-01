  @extends('respdept/layouts/templateRespDept')

  @section('title')
    Chef de département {{ auth::user()->ABBR }}
  @endsection

  @section('dashboard')
    <i class="fas fa-tachometer-alt"></i> Dashboard
  @endsection

  @section('apresHome')
    Dashboard
  @endsection

@section('content')
  @include('backend.include.dashboard')
@endsection
