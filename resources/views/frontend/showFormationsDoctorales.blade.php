@extends('layouts/global_template')


@section('titre')
	Les Formations Doctorales
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">{!! $formationsDoct[0]->titre !!}</h1></div>
	<br><br>

	<div>
		{!! $formationsDoct[0]->contenu !!}
	</div> <br><br>

	<div><h5 style="text-align: center;">ORGANISATION DES ENSEIGNEMENTS</h5></div><br>
	<div style="text-align: center;">
		<p><a  href="/storage/files/FTb6itnQHJ.docx" download ="">[Télecharger la documentation détaillée]</a></p>
	</div>
	<br><br>


@endsection
