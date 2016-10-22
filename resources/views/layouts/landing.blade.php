<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="zh-tw">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{{trans('messages.title_large')}}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('/js/smoothscroll.js') }}"></script>


    </head>

    <body data-spy="scroll" data-offset="0" data-target="#navigation">

        <!-- Fixed navbar -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>{{trans('messages.title_large')}}</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        @else
                        <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                        @endif
                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="content-wrapper">

            @include('layouts.partials.contentheader')
            <!-- Main content -->
            <section class="content">
                <div id="mid"></div>
                <!-- Your Page Content Here -->
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script>
                            $('.carousel').carousel({
                                interval: 3500
                            })
        </script>
    </body>
</html>
