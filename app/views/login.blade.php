@extends('layouts.master')

@section('content')

<h4>Login</h4>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

{{ Form::open(array('url' => url('user/login'), 'class'=>'form-horizontal')) }}

{{ Form::label('Email') }}
{{ Form::email('email_address', '', ['class' => 'form-control']) }}

{{ Form::label('Password') }}
{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}

<div class="checkbox">
    <label>
        <input type="checkbox" value="remember">
        Remember me.
    </label>
</div>

<br />
{{ Form::submit('Save', array('class' => 'btn btn-default')) }}

{{ Form::close() }}

<a href="{{ URL::asset('user/register') }}">Create your account!</a>

@stop