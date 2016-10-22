@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Conf <a href="{{ url('/admin/conf/create') }}" class="btn btn-primary btn-xs" title="Add New Conf"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Key </th><th> Value </th><th>Update At</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($conf as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->key }}</td><td><div style="word-break: break-all;">{{ $item->value }}</div></td><td>{{ $item->updated_at}}</td>
                    <td>
                        <a href="{{ url('/admin/conf/' . $item->id) }}" class="btn btn-success btn-xs" title="View Conf"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/conf/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Conf"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/conf', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Conf" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Conf',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $conf->render() !!} </div>
    </div>
            
</div>
@endsection
