<?php
include 'function/function.php';
include 'function/mesFunctionsTable.php';

	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}




?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
					<div class="modal-content">
	<form action="createUpdateOrga.php" method="get">
	<p>
		<a href="index.php">Liste des utilisateurs</a>

		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="name">Name :</label>
        	<input type="text" id="lastname" name="lastname" value="<?php echo $user['name']??'';  ?>">
	    </div>
	    <div>
	        <label for="domain">Domain</label>
	        <input type="text" id="prenom" name="firstname" value="<?php echo $user['domain']??'';  ?>">
	    </div>
	    <div>
	        <label for="aliases">Aliases:</label>
	        <input type="text" id="email" name="email" value="<?php echo $user['aliases']??'';  ?>">
	    </div>

		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
</div>
</div>
</div>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>
