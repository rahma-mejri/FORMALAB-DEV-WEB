<?php
include_once "connect.php";


//connexion bd
$conn = connect();

//recuperation data
$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$num = $_POST['num'];
$daten = $_POST['daten'];

//preparation requette
$req = "INSERT into users values('$cin','$nom','$prenom','$email','$num','$daten')";

//exec(requette) => insert , update , delete
//success => nbr de ligne inséré ( int )
//erreur => false ( boolean )

$result = $conn->exec($req);

//result
echo $result;
?>