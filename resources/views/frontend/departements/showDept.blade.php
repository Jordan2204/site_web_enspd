@extends('layouts/global_template')


@section('titre')
	Bienvenue en FGI - Bienvenue au  Département {{ $dept->nomDept }}
@endsection


@section('section_principale')
		<div>
			<h2 style="text-align: center;">BIENVENUE AU DEPARTEMENT ({{ $dept->ABBR }})</h2>
		</div><br>
		<div><h2 style="text-align: center;">
			<i class="fas fa-angle-double-left"></i> {{ $dept->nomDept }} <i class="fas fa-angle-double-right"></i></h6>
		</div>
		<div class="row justify-content-center">
		<div  class="col-md-9">
			<p style="text-align: center;">
				<img src="/{{ session('lineChemin') }}/{{ session('lineNom') }}" style="display: block; margin-left: auto; margin-right: auto; border: 1px none #000000;" class="img-fluid" align="ligne">
			</p>
		</div>
		</div>
		<div class="row justify-content-center">
		<div  class=" col-4 col-md-4">
			<p style="text-align: center;">
				<img src="/{{$media->chemin}}/{{$media->nom}}" style="display: block;width: 70%;height: 70%; margin-left: auto; margin-right: auto; border: 1px none #000000; " class="img-fluid" align="ligne">
			</p><br><br>
			<p><h3><strong>Direction du département</strong></h3></p>
		
		</div>
		</div>
		<table style="size: 20;"  align="center">
				<tr>
					<td><p><h4>Chef du Département :  </h4></p></td>
					<td><h4><strong>
						@if (!empty($respDept->name))
							 {{ $respDept->name }} {{ $respDept->prenom }}
						@endif						
						</strong></h4>
					</td>
				</tr>
				<tr>
					<td><p><h4>Responsable Académique : </h4></p></td>
					<td><h4><strong>
						@if (!empty($respAcad[0]->nomPers))
							{{ $respAcad[0]->gradePers }} {{ $respAcad[0]->nomPers }} {{ $respAcad[0]->prenomPers }}
						@endif						
						</strong></h4>
					</td>
				</tr>
				<tr>
					<td><p><h4>Responsable des stages : </h4></p></td>
					<td><h4><strong>
						@if (!empty($respStage[0]->nomPers))
							{{ $respStage[0]->gradePers }} {{ $respStage[0]->nomPers }} {{ $respStage[0]->prenomPers }}
						@endif	
					</strong></h4>
				</td>
				</tr>
		</table><br><br>
		
		<div  class="contenu">

			<div><h2><i class="fas fa-asterisk"></i></i></i><strong> BREF RESUME</strong></h2></div>
			<div>  <?php echo "$dept->description"; ?> </div><br>

			<div><h2><i class="fas fa-asterisk"></i><strong> OPTIONS</strong></h2></div>
			<div>  <?php echo "$dept->optionDept"; ?> </div><br>


			<div><h2><i class="fas fa-asterisk"></i><strong> DEBOUCHES</strong></h2></div>
			<div>  <?php echo "$dept->deboucheDept"; ?> </div><br>

			<div><h2><i class="fas fa-asterisk"></i><strong> EMPLOIS DU TEMPS DES COURS</strong></h2></div>
			<div>  <?php echo "$dept->emploisDuTempsDept"; ?> </div><br>


			<div><h2><i class="fas fa-asterisk"></i><strong> COURS EN LIGNE</strong></h2></div>
			<div>  <?php echo "$dept->coursEnLigneDept"; ?> </div><br>

			<div><h2><i class="fas fa-asterisk"></i><strong> CONTACT DEPARTEMENT</strong></h2></div>
			<div>  <?php echo "$dept->contactDept"; ?> </div><br>

		</div>

@endsection