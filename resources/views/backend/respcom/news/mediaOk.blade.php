@extends('respcom/layouts/templateRespCom')

 @section('title')
    Respcom
  @endsection

  @section('dashboard')
    Gestion des Media
  @endsection

  @section('apresHome')
    MediaManage/insolite_ok
  @endsection


@section('content')
     <div class="row justify-content-center align-items-center">
        <div class="col-sm-6 col-sm-5 col-lg-5">
            <div class="card card-success">
                <div class="card-body"> 
                     {{ $ok }}
                </div>
            </div>
           
        </div>
    </div>

@endsection