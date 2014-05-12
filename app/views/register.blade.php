@extends('layouts.master')

@section('content')

<h4>Register</h4>

@if ( $errors->count() > 0 )
<hr />
<h5>The following errors have occurred:</h5>

    @foreach( $errors->all() as $message )
    <div class="alert alert-danger">{{ $message }}</div>
    @endforeach
@endif

{{ Form::open(array('url' => url('user/register'), 'class'=>'form-horizontal')) }}

{{ Form::label('Firstname') }}
{{ Form::text('firstname', '' , ['class' => 'form-control']) }}

{{ Form::label('Lastname') }}
{{ Form::text('lastname', '' , ['class' => 'form-control']) }}

{{ Form::label('Email') }}
{{ Form::email('email_address', '', ['class' => 'form-control']) }}

{{ Form::label('Password') }}
{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}

{{ Form::label('Password again') }}
{{ Form::password('password_confirmation', array('placeholder' => 'Password again', 'class' => 'form-control')) }}


<br />
{{ Form::submit('Save', array('class' => 'pull-right btn btn-default')) }}

{{ Form::close() }}

@stop