
<?php
include('connexionformu.php');

if(isset($_POST['request'])){
    $request= mysqli_real_escape_string($conn, $_POST['request']);
    $query = "SELECT * FROM formulaires WHERE categorie ='$request'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
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
  <script src="load_more.js"></script>
  <script src="filtrees.js"></script>

  <style>

body {  
  max-width: 100%;
      margin: 0;
      font-size: 13px;
      overflow-x: hidden;
    }
    div.gallery1 {
      width: 230px;
      height: 250px;
      border-radius: 10px;
      border-width: 20px;
      border-color: grey;
      box-shadow: 3px 3px 3px 3px rgb(188, 178, 178);
      margin-left: 7  px;
      border-style: none;
      margin-top: - 8px;
      position: relative;
      display: flex;
    }

    div.survol {
      margin-left: 60px;
      margin-bottom: 0px;
      transition: .5s ease;
      opacity: 3;
      color: white;
      vertical-align: text-bottom;
      font-size: 15px;
      text-align: left;
      margin-top: 10px;
      color: blue;
    }
  </style>
</head>

<body>
  <?php
    if (isset($result) && mysqli_num_rows($result) > 0) {
        ?>
        <div class="gallery-container">
        <?php
        while($row=mysqli_fetch_assoc($result)) {
            ?>
            <div class="gallery1">
  <a href="fond_image.php?id=<?= $row['id_formulaires']; ?>" class="amage" style="">
    <img src="<?= $row['fichier'] ?>" alt="" style="width:230px; margin-top:1px; height:180px; border-radius: 10px 10px 0px 0px ;">
    <div class="survol"> <?= $row['titre']; ?> <br><?= $row['messages']; ?> </div>
  </a>
</div>
</div>
            <?php 
        }
        ?>
        
        <?php
    } else {
        // Affiche un message si aucun élément n'est trouvé
        echo "Aucun élément trouvé.";
    }
    mysqli_close($conn);
  ?>
</body>

</html>
