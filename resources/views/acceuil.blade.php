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
		                  	<?php 
		                  		$i = 0;
		                  	 	$tab = array("First","Second","Third" );
		                  	  ?>
		                  	@foreach ( session('mediasActu') as $mediaActu)
		                    <li data-target="#myCarousel" data-slide-to="{{ $i }}" class="active"></li>
		                    @endforeach
		                   </ol>
		                   <div class="carousel-inner" role="listbox">
		                   @foreach ( session('mediasActu') as $mediaActu)
		                  	@if( $i == '0')
		                    <div class="carousel-item active">
		                      <img class="{{ $tab[$i] }}-slide" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide">
		                      <div class="carousel-caption">
		                      	<p class="lg">Actu</p>
		                      	<p>( {{ $tab[$i] }}-slide)</p>
		                      </div>
		                    </div>
		                    @else
		                     <div class="carousel-item">
		                      <img class="{{ $tab[$i] }}-slide" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide">
		                      <div class="carousel-caption">
		                      	<p class="lg">Actu</p>
		                      	<p>( {{ $tab[$i] }}-slide)</p>
		                      </div>
		                    </div>
		                    @endif

		                    <?php $i += 1; ?>
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
		                  	<?php 
		                  		$i = 0;
		                  	 	$tab = array("First","Second","Third" );
		                  	  ?>
		                  	@foreach ( session('mediasAgenda') as $mediaAgenda)
		                    <li data-target="#myCarousel" data-slide-to="{{ $i }}" class="active"></li>
		                    @endforeach
		                   </ol>
		                   <div class="carousel-inner">
		                   @foreach ( session('mediasAgenda') as $mediaAgenda)
		                  	@if( $i == '0')
		                    <div class="carousel-item active">
		                      <img class="{{ $tab[$i] }}-slide" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $tab[$i] }} slide">
		                    </div>
		                    @else
		                     <div class="carousel-item">
		                      <img class="{{ $tab[$i] }}-slide" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $tab[$i] }} slide">
		                    </div>
		                    @endif

		                    <?php $i += 1; ?>
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







