<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehôpital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if (isset($_POST['modifier1'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom_m'];
    $prenom = $_POST['prenom_m'];
    $specialite = $_POST['specialite_m'];
    $telephone = $_POST['telephone_m'];

    $sql = "UPDATE medcin SET nom_m='$nom', Prenom='$prenom', specialite='$specialite', telephone='$telephone' WHERE id_m='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Les informations du médecin ont été mises à jour avec succès.";
        header('Location: gérerMédecin.php');
exit;
    } else {
        echo "Erreur lors de la modification du médecin : " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier médecin</title>
</head>
<body>
    <h1>Modifier médecin</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="nom_m">Nom:</label>
        <input type="text" name="nom_m" required><br>

        <label for="prenom_m">Prénom:</label>
        <input type="text" name="prenom_m" required><br>

        <label for="specialite_m">Spécialité:</label>
        <input type="text" name="specialite_m" required><br>

        <label for="telephone_m">Téléphone:</label>
        <input type="text" name="telephone_m" required><br>

        <input type="submit" name="modifier1" value="Modifier">
    </form>
</body>
<style>
      body {
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
            background-size: cover;
        }
        <style>
    h1 {
        color: #4187c8;
        font-size: 30px;
        font-family: "Verdana", sans-serif;
        text-align: center;
        margin-top: 20px;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #7e8d7e;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #6b7e6b;
    }
</style>

      
</html>
