<?php
// Établir la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehôpital";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si l'ID du rendez-vous est présent dans l'URL
if (isset($_GET['id'])) {
    $rendezvous_id = $_GET['id'];}
    
    // Supprimer le rendez-vous de la base de données
    $sql = "DELETE FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $rendezvous_id);
    $stmt->execute();
    
    // Vérifier si la suppression a réussi
    if ($stmt->affected_rows > 0) {
        echo "Rendez-vous annulé avec succès.";
    } else {
        echo "Échec de l'annulation du rendez-vous.";
    }
    $stmt->close();
    $conn->close();

?>
<?php
// Le reste de votre code PHP...

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
            background-size: cover;
            text-align: center; /* Ajout de la propriété pour centrer le contenu */
        }
        
        /* Styles supplémentaires pour vos boutons */
        .button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }
        
        .button-back {
            background-color: #4CAF50;
        }
        
        .button-home {
            background-color: #808080;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div>
        <button class="button button-back" onclick="window.history.back()">Retour</button>
        <button class="button button-home" onclick="window.location.href = 'index.php'">Accueil</button>
    </div>
</body>
</html>
