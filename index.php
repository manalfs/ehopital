<!DOCTYPE html>
<html lang="en">

<head>

  <title>our Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
  body {
    background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
  }

  .aya {
    height: 60%;

  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }

  header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;

  }

  header .logo {
    font-size: 25px;
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
  }

  /* home */

  .home {
    height: calc(100vh - 45px);
    background-image: url("photo.jpg");

    background-position: center;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    padding-left: 5%;
    padding-bottom: 50px;
  }

  .home-infos {
    background-color: #217ba5;
    border-radius: 6px;
    padding: 50px;
    animation: anime 2s linear;
  }

  /* animation home-infos */

  @keyframes anime {
    from {
      transform: translateX(-600px);
    }
  }

  .home-infos h1 {
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .home-infos p {
    margin-top: 10px;
    margin-bottom: 20px;
  }

  .home-infos a {
    text-decoration: 0;
    color: #217ba5;
    color:#333;
    border-radius: 6px;
    padding: 5px 20px;
    margin-top: 5px;
    font-weight: 400;
    text-transform: capitalize;
    transition: 0.5s;
  }

  .home-infos a:hover {
    color: #217ba5;
    color: #fff;
    letter-spacing: 1px;
  }

  /* services */

  .services {
    padding: 10px;

  }

  .serviceContainner {
    background-size: cover;
    background-image: url('https://img.freepik.com/vecteurs-libre/medical-soins-sante-couleur-bleue_1017-26807.jpg?w=900&t=st=1681695882~exp=1681696482~hmac=1213995dc109e476bcbb5841bdc4a6a487757abc24c598712d25dc934975f1b8');
    padding: 20px;
  }

  .title {
    text-align: center;
    margin-top: 50px;

    font-size: 35px;
    letter-spacing: 1px;
    text-transform: uppercase
  }

  .sub-title {
    text-align: center;
    color: #356ca3;
    margin: 20px 0;
  }

  .list-services {
    display: grid;
    grid-template-columns: repeat(auto-fit, 20rem);
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
  }

  .list-services .box {
    padding: 30px;
    background-color: #f3fbfa;
    border-radius: 6px;
    transition: 0.5s;
  }

  .list-services .box h1 {
    text-transform: uppercase;
    color: #217ba5;
    margin-bottom: 10px;
    font-size: 18px;
    letter-spacing: 1px;
  }

  .list-services .box p {
    font-size: 16px;
  }

  .list-services .box:hover {
    background-color: #217ba5;
  }

  .list-services .box:hover h1 {
    color: #fff;
  }

  .list-services .box:hover p {
    color: #333;
  }


  /*Our Goal*/
  .p {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #f3fbfa;
    width: 20%;
    height: 30%;
  }

  .our-goal .left {
    width: 45%;
  }

  .our-goal .right {
    width: 45%;
  }

  .our-goal .left span {
    font-weight: bold;
    color: #217ba5;
    text-transform: uppercase;
  }

  .our-goal .left h1 {
    font-size: 35px;
    padding: 15px 0;
    margin-bottom: 15px;
  }

  .goalleft .left a {
    background-color: #4495d3;
    color: #fff;
    text-decoration: 0;
    padding: 10px 25px;
    text-transform: uppercase;
  }

  .our-goal .right p {
    letter-spacing: 1px;
  }

  /* footer */
  footer {
    padding: 0 15%;
  }

  footer .title {
    margin-bottom: 20px;
  }

  .contact {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .contact .class-form {
    width: 45%;
    display: flex;
    flex-direction: column;
    height: 300px;
  }

  .contact h4 {
    margin-bottom: 20px;
  }

  .contact form {
    display: flex;
    flex-direction: column;
  }

  .contact form input,
  textarea {
    margin: 5px 0;
    padding: 5px;
    border: 1px solid #999;
    resize: none;
    outline: 0;
  }

  .contact form button {
    width: fit-content;
    padding: 10px 25px;
    background-color: #217ba5;
    border: 0;
    font-weight: bold;
    color: #000;
    margin-top: 5px;
  }

  .address {
    width: 50%;
    height: 300px;
  }

  iframe {
    width: 100%;
    height: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .end {
    margin-top: 50px;
    background-color: #333;
    text-align: center;
    font-size: 15px;
    padding: 10px 0;
    color: #fff;
  }

  /* Footer container */
 /* Global Styles */
body {
  padding: 0;
  margin: 0;
  min-height: 100vh;
}


footer {
    position:relative;
    bottom: 0;
    left: 0;
    width: 100%;

  
  padding: 30px 0;
  color: #333;
  font-family: Arial, sans-serif;
}

/* Styles généraux */
.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  background-color:#e8e8e8;
  padding: 20px;
  font-family: Arial, sans-serif;
}

.footer-section {
  margin-right: 40px;
}

.footer-section h2 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.footer-section p {
  font-size: 14px;
  margin-bottom: 5px;
  color: #555;
}

.social-icons li {
  display: inline-block;
  margin-right: 10px;
}

.social-icons li a {
  color: #333;
  font-size: 20px;
  transition: color 0.3s ease;
}

.social-icons li a:hover {
  color: #777;
}

.footer-bottom {
  background-color: #333;
  padding: 10px 20px;
  text-align: center;
  font-size: 12px;
  color: #fff;
}
.footer-section p {
  font-size: 15px;
  margin-bottom: 5px;
}

/* Styles spécifiques aux icônes */
.social-icons li a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: #f8f8f8;
  transition: background-color 0.3s ease;
}

.social-icons li a:hover {
  background-color: #e8e8e8;
}

.social-icons li a i {
  color: #333;
}

/* Styles spécifiques au lien de contact */
.footer-section.contact a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section.contact a:hover {
 background-color:  #777;
}




</style>



<body>
  <header>
    <div class="logo"> <span>E</span>hôpital</div>
    <ul class="menu">
      <a href="authentification.php">espace patient</a>
      <a href="authentificationMedcin.php">espace médcin</a>
      <a href="authentificationAdmin.php">espace admin</a>


    </ul>
  </header>

  <!-- home -->

  <section class="home">
    <div class="home-infos">
      <h1>sérvices patient</h1>
      <p></p>
      <a href="authentification.php">prendre un rendez-vous en ligne</a>
    </div>
  </section>
  <section >
    <div class="home-infos">
    
      <p></p>
      <a href="Untitled-1.html">statéstique des médecin</a>
    </div>
  </section>
  


    <section class="services">
      <h1 class="title">SERVICES MEDICAUX</h1>
      <p class="sub-title">notre site vous offre autre sérvices </p>
      <div class="list-services">
        <div class="box">
          <h1>gérer vos rendez-vous</h1>
          <p>Ehôpital offre aux patients la flexibilité de gérer leurs rendez-vous médicaux en toute simplicité. Lorsque
            vous souhaitez annuler ou confirmer un rendez-vous, notre plateforme intuitive vous permet d'effectuer ces
            actions en quelques clics.
            pouvez sélectionner le rendez-vous que vous souhaitez annuler et cliquer sur le bouton d'annulation.
            Pour confirmer un rendez-vous, vous pouvez également vous rendre dans la section des rendez-vous programmés.
            Vous trouverez une option pour confirmer votre présence à votre rendez-vous. </p>
        </div>
        <div class="box">
          <h1>connaitre votre médcin</h1>
          <p>Ehôpital vous offre une plateforme innovante où vous pouvez trouver et interagir avec des médecins de
            confiance. Grâce à notre service, vous pouvez accéder à des informations détaillées sur les médecins, y
            compris leurs spécialités et diplôme. Nous comprenons l'importance de choisir un médecin en qui vous avez
            confiance, c'est pourquoi nous veillons à ce que chaque médecin présenté dans notre hôpital soit
            soigneusement évalué et vérifié.</p>
        </div>

      </div>
    </section>
  </div>

  <footer>
    <div class="footer-content">
      <div class="footer-section about">
        <h2>A propos de nous</h2>
        <p>Ehôpital est engagé à fournir des soins de santé de qualité supérieure,  </p>
         
        <p> mettant le patient au centre de nos préoccupations. Disponibles 24h/24, 7j/7. </p>
        </p>
      </div>
      
      <div class="footer-section contact">      
      
 
      <ul class="social-icons">
      <h2>Contacter-nous</h2><br>
          <li> <p>Email: info@ehospital.com</i></p></li>
          <li> <p>Phone: +1234567890</i></p></li>
          
        </ul>
        </div>
      <div class="footer-section social">
        <h2>suivez-nous</h2>
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 Ehôpital. All rights reserved.</p>
    </div>
  </footer>


</body>

</html>