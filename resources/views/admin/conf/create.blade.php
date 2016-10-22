@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Conf</h1>
    <hr/>

    {!! Form::open(['url' => '/admin/conf', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('key') ? 'has-error' : ''}}">
                {!! Form::label('key', 'Key', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('key', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('key', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
                {!! Form::label('value', 'Value', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('value', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection