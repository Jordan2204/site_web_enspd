{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nomME3M', 'NomME3M:') !!}
			{!! Form::text('nomME3M') !!}
		</li>
		<li>
			{!! Form::label('prenomME3M', 'PrenomME3M:') !!}
			{!! Form::text('prenomME3M') !!}
		</li>
		<li>
			{!! Form::label('gradeME3M', 'GradeME3M:') !!}
			{!! Form::text('gradeME3M') !!}
		</li>
		<li>
			{!! Form::label('lieuME3M', 'LieuME3M:') !!}
			{!! Form::text('lieuME3M') !!}
		</li>
		<li>
			{!! Form::label('id_typeME3M', 'Id_typeME3M:') !!}
			{!! Form::text('id_typeME3M') !!}
		</li>
		<li>
			{!! Form::label('idLabE3M', 'IdLabE3M:') !!}
			{!! Form::text('idLabE3M') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}