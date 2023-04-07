<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">

  <title>Inscription</title>
</head>

    <style>
        body {
            background-color: #F3F5F7;
            font-family: Arial, sans-serif;
            color: #333333;
        }
        
        h4 {
            text-align: center;
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            color: #143D54;
        }
        
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #95E18E;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 2px solid #56BBF6;

        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #333333;
        }
        input[type="email"],
        input[type="text"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 2px solid #56BBF6;
            border-radius: 5px;
            font-size: 1rem;
            color: #333333;
        }
        
        input[type="submit"] {
            display: block;
            margin-top: 2rem;
            padding: 0.5rem 1rem;
            background-color: #143D54;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 40%;

        }
        
        input[type="submit"]:hover {
            background-color: #56BBF6;
            
        }
    </style>
</head>
<body>
   <div> <h4>Vite inscrit toi pour fait partir de notre communauté!  <img src="image/LOGO WELIKE.png" alt="logo" style="width:200px; height:150px; position:fixed; margin-left:-5px; margin-top:-10px; ">
   </h4>
</div>
    <form method="POST" action="uploadnn.php" enctype="multipart/form-data">
        <label>Nom d'utilisateur :</label>
        <input type="text" name="nom_utilisateur">
        <label>Email :</label>
        <input type="email" name="email">
        <label>Mot de passe :</label>
        <input type="password" name="mot_de_passe">
        <label>Confirmer le mot de passe :</label>
        <input type="password" name="confirm_mot_de_passe">
        <label>Photo pour votre profil :</label>
        <input type="file" name="profile_picture">
        <input type="submit" name="envoye" value="S'inscrire">
        <a href="connexionn.php">Connectez-vous ici!</a> 
    </form>
</body>
</html>









</body>
</html>