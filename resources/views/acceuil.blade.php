@extends('layouts/onesection_template')


@section('titre')
	Bienvenue en FGI - Acceuil
@endsection

@section('section_principale')
<!-- Slide images fgi -->
  <div id="colapse_col" class="col-12">
     <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php 
            $i = 0;
            $tab = array("First","Second","Third","Four" );
            ?>
          @foreach ( session('mediasAgenda') as $mediaAgenda)
          <li data-target="#myCarousel1" data-slide-to="{{ $i }}" class="active"></li>
          @endforeach
         </ol>
         <div class="carousel-inner" role="listbox">
         @foreach ( session('mediasAgenda') as $mediaAgenda)
          @if( $i == '0')
          <div class="carousel-item active">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $i }} slide">
            <div class="carousel-caption">
              <p class="lg">Actu</p>
              <p>( {{ $tab[$i] }}-slide)</p>
            </div>
          </div>
          @else
           <div class="carousel-item">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $i }} slide">
            <div class="carousel-caption">
              <p class="lg">Galerie</p>
              <p>( {{ $tab[$i] }}-slide)</p>
            </div>
          </div>
          @endif

          <?php $i += 1; ?>
           @endforeach
           </div>
        <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      <!--Mot du Doyen-->
      <div class="col-12 jumbotron">
        <div class="row justify-content-center">
           <h2 align="center"><span class="title">Bienvenue a la Faculte de Génie Industriel</span>
           </h2>

        </div>
        <hr class="my-4"/>	
        <div class="row">
          <div class="col-12 col-md-4">
            <p align="center" style="font-family: serif; "><strong>Le {{ strtoupper(session('doyen')->postePers) }}</strong></p><br>
           <p><img src="/{{ session('doyen')->chemin }}/{{ session('doyen')->nom }}" class="img-fluid img-thumbnail" style="height: 350px;"></p>
            <p style="text-align: center;" style="font-family: serif; ">{{ session('doyen')->gradePers }} {{ session('doyen')->nomPers }} {{ session('doyen')->prenomPers }}</p>
          </div>
          <div class="col-12 col-md-8">
           <p align="center" style="font-family: serif; "><strong>Historique</strong></p><br>
          <p><span class="text" style="font-family: serif; ">La Faculté de Génie Industriel (FGI) de l’Université de Douala a été créée en 1993 au Cameroun, suite au décret n°93/030 du 19 janvier 1993 portant organisation administrative et académique de l’Université de Douala. Elle n’a pas été effective dès la création à cause de la conjoncture économique qui prévalait dans les années 90, et elle est opérationnelle depuis décembre 2006 à la suite de l’arrêté ministériel N° 06/0130/MINESUP/DDES du 18 octobre 2006 portant ouverture de la Faculté de Génie Industriel à l’Université de Douala.
          C’est une Faculté qui forme les ingénieurs en Génie Industriel dotés d’une grande capacité en techniques de management intégré (ISO9001/08, ISO14001 et OHSAS 18001), et elle se positionne peu à peu en institution leader de formation de ces nouveaux cadres. Toute la formation à la FGI est strictement basée sur le système LMD.</span></p><br><br>
          <p style="font-family: serif;"><a href="/infosfgiNA/{{ session('formID') }}" class="btn btn-primary btn-block">En savoir Plus sur nos Formations</a></p>
         </div>
         
      </div>

     <!-- Mot du Doyen-->
</div>

<!-- Slide images FGI-->


<div class="col-12">
      <!-- begin nostyle content -->
    <table class="art-article"><br>
    <tbody>
    <tr>
    <td style="text-align: center; width: 100%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 18px; font-variant: small-caps; font-weight: bold;">Toute l'actualité de la Faculté de Génie Industriel<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="100%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span></td>
    </tr>
    </tbody>
    </table>
  
  <!-- end nostyle content -->
     <div id="myCarousel6" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        	<?php 
        		$i = 0;
        	 	$tab = array("First","Second","Third" );
        	  ?>
        	@foreach ( session('mediasActu') as $mediaActu)
          <li data-target="#myCarousel6" data-slide-to="{{ $i }}" class="active"></li>
          @endforeach
         </ol>
         <div class="carousel-inner" role="listbox">
         @foreach ( session('mediasActu') as $mediaActu)
        	@if( $i == '0')
          <div class="carousel-item active">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide"/>

            <video src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide"></video>
            <div class="carousel-caption">
            	<p class="lg"><a href="{{ $mediaActu->url }}">{{ $mediaActu->titre }}</a></p>
            	<p>( {{ $tab[$i] }}-slide)</p>
            </div>
          </div>
          @else
           <div class="carousel-item">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide">
            <div class="carousel-caption">
            	<p class="lg"><a href="{{ $mediaActu->url }}">{{ $mediaActu->titre }}</a></p>
            	<p>( {{ $tab[$i] }}-slide)</p>
            </div>
          </div>
          @endif

          <?php $i += 1; ?>
           @endforeach
           </div>
        <a class="carousel-control-prev" href="#myCarousel6" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel6" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
 
<!-- Les départements-->
<div class="col-12 jumbotron">
  <h1 class="font-weight-bold" align="center">Nos Formations</h1><br>
  <p class="font-weight-bold" align="center">La fgi est une faculté qui forme les ingénieurs<br>

      <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
       
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <?php $i = 0; ?>
        <!--First slide-->
        @foreach (session('depts') as $dept) 

          @if($i === 0)
          <div class="carousel-item active">
          <div class="row">
         @elseif($i%3 === 0 && $i > 0)
           <div class="carousel-item">
           <div class="row">
         @endif
              <div class="col-md-4">
                <div class="card mb-2"  style="height:100%">
                  @foreach (session('medias') as $media)
                    @if ($dept->media_id == $media->id)
                     <img class="card-img-top" src="{{$media->chemin}}/{{$media->nom}}"
                    alt="Card image cap" style="width: 100%; height: 40%;">
                    @endif
                  @endforeach
                  <div class="card-body">
                    <h4 class="card-title">{{ $dept->nomDept }} ({{ $dept->ABBR }})</h4>
                    <p class="card-text"><strong>{{ $dept->infoDept }}.</strong></p><br>
                    <p> {!! link_to_route('departementNA.show', 'En savoir plus', [$dept->id], ['class' => 'btn btn-primary btn-block']) !!}
                    </p>
                  </div>
                </div>
              </div>
              <?php $i++ ?>
              @if($i%3 === 0)
                </div>
                </div>
              @endif
            @endforeach
     
        </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
</div>
<!-- Les départements-->


	
<div class="col-12">
    <!-- begin nostyle content -->
  <div class="custom">
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table class="art-article">
    <tbody>
    <tr>
    <td style="text-align: center; width: 80%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-size: 24px; font-variant: small-caps; font-weight: bold;">Nos Partenaires<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="90%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span></td>
    </tr>
    </tbody>
    </table>
  </div>
  <!-- end nostyle content -->
   
</div>
@endsection







