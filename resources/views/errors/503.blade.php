@extends('layouts.landing')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.serviceunavailable') }}
@endsection

@section('contentheader_title')
    {{ trans('adminlte_lang::message.503error') }}
@endsection

@section('$contentheader_description')
@endsection

@section('content')

    <div class="error-page">
        <h2 class="headline text-red">503</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! {{ trans('adminlte_lang::message.somethingwrong') }}</h3>
            <p>
                }}
                {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adminlte_lang::message.returndashboard') }}</a> {{ trans('adminlte_lang::message.usingsearch') }}
            </p>
            
        </div>
    </div><!-- /.error-page -->
@endsection