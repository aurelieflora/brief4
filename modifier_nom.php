
<?php
  session_start();


  if(!$_SESSION['email']){
    header('location:connexionn.php');
  }
$email1 = $_SESSION['email'];
include('connect.php');


//--------------- If user Sign Up-------------------------
if(isset($_POST['modify'])){
    $nom = addslashes($_POST ['nom_utilisateur']);
    $email = addslashes($_POST ['email']);
    $password = addslashes($_POST ['mot_de_passe']);
    // $tel = $_POST ['tel_'];


    $sql ="UPDATE users SET nom_utilisateur = '$nom', email = '$email', mot_de_passe = '$password' WHERE email= '$email1'";


if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Modification effectuée avec success.";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'connexionn.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";

    }else{if(isset($_POST['modify'])){
        $nom = addslashes($_POST['nom_utilisateur']);
        $nouvel_email = addslashes($_POST['email']);
        $password = addslashes($_POST['mot_de_passe']);
    
        $sql = "UPDATE users SET nom_utilisateur = '$nom', email = '$nouvel_email', mot_de_passe = '$password' WHERE email= '$email'";
    
        if ($conn->query($sql) === TRUE) {
            echo "<center><h2><b><font color = 'green'>";
            echo "Modification effectuée avec succès.";
            echo "</b></h2>";
            echo "<br>";
            echo "<br>";
            echo "<font color = 'green'><b>";
            echo "<a href = 'connexionn.php'>";
            echo "Retour";
            echo "</a>";
            echo "</b></font>";
            echo "</center>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>