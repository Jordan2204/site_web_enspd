@extends('layouts/global_template')


@section('titre')
	Les départements de la FGI
@endsection


@section('section_principale')
		<div class="row justify-content-center">
			@foreach ($depts as $dept) 
			<div class="col-12 col-md-4 col-sm-6">
				<div class="card card-primary" style="height:100%">
				@foreach ($medias as $media)
					@if ($dept->media_id == $media->id)
						<img class="card-img-top" src="{{$media->chemin}}/{{$media->nom}}" alt="Dept" class="img-fluid">
					@endif
				@endforeach
			 	<div class="card-body">
				    <h4 class="card-title">{{ $dept->nomDept }} ({{ $dept->ABBR }})</h4>
				    <p class="card-text">{{ $dept->infoDept }}</p>
				   <p>
				   	{!! link_to_route('departementNA.show', 'En savoir plus', [$dept->id], ['class' => 'btn btn-primary btn-block']) !!}
				   </p>
				</div>
				</div>
			</div>
			@endforeach
			</div>		
	


@endsection