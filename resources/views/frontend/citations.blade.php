{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nomAuteur', 'NomAuteur:') !!}
			{!! Form::text('nomAuteur') !!}
		</li>
		<li>
			{!! Form::label('citationAuteur', 'CitationAuteur:') !!}
			{!! Form::text('citationAuteur') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}