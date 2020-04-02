@extends('layouts/global_template')


@section('titre')
	Bienvenue en FGI - Bienvenue au  Département {{ $dept->nomDept }}
@endsection


@section('section_principale')
		<div>
			<h1 style="text-align: center;">BIENVENUE AU DEPARTEMENT ({{ $dept->ABBR }})</h1>
		</div><br>
		<div><h2 style="text-align: center;">{{ $dept->nomDept }}</h6></div>
		<div class="row justify-content-center">
		<div  class="col-md-9">
			<p style="text-align: center;">
				<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" style="display: block; margin-left: auto; margin-right: auto; border: 1px none #000000;" class="img-responsive" align="ligne">
			</p>
		</div>
		</div>
		<div class="row justify-content-center">
		<div  class=" col-4 col-md-5">
			<p style="text-align: center;">
				<img src="/{{$media->chemin}}/{{$media->nom}}" style="display: block; margin-left: auto; margin-right: auto; border: 1px none #000000; " class="img-fluid" align="ligne">
			</p>
		</div>
		</div><br>
		<table style="size: 20;"  align="center">
				<tr>
					<td><p><h4>Chef du Département : </h4></p></td>
					<td><h3><strong>{{ $respDept->name }} {{ $respDept->prenom }}</strong></h3></td>
				</tr>
				<tr>
					<td><p><h4>Responsable Académique : </h4></p></td>
					<td><h3><strong>
						@if (!empty($respAcad[0]->nomPers))
							{{ $respAcad[0]->gradePers }} {{ $respAcad[0]->nomPers }} {{ $respAcad[0]->prenomPers }}
						@endif						
						</strong></h3>
					</td>
				</tr>
				<tr>
					<td><p><h4>Responsable des stages : </h4></p></td>
					<td><h3><strong>
						@if (!empty($respStage[0]->nomPers))
							{{ $respStage[0]->gradePers }} {{ $respStage[0]->nomPers }} {{ $respStage[0]->prenomPers }}
						@endif	
					</strong></h3>
				</td>
				</tr>
		</table><br><br>
		
		<div  class="contenu">

			<div><i class="far fa-circle nav-icon"></i><strong>EN BREF</strong></div>
			<div>  <?php echo "$dept->description"; ?> </div><br>

			<div><i class="far fa-circle nav-icon"></i><strong> OPTIONS</strong></div>
			<div>  <?php echo "$dept->optionDept"; ?> </div><br>


			<div><i class="far fa-circle nav-icon"></i><strong>DEBOUCHES</strong></div>
			<div>  <?php echo "$dept->deboucheDept"; ?> </div><br>

			<div><i class="far fa-circle nav-icon"></i><strong> EMPLOIS DU TEMPS DES COURS</strong></div>
			<div>  <?php echo "$dept->emploisDuTempsDept"; ?> </div><br>


			<div><i class="far fa-circle nav-icon"></i><strong> COURS EN LIGNE</strong></div>
			<div>  <?php echo "$dept->coursEnLigneDept"; ?> </div><br>

			<div><i class="far fa-circle nav-icon"></i><strong> CONTACT DEPARTEMENT</strong></div>
			<div>  <?php echo "$dept->contactDept"; ?> </div><br>

		</div>

@endsection