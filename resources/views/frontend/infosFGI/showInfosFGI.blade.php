@extends('layouts/global_template')


@section('titre')
	{{ $infosFGI->titreFECB }}
@endsection


@section('section_principale')
		<div><h1 style="text-align: center;">{{ $infosFGI->titreFECB }}</h1></div>
		<div class="row justify-content-center">
	@if ($infosFGI->codeFECB == 'FormFGI')
		<div class="col-md-3">
	@else
		<div class="col-md-12">
	@endif

			<p style="text-align: center;">
				<img src="/{{ $media->chemin }}/{{ $media->nom }}" alt="{{ $infosFGI->codeFECB }}" style="display: block; margin-left: auto; margin-right: auto; border: 1px none #000000;" class="img-responsive">
			</p>
		</div>
		</div>
		<div  class="contenu">
			<div><?php echo "$infosFGI->contenuFECB"; ?></div><br>
		</div>

@endsection