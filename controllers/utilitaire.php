<?php require './core/database.php';

$utilitaires = $connexion->query('SELECT * FROM utilitaire')->fetchAll();

// dd($utilitaires);
require './views/utilitaire.view.php'; ?>