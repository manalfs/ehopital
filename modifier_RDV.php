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
    $rendezvous_id = $_GET['id'];
    
    // Récupérer les détails du rendez-vous à modifier
    $sql = "SELECT * FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $rendezvous_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Afficher le formulaire de modification avec les détails actuels du rendez-vous
        $row = $result->fetch_assoc();
        $date = $row["start"];
        $description = $row["description"];
        ?>
        <style>
            body{
                background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');

            }
           
            h2 {
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;
                


            }
            
            form {
                margin-bottom: 20px;
                text-align: center;


            }
            
            label {
                display: block;
                margin-bottom: 10px;
            }
            
            input[type="text"] {
                padding: 5px;
                font-size: 16px;
                border-radius: 4px;
                border: 1px solid #ccc;
                width: 300px;
                background-color:#fff;
            }
            
            input[type="submit"] {
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
                border-radius: 4px;
            }
        </style>
        
        <h2>Modifier le rendez-vous</h2>
        <form action="enregistrer_modif.php" method="POST">
            <label for="date">Date :</label>
            <input type="text" name="date" value="<?php echo $date; ?>"><br>
            <label for="description">Description :</label>
            <input type="text" name="description" value="<?php echo $description; ?>"><br>
            <input type="hidden" name="rendezvous_id" value="<?php echo $rendezvous_id; ?>">
            <input type="submit" value="Enregistrer">
        </form>
        <?php
    } else {
        echo "Rendez-vous introuvable.";
    }
    
    // Fermer le statement et la connexion à la base de données
    $stmt->close();
    $conn->close();
} else {
    echo "ID du rendez-vous non spécifié.";
}
?>
