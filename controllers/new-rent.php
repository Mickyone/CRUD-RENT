<?php require './core/database.php';

$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    $registration = trim(filter_var($_POST['registration'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $marque = trim(filter_var($_POST['marque'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $type = trim(filter_var($_POST['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $capacity = trim(filter_var($_POST['capacity'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $rent_at = trim(filter_var($_POST['rent_at'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $back_at = trim(filter_var($_POST['back_at'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}


    include './views/new-rent.view.php';
    ?>