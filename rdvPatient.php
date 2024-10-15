<?php
// Établir la connexion à la base de données
$servername = "localhost"; // Remplacez localhost par le nom de votre serveur MySQL
$username = "root"; // Remplacez nom_utilisateur par votre nom d'utilisateur MySQL
$password = ""; // Remplacez mot_de_passe par votre mot de passe MySQL
$dbname = "ehôpital";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}
session_start();

// Récupérer l'ID de l'utilisateur authentifié à partir de la session
$patient_id = $_SESSION['id_p'];

// Préparer la requête SQL avec un paramètre lié
$sql = "SELECT * FROM events WHERE patient_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $patient_id);
$stmt->execute();

// Vérifier s'il y a des résultats
$result = $stmt->get_result();
if ($result) {
    // Vérifier si des rendez-vous ont été trouvés
    if ($result->num_rows > 0) {
        // Afficher les rendez-vous
        ?>
        <style>
            *{
                background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');

            }
            .appointment-list {
                margin-bottom: 20px;
            }
            
            .appointment-list-item {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
            
            .appointment-date {
                font-weight: bold;
                margin-bottom: 5px;
            }
            
            .appointment-description {
                color: #666;
            }
            
            .appointment-actions {
                margin-top: 5px;
            }
            
            .appointment-actions a {
                margin-right: 10px;
            }
        </style>
        
        <div class="appointment-list">
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="appointment-list-item">
                    <div class="appointment-date">Date : <?php echo $row["start"]; ?></div>
                    <div class="appointment-description">Description : <?php echo $row["description"]; ?></div>
                    <div class="appointment-actions">
                        <a href='modifier_RDV.php?id=<?php echo $row["id"]; ?>'>Modifier</a>
                        <a href='annulerRDV.php?id=<?php echo $row["id"]; ?>'>Annuler</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    } else {
        echo "Aucun rendez-vous trouvé.";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . $conn->error;
}

// Fermer le statement et la connexion à la base de données
$stmt->close();
$conn->close();
?>
