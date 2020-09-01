@extends('layouts/global_template')


@section('titre')
	{{ config('app.sigle') }} : Le Laboratoire E3M
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">PRÉSENTATION DU LABORATOIRE E3M</h1></div>
	<br>

	<div>
		{!! $labo->description !!}
	</div> <br><br>

    <div><h2 style="text-align: center;">OBJECTIFS</h2></div><br>
    <div>
        {!! $labo->objectif !!}
    </div>
   
	<br><br>
	<div class="row justify-content-center">
	<div class="col-md-10">
          <div><h2 style="text-align: center;">COORDONNATEUR</h2></div><br>
          <div class="card card-primary">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coords as $coord)
                            <tr>
                                 <td class="text-secondary"><strong>{!! $coord->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->prenomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->lieuDeServicePers !!}</strong></td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
           <br><br>
            <div><h2 style="text-align: center;">MEMBRES D'HONNEUR</h2></div><br>
           <div class="card card-primary">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mbresHs as $mbresH)
                            <tr>
                                 <td class="text-secondary"><strong>{!! $mbresH->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->prenomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->lieuDeServicePers !!}</strong></td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
           <br><br>
            <div><h2 style="text-align: center;">MEMBRES</h2></div><br>
           <div class="card card-primary">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mbres as $mbre)
                            <tr>
                                 <td class="text-secondary"><strong>{!! $mbre->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->prenomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->lieuDeServicePers !!}</strong></td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
           <br><br>
            <div><h2 style="text-align: center;">PARTENAIRES</h2></div><br>
           <div class="card card-primary">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>Raison Sociale</th>
                            <th>Ville</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partnaires as $partnaire)
                            <tr>
                                <td class="text-secondary"><strong>{!! $partnaire->raison_socialePLabo !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $partnaire->villePLabo !!}</strong></td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
        </div>
	</div>
	<br><br>
	
	<div><h2 style="text-align: center;">STRUCTURE DE RATTACHEMENT</h2></div><br>
	<div style="text-align: center;">
		{!! $labo->strucRattach !!} 
    
	</div>
	<br><br>
  
	<div style="text-align: right;">
		<p><a href="/storage/fichiers/{!! session('fileE3MN') !!}" download ="">[Télecharger la documentation détaillée]</a></p>
	</div>

   
    

@endsection
