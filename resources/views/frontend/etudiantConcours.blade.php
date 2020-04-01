{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nomETC', 'NomETC:') !!}
			{!! Form::text('nomETC') !!}
		</li>
		<li>
			{!! Form::label('prenomETC', 'PrenomETC:') !!}
			{!! Form::text('prenomETC') !!}
		</li>
		<li>
			{!! Form::label('concours_id', 'Concours_id:') !!}
			{!! Form::text('concours_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}