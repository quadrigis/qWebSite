<div style="width: 600px; height: 400px;">
    <form action="">
        <div class="row">
            <?=  form_hidden("id",$model->id)?>
            <span class="span3 right">Klucz</span>
            <span class="span6"><?=form_input("klucz",$model->klucz)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Wartość polska</span>
            <span class="span6"><?=  form_textarea("wartoscPL",$model->wartoscPL)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Wartość angielska</span>
            <span class="span6"><?=form_textarea("wartoscEN",$model->wartoscEN)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Dodatkowa wartość</span>
            <span class="span6"><?=form_textarea("dod1",$model->dod1)?></span>
        </div>
    </form>
</div>
