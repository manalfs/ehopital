<!DOCTYPE html>
<html>
<head>
<title>interface medecin </title>
<style>/* Ajoutez vos styles CSS ici */

/* Header */
.header {
    background-color: #333;
    padding: 20px 0;
}

.header .content.white {
    color: #fff;
}

.header .navbar-default {
    background-color: transparent;
    border: none;
}

.header .navbar-brand h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    padding: 15px 0;
}

.header .navbar-toggle {
    background-color: #fff;
}

.header .navbar-toggle .icon-bar {
    background-color: #333;
}

.header .link-effect-2 ul.navbar-nav {
    margin-top: 20px;
}

.header .link-effect-2 ul.navbar-nav li {
    margin: 0 10px;
}

.header .link-effect-2 ul.navbar-nav li a {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    padding: 10px 0;
    transition: 0.5s ease;
}

.header .link-effect-2 ul.navbar-nav li a:hover {
    color: #333;
}

/* Header Down */
.headerdown {
    background-color: #333;
    padding: 20px 0;
    color: #fff;
    font-size: 16px;
    font-family: Arial, sans-serif;
}

.headerdown .col-md-4,
.headerdown .col-sm-4 {
    text-align: center;
}

.headerdown .w3_hl,
.headerdown .w3_hc {
    display: inline-block;
    margin: 0 10px;
}

.headerdown .w3_hl i,
.headerdown .w3_hc i {
    font-size: 32px;
    color: #fff;
}

.headerdown .w3l_r,
.headerdown .w3l_cr {
    margin-top: 10px;
}

.headerdown h3 {
    margin: 5px 0;
    font-size: 20px;
    font-weight: bold;
}

.headerdown h5 {
    margin: 0;
    font-size: 14px;
}

/* Banner */
.agile_banner {
    background-color: #f5f5f5;
    padding: 50px 0;
    text-align: center;
}

.agile_banner .s1 {
    color: #fff;
}

.agile_banner h4 {
    margin: 5px 0;
    font-size: 24px;
    font-family: Verdana, sans-serif;
}

.agile_banner h4 font {
    font-size: 48px;
    font-weight: bold;
}

.agile_banner h4 i {
    font-style: italic;
}

.agile_banner h4, .agile_banner h4 font, .agile_banner h4 div {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
</style>

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body onload="startTime()">
<!-- Header -->

	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehôpital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}


session_start();
if($_SESSION['test']!=2){
	echo "cette page n'est autorisée"; die();
}
$login_a=$_SESSION['login_a'];     

 
$req1="SELECT nom_a from admin where login_a='$login_a'" ;
$res1=$con->query($req1);
if(mysqli_num_rows($res1)>0){
	$row=mysqli_fetch_array($res1);
	echo $row[0]."  ";
	echo $row[1];

	
}


								
								echo "<label>".$row[2]."</label>";
?>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">Accueil</a>
								</li>
							
								<li>
									<a href="cons.php" class="scroll">Consultation </a>
								</li>
						
								<li >
								  <a href="table.php" class="scroll" >Dossiers Médicaux </a>
								  
							</li>
							<li>
									<a href="../index.php" class="scroll">Déconnexion</a>
							</li>
						
						</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<div class="headerdown">
	<div class="container">
	<div class="col-md-4 col-sm-4 w3_hl">
	<div class="w3l_l">
	<i class="fa fa-phone-square" aria-hidden="true"></i>
	</div>
	<div class="w3l_r">
	<h3>contactez-nous 0522334455</h3>
	<h5>Nous sommes à votre service</h5>
	</div>
	
	</div>
	


	<div class="col-md-4 col-sm-4 w3_hc">
	<div class="w3l_cl">
	<i class="fa fa-clock-o" aria-hidden="true"></i>
	</div>
	<div class="w3l_cr">
	<h3>heures de travail</h3>
	<h5>Lun-Sam(08h00-12h00 -  14h00-18h00) <br> Sam(08h00-14h00)</h5>
	
	</div>
	
	</div>

	</div>
	<div class="clearfix"></div>
	</div>
	</div>
<!-- /Header-->
<!-- banner-->
<div class="agile_banner">
<div class="s1">
			<h4 style="font-family:verdana; color: #FFF;"><font size="+3"><i>Bienvenue Medecin</i></font></h4>

	        <h4><?php echo date('d M Y'); ?></h4>
			
			<h4><div id="txt"></div></h4>
			

		</div>


</div>
</body>
</html>