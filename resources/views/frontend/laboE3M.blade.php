{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('objectif', 'Objectif:') !!}
			{!! Form::text('objectif') !!}
		</li>
		<li>
			{!! Form::label('strucRattach', 'StrucRattach:') !!}
			{!! Form::text('strucRattach') !!}
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