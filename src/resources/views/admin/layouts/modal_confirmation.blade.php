<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="entity_delete_confirm_title">@lang($model.'/modal.title')</h4>
</div>
<div class="modal-body">
    @lang($model.'/modal.body')
</div>
<div class="modal-footer">
  <form method="POST" action="{{ $confirm_route }}">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang($model.'/modal.cancel')</button>
        {!! Form::token() !!}
        <input type="hidden" name="id" value="{{ $entity_id }}" />
        <button type="button" class="btn btn-danger" onclick="this.form.submit();">@lang($model.'/modal.confirm')</button>
  </form>
</div>
