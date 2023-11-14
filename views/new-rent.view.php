<?php require 'views/partials/header.php'; ?>

<h2>Add a new rent</h2>

<form method="POST" enctype="multipart/form-data">
    <label for="registration">registration :</label>
    <input type="text" name="registration" id="registration" value="<?= isset($_POST['registration']) ? $_POST['registration'] : '' ?>">

    <label for="marque">marque :</label>
    <input type="text" name="marque" id="marque" value="<?= isset($_POST['marque']) ? $_POST['marque'] : '' ?>">

    <label for="type">type :</label>
    <input type="text" name="type" id="type" value="<?= isset($_POST['type']) ? $_POST['type'] : '' ?>">
    
    <label for="capacity">type :</label>
    <input type="text" name="capacity" id="capacity" value="<?= isset($_POST['capacity']) ? $_POST['capacity'] : '' ?>">