<?php

function afficherTableauUser($rows, $headers) {
		?>

		<table class="table text-light ">
			<legend class="text-light fw-bold text-decoration-underline d-flex justify-content-left mt-5"> Données de la table User :</legend>
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th class="text-center"><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td class="text-center"> <?php echo '<a href=formulaireUtilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td class="text-center"><?php echo $row[$k]; ?></td>
			    	<?php } ?>

			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function afficherTableauOrga($rows, $headers) {
		?>

		<table class="table text-light ">
			<legend class="text-light fw-bold text-decoration-underline d-flex justify-content-left mt-5"> Données de la table User :</legend>
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th class="text-center"><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td class="text-center"> <?php echo '<a href=formulaireOrganization.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td class="text-center"><?php echo $row[$k]; ?></td>
			    	<?php } ?>

			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTableUser() {
	$headers = array();
	$headers[] = "id";
	$headers[] = "lastname";
	$headers[] = "firstname";
	$headers[] = "email";
	$headers[] = "password";
	return $headers;
}

function getHeaderTableOrga() {
	$headers = array();
	$headers[] = "id";
	$headers[] = "name";
	$headers[] = "domain";
	$headers[] = "aliases";
	return $headers;
}

?>
