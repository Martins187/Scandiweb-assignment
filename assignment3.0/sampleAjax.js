$(document).ready(function(){
  $("button").click(function(){
  
  var type = POST['type'];

  var name = fname;
  var price = fprice;
  var attribute = {};
  
  if (fweight) {
  
  var type = buttonB;
  
  var attribute.weigth = weight;
  var attribute.heigth = height;
  var attribute.length = lenght;
  
  
  } elif (height && width && length) {
  
  var type = 'Furniture';
  
  } elif (fsize) {
  
  var type = 'DVD';
  
  }
  
  
    $.post("demo_test_post.asp",
    {
     	
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});