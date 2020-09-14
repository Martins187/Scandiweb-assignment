<script>
$(document).ready(function(){
    $("#windowD").hide();
    $("#windowB").hide();
    $("#windowF").hide();
  
  $("#buttonD").click(function(){
    $("#windowD").show();
    $("#windowB").hide();
    $("#windowF").hide();
    $("#dropdownMenuButton").html("DVD");
    document.getElementById('product_form').reset();
    
  })
  $("#buttonB").click(function(){
    $("#windowB").show();
    $("#windowD").hide();
    $("#windowF").hide();
    $("#dropdownMenuButton").html("BOOK");
    document.getElementById('product_form').reset();
  })
  $("#buttonF").click(function(){
    $("#windowF").show();
    $("#windowB").hide();
    $("#windowD").hide();
    $("#dropdownMenuButton").html("FURNITURE");
    document.getElementById('product_form').reset();
  })

  
 })
 </script>