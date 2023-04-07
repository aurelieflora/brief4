
<?php
include('connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./build/css/demo.css">
 <link rel="stylesheet" href="./build/css/intlTelInput.css">

 <title>Connexion utilisateur</title>

<style>


body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

h1 {
  color: #333;
}

form {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin: 50px auto;
  max-width: 500px;
  padding: 20px;
}

label {
  color: #666;
  display: block;
  margin-bottom: 10px;
}

input[type="email"],
input[type="password"] {
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
  padding: 10px;
  width: 100%;
}

input[type="submit"] {
  background-color: #1E3040;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
  padding: 10px;
  width: 100%;
}

input[type="submit"]:hover {
  background-color: #73B9EE;
}

</style>
</head>
<body>


    <h1>Connexion</h1>
    <form  action="upload_utilisateur.php" method="POST" enctype="multipart/form-data">
        <label>Entrez votre email:</label><br>
        <input type="email" name="email"><br>
        <label>Mot de passe :</label><br>
        <input type="password" name="mot_de_passe"><br>
        <input type="submit" name="envoye" value="Se connecter">
    </form>
</body>
</html>

