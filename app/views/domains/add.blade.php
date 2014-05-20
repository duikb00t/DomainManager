@extends('layouts.master')

@section('content')

<hr />
<h4>Domain Manager - Add a new domain</h4>
<hr />
<p>
    Staatssecretaris voor Mobiliteit Melchoir Wathelet (cdH) ziet de luchthavens van Charleroi en Luik als mogelijke
    alternatieven als de Vlamingen niet aanvaarden dat er een oplossing moet komen voor Brusselaars in het dossier rond
    het spreidingsplan voor de luchthaven van Zaventem. Dat heeft hij vanmorgen gezegd in 'De Ochtend' op Radio 1.
</p>

@if ( $errors->count() > 0 )
<hr />
<h5>The following errors have occurred:</h5>

@foreach( $errors->all() as $message )
<div class="alert alert-danger">{{ $message }}</div>
@endforeach
@endif

{{ Form::open(array('files' => true, 'url' => url('add'), 'class'=>'form-horizontal')) }}

{{ Form::label('Registered From:') }}
{{ Form::text('from', '', ['id' => 'from','class' => 'form-control', 'placeholder' => 'dd/mm/yyyy']) }}

{{ Form::label('Registered Until:') }}
{{ Form::text('until', '', ['id' => 'until', 'class' => 'form-control', 'placeholder' => 'dd/mm/yyyy']) }}

{{ Form::label('Domain name') }}
{{ Form::text('domain', '', ['class' => 'form-control',  'placeholder' => 'castel.be']) }}

{{ Form::label('Please add your invoice') }}
{{ Form::file('factuur') }}

<br />
{{ Form::submit('Save', array('class' => 'pull-right btn btn-default')) }}


{{ Form::close() }}

<script type="text/javascript">

    var startDate = new Date(2012,1,20);
    var endDate = new Date(2015,1,25);

    $(function(){
        $('#from').datepicker().on('changeDate', function(ev){
            console.log(ev.date);
            if(ev.date.valueOf() > endDate.valueOf()){
                console.log('The start date cannot be greater then the end date..');
            }
        });
        $('#until').datepicker().on('changeDate', function(ev){
            if(ev.date.valueOf() < endDate.valueOf()){
                console.log('The end date cannot be small then the start date..');
            }
        });
    });

</script>

@stop