  @extends('respdept/layouts/templateRespDept')

  @section('title')
    Chef de département {{ auth::user()->ABBR }}
  @endsection

  @section('dashboard')
    Dashboard
  @endsection

  @section('apresHome')
    Dashboard
  @endsection

@section('content')
  <div>
    <img src="/storage/images/yMKbPRtjKn.png" alt="User profile picture" style="max-width: 100%;max-height: 100%;">
  </div>
@endsection
