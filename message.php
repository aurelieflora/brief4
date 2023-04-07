<?php 
include('connexionformu.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styl.css">

<style>
#login-modal{
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-color: rgba(0,0,0,0.6);
    z-index: 100;
    display: none;
    justify-content: center;
    align-items: center;
}
.modal{
    background: #e6ecf0;
    padding: 10px 0px 20px 0;
    border-radius: 5px;
    width: 450px;
    text-align: center;
}

.top-form{
display: flex;
justify-content: flex-end;
}

.top-form .fermé{
    cursor: pointer;
    padding: 0 20px;
    font-size: 20px;
}

.login-form h2{
    letter-spacing: 2px;
    margin-top: 10px;
    margin-bottom: 30px;
}

.login-form form input{
    width: 75%;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
}

.login-form button{
    padding: 12px 0px;
    width: 75%;
    background: blueviolet;
    border: 0;
    border-radius: 3px;
    color: white;
    margin: 10px auto;
    cursor: pointer;;
}
.message{
    border-style: solid;
    width: 500px;
    height: 100px;
    border-radius: 30px;
    border-color: darkorchid;
    position: relative;
    float: left;
    margin-top: -10px;
    left: 450px;
    left: 80px;
    z-index: 1;    
   
}
.env{
       width: 60px;
       height: 50px; 
       left: -130px;
       position: relative;
      
    }
    label{
        width: 300px;
       height: 100px;
    }
</style>


</head>
<body>
    <button id= "login-show" class="message" value="un">
        <img src="image/stock-vector-blue-speech-bubble-sign-isolated.webp" class="env"alt=""> 
       <div value="deux" style="margin-top:-40px; position: relative;">  Commentaire</div>
    </button>

<div id="login-modal" value="trois">
    <div class="modal" value="quatre">
        <div class="top-form" value="cinq">
            <div class="fermé" id="close-modal" value="six">
        &#10006;

            </div>
        </div>
        <div class="login-form" value="sept">
            <h2>Ecrivez un commentaire</h2>
            <form action="upload_comm.php" method="POST" name="myForm" onsubmit="return validate();" > 

            <label for="commentaire"></label>
<textarea id="commentaire" value="commentaire" name="commentaire" placeholder="Bonjour, ...." required></textarea> <br><br><br><br>       
<button type="submit" value="valider" class="submit-btn" id="valider" name="valider">valider</button>
            </form>
        </div>
    </div>
</div>




<script>
    $(document).ready(function (){
        $('#login-show').click(function (){
            $('#login-modal').fadeIn();
        });

        $('#close-modal').click(function (){
            $('#login-modal').fadeOut();
        });
    });
</script>


<!-- <script>
  $(document).ready(function() {
    $(".envoyez").on("change", function(){
var value = $(this).val();
// alert(value);
$.ajax({
  url: "sms.php",
  type: "POST",
  data:'request='+ value,
  beforeSend: function(){ -->
   <!-- $(".gallery").html("<nav>working...</nav>"); -->

<!-- }, success:function(data){
$(".mms").html(data);
  } 

});
});
});





</script> -->


<script>

    let myForm = document.getElementById('myForm');
    myForm.addEventListener("submit", function(e){
e.preventDefault();
    });
</script>

</body>
</html>