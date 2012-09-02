<div style="width: 600px; height: 400px;">
    <form action="">
        <div class="row">
            <?=form_hidden("id",$model->id)?>
            <span class="span3 right">Pracownik</span>
            <span class="span6"><?=form_dropdown("employeeId",$employess,$model->Employee->id)?></span>
        </div>
        <div class="row">
            <span class="span3 right">Data powstania</span>
            <span class="span6"><?=form_input("date",$model->date)?></span>
        </div>
        <?=form_description($model->Description->id,$model->Description->pl, $model->Description->en, 'News')?>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#date').datepicker();
    });
</script>
