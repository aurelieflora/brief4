<?php
session_start();
include('connect.php');

if (isset($_POST['connexionn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $motDepasse = mysqli_real_escape_string($conn, $_POST['motDepasse']);
    $password = password_hash($motDepasse, PASSWORD_DEFAULT);


    $query = "SELECT * FROM inscription WHERE email='$email' AND motDepasse='$motDepasse'";
    $results = mysqli_query($conn, $query);

    if ($eko = mysqli_fetch_assoc($results)) {
        $_SESSION['id_user'] = $eko['id_inscription'];
        if ($email == $eko['email'] and $password == $eko['motDepasse']) {
            header('location:accueil.php');
        } else {
            echo '<script type="text/javascript">alert("Email ou mot de passe incorrect");</script>';
        }
    }
}
