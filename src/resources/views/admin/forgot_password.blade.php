<!DOCTYPE html>
<html>
<head>
    <title>{{ lang('auth/forgot_password.page_title') }} | {{ lang('general.admin.title_suffix') }}</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @section("header_styles")
    <!-- global level css -->
    @require_local_css('assets/css/bootstrap.min.css')
    @require_local_css('assets/css/font-awesome.min.css')
    <!-- end of global css-->
    <!-- page level styles-->
    @require_local_css('assets/css/custom_css/login.css')
    <!-- end of page level styles-->
    @endsection
    
    @yield("header_styles")
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel-header">
                <h2 class="text-center">
                    {{ lang('auth/forgot_password.title') }}
                </h2>
            </div>
            <div class="panel-body social col-sm-offset-3">

                <div class="clearfix">

                    <div class="col-xs-12 col-sm-9">
                        <hr class="omb_hrOr">
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                        
                        <!-- Notifications -->
                        @include('flash_messages_list')
                        
                        <form action="" class="omb_loginForm" autocomplete="off" method="POST">
                            {!! Form::token() !!}
                            <div class="input-group {{ $errors->first('email', 'has-error') }}">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="{{ lang('auth/forgot_password.mail_address') }}" value="{!! Input::old('email') !!}"></div>
                                <span class="help-block">{{ $errors->first('email', ':message') }}</span>

                            <input type="submit" class="btn btn-md btn-primary btn-block" value="{{ lang('auth/forgot_password.submit') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    @section("footer_scripts")
    
    @require_local_js('assets/js/jquery-1.11.1.min.js')
    @require_local_js('assets/js/bootstrap.min.js')
    
    @endsection
    
    @yield("footer_scripts")
</body>
</html>