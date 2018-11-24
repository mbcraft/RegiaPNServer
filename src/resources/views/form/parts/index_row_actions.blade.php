<?php
if (!$$one_entity->trashed()) {
?>
    @include("form/parts/index_active_row_actions",["lform" => LForm::class])
<?php
} else { 
?>
    @include("form/parts/index_deleted_row_actions",["lform" => LForm::class])
<?php
}
?>