<?php
include('connexionformu.php');
$type=$_POST['type'];
$id=$_POST['id_formulaires'];
if($type=='like'){
    $sql="update formulaires set like_count=like_count+1 where id_formulaires=$id";
}else{
    $sql="update formulaires set dislike_count=dislike_count+1 where id_formulaires=$id";
}
 $result = mysqli_query($conn, $sql);
