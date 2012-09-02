<div style="width: 600px; height: 400px;">
    <form action="">
        <div class="row">
            <?=  form_hidden("id",$model->id)?>
            <span class="span3 right">Nazwa</span>
            <span class="span6"><?=form_input("name",$model->name)?></span>
        </div>
        <?=form_description($model->Description->id,$model->Description->pl, $model->Description->en, 'Job')?>
    </form>
</div>
