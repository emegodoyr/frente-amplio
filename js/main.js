$(document).ready(function() {

$('#rut').Rut({
  on_error: function(){
//  $("#rut_valido").css("border-bottom-color", "#ff000");
//document.getElementById("rut").style.borderColor = "red";
  alert('Rut incorrecto');
}
});

$('.popup').click(function(event) {
  var width  = 575,
      height = 400,
      left   = ($(window).width()  - width)  / 2,
      top    = ($(window).height() - height) / 2,
      url    = this.href,
      opts   = 'status=1' +
               ',width='  + width  +
               ',height=' + height +
               ',top='    + top    +
               ',left='   + left;

  window.open(url, 'twitter', opts);

  return false;
});
});
