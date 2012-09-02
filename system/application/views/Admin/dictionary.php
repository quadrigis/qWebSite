<div>
<a class="button" onClick="Edit('DictionaryControler', 'Dodanie nowego słownika', 0)">Dodaj</a>
<table id="dictionaryTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Klucz</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->klucz?></td>
                <td><a onClick="Edit('DictionaryControler', 'Edycja słownika', <?=$row->id?>)">Edytuj</a></td>
                <td><a onClick="Delete('DictionaryControler', <?=$row->id?>)">Usuń</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
    
</div>
<script src="<?php echo base_url(); ?>system/js/Views/Dictionary.List.js" type="text/javascript"></script>