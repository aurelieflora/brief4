<?php
include ('connect.php');
include ('connect.php');

// Vérifier si la table "register" existe
$table_exists = mysqli_query($conn, "SHOW TABLES LIKE 'register'");

if (mysqli_num_rows($table_exists) == 0) {
  echo "La table 'register' n'existe pas.";
} else {
  // Vérifier si le formulaire a été soumis
  if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["mot_de_passe"])) {
    // Récupérer les données du formulaire
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['mot_de_passe']);

    // Insérer les données dans la base de données
    $stmt = $conn->prepare("INSERT INTO register (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $prenom, $email, $password);

    if ($stmt->execute()) {
      // Rediriger vers la page de connexion
      header('Location: loginad.php');
      exit();
    } else {
      echo "Erreur d'insertion: " . $stmt->error;
    }
  } else {
    echo "Veuillez remplir tous les champs du formulaire.";
  }
}

mysqli_close($conn);

?>