
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
