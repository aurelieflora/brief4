<php?
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="small_screens.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="card-slider.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style type="text/css">
    
    @media screen and (max-width: 100%) {
  /* styles for screens up to 768 pixels wide */
}

@media screen and (max-width: 100%) {
  /* styles for screens up to 600 pixels wide */
}
@media only screen and (max-width: 600px) {
  /* styles pour les petits écrans */
}



body {  
  max-width: 100%;
      margin: 0;
      font-family: 'Roboto', Helvetica, Sans-Serif;
      font-size: 13px;
      overflow-x: hidden;
    }

    /* global styles */
    body {
      margin: 0;
      font-family: 'Roboto', Helvetica, Sans-Serif;
      font-size: 13px;
    }
    /* header styles */
    .header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background-color: #fff;
}

.logo img {
  max-width: 100%;
  height: auto;
}

.search {
  flex: 1;
  margin-left: 20px;
}
.search input[type="search"] {
  width:100%;
  box-sizing: border-box;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

  
div.bloc_principale {
   height:100vh;
}


    #commentaire {
	
	border-style: solid;
	border-color: lightgray;
	border: solid 1px;
	height: 30px;
	width: 130px;
	text-align: right;
	float: right;
	  background: #f2f2f2;
    border: 1px solid #999;
    bottom: 0;
    color: #36b;
    cursor: pointer;
    display: block;
    height: 28px;
    line-height: 28px;
    min-width: 110px;
    padding: 0 5px;
    position: fixed;
    right: 20px;
    text-align: center;
    z-index: 4;
    font-family:'Roboto',Helvetica,Sans-Serif;
    font-size: 13px;
  }


  nav{
   width: 100%; 
   margin: 0 auto;
   position:sticky;
  margin-top:-35px;
   margin-left: 890px;
  }

  nav ul {
   list-style-type: none;
  }
  nav ul li{
float:left;
width: 25px; 
text-align: center;
 }
 nav ul::after{
    content:"";
    display:table;
    clear:both;
 }
 nav a{
    display: block;
    text-decoration:none;
    color:black;
    border-bottom:2px solid transparent;
 }
 nav a:hover{
    color:orange;
    border-bottom:2px solid gold;
 }
 .sous{
    display: none;
    box-shadow:0px 1px 2px #CCC;
    background-color: white;
 }
 nav > ul li:hover .sous{
    display:block;
 }
 .sous li{
float:none;
width:100%;
text-align: left;
 }
 .sous a{
padding:5px;
border-bottom:none;
 }
 .sous a{
border-bottom:none;
background-color: RGBa(200,200,200,0.1);
 }

 .déroulant a::after{
content:"▼";
font-size:15px;
 }
.sous{
    /* display:none; */
     box-shadow: 0px 1px 2px #CCC;
    background-color: white;
    position: absolute;
    width:12%;
    height: 15px;
    z-index:1000;
    margin-left: -50px;
}
nav ul li{
    width: 20px;
    text-align: center;
}

    </style>

    <div class="haut">
    <div class="logo" style="margin-left: -60px;"><img src="image/LOGO WELIKE.png" alt="logo" style="width:300px; height:180px">


            <div class="recherche" style="margin-left:240px;">

            <input type="search" style="margin-left:3px; margin-top:3px; width:510px; height:45px;border-radius:50px 0px 0px 50px; border: none; outline-style:none;">

                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="width:50px; height:31px; margin-left:40px; margin-top:7px; color:rgb(31, 142, 239); position:absolute">
                    <path fill="currentColor" d="M17.3 11c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.49 6-3.31 6-6.72m-8.2-6.1c0-.66.54-1.2 1.2-1.2c.66 0 1.2.54 1.2 1.2l-.01 6.2c0 .66-.53 1.2-1.19 1.2c-.66 0-1.2-.54-1.2-1.2M12 14a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3Z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" style="width:50px; height:32px; margin-left:83px; margin-top:10px; color:rgb(31, 142, 239); position:absolute;">
                    <path fill="currentColor" d="M3 6.25A3.25 3.25 0 0 1 6.25 3h1.346a.75.75 0 1 1 0 1.5H6.25A1.75 1.75 0 0 0 4.5 6.25v1.346a.75.75 0 1 1-1.5 0V6.25Zm8.654-2.5a.75.75 0 0 1 .75-.75h1.346A3.25 3.25 0 0 1 17 6.25v1.346a.75.75 0 0 1-1.5 0V6.25a1.75 1.75 0 0 0-1.75-1.75h-1.346a.75.75 0 0 1-.75-.75ZM3.75 11.654a.75.75 0 0 1 .75.75v1.346c0 .966.784 1.75 1.75 1.75h1.346a.75.75 0 0 1 0 1.5H6.25A3.25 3.25 0 0 1 3 13.75v-1.346a.75.75 0 0 1 .75-.75Zm12.5 0a.75.75 0 0 1 .75.75v1.346A3.25 3.25 0 0 1 13.75 17h-1.346a.75.75 0 0 1 0-1.5h1.346a1.75 1.75 0 0 0 1.75-1.75v-1.346a.75.75 0 0 1 .75-.75ZM10 11a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm-4 1V9a1 1 0 0 1 1-1h1l.703-1.055a1 1 0 0 1 .832-.445h.93a1 1 0 0 1 .832.445L12 8h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1Zm6-2a2 2 0 1 0-4 0a2 2 0 0 0 4 0Z" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50" style="width:50px; height:33px; margin-left:130px; margin-top:10px; color:rgb(22, 135, 233); position:absolute; size:2px">
                    >
                    <path fill="currentColor" d="M23 36c-7.2 0-13-5.8-13-13s5.8-13 13-13s13 5.8 13 13s-5.8 13-13 13zm0-24c-6.1 0-11 4.9-11 11s4.9 11 11 11s11-4.9 11-11s-4.9-11-11-11z" />
                    <path fill="currentColor" d="m32.682 31.267l8.98 8.98l-1.414 1.414l-8.98-8.98z" />
                </svg>
                
            <div class="conn" style="width:110px ; height:30px; border-style:solid; margin-left:840px; margin-top:-45px; background-color:rgb(239, 239, 246); border-color:rgb(239, 239, 246);">
            <p style="font-size:15px; font-family:Arial; margin-top:5px; margin-left:10px;">Connexion</p>
            </div>
            
        </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="width:35px; height:35px; margin-left:1000px; top:40px; color:rgb(81, 91, 100); position:absolute; size:2px">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                
<div class="ecriture" style="margin-top: -80px; margin-left: 255px; position: absolute;"> 
<a href="#?page=1" class="I">TOUT </a> 
<a href="#?page=2" class="I" style="margin-left: 15px; ">IMAGES</a>
<a href="#?page=3" class="I" style="margin-left: 15px; "> VIDÉOS </a> 
<a href="#?page=4" class="I" style="margin-left: 15px; ">CARTES</a> 
<a href="#?page=5" class="I" style="margin-left: 15px; "> ACTUALITÉS</a> 
<a href="index.php?page=6" class="I" style="margin-left: 15px; "> PUBLICATION </a>
<div class="adulte">
<div class="adulte" style="margin-left: 840px; margin-top:-30px;"> Filtre adulte:</div>


<nav>
  <ul>
    <form id="myForm" action="fetch.php" method="POST">
      <li class="deroulan" value="deroulant" id="deroul">
        <img src="image/fle.png" alt="fleche"  style=" z-index:1; margin-top:-12px; position:absolute; margin-left:42px; width:10px; height:10px;"> 
        <select class="sous" id="sos" name="request">
          <option value="restaurant">restaurant</option>
          <option value="recette">recette</option>
          <option value="retour d’expérience">retour d'expérience</option>
          <option value="conseil">conseil</option>
        </select>
        <button type="submit" name="submit" value="submit">Modéré</button>
      </li>
    </form>
  </ul>
</nav>
<script>
$(document).ready(function() {
  $('#myForm').submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: 'fetch.php',
      type: 'POST',
      data: formData,
      success: function(data) {
        $('#accueil').hide();
        $('#categorie').html(data).show();
        $('.load-wrap').hide();
      },
      error: function() {
        alert('Une erreur est survenue.');
      }
    });
  });
});
</script>







<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
 $(document).ready(function() {
  $(".sous").on("change", function(){
    var value = $(this).val();
    $.ajax({
      url: "fetch.php",
      type: "POST",
      data: $('#myForm').serialize(),
      beforeSend: function(){
        // $(".gallery").html("<nav>working...</nav>");
      },
      success:function(data){
        $("#accueil").hide();
        $("#categorie").html(data).show();
      } 
    });
  });
});
</script> -->







<div class="filtre" style="margin-left: 1010px; margin-top:-35px; position:absolute;">Filtre</div>

        

    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" style="width:30px; height:20px; margin-left:1055px; margin-top:-40px;color:rgb(117, 121, 125); position:absolute; size:2px">
                            <path fill="currentColor" fill-rule="evenodd" d="M15 2v1.67l-5 4.759V14H6V8.429l-5-4.76V2h14zM7 8v5h2V8l5-4.76V3H2v.24L7 8z" clip-rule="evenodd" />
                        </svg>
                </div>
            </div>
            
        </div>
        <hr style="width:100%; margin-top:-44px;">
        </div>
        </head>

<body>
        <?php 
if(isset($_GET['page'])){
  @$page= $_GET['page'];
}if(@$page == 1){
    include('#.php');
  }
 elseif(@$page==2){
  include('#.php');
}elseif (@$page==3){
  include('#.php');
  }
  elseif (@$page==4){
    include('#.php');
  }
  elseif (@$page==5){
    include('#.php');
  }
  elseif (@$page==6){
    include('formulaire.php');
  }else{
      }  
?>
    
      <?php include('caroussel.php');?>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 5,
          spaceBetween: 3,
          slidesPerGroup: 10,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
        $(".voir").slice(0,10).show();
      $(".voir").on("click", function(){}).show();

      </script>


</body>
</html>

