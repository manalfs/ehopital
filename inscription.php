<!DOCTYPE html>
<html>
<head>
</head>
<style>
  body {
    background-image: url("https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8");

  }
  .box {
    border: 1px solid #c4c4c4;
    padding: 30px 25px 10px 25px;
    margin: 30px auto;
    width: 360px;
  }
  h1.box-logo a {
    text-decoration:none;
    color:LightSteelBlue	; /* Couleur bleue */

  
  }
  h1.box-title {
   
   
    padding: 15px 25px;
    line-height: 30px;
    font-size: 25px;
    text-align:center;
    margin: -27px -26px 26px;
    color: black;
  }
  .box-button {
    border-radius: 5px;
    color: #4c6bc6;
      text-align: center;
    cursor: pointer;
    font-size: 19px;
    width: 100%;
    height: 51px;
    padding: 0;
    color: white;
    background-color: #4CAF50;
    border: 0;
    outline:0;
  }
  
  .box-register
  {
    text-align:center;
    margin-bottom:0px;
  }
  .box-register a
  {
    text-decoration:none;
    font-size:12px;
    color:#666;
  }
  .box-input {
    font-size: 14px;
    background: #fff;
    border: 1px solid #ddd;
    margin-bottom: 25px;
    padding-left:10px;
    border-radius: 5px;
    width: 347px;
    height: 50px;
  }

  .box-input:focus {
      outline: none;
      border-color:#5c7186;
  }
  .sucess{
    text-align: center;
    color: white;
  }
  .sucess a {
    text-decoration: none;
    color: #58aef7;
  }
  p.errorMessage {
      background-color: #e66262;
      border: #AA4502 1px solid;
      padding: 5px 10px;
      color: #FFFFFF;
      border-radius: 3px;
  }
  </style>
<body>
<?php
require('connect.php');
if (isset($_REQUEST['nom_p'], $_REQUEST['prenom'], $_REQUEST['CIN'], $_REQUEST['telephone'],  $_REQUEST['login_p'], $_REQUEST['password_p'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $nom_p = stripslashes($_REQUEST['nom_p']);
  $nom_p = mysqli_real_escape_string($conn, $nom_p); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $CIN = stripslashes($_REQUEST['CIN']); 
  $CIN = mysqli_real_escape_string($conn, $CIN);
  $telephone = stripslashes($_REQUEST['telephone']); 
  $telephone = mysqli_real_escape_string($conn, $telephone);


  $login_p = stripslashes($_REQUEST['login_p']);
  $login_p = mysqli_real_escape_string($conn, $login_p);

  $password_p = stripslashes($_REQUEST['password_p']);
  $password_p = mysqli_real_escape_string($conn, $password_p);

  //requéte SQL + mot de passe crypté
    $query = "INSERT into `patient` (nom_p,prenom,CIN,telephone,login_p, password_p)
              VALUES ('$nom_p', '$prenom','$CIN','$telephone','$login_p','$password_p')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='authentification.php'>connecter</a></p>
       </div>";
    }
}
?>
<form class="box" action="" method="post">
    <h1 class="box-title ">inscription</h1>
  <input type="text" class="box-input" name="nom_p" placeholder="Nom " required />
    <input type="text" class="box-input" name="prenom" placeholder="Prénom " required />
    <input type="text" class="box-input" name="CIN" placeholder="CIN" required />
    <input type="text" class="box-input" name="telephone" placeholder="Téléphone" required />
    <input type="text" class="box-input" name="login_p" placeholder="Nom d'utilisateur" required />

    <input type="password" class="box-input" name="password_p" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="authentification.php">Connectez-vous ici</a></p>
</form>

</body>
</html>