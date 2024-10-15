<?php
session_start();

// Vérification de l'envoi du formulaire d'authentification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_a']) && isset($_POST['password_a'])) {
    // Informations de connexion à la base de données
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ehôpital';

    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    $login_a = $_POST['login_a'];
    $password_a = $_POST['password_a'];

    // Requête pour vérifier les informations d'authentification dans la base de données
    $query = "SELECT * FROM admin WHERE login_a='$login_a' AND password_a='$password_a'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Authentification réussie, stocker le nom d'utilisateur dans une variable de session
        $_SESSION['username'] = $login_a;
        $conn->close();
        echo "Authentification réussie";
        echo "<script>window.location.href = 'gérerMédecin.php';</script>";
        exit();
    } else {
        echo "Identifiant ou mot de passe incorrect.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css" />
    <title>auth</title>
</head>
<header>
    <div class="logo"><a href="index.php">
      <span>E</span>hôpital</div>
    </a>
    <ul class="menu"> 
    </ul>
  </header>
  <style>
  header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;

  }

  header .logo {
    font-size: 25px;
  }

  header .logo a {
    text-decoration: none;

  }

  header .logo span {
    color: #547db3;
  }

  header .menu a {
    position: relative;
    margin: 0 10px;
    text-decoration: 0;
    color: #847f7f;
    transition: 0.5s;
  }

  header .menu a:before {
    position: absolute;
    top: -2px;
    content: "";
    width: 0;
    height: 2px;
    background-color: #547db3;
    transition: 0.5s;
  }

  header .menu a:hover:before {
    width: 100%;
    height: 30%;
  }

  header .menu a:hover {
    color: #000;
  }</style>
<body>
    <form class="box" method="post">
        <h1 class="box-logo box-title">Authentification Admin</h1>
        <input type="text" class="box-input" name="login_a" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="password_a" placeholder="Mot de passe">
        <input type="submit" value="Connexion" name="submit" class="box-button">
    </form>
    
</body>
</html>
