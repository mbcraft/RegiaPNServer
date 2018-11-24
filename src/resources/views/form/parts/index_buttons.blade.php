<div class="btn-group" role="group" aria-label="...">
    <a class='btn btn-default btn-sm' href='' role='button'><?= $lpagination::allEntitiesPrefix().$plural_entity_name.$lpagination::allEntitiesSuffix() ?></a>    
    <a class='btn btn-success btn-sm' href='?withDeleted=true' role='button'><?= $lpagination::allWithDeletedPrefix().$plural_entity_name.$lpagination::allWithDeletedSuffix() ?></a>
    <a class='btn btn-danger btn-sm' href='?onlyDeleted=true' role='button'><?= $lpagination::onlyDeletedPrefix().$plural_entity_name.$lpagination::onlyDeletedSuffix() ?></a>
</div>   
 