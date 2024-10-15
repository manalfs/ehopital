<!DOCTYPE html>
<html>	
<head>
<title>Consultation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="Remedial Appointment Form Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="../cabinet/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="../cabinet/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
<link href="../cabinet/style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
</head>
<body background="">

 <h1>Consultation</h1>
	<div class="container">
			<div class="w3-agileits-team-title"> 
				
				
			<div id="horizontalTab">
					<ul class=" resp-tabs-list">
					<li>
	
					</li>
					<li>
					</li>
					<li>
					</li>
					<li>
					</li>
					</ul>
					<div class=" resp-tabs-container">
					<div class="tab1">
						
			
						<div class=" team-Info-agileits">
						<div class=" register-form">
					<form action="" method="post">
						<div class="fields-grid">
							
								<input type="text" name="NUM_R" placeholder="saisir le numéro de Rendez-Vous" required="">
								<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if(isset($_POST['NUM_R'])){
      

$NUM=$_POST['NUM_R']; 
$req12="SELECT NUM_R from rdv  where NUM_R='$NUM'" ;
$res12=$con->query($req12);
if(!(mysqli_num_rows($res12)>0)){
	echo "<h6 id='echoo'>Numéro de Rendez-Vous n'existe pas</h6>";
	
}




}

?>

<!-- 								<input type="text" name="NUM_C" placeholder="saisir le numéro de consultation" required="">
								
<?php
/*include '../cabinet/connectdb.php';

if(isset($_POST['NUM_C'])){
      

$NUM=$_POST['NUM_C']; 
$req11="SELECT NUM_C from consultation where NUM_C='$NUM'" ;
$res11=$con->query($req11);
if(mysqli_num_rows($res11)>0){
	echo "<h6 id='echoo'>Numéro de consultation existe déja</h6>";
	
}




}
*/
?> -->


								<input type="text" name="type_C" placeholder="saisir le type de consultation" required=""> 

							    <input type="date" name="date_C" placeholder="choisir la date" required=""> 

							    <input type="text" name="description_C" placeholder="saisir la déscription" required="">

			
	
							   
								

								<input type="submit" name="ajo1" value="Ajouter">
								<input type="button" name="annuler" value="Annuler" id="registrer">
							
						</div>
						
					</form>
						
				</div>	
												
						</div>
						<div class="clear"> </div>
					</div>
		
					</div>
					<div class="clear"> </div>
					
			</div>
	</div>
 </div>

		

<script src="jquery.min.js"></script>
<script src="easy-responsive-tabs.js"></script>
<script>



document.getElementById('registrer').addEventListener('click',function(e){
	console.log('test')
	e.preventDefault();
	window.location="http://127.0.0.1/pfe/pfe_med/interface_medecin.php"
})
</script>

<script src="jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>

</body>
</html>

<?php


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hopital";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }
    session_start();

  


if(isset($_POST['ajo1'])){

  /*$_SESSION['cons']=$_POST['NUM_C'];*/



$NUM_R=$_POST['NUM_R'];
$NUM=$_POST['NUM_C']; 
$type=$_POST['type_C'];
$date="".$_POST['date_C'];
$description=$_POST['description_C'];




$req22="INSERT INTO consultation ( `type_C`, `date_C`, `description_C`, `CIN_P`,`NUM_R`) VALUES ('$type','$date','$description',
'$CIN','$NUM_R')";
$res22=$con->query($req22);

$req33="UPDATE patient SET date_soin_P='$date' WHERE CIN_P='$CIN'";
$res33=$con->query($req33);
if($res22 and $res33){
	header('location:choix.php');

}

}
?>