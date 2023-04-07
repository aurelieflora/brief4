<?php
// Connexion à la base de données
include('connect.php');

if (isset($_POST['envoye'])) {
	// Récupération des données du formulaire
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['mot_de_passe']);

	// Vérification que les champs ne sont pas vides
	if (empty($email) || empty($password)) {
		echo "Tous les champs doivent être remplis.";
	} else {
		// Vérification que l'utilisateur existe et que le mot de passe est correct
		$sql = "SELECT * FROM `users` WHERE email = '$email' AND mot_de_passe = '$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// Ouverture de la session et enregistrement de l'utilisateur
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['id_users'] = $users;

			header("location:accueil.php");
		} else {
			echo "Nom d'utilisateur ou mot de passe incorrect.";
		}
	}
} else {
	echo 'Erreur: formulaire non envoyé';
}
mysqli_close($conn);
?>
