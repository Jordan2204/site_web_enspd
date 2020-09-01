<hr class="my-4">
<div class="col-12">
<!--Carousel Wrapper-->
<div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example2" data-slide-to="1"></li>
    <li data-target="#multi-item-example2" data-slide-to="2"></li>
 
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox" style="height: 150px;">

    <?php $i = 0; ?>
    <!--First slide-->
    @foreach (session('MediasPartenaires') as $MediasPartenaire) 

      @if($i === 0)
      <div class="carousel-item active">
      <div class="row">
     @elseif($i%4 === 0)
       <div class="carousel-item">
       <div class="row">
     @endif
          <div class=" col-6 col-sm-4 col-md-3">
            <img class="card-img-top" src="/{{$MediasPartenaire->chemin}}/{{$MediasPartenaire->nom}}"
              alt="{{$MediasPartenaire->titre}}" style="height: 50%; width: 80%;">
              
              
          </div>
          <?php $i++ ?>
          @if($i%4 === 0)
            </div>
            </div>
          @endif
        @endforeach
 
    </div>
  <!--/.Slides-->
  </div>
</div>
<!--/.Carousel Wrapper-->