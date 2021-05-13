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

	$pdoStat = $db->prepare('SELECT * FROM contact');

	$executeIsok = $pdoStat->execute();


	$contacts = $pdoStat->fetchAll();


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
        <div><h1>Informations !!</h1>
<ul>
    <li>
    	 <?php
   	foreach ($contacts as $contact);

   	var_dump($contacts);
?>

		<li>
	<?. $contact['nom']?>  <?. $contact['prenom']?> <?. $contact['telephone']?> <?. $contact['adresse']?>  
</li>

    </li>
    
</ul>
        </div>
    </body>
       