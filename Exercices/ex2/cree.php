<?php
//conexion BD
$db = new mysqli("localhost", "root", "Bmfyboesf15.,", "dbname");

//recuperation donnes
$valeur = $_POST['score'];
$dateScore = date("Y-m-d");
$idUtilisateur = 2;

//ecriture requete
$sql = "INSERT INTO score (`id`, `valeur`, `date`, `idUtilisateur`)
VALUES (NULL, '".$valeur."', '".$dateScore."', '".$idUtilisateur."');";

//execution requete
$result = $db->query($sql);

//redirection
header('Location: liste.php');

//close
mysqli_close($db);
?>