@extends('layouts/global_template')


@section('titre')
	Bienvenue en FGI - L'Administration centrale
@endsection


@section('section_principale')
		<div><h1 style="text-align: center;">L'ADMINISTRATION CENTRALE DE LA FGI</h1></div><br><br>

		@foreach ($persoAdminCents as $persoAdminCent)
			<h4 style="text-align: center;">{{ strtoupper($persoAdminCent->postePers) }}</h4>
			<p style="text-align: center;"><img src="/{{ $persoAdminCent->chemin }}/{{ $persoAdminCent->nom }}" alt="" width="248" height="331" style="width: 100%; max-width: 248px; height: auto;" class="img-fluid img-thumbnail"><br><strong>{{ $persoAdminCent->nomPers }}</strong></p>
			<p style="text-align: center;">•</p>
		@endforeach
@endsection