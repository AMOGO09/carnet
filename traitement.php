
<?php
	$host='localhost';
	$port= 3306;
	$dbname='carnet';
	$user= 'root';
	$pwd='';

	try{
		$db=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

		echo "   ";
	}

	catch(PDOException $e){

		die('Erreur :'.$e->getMessage());
	}
		$db->query("SET NAMES UTF8");
		


	if (isset($_POST['nom']) &&
		isset($_POST['prenom']) &&
		isset($_POST['telephone']) &&
		isset($_POST['adresse']))


	{
		$insertion=$db->prepare('INSERT INTO contact VALUES(NULL,:nom,:prenom,:telephone,:adresse)');

		$insertion->bindValue(':nom',$_POST['nom']);
		$insertion->bindValue(':prenom',$_POST['prenom']);
		$insertion->bindValue(':telephone',$_POST['telephone']);
		$insertion->bindValue(':adresse',$_POST['adresse']);

		$verification=$insertion->execute()
;
if($verification){

	echo " ";
}
	
	}else{

		echo"  ";
	}


?>
