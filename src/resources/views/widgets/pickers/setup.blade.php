
@section('header_styles')

@parent

@require_local_css('assets/vendors/clockface/css/clockface.css')
@require_local_css('assets/vendors/colorpicker/css/bootstrap-colorpicker.min.css')
@require_local_css('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')
@require_local_css('assets/vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')
@require_local_css('assets/vendors/bootstrap-multiselect/css/bootstrap-multiselect.css')
@require_local_css('assets/vendors/clockpicker/css/bootstrap-clockpicker.css')
@require_local_css('assets/vendors/bootstrap-switch/css/bootstrap-switch.css')

@endsection



@section('footer_scripts')

@parent

@require_local_js('assets/vendors/clockpicker/js/bootstrap-clockpicker.js')
@require_local_js('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.js')
@require_local_js('assets/vendors/bootstrap-multiselect/js/bootstrap-multiselect.js')
@require_local_js('assets/vendors/clockface/js/clockface.js')
@require_local_js('assets/vendors/iCheck/js/icheck.js')
@require_local_js('assets/vendors/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')
@require_local_js('assets/vendors/bootstrap-switch/js/bootstrap-switch.js')
@require_local_js('assets/js/custom_js/pickers.js')

@endsection