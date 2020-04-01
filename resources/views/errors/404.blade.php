@extends('layouts/templateError')

@section('contenu')
    <br>
    <div class="row justify-content-center">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="card text-center bg-danger">
                <div class="card-header">
                    <h3 class="card-title">Il y a un problème !</h3>
                </div>
                <div class="card-body"> 
                    <p>Nous sommes désolés mais la page que vous désirez n'existe pas..</p>
                    <p ><a style="color: black;" href="/">Revenir a la page d'accueil</a> </p>
                </div>
            </div>
        </div>
    </div>
@endsection