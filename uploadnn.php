<?php
// Connexion à la base de données
include('connect.php');


if (isset($_POST['envoye'])){

// Récupération des données du formulaire
$username = mysqli_real_escape_string($conn, $_POST['nom_utilisateur']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['mot_de_passe']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_mot_de_passe']);
$profile_picture = $_FILES['profile_picture']['name'];
// Vérification que les champs ne sont pas vides
if (empty($username) ||empty($email) || empty($password) || empty($confirm_password) || empty($profile_picture)) {
    echo "Tous les champs doivent être remplis.";
} else {
    // Vérification que les mots de passe correspondent
    if ($password !== $confirm_password) {

        echo "Les mots de passe ne correspondent pas.";
        // header("Location: inscriptionn.php");

    } else {
        // Vérification que l'utilisateur n'existe pas déjà
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "Cet utilisateur existe déjà.";
            // header("Location: inscriptionn.php");

        } else {
            // Enregistrement de l'utilisateur
            $query = "INSERT INTO users (nom_utilisateur,email, mot_de_passe, profile_picture) VALUES ('$username', '$email', '$password', '$profile_picture')";
            if (mysqli_query($conn, $query)) {
                // Enregistrement de la photo de profil
                $target_dir = "reserve_image/";
                $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
                move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
                header("Location: connexionn.php");exit();

                echo "Votre compte a été créé avec succès.";
            } else {
                echo "Erreur : l'utilisateur n'a pas été enregistré.";
            }
        }
    }
}}

mysqli_close($conn);
?>
