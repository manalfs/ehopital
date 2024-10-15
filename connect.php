<?php

// connexion
try {
    $auth = new PDO('mysql:host=localhost;port=3306;dbname=Ehôpital;charset=utf8', 'root', '');
}
catch(Exception $error) {
    die('Error : ' . $error->getMessage());
}


$db_host = "127.0.0.1:3306";
$db_user = "root";
$db_pass = "";
$db_name = "Ehôpital";
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>