<?php
// connexion
try {
  $auth = new PDO('mysql:host=localhost;port=3306;dbname=Ehôpital;charset=utf8', 'root', '');
} catch (Exception $error) {
  die('Error : ' . $error->getMessage());
}

//get medecins
$sql = "SELECT * FROM medcin";
$req = $auth->prepare($sql);
$req->execute();
$medecins = $req->fetchAll();
?>


<!DOCTYPE html>
<html>

<head>
  <title> Médecins</title>
  <!-- <script src="chemin/vers/votre/fichier/script.js"></script> -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</head>
<style>
  #search-form {
    text-align: center;
    margin-bottom: 20px;

  }

  #search-input {
    padding: 8px;
    font-size: 16px;
  }

  #search-button {
    padding: 8px 16px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;

  }

  #search-button:is(:hover, :focus) {
    outline-offset: 3px;
  }

  #search-button:hover {
    background-color: #0069d9;
  }


  #home-button {
    display: block;
    margin: 20px auto;
    padding: 8px 16px;
    font-size: 16px;
    background-color: #007bfe;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  #home-button:hover {
    background-color: #0d6cd2;
  }

  h1 {
    color: black;
    text-align: center;
    font-size: 35px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
    background-size: cover;
    background-attachment: fixed;
  }

  .card {
    background-color: white;
    /* margin-bottom: 10px; */
    text-decoration: none;
    opacity: 0.7;
    border: 2px solid #080808;
    padding: 1px;
    /* min-width: 25%;
    max-width: 45%; */
    width: calc(25% - 40px);
    margin: 20px;
    padding: 10px 20px;
  }
  a{
    color:black;
  }
</style>

<body>

  <h1>Liste des médecins</h1>

  <form id="search-form">
    <input type="text" id="search-input" placeholder="Rechercher un médecin">
    <button type="submit" id="search-button">Rechercher</button>

  </form>

  <div class="container">
    <div class="row">
      <?php
      // $medecins
      foreach ($medecins as $med) {
        ?>

        <div class="col-md-3 card">
            <strong>
              <?php echo $med["nom_m"] . " " . $med["Prenom"]; ?>
            </strong><br>
            Spécialté:
            <?php echo $med["specialite"]; ?><br>
            Address:
            <?php echo $med["email_m"]; ?><br>
            téléphone:
            <?php echo $med["telephone"]; ?>
            <a href="./calendar/patient.php?medecin_id=<?php echo $med["id_m"]; ?>"> Prendre un rendez vous </a>
        </div>
      <?php } ?>

    </div>
  </div>

  <button id="home-button" ><a href="index.php">Accueil</a></button>


  <script>
  document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    var searchInput = document.getElementById('search-input').value.toLowerCase();
    var cards = document.getElementsByClassName('card');

    for (var i = 0; i < cards.length; i++) {
      var doctorName = cards[i].querySelector('strong').innerText.toLowerCase();

      if (doctorName.includes(searchInput)) {
        cards[i].style.display = 'block';
      } else {
        cards[i].style.display = 'none';
      }
    }
  });
</script>




</body>

</html>