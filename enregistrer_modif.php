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

// Vérifier si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $rendezvous_id = $_POST['rendezvous_id'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    
    // Mettre à jour le rendez-vous dans la base de données
    $sql = "UPDATE events SET start = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $date, $description, $rendezvous_id);
    
    if ($stmt->execute()) {
        // La mise à jour a réussi
        $response = array('success' => true);
        echo json_encode($response);
    } else {
        // La mise à jour a échoué
        $response = array('success' => false);
        echo json_encode($response);
    }
    
    // Fermer le statement et la connexion à la base de données
    $stmt->close();
    $conn->close();
}
?>

<style>
    body{    background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');


    }
    .button-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
    }
    
    .button-container button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        margin-right: 10px;
    }
</style>
<body>

<h2>Traitement terminé</h2>

<div class="button-container">
    <button onclick="window.history.back()">Retour</button>
    <button onclick="window.location.href = 'index.php'">Accueil</button>
</div>
</body>