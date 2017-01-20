(function($){
  $(document).ready(function(){
$("#submit").click(function(){
  var dataString = {};
  dataString.name = $("#nombres").val();
  dataString.lastname = $('#apellidos').val();
  dataString.rut = $('#rut').val();
  dataString.email = $('#email').val();
// Returns successful data submission message when the entered information is stored in database.

if(dataString.name==''|| dataString.email==''||dataString.lastname == '' || dataString.rut == '')
{
alert("Revisa tu formularios, al parecer no esta completo");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "../modulos/inscripcion.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
})(jQuery)
