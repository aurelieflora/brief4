<?php
include"connect.php"; 

    $id =$_GET['id'];

    $sql = "DELETE from formulaires where id_formulaires=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "<div style='margin-top:20%;'>";
        echo "Supprimer avec success";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'publication.php'>";
        echo "<img src='img/20745.png' width='5%' style='margin-top: 10%;'>";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error."";
    }
    $conn->close();


?>