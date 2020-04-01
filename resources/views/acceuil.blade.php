@extends('layouts/global_template')


@section('titre')
	Bienvenue en FGI - Acceuil
@endsection


@section('section_principale')
			<!-- begin nostyle content -->
	<div class="custom">
		<table class="art-article">
		<tbody>
		<tr>
		<td style="text-align: center; width: 80%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 18px; font-variant: small-caps; font-weight: bold;">Toute l'actualité de la Faculté de Génie Industriel<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="90%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span></td>
		</tr>
		</tbody>
		</table>
	</div>
	<!-- end nostyle content -->
	<article class="art-post">
			<div class="art-postcontent clearfix">
				<div class="newsflash">
					<div class="card">
		              <!-- /.card-header -->
		              <div class="card-body">
		                <div id="myCarousel" class="carousel slide" data-ride="carousel">
		                  <ol class="carousel-indicators">
		                  	@foreach ( session('mediasActu') as $mediaActu)
		                    <li data-target="#myCarousel" data-slide-to="{{ $mediaActu->numPos }}" class="active"></li>
		                    @endforeach
		                   </ol>
		                   <div class="carousel-inner" role="listbox">
		                   @foreach ( session('mediasActu') as $mediaActu)
		                  	@if( $mediaActu->numPos == '0')
		                    <div class="carousel-item active">
		                      <img class="{{ $mediaActu->pos }}-slide" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $mediaActu->pos }} slide">
		                      <div class="carousel-caption">
		                      	<p class="lg">Actu</p>
		                      	<p>( {{ $mediaActu->pos }}-slide)</p>
		                      </div>
		                    </div>
		                    @else
		                     <div class="carousel-item">
		                      <img class="{{ $mediaActu->pos }}-slide" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $mediaActu->pos }} slide">
		                      <div class="carousel-caption">
		                      	<p class="lg">Actu</p>
		                      	<p>( {{ $mediaActu->pos }}-slide)</p>
		                      </div>
		                    </div>
		                    @endif
		                     @endforeach
		                     </div>
		                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Previous</span>
		                  </a>
		                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Next</span>
		                  </a>
		                </div>
		              </div>
		              <!-- /.card-body -->
		            </div>
		            <!-- /.card -->
				</div>
			</div>
	</article>

	<!-- begin nostyle content -->
	<div class="custom">
			<p>&nbsp;</p>
		<p>&nbsp;</p>
		<table class="art-article">
		<tbody>
		<tr>
		<td style="text-align: center; width: 80%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 18px; font-variant: small-caps; font-weight: bold;">L'Agenda de la FGI<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="90%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span></td>
		</tr>
		</tbody>
		</table>
	</div>
	<!-- end nostyle content -->
	<article class="art-post">
			<div class="art-postcontent clearfix">
				<div class="newsflash">
					<div class="card">
		              <!-- /.card-header -->
		              <div class="card-body">
		                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
		                  <ol class="carousel-indicators">
		                  	@foreach ( session('mediasAgenda') as $mediaAgenda)
		                    <li data-target="#myCarousel" data-slide-to="{{ $mediaAgenda->numPos }}" class="active"></li>
		                    @endforeach
		                   </ol>
		                   <div class="carousel-inner">
		                   @foreach ( session('mediasAgenda') as $mediaAgenda)
		                  	@if( $mediaAgenda->numPos == '0')
		                    <div class="carousel-item active">
		                      <img class="{{ $mediaAgenda->pos }}-slide" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $mediaAgenda->pos }} slide">
		                    </div>
		                    @else
		                     <div class="carousel-item">
		                      <img class="{{ $mediaAgenda->pos }}-slide" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $mediaAgenda->pos }} slide">
		                    </div>
		                    @endif
		                     @endforeach
		                     </div>
		                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Previous</span>
		                  </a>
		                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Next</span>
		                  </a>
		                </div>
		              </div>
		              <!-- /.card-body -->
		            </div>
		            <!-- /.card -->
		        </div>
			</div>
	</article>
			
@endsection







