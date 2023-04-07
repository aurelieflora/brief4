<div id="accueil">
  <?php


  include('connexionformu.php');
  $sql = "SELECT * FROM formulaires  ORDER BY id_formulaires DESC ";
  $result = mysqli_query($conn, $sql);
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
        margin-left: 15px;
        border-style: none;
        margin-top: 100px;
        display: block;
        position: relative;
        float: left;
        line-height: 22px;
        display: none;

      }

      div.survol {
        margin-left: 60px;
        /* transition: .5s ease; */
        opacity: 3;
        color: white;
        vertical-align: text-bottom;
        font-size: 15px;
        text-align: left;
        margin-top: 9px;
        color: blue;
      }

      /* 

    div.desc {
      top: 5px;
      padding: 15px;
      text-align: center;
      font-size: 15px;
    } */
    </style>

  </head>

  <body>
    <?php
    if (mysqli_num_rows($result) > 0) {
      //  affiche les données de chaque ligne
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <!-- <div class="conteneur" style="margin-top:80px;"> -->
        <!-- <div class="grand" style="  position: relative; display:block; float: left; line-height: 22px"> -->
        <!-- <div class="image">  -->
        <div class="gallery1">
          <a href="fond_image.php?id= <?= $row['id_formulaires']; ?>" class="amage" style="">
            <img src="<?= $row['fichier'] ?>" alt="" style="width:230px; margin-top:1px; height:180px; border-radius: 10px 10px 0px 0px ;">
            <div class="survol"> <?= $row['titre']; ?> <br><?= $row['messages']; ?> </div>
          </a>
        </div>

        <!-- </div>
</div> -->

    <?php
        // $idm = $row['id_formulaire'];
      }
    }
    mysqli_close($conn);
    ?>
</div>
<div id="categorie" style="display:none;">

</div>


<div class="load-wrap text-center">
  <button class="btn" style="width:135px; height:30px; border: 0.2em solid green;  border-radius:5px; position:relative; margin-left:50%; position:fixed;">voir plus ...</button>
</div>

<script>
  $(document).ready(function() {
    $('.gallery1').slice(0, 10).show()
    $('.btn').on('click', function() {
      $('.gallery1:hidden').slice(0, 10).slideDown('show')
      if ($('.gallery1:hidden').length == 0) {
        $(this).text('Plus d\'images à afficher');
      }
      return false;
    });
  });
</script>
</body>

</html>
</div>