<form name="restore_form_<?= $$one_entity->id ?>" method="POST" action="<?= Routes::{"admin_".$many_entities_route."_restore_do"}() ?>" enctype="multipart/form-data">
    {!! Form::token() !!}
    <input type="hidden" name="id" value="<?= $$one_entity->id ?>" />
    <button type="image" class="action_button" onclick="this.form.submit();"><?= FA::directional_Undo("fa-fw text-danger",$lform::restoreTooltip()) ?></a>
</form>