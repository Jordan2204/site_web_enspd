@extends('respcom/layouts/templateRespCom')

@section('title')
   Resp Com | Création d'une new
@endsection

@section('dashboard')
    Création des News
@endsection

@section('apresHome')
    Create / News
@endsection

@section('content')
    @include('backend.layouts.new.createNews')
@endsection