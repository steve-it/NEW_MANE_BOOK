{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('TitreDocuments', 'TitreDocuments:') !!}
			{!! Form::text('TitreDocuments') !!}
		</li>
		<li>
			{!! Form::label('IsbnDocuments', 'IsbnDocuments:') !!}
			{!! Form::text('IsbnDocuments') !!}
		</li>
		<li>
			{!! Form::label('IssnDocuments', 'IssnDocuments:') !!}
			{!! Form::text('IssnDocuments') !!}
		</li>
		<li>
			{!! Form::label('CoteDocuments', 'CoteDocuments:') !!}
			{!! Form::text('CoteDocuments') !!}
		</li>
		<li>
			{!! Form::label('NumeroEntresDocuments', 'NumeroEntresDocuments:') !!}
			{!! Form::text('NumeroEntresDocuments') !!}
		</li>
		<li>
			{!! Form::label('AnneePublicationDocuments', 'AnneePublicationDocuments:') !!}
			{!! Form::text('AnneePublicationDocuments') !!}
		</li>
		<li>
			{!! Form::label('EditionsDocuments', 'EditionsDocuments:') !!}
			{!! Form::text('EditionsDocuments') !!}
		</li>
		<li>
			{!! Form::label('NbreExemplaireEdition', 'NbreExemplaireEdition:') !!}
			{!! Form::text('NbreExemplaireEdition') !!}
		</li>
		<li>
			{!! Form::label('AnneeEditionDocuments', 'AnneeEditionDocuments:') !!}
			{!! Form::text('AnneeEditionDocuments') !!}
		</li>
		<li>
			{!! Form::label('MaisonEditionDocuments', 'MaisonEditionDocuments:') !!}
			{!! Form::text('MaisonEditionDocuments') !!}
		</li>
		<li>
			{!! Form::label('LargeurEditionDocuments', 'LargeurEditionDocuments:') !!}
			{!! Form::text('LargeurEditionDocuments') !!}
		</li>
		<li>
			{!! Form::label('LongueurEditionDocuments', 'LongueurEditionDocuments:') !!}
			{!! Form::text('LongueurEditionDocuments') !!}
		</li>
		<li>
			{!! Form::label('AdresseMaisonEdition', 'AdresseMaisonEdition:') !!}
			{!! Form::text('AdresseMaisonEdition') !!}
		</li>
		<li>
			{!! Form::label('IllustrationDocuments', 'IllustrationDocuments:') !!}
			{!! Form::text('IllustrationDocuments') !!}
		</li>
		<li>
			{!! Form::label('PeriodiciteDocuments', 'PeriodiciteDocuments:') !!}
			{!! Form::text('PeriodiciteDocuments') !!}
		</li>
		<li>
			{!! Form::label('ReliureDocuments', 'ReliureDocuments:') !!}
			{!! Form::text('ReliureDocuments') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}