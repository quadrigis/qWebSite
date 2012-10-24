<div>
<a class="button" onClick="Edit('JobControler', 'Dodanie nowego stanowiska', 0)">Dodaj</a>
<table id="jobTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $row): ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->name?></td>
                <td><a onClick="Edit('JobControler', 'Edycja stanowiska', <?=$row->id?>)">Edytuj</a></td>
                <td><a onClick="Delete('JobControler', <?=$row->id?>)">Usuń</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
    
</div>
<script src="<?php echo base_url(); ?>system/js/Views/Job.List.js" type="text/javascript"></script>