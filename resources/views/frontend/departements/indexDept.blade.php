@extends('layouts/global_template')


@section('titre')
	Les départements de {{ config('app.sigle') }}
@endsection


@section('section_principale')
		<div class="row justify-content-center">
			@foreach ($depts as $dept) 
			<div class="col-6 col-sm-6 col-lg-4">
				<div class="card mb-2" style="height:100%">
					@foreach ($medias as $media)
					@if ($dept->media_id == $media->id)
						<img class="card-img-top img-fluid" src="{{$media->chemin}}/{{$media->nom}}" alt="Dept" style="width: 100%;height: 150px">
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