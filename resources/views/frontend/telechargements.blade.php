{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('media_id', 'Media_id:') !!}
			{!! Form::text('media_id') !!}
		</li>
		<li>
			{!! Form::label('titreTelech', 'TitreTelech:') !!}
			{!! Form::text('titreTelech') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}