  <div class="col-6 col-sm-6 col-md-12" style="height: 100%">
    <div class="art-vmenublock clearfix">
      <div class="art-vmenublockcontent">
      <ul class="art-vmenu nav-bar">
        <li class="nav-item"><a href="/dossiersPartenairesNA"><i class="fas fa-angle-double-right"></i> Suivre mon Dossier
        </a>
        </li>
         <li class="nav-item"><a href="/communiquerNA/3"><i class="fas fa-angle-double-right"></i> Communiqué Etudiants</a>
        </li>
         <li class="nav-item"><a href="/communiquerNA/2"><i class="fas fa-angle-double-right"></i> Communiqué Public <span class="badge badge-danger">!</span></a>
        </li>
          <li class="nav-item"><a href="http://fgi-udo.local/#"><i class="fas fa-angle-double-right"></i> Pièces à télécharger</a>
          </li>
      </ul>
      </div>
    </div>
  </div>


  <div class="col-6 col-sm-6 col-md-12" style="height: 100%">
    <div class="custom">
    <p style="text-align: center;">&nbsp;</p>
    <p class="Pcustum"><span style="color: #304050; font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 13px;"><span class="spanCustum">Académia</span><img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" class="art-lightbox" style="margin-bottom: 0px; border: #bbc5c9;" width="90%"></span></p>

  <p class="Pcustum">Bon à savoir sur nos Départements et Unités de formations doctorales</p><br>
  <div class="row justify-content-center">
     @foreach (session('mini_icones') as $mini_icone)
      @if ($mini_icone->titre == 'E3M')
        <div class="col-4 col-sm-4 col-lg-4">
      @else
        <div class="col-4 col-sm-4 col-lg-4">
      @endif
        @if ($mini_icone->titre == 'E3M')
           <a href="/laboNA/{{ $mini_icone->idDept }}" title="{{ $mini_icone->titre }}"><img src="/{{ $mini_icone->chemin }}/{{ $mini_icone->nom }}"  style="margin: 0px 0px 0px; border: 1px none #000000; width: 100%;"></a>
        @elseif($mini_icone->titre != 'E3M')
           <a href="/departementNA/{{ $mini_icone->idDept }}" title="{{ $mini_icone->titre }}"><img src="/{{ $mini_icone->chemin }}/{{ $mini_icone->nom }}"  style="margin: 0px 0px 0px; border: 1px none #000000;width: 100%;"></a>
        @endif
      </div>
     @endforeach
   </div>
 </div>
</div>


  <div class="col-12 col-sm-6 col-md-12">
    <div class="art-block clearfix"><div class="art-blockcontent">
      <div class="custom">
      <p class="Pcustum"><span style="color: #242b2d;"><span  class="spanCustum">Vie du Campus</span><img class="art-lightbox" src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" width="90%" style="margin-bottom: 0px; border: rgb(187, 197, 201); width: auto; max-width: 100%; height: auto;"></span></p>
      </div>
    </div>
  </div>
</div>
