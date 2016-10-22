@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Conf {{ $conf->id }}
        <a href="{{ url('admin/conf/' . $conf->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Conf"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/conf', $conf->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Conf',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $conf->id }}</td>
                </tr>
                <tr><th> Key </th><td> {{ $conf->key }} </td></tr><tr><th> Value </th><td> {{ $conf->value }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
