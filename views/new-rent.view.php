<?php require '../views/partials/header.php'; ?>

<h2>Add a new rent</h2>

<form method="POST" enctype="multipart/form-data">
    <label for="id">ID :</label>
    <input type="text" name="id" id="id" value="<?= isset($_POST['id']) ? $_POST['id'] : '' ?>">

    <label for="registration">Registration :</label>
    <input type="text" name="registration" id="registration" value="<?= isset($_POST['registration']) ? $_POST['registration'] : '' ?>">

    <label for="brand">Brand :</label>
    <input type="text" name="brand" id="brand" value="<?= isset($_POST['brand']) ? $_POST['brand'] : '' ?>">

    <label for="type">Type :</label>
    <input type="text" name="type" id="type" value="<?= isset($_POST['type']) ? $_POST['type'] : '' ?>">
    
    <label for="capacity">Capacity :</label>
    <input type="text" name="capacity" id="capacity" value="<?= isset($_POST['capacity']) ? $_POST['capacity'] : '' ?>">

    <label for="Rent_at">Rent at :</label>
    <input type="text" name="Rent_at" id="Rent_at" value="<?= isset($_POST['Rent_at']) ? $_POST['Rent_at'] : '' ?>">

    <label for="Back_at">Back_at :</label>
    <input type="text" name="Back_at" id="Back_at" value="<?= isset($_POST['Back_at']) ? $_POST['Back_at'] : '' ?>">