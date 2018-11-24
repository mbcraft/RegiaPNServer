
@section("header_styles")

@parent

<!-- datetime picker -->
@require_local_css('assets/vendors/daterangepicker/css/daterangepicker.css')
@require_local_css('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')
@require_local_css('assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css')

<!-- select css -->
@require_local_css('assets/vendors/select2/css/select2.css')
@require_local_css('assets/vendors/select2/css/select2-bootstrap.css')

<!-- clock face css -->
@require_local_css('assets/vendors/iCheck/css/square/blue.css')
@require_local_css('assets/vendors/iCheck/css/minimal/minimal.css')
@require_local_css('assets/vendors/iCheck/css/minimal/green.css')
@require_local_css('assets/vendors/iCheck/css/minimal/red.css')
@require_local_css('assets/vendors/iCheck/css/flat/red.css')
@require_local_css('assets/vendors/iCheck/css/flat/blue.css')
@require_local_css('assets/vendors/clockpicker/css/bootstrap-clockpicker.css')
@require_local_css('assets/vendors/bootstrap-fileinput/css/fileinput.css')

<!-- buttons -->
@require_local_css('/assets/vendors/Buttons/css/buttons.css')
    
@endsection



@section("footer_scripts")

@parent

<!-- inputmask -->
@require_local_js('assets/vendors/jquery.inputmask/min/inputmask/jquery.inputmask.min.js')
@require_local_js('assets/vendors/jquery.inputmask/min/inputmask/inputmask.date.extensions.min.js')
@require_local_js('assets/vendors/jquery.inputmask/min/inputmask/inputmask.extensions.min.js')


<!-- date-range-picker -->
@require_local_js('assets/vendors/daterangepicker/js/daterangepicker.js')

<!-- bootstrap time picker -->
@require_local_js('assets/vendors/select2/js/select2.js')
@require_local_js('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js')
@require_local_js('assets/vendors/iCheck/js/icheck.js')
@require_local_js('assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')
@require_local_js('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.js')
@require_local_js('assets/vendors/bootstrap-fileinput/js/fileinput.js')
@require_local_js('assets/vendors/clockpicker/js/bootstrap-clockpicker.js')

@endsection