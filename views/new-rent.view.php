<?php require '../views/partials/header.php'; ?>

<h2>Add a new rent</h2>

<form method="POST" enctype="multipart/form-data">


    <label for="registration">Registration :</label>
    <input type="text" name="registration" id="registration" value="<?= isset($_POST['registration']) ? $_POST['registration'] : '' ?>">

    <label for="brand">Brand :</label>
    <input type="text" name="brand" id="brand" value="<?= isset($_POST['brand']) ? $_POST['brand'] : '' ?>">

    <label for="type">Type :</label>
    <input type="text" name="type" id="type" value="<?= isset($_POST['type']) ? $_POST['type'] : '' ?>">
    
    <label for="capacity">Capacity :</label>
    <input type="text" name="capacity" id="capacity" value="<?= isset($_POST['capacity']) ? $_POST['capacity'] : '' ?>">

    <input type="submit" name="submitted" value="submit">