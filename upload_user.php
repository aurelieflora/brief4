<?php
include('connect.php');

if(isset($_POST['inscription'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];
    $confirm_password = $_POST['confirm_password'];

    // Vérifier si le nom d'utilisateur est déjà utilisé
    $query = "SELECT * FROM inscription WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "Ce nom d'utilisateur est déjà utilisé";
    } elseif ($passwords != $confirm_password) {
        echo "Les mots de passe ne correspondent pas";
    } else {
        // Insérer les données dans la table inscription
        $insert_query = "INSERT INTO inscription (username, email, passwords) VALUES ('$username', '$email', '$passwords')";
        header("location:login_user.php");
        if(mysqli_query($conn, $insert_query)){
            echo "Inscription réussie";
        } else {
            echo "Erreur lors de l'inscription: " . mysqli_error($conn);
        }
    }

}
