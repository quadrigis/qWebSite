<div>
<a class="button" onClick="Edit('EmployeeControler', 'Dodanie nowego pracownika', 0)">Dodaj</a>
<table id="employeeTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Login</th>
            <th>Admin</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $row): ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->firstName?></td>
                <td><?=$row->lastName?></td>
                <td><?=$row->login?></td>
                <td><?=$row->isAdmin?></td>
                <td><a onClick="Edit('EmployeeControler', 'Edycja pracownika', <?=$row->id?>)">Edytuj</a></td>
                <td><a onClick="Delete('EmployeeControler', <?=$row->id?>)">Usuń</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
    
</div>
<script src="<?php echo base_url(); ?>system/js/Views/Employee.List.js" type="text/javascript"></script>