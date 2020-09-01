@extends('layouts/templateBlog')


@section('titre')
	{{ $post->titre }}
@endsection


@section('section_principale')
		<div><h4 style="text-align: center;">{{ $post->titre }}</h1></div>
		<div class="row justify-content-center">
		<div class="col-md-12">
		<p style="text-align: center;">
				<img src="/{{ $media->chemin }}/{{ $media->nom }}" alt="{{ $post->titre }}" style="display: block; margin-left: auto; margin-right: auto; border: 1px none #000000; max-height: 350px; max-width: 100%;" class="img-responsive">
			</p>
		</div>
		</div>
		<div  class="contenu">
			<div><?php echo "$post->contenu"; ?></div><br>
		</div>

@endsection