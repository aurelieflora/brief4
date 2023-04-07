<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./build/css/demo.css">
 <link rel="stylesheet" href="./build/css/intlTelInput.css">

 <title>dash</title>

<style>





body {
font-family: Arial, Helvetica, sans-serif;
background-color: white;
}

* {
box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: beige;
  width: 600px;
  margin-left: 25%;
  height: 500px;
  border-radius: 20px;
  box-shadow: 15px 15px 15px 0px;
}

label {
    color:rgb(12, 64, 85) ;
    color: black; 
}
/* Full-width input fields */
input[type=text], input[type=password], select {
  width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: dargreen;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  margin-left: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.publier{
  position: relative; 
  display: flex;
  width: 150px;
}
</style>
</head>
<body>

<form action="upload1.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1 style="color: black; text-align:center">Connexion</h1>
    <p style="color: black; text-align:center">Veuillez vous connecter à votre compte.</p>
    <hr>
    
    
 
    <label for="email"    style="margin-left:30%;"><b>Email</b></label>
    <input type="text" placeholder="Entrer votre Email" name="email" id="email" required style=" height: 12px; width:235px"> <br>


    <label for="psw" style="margin-left:30%;"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer votre mot de passe" name="motDepasse" id="motdepasse" required style="width: 190px;"/>
    <br>
    <button type="submit" class="registerbtn" id="enregistrer" value="connexion" name="connexion">connexion</button>

   <hr>
   <p>
 <a href="#" style="margin-left:20%;">informations de connexion oubliées</a>?  <a href="#">Inscription sur facebook</a>.</p>
</p>
    
</div>
</form>

</body>  
</html>
