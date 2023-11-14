<?php require 'partials/header.php'; ?>

<a href="/new-rent.php">new rent</a>
<table>
    <thead>
        <th>#</th>
        <th>id</th>
        <th>registration</th>
        <th>marque</th>
        <th>type</th>
        <th>capacity</th>
        <th>rent_at</th>
        <th>back_at</th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($utilitaires as $utilitaire) { ?>
        <tr id="table-container">
            <td id="Mgrey"><?= $i ?></td>
            <td id="Sgrey"><?= $utilitaire['id'] ?></td>
            <td id="Mgrey"><?= $utilitaire['registration'] ?></td>
            <td id="Sgrey"><?= $utilitaire['marque'] ?></td>
            <td id="Mgrey"><?= $utilitaire['type'] ?></td>
            <td id="Sgrey"><?= $utilitaire['capacity'] ?></td>
            <td id="Mgrey"><?= $utilitaire['rent_at'] ?></td>
            <td id="Sgrey"><?= $utilitaire['back_at'] ?></td>
        </tr>
        <?php $i++; } ?> 
    </tbody>
</table>

<?php require 'partials/footer.php';