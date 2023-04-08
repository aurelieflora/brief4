<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: connexionn.php");
    exit();
}
$email1 = $_SESSION['email'];

include('connect.php');
$email = mysqli_real_escape_string($conn, $_SESSION['email']);
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

<style>
section {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px #ccc;
    margin: 50px auto;
    max-width: 600px;
  }


</style>


</head>
<body>
    <div class="container" style="width: 700px; margin:auto;">
        <h1 style="text-align:center;font-weight:600;text-decoration:underline;color:#0A8FD5;">Mon Profil</h1>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class='row'>

<!-- afficher image -->

<div class="col-lg-6">
    <section >
               <section> <div class='row'>
                    <div class='col-lg-6'>
                   
                        <p style="text-align:left">
                        <form method="post" action="deconnexion_user.php">
    <button type="submit" name="logout" class="danger"style="margin-top: 210px; margin-left: 20px; position: absolute; display:flex;">Déconnexion</button>
</form>
                       <img style=" border-radius:100%; width: 100px;height: 100px; margin-top:-5px; margin-left:10px;" src="reserve_image/<?=$user['profile_picture']?>" alt="">
                    <br> <br> <br> <br> <br>
                    </div><div class='col-lg-8'>
                            <button styles=" border_radius:10px;" type="submit" class="btn btn-primary mt-3"><a class="btn btn-primary mt-3" href="modifier_photo_form.php?id=<?php echo $user['id_users']; ?>">Modifier ma photo</a>
</button>
                        </div> <br><br> <br>
                    
                </div>
                </section>
<!-- affiche username -->
<section >
                    <div class='col-lg-6'>
                        <p style="text-align:left">Nom d'utilisateur: &nbsp;&nbsp;&nbsp; <?php echo $user['nom_utilisateur']; ?></p>
                    </div>
                <!-- </div> -->
                <div class='row'>
                    <div class='col-lg-6'>
                        <p style="text-align:left">Email: &nbsp;&nbsp;&nbsp; <?php echo $user['email']; ?></p>
                    </div>
                    
                </div>
            
                
                <button styles=" border_radius:10px;" type="submit" class="btn btn-primary mt-3">  <a class="btn btn-primary mt-3" href="modifier_profil.php?id=<?php echo $user['id_users']; ?>">Modifier mes informations</a></button>
                <div class='row'>
                        
                    </div>
                </form>
                </section>
            
            </section>
            
            </div>
            
                    
        </div>
            </div>
            
    </div>
</body>
</html>