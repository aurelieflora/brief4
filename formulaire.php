<?php 
include('connexionformu.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fomulaire de publication</title>
    <link rel="stylesheet" type="text/css" href="">
    <style>
        body {  
  max-width: 100%;
      margin: 0;
      font-family: 'Roboto', Helvetica, Sans-Serif;
      font-size: 13px;
      overflow-x: hidden;
    }
        fieldset {
            width: 500px;
            height: 600px;
            border-style: solid;
            border-radius: 20px;
            margin-left: 20%;
            margin-top: 5%;
            background-color: aqua;
        }

        label {
            margin-left: 30px;

        }

        select {
            margin-left: 30px;

        }

        input[type="submit"] {
            margin-left: 150px;
            width: 100px;
            height: 35px;
            margin-top: -25px;
            background-color: burlywood;
            border-radius: 5px;
            position: absolute;
        }
        textarea{
            margin-left: 60px;
        }
    </style>


</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data"> 
    <fieldset>
        <legend> <H2>  FORMULAIRE DE PUBLICATION</H2></legend>
        <br><br><br>

        <input type="hidden" name="id_inscription" value="<?php echo $user_id; ?>">

        <label for="titre"></label> Titre <input type="text" name="titre" placeholder="entrez le titre de votre publication"> <br><br><br><br><br>
        <label for="type de publication">Choisir une catégorie:</label>
        <select id="type" name="categorie">

<option value="restaurant">restaurant</option>
<option value="recette">recette</option>
<option value="retour d’expérience">retour d’expérience</option>
<option value="conseil">conseil</option>
</select> <br><br><br><br>
<label for="image"></label>Choisir une image <input type="file" id="image" name="fichier"><br><br>
<label for="message">Votre message</label><br><br>
<textarea id="messages" name="messages" placeholder="Bonjour, ...." required></textarea> <br><br><br><br>       

<input type="submit"  name="envoyer" value="envoyer"/>
    </fieldset>
    </form>



</body>

</html>