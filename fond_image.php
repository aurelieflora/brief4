<?php include('final.php'); ?>
<?php include('sms.php'); ?>

<?php
include('connexionformu.php');
$id = (int) $_GET['id'];
$sql = "SELECT * FROM formulaires WHERE id_formulaires='$id'";
$result = mysqli_query($conn, $sql);
// conn(voir si je suis connecté a la base de donnée)
if (mysqli_num_rows($result) > 0) {

// affiche les données de chaque ligne
while ($row = mysqli_fetch_assoc($result)) {
?>



<!DOCTYPE html>
<html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        </head>
        <style>
            body {  
  max-width: 100%;
      margin: 0;
      font-size: 13px;
      overflow-x: hidden;
    }
            div.tout {
                position: relative;
            }

            div.image {
                margin-top: 50px;
                margin-left: 50px;
            }

            div.gallery {
                margin-left: 400px;
                border-style: solid;
                border-color: #008518;
                width: 500px;
                height: 400px;
                border-radius: 80px;
                margin-top: 150px;
            }

            div.categorie {
                top: 150px;
                left: 600px;
                color: #008518;
                font-size: 30px;
                /* width: 50px;*/
                height: 80px;
                position: relative;
            }

            div.survol {
                margin-left: 5px;
                margin-bottom: -10px;
                transition: .5s ease;
                opacity: 3;
                color: white;
                vertical-align: text-bottom;
                font-size: 11px;
                text-align: left;
                margin-top: -35px;

            }


            div.nom {
                margin-left: 550px;
                margin-top: -400px;
                padding: 15px;
                font-size: 20px;
                color: #3551EC;
                width: 400px;

            }

            div.sms {
                width: 400px;
                margin-left: 550px;
                margin-top: 50px;
                padding: 15px;
                font-size: 15px;
                color: #000000;
                font-size: 20px;
            }

            div.date {
                margin-left: 550px;
                margin-top: 90px;
                padding: 15px;
                font-size: 15px;
                color: #596CE5;
                font-size: 20px;
                width: 200px;
            }

            .fa-fa-thumbs-o-up {
                width: 60px;
                height: 80 px;
            }

            div.commentaire {
                border-style: solid;
                width: 110px;
                height: 120px;
                border-radius: 150px;
                border-color: darkorchid;
            background-color: #596CE5;
            position: relative;
                float: left;
                margin-top: 90px;
                left: 650px; 
                z-index: 2; 
            }

            div.comment {
                border-style: solid;
                width: 90px;
                height: 90px;
                border-radius: 150px;
                background-color: white;;
                float: left;
                margin-top: 8px;
                left: 10px; 
                z-index: 1;  
                position: absolute;    
                display: flex;   
                float: left;       
            }

        </style>
        
        </head>

        <body>

        <div class="tout">
        <div class="categorie"><?php echo $row['categorie']; ?></div>

        <div class="gallery">
        <div class="image">
            <a target="_blank" href="" class="amage">
            <img src="<?= $row['fichier']; ?>" alt="" width="400" height="300">
    </div></a>
        <div>
            <!-- </a> 
            </div> 
            </div>
            </div> -->


            <div class="col-sm-2">
                <a href="javascript:void(0)" class="btn btn-info btn-lg">
                    <span class=" glyphicon glyphicon-thumb-up" onclick="like_update('<?php echo $row['id_formulaires'] ?>')">
                        <iconify-icon icon="fa-regular:thumbs-up" style="color: blue;margin-left:150px;margin-top:25px;position:relative;" width="36" height="36"></iconify-icon>
                        <div class="toggle" style='border:1px solid #4169E1; width: 40px;height: 40px;border-radius:50%;background-color:#4169E1;margin-top:-40px; margin-left:100px;position: relative;'>
                            (<span id="like_loop_<?php echo $row['id_formulaires'] ?>"><?php echo $row['like_count'] ?></span>)
                    </span>
                </a>
            </div>


            <div class="col-sm-2">
                <a href="javascript:void(0)" class="btn btn-info btn-lg">
                    <span class=" glyphicon glyphicon-thumb-down" onclick="dislike_update('<?php echo $row['id_formulaires'] ?>')">
                        <iconify-icon icon="fa-regular:thumbs-down" style="color: red;margin-left:330px;margin-top:-25px;position: relative;transform:rotate(0deg);" width="36" height="36"></iconify-icon>
                        <div class="toggle" style='border:1px solid red; width: 40px;height: 40px;border-radius:50%;background-color:red;margin-left:370px;margin-top:-50px; position: relative;'> (<span id="dislike_loop_<?php echo $row['id_formulaires'] ?>"><?php echo $row['dislike_count'] ?></span> )
                    </span>
                </a>
            </div>
 
<!-- nomimage et autres -->
<div class="nom"><?php echo $row['titre']; ?></div>
<div class="sms"><?php echo $row['messages']; ?></div>
<div class="date"><?php echo "Publié le" . '' . '' . '' .  $row['date']; ?></div>

<!-- commentaire -->


<div class="commentaire"> <div class="comment">  </div>
</div>
<?php
        include('message.php'); ?>
</div>

<?php
}
}

mysqli_close($conn);
    ?>

    <script>
        function like_update(id_formulaires) {
            jQuery.ajax({
                url: 'ajax_like.php',
                type: 'post',
                data: 'type=like&id_formulaires=' + id_formulaires,
                success: function(result) {
                    var current_count = jQuery('#like_loop_' + id_formulaires).html();
                    current_count++;
                    jQuery('#like_loop_' + id_formulaires).html(current_count);
                }
            });
        }

        function dislike_update(id_formulaires) {
            jQuery.ajax({
                url: 'ajax_like.php',
                type: 'post',
                data: 'type=dislike&id_formulaires=' + id_formulaires,
                success: function(result) {
                    var current_count = jQuery('#dislike_loop_' + id_formulaires).html();
                    current_count++;
                    jQuery('#dislike_loop_' + id_formulaires).html(current_count);
                }
            });
        }
    </script>

        </body>

        </html>