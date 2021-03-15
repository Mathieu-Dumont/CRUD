<?php
include 'function/function.php';
include 'function/mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$lastname = $_GET["lastname"];
		$firstname = $_GET["firstname"];
		$email = $_GET["email"];
		$password = $_GET["password"];

	}


	if ($action == "CREATE") {
		createUser($lastname, $firstname, $email, $password);

		echo "user cree <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";

	}

	if ($action == "UPDATE") {
		updateUser($id, $lastname, $firstname, $email, $password);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}



?>
