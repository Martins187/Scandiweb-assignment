$(document).ready(function(){
  //When page is reloaded, all the parameter input fields and additional information windows are hidden
    $("#windowD").hide();
    $("#windowB").hide();
    $("#windowF").hide();
  
    //Depending on which button is clicked, related window with the information about the item will be shown.
    //Other two windows will be closed.
    //The dropdoen menu button will display the name of the current item chosen.
    //After changing the item type, information in the previous fields will be deleted in order to prevent the upload of unrelated data.
    
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
 