<!DOCTYPE html>
<html>
<head>
<title>Supprimer Médecin</title>
<style>
body {
    background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
    background-size: cover;
}

h1 {
    text-align: center;
    color: #4187c8;
    font-size: 30px;
    font-family: "Verdana", sans-serif;
}

.container {
    margin: 50px auto;
    width: 300px;
    background: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
}

.register-form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.register-form input[type="submit"],
.register-form input[type="button"] {
    width: 100%;
    padding: 10px;
    background-color: #7e8d7e;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.register-form input[type="submit"]:hover,
.register-form input[type="button"]:hover {
    background-color: #6e7e6e;
}

</style>
</head>
<body>

<h1>Supprimer Médecin</h1>

<div class="container">
    <div class="register-form">
        <form action="" method="post">
            <input type="text" name="nom" placeholder="Saisir le nom du médecin">
            <input type="submit" name="supprimer1" value="Supprimer">
            <input type="button" name="annuler" value="Retour" onclick="window.location.href='yarbiikhdem.php'">
        </form>
    </div>
</div>

</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehôpital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if (isset($_POST['supprimer1'])) {
    $nom = $_POST['nom'];
    $sql = "DELETE FROM medcin WHERE nom_m='" . $nom . "'";
    if ($conn->query($sql) === TRUE) {
        header("Location: gérerMédecin.php");
        exit();
    } else {
        echo "Erreur lors de la suppression du médecin : " . $conn->error;
    }
}

?>


