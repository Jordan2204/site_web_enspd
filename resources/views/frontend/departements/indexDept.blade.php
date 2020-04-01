@extends('layouts/global_template')


@section('titre')
	Les départements de la FGI
@endsection


@section('section_principale')
		<div class="row justify-content-center">
			@foreach ($depts as $dept) 
			<div class="col-md-6 col-sm-8">
				<div class="card card-primary">
					<div class="card-header ">
						<h4 class="card-title" align="center">
							{{ $dept->nomDept }} ({{ $dept->ABBR }})
						</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div id="block-1" class="col-md-4 col-sm-6">
								@foreach ($medias as $media)
									@if ($dept->media_id == $media->id)
										<img src="{{$media->chemin}}/{{$media->nom}}" alt="Dept">
									@endif
								@endforeach
								
							</div>
							<div id="block-2 "class="col-md-8 col-sm-10">
								<p>{{ $dept->infoDept }}</p><br>	
								<p>{!! link_to_route('departementNA.show', 'En savoir plus', [$dept->id], ['class' => 'btn btn-primary btn-block']) !!}</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
				@endforeach
			</div>		
	


@endsection