

<?php
include('connexionformu.php');
if(isset($_POST['valider'])){
    $request= $_POST['commentaire'];
    $query = "SELECT * FROM formulaires WHERE commentaire";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);


    if (mysqli_num_rows($result) > 0) {

      // affiche les données de chaque ligne
      while ($row = mysqli_fetch_assoc($result)) {
  
}
?>
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
<div class="">
<!-- 
// if($count){}
// -->


<div class="mms" style="display: flex; position:absolute;">

<div class="survol"> <?= $row['commentaire']; ?></div>
</div>

</div>



</div>
<?php

}}
?>
</body>

</html>