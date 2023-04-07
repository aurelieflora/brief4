<?php
session_start();
include('connect.php');


// Récupérer l'ID de l'utilisateur connecté
$user_id = $_SESSION['id'];

// Récupérer les données de l'utilisateur à partir de la base de données
$sql = "SELECT * FROM inscription WHERE id_inscription = '$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Stocker les données de l'utilisateur dans des variables
$username = $row['username'];
$email = $row['email'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tableau de bord</title>
</head>

<body>
    <h1>Bienvenue, <?php echo $username; ?></h1>

    <p>Voici vos informations:</p>
    <ul>
        <li>Nom d'utilisateur: <?php echo $username; ?></li>
        <li>E-mail: <?php echo $email; ?></li>
    </ul>

    <!-- Formulaire de modification d'informations -->
    <a href="formulaire.php">publier</a>
    <h2>Modifier vos informations:</h2>
    <form method="post" action="update_user.php">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <button type="submit" name="update">Mettre à jour</button>
    </form>

    <!-- Formulaire de suppression de compte -->
    <h2>Supprimer votre compte:</h2>
    <form method="post" action="delete_user.php">
        <p>Êtes-vous sûr de vouloir supprimer votre compte? Cette action est irréversible.</p>
        <button type="submit" name="delete">Supprimer mon compte</button>
    </form>

    <!-- Afficher les publications de l'utilisateur -->
    <h2>Vos publications:</h2>
    <!-- Code pour afficher les publications de l'utilisateur -->
<?php
    include('publication_dash_user.php'); ?>

</body>

</html>