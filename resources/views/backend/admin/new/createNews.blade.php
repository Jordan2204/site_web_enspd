@extends('admin/layouts/templateAdmin')

@section('title')
   Admin| Création d'une new
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