
<?php
   session_start();


   if(!$_SESSION['email']){
     header('location:connexionn.php');
   }
 $email1 = $_SESSION['email'];
 include('connect.php');


//--------------- If user Sign Up-------------------------
if(isset($_POST['modifier'])){

    $img_name= $_FILES['profile_picture']['name'];
    $img_size= $_FILES['profile_picture']['size'];
    $tmp_name= $_FILES['profile_picture']['tmp_name'];
    $error= $_FILES['profile_picture']['error'];

    if ($error === 0) {
      if ($img_size === 60000) {
         echo "Désolé, ton fichier est trop lourd";

      }
      else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array('jpg', 'jpeg','pjpeg', 'pjp', 'png', 'webp' );
          if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = "reserve_image/".$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);

            // $sql = "INSERT INTO publication (tittre, pubimg, typePub, pubcorps, avatar)
            //  VALUES ('$titre', '$new_img_name', '$type', '$message', '$new_img_name')";
    }}}


    $sql ="UPDATE users SET profile_picture = '$new_img_name' WHERE email= '$email1'";


if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Modification de votre avatar effectuée avec success.";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'profil.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";

    }else{
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
?>