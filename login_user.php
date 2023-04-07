<?php
session_start();
include('connect.php');

if (isset($_POST['connexion'])) {

    $username = $_POST['username'];
    $password = $_POST['passwords'];

    // Vérifier si l'utilisateur et le mot de passe existent dans la base de données
    $query = "SELECT * FROM inscription WHERE username = '$username' AND passwords = '$password'";
    $result = mysqli_query($conn, $query);
// verifie s'il y aun tableau et vérifier le nombre d'élément qu'il ya  dans le tableau
    $req = mysqli_fetch_assoc($result);
    if ($req) {
        // affiche l'id inscription avec cette seesion et la récupérer dans la session id
        $_SESSION['id'] = $req['id_inscription'];
        echo $req['id_inscription'];
        if (mysqli_num_rows($result) > 0) {
            header('Location: dashboard_user.php');
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect";
        }
    }
}
?>







<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="password"] {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Connexion</h2>
        <form method="post" action="">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="passwords" name="passwords" required>

            <button type="submit" name="connexion">Se connecter</button>
            <a href="inscription.php">S'inscrire</a>

        </form>
    </div>
</body>

</html>