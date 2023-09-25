<?php

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = "about";
	}

	include("dark/header.php");
	include("dark/". $page .".html");
	include("dark/footer.php");
?>

<html>

	<script type="text/javascript">
		// Date de naissance au format "jour mois année"
		var dateNaissance = new Date("2003-12-04");

		// Date actuelle
		var dateActuelle = new Date();

		// Calcul de la différence entre les années
		var differenceAnnees = dateActuelle.getFullYear() - dateNaissance.getFullYear();

		// Vérifier si l'anniversaire de cette année a déjà eu lieu
		if (dateNaissance.getMonth() > dateActuelle.getMonth() || (dateNaissance.getMonth() === dateActuelle.getMonth() && dateNaissance.getDate() > dateActuelle.getDate())) {
			differenceAnnees--;
		}
		var baliseAge = document.getElementById("age");

		// Insérer l'âge calculé dans la balise <span>
		baliseAge.textContent = "(" + differenceAnnees + " ans)";

	</script>

	<script>
        // Récupérez l'élément par son ID
        var element = document.getElementById("<?= $page ?>");

        // Vérifiez si l'élément a été trouvé
        if (element) {
            // Ajoutez une classe à l'élément
            element.classList.add("active");
        } else {
            console.log("L'élément n'a pas été trouvé.");
        }
    </script>

</html>