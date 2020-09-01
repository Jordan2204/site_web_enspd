@extends('layouts/global_template')


@section('titre')
	Bienvenue a {{ config('app.sigle') }} - L'Administration centrale
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">L'ADMINISTRATION CENTRALE DE {{ config('app.sigle') }}</h1></div><br><br>
	<div class="row">
		@foreach ($persoAdminCents as $persoAdminCent) 
			<div class="col-6 col-sm-4">
				<div class="card mb-2" style="height:100%">
				<img src="/{{ $persoAdminCent->chemin }}/{{ $persoAdminCent->nom }}" alt="img-admin-cent" style="width: 100%; height: 60%;" class=" card-img-top">
				<div class="card-body">
					<p class="card-title" align="center">
				    	{{ strtoupper($persoAdminCent->postePers) }}
				    </p>
				    <p class="card-text" align="center"><strong>{{ $persoAdminCent->gradePers }} {{ $persoAdminCent->nomPers }} {{ $persoAdminCent->prenomPers }}</strong>
				    </p>
				    
				</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection