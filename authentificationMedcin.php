
<?php

include_once('connect.php');

// Vérification de l'envoi du formulaire d'authentification
if (isset($_POST['email_m']) && isset($_POST['password_m'])) {
  $email_m = $_POST['email_m'];
  $password_m = $_POST['password_m'];

  // Requête pour vérifier les informations d'authentification dans la base de données
  $query = "SELECT * FROM medcin WHERE email_m='$email_m' AND password_m='$password_m'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    $req_p = $auth->prepare($query);
    $req_p->execute();
    $patient = $req_p->fetchAll();
   
    // Authentification réussie, stocker le nom d'utilisateur dans une variable de session
    session_start();
    $_SESSION['username'] = $email_m;
    $_SESSION['nom_medecin'] = $patient[0]["Prenom"] . " " . $patient[0]["nom_m"];
    $_SESSION['id'] = $patient[0]["id_m"];

      $conn->close();
      echo "<script>window.location.href = 'calendar/medecin.php';</script>";
      exit();
  } else {
      echo "Identifiant ou mot de passe incorrect.";
  }
}
$conn->close();
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
  
  <form class="box"  method="post" >
<h1 class="box-logo box-title">Authentification Médcin</h1>

<input type="text" class="box-input" name="email_m" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password_m" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">

  </form>
  
</body>
</html>
