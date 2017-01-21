(function($){
  $(document).ready(function(){
$("#submit").click(function(){
  var dataString = {};
  dataString.nombres = $("#nombres").val();
  dataString.apellidos = $('#apellidos').val();
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
url: "modulos/inscripcion.php",
data: dataString,
cache: false,
success: function(result){
if(result.status){
    $('#core-form').remove();
    $('#refactor').append('<p>Tus datos estan siendo procesados. Ahora comparte esta convocatoria con los tuyos.</p>')
  }
}
});
}
return false;
});
});
})(jQuery)
