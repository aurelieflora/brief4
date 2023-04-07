<?php
include('connexionformu.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  



<div class="grand">
<form action="omm.php" method="post" enctype="multipart/form-data" >
<label for="commentaire">
<textarea name=" commentaire" id="commentaire" placeholder="Bonjour, ...." required></textarea>
</label>
<button type="submit" name="valider" id="valid"> valider</button>
</form>
</div>
</body>
</html>