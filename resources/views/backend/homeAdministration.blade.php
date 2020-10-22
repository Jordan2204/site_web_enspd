<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.sigle') }} : Pré-Authentification</title>

        @include('backend.include.style')

        
        <style type="text/css">
          [class*="col"] { margin-bottom: 20px; }
          img { width: 100%; }
          body { margin-top: 10px; }
      </style>
      
    </head>
<body class="login-page">
	<div class="login-box">
		<div class="text-center">
            <img class=" rounded-circle " src="/storage/images/rvpQB435Ty.jpg" alt="User profile picture" style="width: 200px; height: 150px;">
        </div><br><br>
		<div class="login-box-body ">
			<div>
				<div class="card card-info">
					<div class="card-header text-center">
						<h3 class="card-title " align="center">CHOISIR VOTRE PROFILE</h3>
					</div>
					<div class="card-body">
					{!! Form::open(array('route' => 'administrationInterface.store', 'method' => 'POST')) !!}	
					<div class="form-group">
						<select name="role" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
							<option  data-select2-id="30" value="admin" selected="selected">Administrateur</option>
							<option  data-select2-id="31" value="directeur">Directeur</option>
							<option  data-select2-id="32" value="respDept">Responsable de département</option>
							<!--<option  data-select2-id="33" value="respCentInc">Responsable du centre d'incubation</option>-->
							<option  data-select2-id="34" value="respForm">Responsable des Formations</option>
							<option  data-select2-id="35" value="respEcoleDoct">Responsable de l'école doctorale</option>
							<option  data-select2-id="36" value="respCom">Responsable de la cellule de communication</option>
						</select>
					</div>	
							{!! Form::submit('Valider', ['class' => 'btn btn-info btn-block']) !!}
					{!! Form::close() !!}
					</div>
				</div>
				
			</div>
		</div>
	</div>
	 @include('backend.include.js')
  </body>
</html>