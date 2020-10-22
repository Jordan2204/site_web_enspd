@extends('layouts/global_template')


@section('titre')
	{{ config('app.sigle') }} : Les Formations Doctorales
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">{!! $formationsDoct[0]->titre !!}</h1></div>
	<br><br>

	<div>
		{!! $formationsDoct[0]->contenu !!}
	</div><br>

	<div><h4 style="text-align: center;">Organisation des enseignements</h4></div><br>
	<div style="text-align: center;">
		<p><a  href="/storage/fichiers/{!! session('fileUFDN') !!}" download ="">[Télecharger la documentation détaillée]</a></p>
	</div>
	<br><br>


@endsection
