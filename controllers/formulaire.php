<?php
require '../database.php';
require '../config/functions.php';

$users = $connexion->query('SELECT * FROM users')->fetchAll();

// dd($users);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve form data
    $image = $_FILES['image'];
    $id_card = $_POST['id_card'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $level = $_POST['level'];
    $licenses = $_POST['License'];

    // Validate form data
    $errors = [];

    if (empty($id_card)) {
        $errors['id_card'] = 'ID card is required';
    }

    if (empty($firstname)) {
        $errors['firstname'] = 'Firstname is required';
    }

    if (empty($lastname)) {
        $errors['lastname'] = 'Lastname is required';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($adress)) {
        $errors['adress'] = 'Adress is required';
    }

    if (empty($level)) {
        $errors['level'] = 'Driver license level is required';
    }

    if (empty($licenses)) {
        $errors['licenses'] = 'At least one license must be selected';
    }

    // Upload image if no errors
    if (!$errors) {
        $imageFilename = uploadImage($image);

        // Insert data into the database
        $sql = "INSERT INTO users (image, id_card, firstname, lastname, email, adress, level, licenses) VALUES (:image, :id_card, :firstname, :lastname, :email, :adress, :level, :licenses)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':image', $imageFilename);
        $stmt->bindParam(':id_card', $id_card);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':licenses', serialize($licenses));
        $stmt->execute();

        // Redirect to success page
        header('Location: success.php');
        exit();
    }
}

require '../views/formulaire.view.php';