<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
        /* Style CSS pour le menu */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        li {
            display: inline-block;
        }

        li a {
            display: block;
            color: #000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ddd;
        }

        /* Style CSS pour la mise en page */
        body {
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .home-button {
            margin-bottom: 20px;
        }
        body{
            background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
        }
    </style>
</head>
<body>
    <a class="home-button" href="index.php">Accueil</a>
    <ul>
        <li><a href="espacePatient.php">Prendre RDV</a></li>
        <li><a href="rdvPatient.php">Gérer RDV</a></li>
    </ul>
</body>
</html>
