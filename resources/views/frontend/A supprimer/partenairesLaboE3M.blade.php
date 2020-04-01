{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nomPE3M', 'NomPE3M:') !!}
			{!! Form::text('nomPE3M') !!}
		</li>
		<li>
			{!! Form::label('villePE3M', 'VillePE3M:') !!}
			{!! Form::text('villePE3M') !!}
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