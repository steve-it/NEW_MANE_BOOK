{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('NomAuteur', 'NomAuteur:') !!}
			{!! Form::text('NomAuteur') !!}
		</li>
		<li>
			{!! Form::label('SexeAuteurs', 'SexeAuteurs:') !!}
			{!! Form::text('SexeAuteurs') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}