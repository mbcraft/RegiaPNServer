

@section('header_styles')

@parent
    <!-- font Awesome -->
@require_local_css('assets/css/custom_css/nestable_list.css')

@endsection
    


@section('footer_scripts')

@parent

@require_local_js('assets/vendors/nestable-list/jquery.nestable.js')
@require_local_js('assets/js/custom_js/nestable.js')

@endsection