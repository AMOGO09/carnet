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
<?php 
$host='localhost';
	$port= 3306;
	$dbname='carnet';
	$user= 'root';
	$pwd='';
//connexion


	try{
		$db=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd,array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC));

		echo "   ";
	}

	catch(PDOException $e){

		die('Erreur :'.$e->getMessage());
	}

	$query=$db->prepare('SELECT * FROM contact');
	$result = $query->execute();
	$posts=$query->fetchAll();
	
?>
<ul>
<?php foreach ($posts as $post) { ?>

	<li> <?php  echo $post['adresse'] ?> </li>
	<?php } ?>
 
</ul>
	<a class="" href="infos.php">afficher plus de détails.</a>
</div>
    </body>
</html>


