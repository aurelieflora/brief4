

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

  </style>

</head>
  
<body>


 <!-- le body de mon projet -->
 <div class="mySwiper" style="position:relative;">

<!-- <div class="swiper mySwiper"> -->
<div class="swiper-wrapper" style="position:absolute;">

<?php
include('connexionformu.php');
$sql = "SELECT * FROM formulaires  ORDER BY id_formulaires DESC LIMIT 10";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  //  affiche les données de chaque ligne
while ($row = mysqli_fetch_assoc($result)) {

?>

<div class="swiper-slide">
<a href="image/2.jpg" class="im">
  <div class="enveloppe">
  <img src="<?= $row['fichier'] ?>" alt="nouriture" class="carou">
  <div class="ecrit" style=" margin-top:10px; margin-left:70px">
  <?= $row['titre']; ?> <br><b> <?= $row['categorie']; ?></b></div>
</div>
</a>
</div>
<?php
// $idm = $row['id_formulaire'];
}
}
mysqli_close($conn);
?>

  </div>
</div>

<div class="swiper-button-next" style="top: 175px; background-color:antiquewhite;height:70px; width:40px;" ></div>
<div class="swiper-button-prev" style="top: 175px;background-color:antiquewhite; height:70px; width:40px;"></div>
<div class="swiper-pagination"></div>


</body>

</html>