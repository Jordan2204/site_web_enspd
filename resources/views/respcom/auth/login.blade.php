@extends('layouts.authGlobal')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
      @include('backend.include.titreLogin')
       <form class="form-horizontal" role="form" method="POST" action="{{ url('/respcom/login') }}">
          @include('backend.include.loginForm')
        </form>

       <p class="mb-1" align="center">
       <a class="btn btn-link" href="{{ url('/respcom/password/reset') }}">
            @include('backend.include.passOubli')
        </a>
      </p>
    </div>
</div>

@endsection
