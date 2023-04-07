<?php
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM formulaires WHERE id_inscription = '$user_id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0) {
	echo "Aucun formulaire à afficher.";
} else {
	while($row = mysqli_fetch_assoc($result)) {
        echo "<h3>" . $row['id_formulaires'] . "</h3>";

		echo "<h3>" . $row['fichier'] . "</h3>";
		echo "<p>" . $row['messages'] . "</p>";
	}
}
?>