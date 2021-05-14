<?php
	$host='localhost';
	$port= 3306;
	$dbname='carnet';
	$user= 'root';
	$pwd='';
//connexion
	try{
		$db=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

		echo "   ";
	}

	catch(PDOException $e){

		die('Erreur :'.$e->getMessage());
	}

	
	?>

	<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>


        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>

    	<div>
        <h1>Mes contacts</h1>

<ul>
        
        <?php

	$req= $db->prepare('SELECT nom, adresse FROM contact');
	;
	$req->execute($adresse=isset($_POST['addresse']) ? $_POST['adresse'] : NULL);
	$donnees= $req->fetch(); 
	//array($_POST['adresse'])
	?>
		
		<?php
		echo htmlspecialchars($donnees['adresse']);
		?>

    </div>
    </body>
</html>
