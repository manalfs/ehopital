<!DOCTYPE html>
<html>
<head>
    <title>Espace admin</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            color: #4187c8;
            font-size: 50px;
            font-family: "Verdana", sans-serif;
            text-align: center;
        }

        h2 {
            color: rgb(10, 60, 81);
            font-size: 18px;
        }

        input[type="text"] {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 5px 10px;
            background-color: #7e8d7e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
        }

        a {
            color: blue;
            text-decoration: none;
            margin-right: 5px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<header>

<div class="logo"><a href="index.php">
  <span>E</span>hôpital</div>
</a>
<ul class="menu"> 
</ul>
</header>
<body>
    <h1>Espace admin</h1>
    <form action="AjouterMedecin.php" method="post">
        <h2>Ajouter un médecin</h2>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="specialite" placeholder="Spécialité" required>
        <input type="text" name="telephone" placeholder="Téléphone" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="password" placeholder="Mot de passe" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des médecins</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th>Action</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ehôpital";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        $sql = "SELECT * FROM medcin";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nom_m'] . "</td>";
                echo "<td>" . $row['Prenom'] . "</td>";
                echo "<td>" . $row['specialite'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['email_m'] . "</td>";
                echo "<td>" . $row['password_m'] . "</td>";
                echo "<td>";
                echo "<a href='supprimer.php?id=" . $row['id_m'] . "'>Supprimer</a>";
                echo "<a href='modifier.php?id=" . $row['id_m'] . "'>Modifier</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Aucun médecin trouvé.</td></tr>";
        }

        $conn->close();
  
        ?>
    </table>
</body>
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
</html>
