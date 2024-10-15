<?php
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = '';
$nomBaseDeDonnees = 'hôpital';

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Initialisation des variables avec une valeur par défaut
$nom_m = '';
$nom_p = '';
$date = '';
$heure = '';

// Vérification du formulaire et traitement des données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_m = $_POST['nom_m'];
    $nom_p = $_POST['nom_p'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];

    // Validation des données (vous pouvez ajouter des règles de validation supplémentaires)
    if (empty($nom_m) || empty($nom_p) || empty($date) || empty($heure)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
        // Affichage du message de confirmation et du bouton "Confirmer"
        $confirmation = true;
    }
}

// Enregistrement du rendez-vous dans la base de données après la confirmation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmer'])) {
    // Enregistrement du rendez-vous dans la base de données
    $query = "INSERT INTO rdv (nom_m, nom_p, date, heure) 
              VALUES ('$nom_m', '$nom_p', '$date', '$heure')";

    if (mysqli_query($connexion, $query)) {
        $success = "Rendez-vous enregistré avec succès !";
        // Réinitialisation des champs après la soumission réussie
        $nom_m = '';
        $nom_p = '';
        $date = '';
        $heure = '';
    } else {
        $error = "Erreur lors de l'enregistrement du rendez-vous : " . mysqli_error($connexion);
    }
   

// Votre logique de prise de rendez-vous ici...

// Si le rendez-vous a été enregistré avec succès
if ($success) {
    
    // Détruire la session et rediriger vers la page de connexion
    session_destroy();
    header("Location: index.php");
    exit();
}


}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prise de rendez-vous</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #4187c8;

        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"],
        input[type="button"] {

            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 45%;
        }

        input[type="submit"] {
            background: #4187c8;

            color: white;
        }

        input[type="button"] {
            background-color: #4187c8;

            color: white;
        }

        input[type="submit"]:hover {
            background: #32597e;
        }
        input[name="acceuil"]:hover {
            background-color: blue;
        }

        input[type="button"]:hover {
            background: #32597e;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }

        .confirmation-container {
            display: flex;
            flex-direction: column; /* Updated to display the elements in a column */
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            text-align: center;
        }

        /*.confirmation-container form {
            margin-top: 10px;
             /* Added margin to separate the form from the text 
        }*/

        .home {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Prise de rendez-vous</h1>

    <?php if (isset($error)) { ?>
        <p class="error-message"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($success)) { ?>
        <p class="success-message"><?php echo $success; ?></p>
    <?php } ?>

    <?php if (isset($confirmation) && $confirmation) { ?>
        <div class="confirmation-container">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="nom_m" value="<?php echo $nom_m; ?>">
                <input type="hidden" name="nom_p" value="<?php echo $nom_p; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="heure" value="<?php echo $heure; ?>">
               

                <input type="submit" name="confirmer" value="Confirmer">
                <input type="button" value="Annuler" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];?>';">
                <div class="home">
                <input type="button" name="home" value="Accueil" onclick="window.location.href='index.php';">
            </form>
        </div>
    <?php } else { ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            <input type="text" id="nom_m" name="nom_m" placeholder=" Médcin (Nom)" value="<?php echo $nom_m; ?>">

            
            <input type="text" id="nom_p" name="nom_p" placeholder="Votre nom" value="<?php echo $nom_p; ?>">

            <input type="date" id="date" name="date" placeholder="Date" value="<?php echo $date; ?>">

            <input type="time" id="heure" name="heure" placeholder="Heure"value="<?php echo $heure; ?>">

            <input type="submit" value="Suivant">
        </form>
    <?php } ?>

    
</body>
</html>