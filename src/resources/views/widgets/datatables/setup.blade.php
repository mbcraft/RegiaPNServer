

@section("header_styles")

@parent

@require_local_css('assets/vendors/datatables/css/dataTables.bootstrap.css')

@endsection


@section("footer_scripts")

@parent

@require_local_js('assets/vendors/datatables/js/jquery.dataTables.js')
@require_local_js('assets/vendors/datatables/js/dataTables.bootstrap.js')

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="entity_delete_confirm_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
</div>
<script>
    $(function () {
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    });
</script>

@endsection