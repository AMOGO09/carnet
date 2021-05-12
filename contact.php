<?PHP



try{
// connexion à la base
$con = new PDO('mysql:host=localhost;dbname=carnet;charset=utf8', 'root', '');
         
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['valider'])) {
    
    if (isset($_POST['nom']) and isset($_POST['prenom'])and isset($_POST['telephone']) and isset($_POST['adresse']))
        {
        if (!empty($_POST['nom']) and !empty($_POST['prenom'])and !empty($_POST['telephone']) and !empty($_POST['adresse']))
        {
            
            $nom = htmlspecialchars($_POST['nom']);
            $prenom= htmlspecialchars($_POST['prenom']);
            $telephone= htmlspecialchars($_POST['telephone']);
            $adresse=htmlspecialchars ($_POST['adresse']);
            
            $sql=" INSERT INTO 'contact' ('nom', 'prenom', 'telephone', 'adresse')
	VALUES
	('','$_POST[nom]','$_POST[prenom]','$_POST[telephone]','$_POST[adresse]')";
           // mysql_query=pdo->query
            if (!mysql_query($sql,$con))
	{
	die('impossible d’ajouter cet enregistrement : ' . mysql_error());
	}
            echo "votre contact est ajouté!!";
            
            mysql_close($con);
        }      
        
    }
    
}	


	
	?>
	<a href=" index.html ">Retour au formulaire</a>
