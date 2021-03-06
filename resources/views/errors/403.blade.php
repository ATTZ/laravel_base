@extends('layouts.landing')

@section('htmlheader_title')
    {{ trans('messages.forbidden') }}
@endsection

@section('contentheader_title')
    {{ trans('messages.403error') }}
@endsection

@section('$contentheader_description')
@endsection

@section('content')

<div class="error-page">
    <h2 class="headline text-yellow"> 403</h2>
    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i> Oops! {{ trans('messages.forbidden') }}.</h3>
        <p>
            {{ trans('messages.forbidden') }}
            {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>{{ trans('adminlte_lang::message.returndashboard') }}</a> {{ trans('adminlte_lang::message.usingsearch') }}
        </p>
        
    </div><!-- /.error-content -->
</div><!-- /.error-page -->
@endsection