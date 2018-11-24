@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit Customer
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendors/validation/dist/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/skins/minimal/blue.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/select2/select2-bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/custom_css/addnew_user.css') }}" rel="stylesheet">
@stop


{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Customer</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-fw fa-home"></i>
                Dashboard
            </a>
        </li>
        <li>Customers</li>
        <li>
            <a href="{{ route('customers.edit') }}">Edit Customer</a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw fa-edit"></i>
                        Edit customer
                    </h3>
                </div>
                <div class="panel-body">
                    <!--main content-->
                    <div class="position-center">
                        @if($errors->has())
                        @foreach ($errors->all() as $error)
                        <div class="text-danger">{{ $error }}</div>
                        @endforeach
                        @endif
                        <div>
                            <h3 class="text-primary">Business Informations</h3>
                        </div>
                        <form role="form" id="tryitForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            {!! Form::token() !!}
                            <div class="cd-block">
                                <div class="cd-content">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="first_name">First Name</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="first name" name="first_name" id="first_name" class="form-control" value="{!! Input::old('first_name',$customer->first_name) !!}" required="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="last_name">Last Name</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="last name" name="last_name" id="last_name" class="form-control" value="{!! Input::old('last_name',$customer->last_name) !!}" required="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="email">Email</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="" id="email" name="email" class="form-control" value="{!! Input::old('email',$customer->email) !!}"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="prf-contacts sttng">
                                <h3 class="text-primary">Contact</h3>
                            </div>
                            <div class="cd-block">
                                <div class="cd-content">
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Phone</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-phone text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="phone" name="phone" class="form-control" value="{!! Input::old('phone',$customer->phone) !!}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label  col-md-2">Select Country</label>
                                        <div class="col-md-6">
                                            {!! Form::select('country', $countries,Input::old('country',$customer->country),array('class' => 'form-control select2', 'id' => 'select2_sample4')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="address">Address</label>
                                        <div class="col-lg-6">
                                            <textarea rows="5" cols="30" class="form-control" id="address" name="address"> {!! Input::old('address',$customer->address) !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label" for="zip">Zip</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-dot-circle-o text-primary"></i>
                                                </span>
                                                <input type="text" placeholder=" " id="zip" class="form-control" name="zip"  value="{!! Input::old('zip',$customer->zip) !!}" />
                                            </div>
                                        </div>
                                    </div>
                                    



                                </div>
                                <div class="cd-block">
                                    <div class="cd-content">

                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" class="btn btn-primary" name="save" value="Update" />
                                    <a href="{{ URL::previous() }}" class="btn btn-default" role="button">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--main content end--> </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('assets/vendors/iCheck/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/validation/dist/js/bootstrapValidator.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('assets/vendors/select2/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/vertical-timeline/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/custom_js/edit_user.js') }}" type="text/javascript"></script>
@stop