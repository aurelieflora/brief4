<?php
include('connect.php');
session_start();

// Récupérer l'ID de l'utilisateur connecté
$user_id = $_SESSION['id'];

// Vérifier si le formulaire de suppression a été soumis
if(isset($_POST['delete'])) {
	// Supprimer l'utilisateur de la base de données
	$sql = "DELETE FROM inscription WHERE id_inscription='$user_id'";
	$result = mysqli_query($conn, $sql);

	// Déconnecter l'utilisateur et le rediriger vers la page de connexion
	session_destroy();
	header("Location: login_user.php");
	exit();
}
?>