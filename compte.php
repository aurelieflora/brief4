<?php
include('connect.php');
$sql = "SELECT * FROM users where id_user";
$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compte</title>
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
?>
<div> <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenue dans votre espace privé <h1 class="utili" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:rgb(12, 64, 85);margin-top:-55px;margin-left:50%;"><?= $row['nom']; ?> <?= $row['prenoms']; ?> </h1></div>
<div class="compte"> <img src="" alt="" style="width:230px; margin-top:1px; height:180px; border-radius: 10px 10px 0px 0px ;"><?= $row['prenoms']; ?></h1> </div>
<label for="avatar" style="margin-left:40%;">ajouter une photo:</label> 
<input type="file"  id="avatar" name="avatar" accept="image/png, image/jpeg">



<div class="info"> 
<div class="survol"> <?= $row['nom']; ?></div>
<div class="survol"> <?= $row['prenoms']; ?></div>
<div class="survol"> <?= $row['roles']; ?></div>
<div class="survol"> <?= $row['contact']; ?></div>

</div>
<div> <h3>Vous pouvez maintenant welikefoodez!!!! </h3> <a href=""> <img src="image/right-direction-removebg-preview.png" alt="" style="width: 80px; margin-top:-5px;"> </a> </div>
<?php
// $idm = $row['id_formulaire'];
}
}
mysqli_close($conn);
?>

</body>
</html> 