{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('NomEmprunteur', 'NomEmprunteur:') !!}
			{!! Form::text('NomEmprunteur') !!}
		</li>
		<li>
			{!! Form::label('CniEmprunteur', 'CniEmprunteur:') !!}
			{!! Form::text('CniEmprunteur') !!}
		</li>
		<li>
			{!! Form::label('DateEmprunt', 'DateEmprunt:') !!}
			{!! Form::text('DateEmprunt') !!}
		</li>
		<li>
			{!! Form::label('DateEffRetourEmprunt', 'DateEffRetourEmprunt:') !!}
			{!! Form::text('DateEffRetourEmprunt') !!}
		</li>
		<li>
			{!! Form::label('ObservationEmprunt', 'ObservationEmprunt:') !!}
			{!! Form::textarea('ObservationEmprunt') !!}
		</li>
		<li>
			{!! Form::label('ObservationRetour', 'ObservationRetour:') !!}
			{!! Form::textarea('ObservationRetour') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}