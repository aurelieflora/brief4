<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <button class="admin" style="margin-left:80%; height:30px;"> <a style="color:white; font-size:10px; margin-top:-10px;" href="admin/register.html">Admin</a> </button>

    <script>
        // Fonction pour afficher les lettres une par une
        function afficherLettres() {
            var nom = "WELIKEFOOD";
            var i = 0;
            var intervalID = setInterval(function() {
                if (i < nom.length) {
                    document.getElementById("nom-site").innerHTML += nom.charAt(i);
                    i++;
                } else {
                    clearInterval(intervalID);
                    regrouperLettres();
                }
            }, 100);
        }

    // Fonction pour regrouper les lettres et afficher le logo
    function regrouperLettres() {
        document.getElementById("nom-site").innerHTML = "WELIKEFOOD";
        document.getElementById("nom-site").classList.add("bouger");
        document.getElementById("logo").style.display = "block";
    }
</script>
<style>
    /* Style pour les écrans jusqu'à 768px de large */
    @media (max-width: 768px) {
        body {
            font-size: 24px;
        }
        #nom-site {
            margin-top: 50px;
            margin-bottom: 25px;
            font-size: 36px;
            color: blue;
            text-align: center;
        }
        #logo {
            margin-left: auto;
            margin-right: auto;
            width: 150px;
            height: 75px;
        }
        button {
            font-size: 18px;
            padding: 8px 16px;
            margin: 5px;
            color: white;
            background-color: blue;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: navy;
        }
    }

    /* Style pour les écrans entre 768px et 992px de large */
    @media (min-width: 768px) and (max-width: 992px) {
        body {
            font-size: 32px;
        }
        #nom-site {
            margin-top: 75px;
            margin-bottom: 35px;
            font-size: 48px;
            color: blue;
            text-align: center;
        }
        #logo {
            margin-left: auto;
            margin-right: auto;
            width: 175px;
            height: 87.5px;
        }
        button {
            font-size: 20px;
            padding: 9px 18px;
            margin: 6px;
            color: white;
            background-color: blue;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: navy;
        }
    }

    /* Style pour les écrans supérieurs à 992px de large */
    @media (min-width: 992px) {
        body {
            font-size: 48px;
        }
        #nom-site {
            margin-top: 100px;
            margin-bottom: 50px;
            font-size: 72px;
            color: blue;
            text-align: center;
        }
        #logo {
        margin-left: auto;
        margin-right: auto;
        width: 250px;
        height: 125px;
    }
    #nom-site.bouger {
        animation: deplacement 2s ease-in-out infinite alternate;
    }
    @keyframes deplacement {
        from { transform: translateX(-10px); }
        to { transform: translateX(10px); }
    }
    button {
        font-size: 24px;
        padding: 10px 20px;
        margin: 7px;
        color: white;
        background-color: blue;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: navy;
    }}
</style>
</head>
<body onload="afficherLettres()">
    <div id="nom-site"></div>
    <img id="logo" src="image/LOGO WELIKE.png" alt="Logo WeLikeFood">
    <button> <a style="color:white" href="user.php">Inscription</a> </button>
    <button> <a style="color:white" href="login_user.php">Connexion</a> </button>
</body>
</html>

