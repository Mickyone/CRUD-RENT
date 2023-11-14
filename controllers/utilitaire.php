<?php require 'core/database.php';

$utilityvan = $connexion->query('SELECT * FROM utilityvan')->fetchAll();

// dd($utilitaires);
require './views/utilitaire.view.php'; ?>