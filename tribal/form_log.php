<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=comment;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



	if(isset($_POST['submit_commentaire'])) {
		if(isset($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['commentaire']
	) AND !empty($_POST['name']) AND !empty($_POST['lastname']) AND !empty($_POST['email']) AND !empty($_POST['commentaire'])
) {
		$name = htmlspecialchars($_POST['name']);
		$commentaire = htmlspecialchars($_POST['commentaire']);
		$req = $bdd->prepare('INSERT INTO comments (name, lastname, email, commentaire) VALUES (:name, :lastname, :email, :commentaire)');
		$req->execute(array(
			"name" => $_POST["name"],
		  "lastname" => $_POST["lastname"],
		  "email" => $_POST["email"],
		  "commentaire" => $_POST["commentaire"]
		));

		}else {
		$c_erreur = "Tous les champs doivent étre complétés";
	}
	}
	$comment = $bdd->prepare('SELECT 	lastname, commentaire FROM comments');
	$comment->execute(array());
	$c = $comment->fetchAll();

	
 ?>
