<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->


        <!-- search form (Optional) -->

        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            <li ><a href="{{ url('home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>首頁</span></a></li><!-- class="active"-->
            @role('admin')
            <li ><a href="{{ url('admin/conf') }}"><i class="fa fa-cog" aria-hidden="true"></i><span>設定</span></a></li>
            @endrole
            <li ><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i><span>登出</span></a></li>
            
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
