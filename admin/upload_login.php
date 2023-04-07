<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur a soumis le formulaire
if(isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Connexion à la base de données
    include("connect.php");
    // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
    $email = mysqli_real_escape_string($conn, $email);
    $mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);

    // Requête pour vérifier si l'utilisateur existe dans la base de données
    $query = "SELECT * FROM register WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $result = mysqli_query($conn, $query);

    // Vérifier si l'utilisateur existe dans la base de données
    if(mysqli_num_rows($result) == 1) {
        // L'utilisateur est authentifié, stocker les données de l'utilisateur dans la session
        $_SESSION['email'] = $email;

        // Rediriger l'utilisateur vers la page sécurisée
        header("Location: index.php");
    } else {
        // L'utilisateur n'existe pas dans la base de données, afficher un message d'erreur
        echo "Adresse e-mail ou mot de passe incorrect.";
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>
