{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('titreFECB', 'TitreFECB:') !!}
			{!! Form::text('titreFECB') !!}
		</li>
		<li>
			{!! Form::label('contenuFECB', 'ContenuFECB:') !!}
			{!! Form::textarea('contenuFECB') !!}
		</li>
		<li>
			{!! Form::label('media_id', 'Media_id:') !!}
			{!! Form::text('media_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}