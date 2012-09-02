<div>
<a class="button" onClick="Edit('NewsControler', 'Dodaj nowość', 0)">Dodaj</a>
<table id="newsTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Data publikacji</th>
            <th>Osoba publikująca</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->date?></td>
                <td><?=$row->Employee->login?></td>
                <td><a onClick="Edit('NewsControler', 'Edycja nowości', <?=$row->id?>)">Edytuj</a></td>
                <td><a onClick="Delete('NewsControler', <?=$row->id?>)">Usuń</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
    
</div>
<script src="<?php echo base_url(); ?>system/js/Views/News.List.js" type="text/javascript"></script>