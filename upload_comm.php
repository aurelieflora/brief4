<?php
include('connexionformu.php');

if (isset($_POST["valider"])) {
$commentaire = addslashes($_POST["commentaire"]);
$sql = ("INSERT INTO  `formulaire` (commentaire) 
VALUES('$commentaire')");

if (mysqli_query($conn, $sql)) {
header('location:fond_image.php');
} else {
echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
