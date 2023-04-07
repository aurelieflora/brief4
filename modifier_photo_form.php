<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    
    form {
        margin: 50px auto;
        max-width: 500px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
    }
    
    h1 {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .custom-file-label {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    input[type="file"] {
        height: calc(1.5em + .75rem + 2px);
    }
    
    .btn-user {
        width: 100%;
    }
    
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    
    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }



</style>

</head>
<body>



<form enctype="multipart/form-data" action="modifier_photo.php" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="avatar">Changer ma photo de profil:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="avatar" name="profile_picture">
                    <label class="custom-file-label" for="avatar">Choisir un fichier</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <input type="submit" class="btn btn-primary btn-user" name="modifier" value="Modifier">
        </div>
    </div>
</form> 


    
</body>
</html>