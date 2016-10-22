@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('content')

        <div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						{{ trans('messages.welcome') }}<br/>
					</div>
				</div>
			</div>
@endsection
