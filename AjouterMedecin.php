<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehôpital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Ajouter un médecin
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['specialite']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $specialite = $_POST['specialite'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO medcin (nom_m, Prenom, specialite, telephone, email_m, password_m) VALUES ('$nom', '$prenom', '$specialite', '$telephone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Médecin ajouté avec succès.</div>";
    } else {
        echo "<div class='error-message'>Erreur lors de l'ajout du médecin : " . $conn->error . "</div>";
    }
}
header('Location:gérerMédecin.php');
exit;
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
        }

        body {
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
            background-size: cover;
        }

        .error-message {
            color: red;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Rest of your HTML code -->
</body>
</html>
