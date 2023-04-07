<?php
include('connect.php');
session_start();

// Récupérer l'ID de l'utilisateur connecté
$user_id = $_SESSION['id'];

// Vérifier si le formulaire de mise à jour a été soumis
if(isset($_POST['update'])) {
// Récupérer les nouvelles valeurs du formulaire
$new_username = $_POST['username'];
$new_email = $_POST['email'];

// Mettre à jour les informations de l'utilisateur dans la base de données
$sql = "UPDATE inscription SET username='$new_username', email='$new_email' WHERE id_inscription='$user_id'";
$result = mysqli_query($conn, $sql);

// Rediriger l'utilisateur vers le tableau de bord
header("Location: dashboard_user.php");
exit();


}
?>


