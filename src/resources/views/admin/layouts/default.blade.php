<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            @section('title')
            | {{ lang('general.admin.title_suffix') }}
            @show
        </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- global css -->
        @section('header_styles')
            @require_local_css('assets/css/bootstrap.min.css')
            @require_local_css('assets/css/font-awesome.min.css')
            @require_local_css('assets/css/custom_css/chandra.css')
            @require_local_css('assets/css/custom_css/metisMenu.css')
            @require_local_css('assets/css/custom_css/panel.css')
            @require_local_css('assets/css/default.css')
        @endsection
        <!-- end of global css -->
        <!--page level css-->
        @yield('header_styles')

        <!--end of page level css-->
    </head>
    <body class="skin-chandra">
        <!-- header logo: style can be found in header-->
        <header class="header">
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="<?= Routes::dashboard() ?>" class="logo">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <img src="{{ asset(config('app.logo')) }}" height="50" alt="logo"/>
                </a>

                <div>
                    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                            class="fa fa-fw fa-hand-o-left"></i>

                    </a>
                </div>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        @include("admin.layouts.topright_navbar")
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar-->
                <section class="sidebar">
                    <div id="menu" role="navigation">

                        {{-- user bio --}}
                        @include('admin.layouts.left_bio')

                        @include('admin.full_menu')
                        <!-- / .navigation -->
                    </div>
                    <!-- menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side right-padding">

                <!-- Notifications -->
                @include('flash_messages_list')

                <!-- Content -->
                @yield('content')
                <!-- /.content -->
            </aside>
            <!-- /.right-side -->
        </div>
        <!-- /.right-side -->
        <!-- ./wrapper -->
        <!-- global js -->
        @section('footer_scripts')
        
            @require_local_js('assets/js/jquery-1.11.1.min.js')
            @require_local_js('assets/js/bootstrap.min.js')
            @require_local_js('assets/js/custom_js/app.js')
            @require_local_js('assets/js/custom_js/metisMenu.js')
            
        @endsection
        
        <!-- begin page level js -->
        @yield('footer_scripts')
        <!-- end page level js -->

    </body>
</html>