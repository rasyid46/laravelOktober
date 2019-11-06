@extends('layouts.app')
@section('content')
{!! Form::open(['route' => 'login.store', 'class' => 'form-
horizontal', 'role' => 'form']) !!}
<div class="form-group">
{!! Form::label('email', 'Email', array('class' => 'col-lg-3
control-label')) !!}
<div class="col-lg-4">
{!! Form::text('email', null, array('class' => 'form-control'))
!!}
<div class="text-danger">{!! $errors->first('email') !!}</div>
</div>
<div class="clear"></div>
</div>
<div class="form-group">
{!! Form::label('password', 'Password', array('class' => 'col-lg-
3 control-label')) !!}
<div class="col-lg-4">
{!! Form::password('password', array('class' => 'form-
control')) !!}
<div class="text-danger">{!! $errors->first('password')
!!}</div>
</div>
<div class="clear"></div>
</div>
<div class="form-group">
{!! Form::label('remember', 'Remember Me', array('class' => 'col-
lg-3 control-label')) !!}
<div class="col-lg-4">
{!! Form::checkbox('remember', null, array('class' => 'form-
control')) !!}
</div>
<div class="clear"></div>
</div>
<div class="form-group">
<div class="col-lg-3"></div>
<div class="col-lg-4">
{!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}
</div>
<div class="clear"></div>
</div>
{!! Form::close() !!}
{!! link_to(route('reminders.create'), 'Forgot Password?') !!}
@stop