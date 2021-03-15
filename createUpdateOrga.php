<?php
include 'function/function.php';
include 'function/mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$name = $_GET["name"];
		$domain = $_GET["domain"];
		$aliases = $_GET["aliases"];


	}


	if ($action == "CREATE") {
		createOrga($name, $domain, $aliases);

		echo "user cree <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";

	}

	if ($action == "UPDATE") {
		updateOrga($id, $name, $domain, $aliases);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteOrga($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}



?>
