<?php require 'partials/header.php'; ?>

<a href="/new-rent.php">new rent</a>
<table>
    <thead>
        <th>#</th>
        <th>id</th>
        <th>registration</th>
        <th>brand</th>
        <th>type</th>
        <th>capacity</th>
        <th>rent_at</th>
        <th>back_at</th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($utilityvan as $utility) { ?>
        <tr id="table-container">
            <td id="Mgrey"><?= $i ?></td>
            <td id="Sgrey"><?= $utility['id'] ?></td>
            <td id="Mgrey"><?= $utility['registration'] ?></td>
            <td id="Sgrey"><?= $utility['brand'] ?></td>
            <td id="Mgrey"><?= $utility['type'] ?></td>
            <td id="Sgrey"><?= $utility['capacity'] ?></td>
            <td id="Mgrey"><?= $utility['rent_at'] ?></td>
            <td id="Sgrey"><?= $utility['back_at'] ?></td>
        </tr>
        <?php $i++; } ?> 
    </tbody>
</table>

<?php require 'partials/footer.php';