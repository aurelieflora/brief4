<?php
// include('connect.php');
// $sql = "SELECT * FROM profil  ORDER BY id_profil DESC";
// $result = mysqli_query($conn, $sql);
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="load-more-button.css" rel="stylesheet">
  <script src="load-more-button.js"></script>
  <style>
    .compte {
    border-style: solid;
    border-radius: 100%;
    height: 300px;
    width: 300px;
    margin-left: 40%;
    margin-top: 50px;
}
.info{
    border-style: solid;
    border-radius: 10px;
    height: 300px;
    width: 300px;
    margin-left: 70%;
    margin-top: -280px;
}
    
  </style>

</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
      //  affiche les données de chaque ligne
while ($row = mysqli_fetch_assoc($result)) {
?><?php ?>
<h1 class="utili" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:rgb(12, 64, 85);margin-top:-55px;margin-left:50%;"><?= $row['utilisateur']; ?></h1>
<div class="survol"> <?= $row['nom']; ?></div>
<div class="survol"> <?= $row['prenom']; ?></div>
<div class="survol"> <?= $row['naissance']; ?></div>

<a  href="fond_image.php?id=  <?= $row['id_formulaire']; ?>" class="amage" style="">
<img src="<?= $row['fichier'] ?>" alt="" style="width:230px; margin-top:1px; height:180px; border-radius: 10px 10px 0px 0px ;">
</div>

</div>
</a>
</div>
</div>

<?php
// $idm = $row['id_formulaire'];
}
}
mysqli_close($conn);
?>

</body>

</html>