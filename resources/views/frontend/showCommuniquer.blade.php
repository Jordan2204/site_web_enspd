@extends('layouts/global_template')


@section('titre')
	Bienvenue en FGI 
@endsection


@section('section_principale')
		<div><h1 style="text-align: center;">COMMUNIQUE </h1></div><br><br>
		<div>  <?php echo "$communiquer->contenuCom"; ?> </div><br>
@endsection