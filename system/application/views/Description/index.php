<?= form_hidden("Description[id][]",$model->Description->pl)?>
<div class="row">
    <span class="span3 right">Opis polski</span>
    <span class="span6"><?=form_input("Description[pl][]",$model->Description->pl)?></span>
</div>
<div class="row">
    <span class="span3 right">Opis angielski</span>
    <span class="span6"><?=form_input("Description[en][]",$model->Description->en)?></span>
</div>
