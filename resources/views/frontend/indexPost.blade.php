@extends('layouts.templateBlog')

@section('section_principale')
    <!-- @if(isset($info))
        <div class="row alert alert-info">{{ $info }}</div>
    @endif -->
    {!! $links !!}
   <article class="row">
    @foreach($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="card mb-4"  style="height:100%">
                  <div class="card-header">
                      <header>
                    <h4 style="color: #d23030;">{{ $post->titre }}</h4>
               
                </header>
                  </div>
                   @foreach(session('medias') as $media)
                     @if( $post->media_id == $media->id )
                         <img  class="img-fluid" style="height: 300px;" src="{{ $media->chemin }}/{{ $media->nom }}" alt="{{ $post->titre }}">
                    @endif
               @endforeach
                  <div class="card-body">
                   <!-- <p>{!! $post->contenu !!}</p>-->
                    <em class="pull-right">
                        <span class="fa fa-edit"></span> {{ $post->user_role }} le {!! $post->created_at->format('d-m-Y') !!}
                    </em>
                      </div>
                        <p class=" btn btn-primary card-text"><strong><a href="/blog/post/{{  $post->id }}"style="color: white;"> En savoir plus</a></strong></p>
                    </div>
                 </div><br><br>
     @endforeach
</article>
     
    {!! $links !!}
@endsection