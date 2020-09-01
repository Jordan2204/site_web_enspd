@extends('layouts/onesection_template')

@section('titre')
	Bienvenue a l'ENSPD - Acceuil
@endsection

@section('section_principale')
      <!--Mot du Doyen-->
      <div class="col-12 jumbotron">
        <div class="row justify-content-center">
           <h2 align="center"><span class="title" style="color: #d23030;"><strong>Bienvenue a l' {{ config('app.name') }} <a class="navbar-brand" href="#"><img class="img-fluid rounded" style="height: 40px;" src="/storage/images/HLL6Rm86e4.jpg" alt="logo"></a></strong></span>
           </h2>

        </div>
        <hr class="my-4"/>	
        <div class="row">
          <div class="col-12 col-md-4">
            <p align="center" style="font-family: serif; "><strong>Le {{ strtoupper(session('directeur')->postePers) }}</strong></p><br>
           <p><img src="/{{ session('directeur')->chemin }}/{{ session('directeur')->nom }}" class="img-fluid img-thumbnail rounded" style="height: 350px;"></p>
            <p style="text-align: center;" style="font-family: serif; ">{{ session('directeur')->gradePers }} {{ session('directeur')->nomPers }} {{ session('directeur')->prenomPers }}</p>
          </div>
          <div class="col-12 col-md-8">
           <p align="center" style="font-family: serif; "><strong>Le mot du Directeur</strong></p><br>
          <p><span class="text" style="font-family: serif; ">L'Ecole Nationale Supérieure Polytechnique de Douala (ENSPD) a été créée en 1993 au Cameroun, suite au décret n°93/030 du 19 janvier 1993 portant organisation administrative et académique de l’Université de Douala. Elle n’a pas été effective dès la création à cause de la conjoncture économique qui prévalait dans les années 90, et elle est opérationnelle depuis décembre 2006 à la suite de l’arrêté ministériel N° 06/0130/MINESUP/DDES du 18 octobre 2006 portant ouverture de la Faculté de Génie Industriel à l’Université de Douala.
          C’est une école qui forme les ingénieurs en Génie Industriel dotés d’une grande capacité en techniques de management intégré (ISO9001/08, ISO14001 et OHSAS 18001), et elle se positionne peu à peu en institution leader de formation de ces nouveaux cadres. Toute la formation à l' ENSPD est strictement basée sur le système LMD.</span></p><br><br>
          <p style="font-family: serif;"><a href="/infosfgiNA/{{ session('formID') }}" class="btn btn-primary btn-block">En savoir Plus sur nos Formations</a></p>
         </div>
         
      </div>

     <!-- Mot du Doyen-->
</div>

<!-- Slide images FGI-->
<div class="col-12 colapse_col_slide">
      <!-- begin nostyle content -->
    <br>
    <h2 style="text-align: center; width: 100%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-variant: small-caps; font-weight: bold;color: #d23030;">Toute l'actualité de Polytechnique de Douala<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="100%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span>
    </h2>
   
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
              <p class="lg"><a style="color: cyan; href="{{ $mediaActu->url }}">{{ $mediaActu->titre }}</a></p>
            </div>
          </div>
          @else
           <div class="carousel-item">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" alt="{{ $i }} slide">
            <div class="carousel-caption">
              <p class="lg"><a  style="color: cyan;" href="{{ $mediaActu->url }}">{{ $mediaActu->titre }}</a></p>
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
  <h1 class="font-weight-bold" align="center" style="color: #d23030;">Nous Formons les Ingénieurs de Demain</h1><br>
  <p class="font-weight-bold" align="center">Entrez au coeur de l'Ecole Nationale Supérieure Polytechnique de Douala à travers ses réalisations, prix remportés, recompenses, infrastructutes, évènement en  images...<br>

      <hr class="my-4">
      <div class="row justify-content-center">
        @foreach(session('articles') as $article)
        <div class="col-12 col-md-4">
          <div class="card mb-2"  style="height:100%">
              @foreach(session('medias') as $media)
                @if( $article->media_id == $media->id )
                  <img  class="img-fluid" style="height: 300px;" src="{{ $media->chemin }}/{{ $media->nom }}" alt="{{ $article->titre }}">
                @endif
               @endforeach
            <div class="card-body">
              <h5 class="card-title">{{ $article->titre }}</h5>
              <p class="card-text" ><strong><i style="color: #d23030 " class="fas fa-eye float-right"></i></strong></p>
              <p>
              </p>
            </div>
            <p class=" btn btn-primary" style="margin: 0px;"><strong><a href="/blog/post/{{ $article->id }}" style="color:white;"> En savoir plus</a></strong></p>
          </div>
        </div>
        @endforeach
           
      </div><br>
      <h4 class="pCustum" align="center"><strong><a href="/blog">Consulter Tous les Articles <span class="fa fa-chevron-right"></span></a></strong></h4>  
</div>
<!-- Les départements-->


<!-- Les départements-->
<div class="col-12 jumbotron">
  <h2 class="font-weight-bold" align="center" style="color: #d23030;">Quelques Liens Utiles  </h2>
  <p class="font-weight-bold" align="center"></p>

      <hr class="my-4">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card mb-2"  style="height:100%">
           <img src="">
            <div class="card-body">
              <h4 class="card-title">
                Consulter la liste des inscrits au concours d'entree a l'ENSPD de septembre 2020
              </h4>
              <p class="card-text" align="center"><strong><a href="#">Niveau 1</a></strong></p><br>
              <p class="card-text" align="center"><strong><a href="#"> Niveau 3</a></strong></p><br>

            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card mb-2"  style="height:100%">
           <img src="">
            <div class="card-body">
              <h4 class="card-title">
                Consulter les emplois de Temps des cours pour l'annee 2020
              </h4>   
              <p class="card-text"><strong><a href="#"> En savoir plus</a></strong></p><br>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="card mb-2"  style="height:100%">
           <img src="">
            <div class="card-body">
              <h4 class="card-title">
                Les inscriptions au concours de l'ENSPD de septembre 2020 sont ouvertes. <br>
                <a href=""> suivre ce lien pour s'inscrire</a>
              </h4>
              <p class="card-text">

              </p>
              </div>
       
          </div>
        </div>
       
      </div>
      
</div>
<!-- Les départements-->

<!-- Slide images enspd -->
<div class="col-12 colapse_col_slide"><br>
   
        <h2 style="text-align: center; width: 100%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-variant: small-caps; font-weight: bold;color: #d23030;">Polytehnique de Douala en Images<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" alt="" width="100%" height="6px" class="art-lightbox" style="border-color: #bbc5c9; border-style: none;" border="0"></span>
        </h2>
     
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
              <p class="lg">Galerie</p>
            </div>
          </div>
          @else
           <div class="carousel-item">
            <img class="{{ $tab[$i] }}-slide d-block w-100" src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" alt="{{ $i }} slide">
            <div class="carousel-caption">
              <p class="lg">Galerie</p>
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




<!-- Les départements-->
<div class="col-12 jumbotron">
  <h1 class="font-weight-bold" align="center" style="color: #d23030;">Découvrez Nos Offres de Formation</h1><br>
  <p class="font-weight-bold" align="center">L'ENSPD est un institut qui forme les ingénieurs. Etes vous A la Recherche d'une Formation de qualité ?
               Vous etes au bon endroit<br>

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
         @elseif($i%3 === 0)
           <div class="carousel-item">
           <div class="row">
         @endif
              <div class="col-md-4">
                <div class="card mb-2"  style="height:100%">
                  @foreach (session('medias') as $media)
                    @if ($dept->media_id == $media->id)
                     <img class="" src="{{$media->chemin}}/{{$media->nom}}"
                    alt="Card image cap" style="width:100%;height: 250px;">
                    @endif
                  @endforeach
                  <div class="card-body">
                    <h4 class="card-title">{{ $dept->nomDept }} ({{ $dept->ABBR }})</h4>
                    <p class="card-text"><strong>{{ $dept->infoDept }}.</strong></p><br>
                    </div>
                    <p>{!! link_to_route('departementNA.show', 'En savoir plus', [$dept->id], ['class' => 'btn btn-primary btn-block']) !!}</p>
                  </div>
                 </div>
              <?php $i++; ?>
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

    <h2 style="text-align:center; width: 100%; border-width: 0px; border-color: #8099b3; padding: 5px;"><span style="font-family: Arial, 'Arial Unicode MS', Helvetica, sans-serif; font-variant: small-caps; font-weight: bold;color: #d23030;">Nos Partenaires</span></h2>
   
  </div>
  <!-- end nostyle content -->
</div>
@endsection







