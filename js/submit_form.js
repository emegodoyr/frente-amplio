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
						$('#refactor .message').prepend('<div class="alert alert-success alert-dismissible" role="alert">'
												+'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
												+'<span aria-hidden="true">&times;</span>'
												+'</button>'
												+'Tus datos estan siendo procesados. Ahora comparte esta convocatoria con los tuyos.'
												+'</div>');
						$('#core-form')[0].reset();
						$('.alert').fadeOut(10000,'linear');
					},
					error: function(result){
						$('#refactor .message').prepend('<div class="alert alert-warning alert-dismissible" role="alert">'
												+'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
												+'<span aria-hidden="true">&times;</span>'
												+'</button>'
												+'Tus datos no se han podido enviar, porfavor intentalo denuevo.'
												+'</div>');
						//$('#core-form')[0].reset();
						$('.alert').fadeOut(10000,'linear');
					}
				});
			}
			return false;
		});
	});
})(jQuery)
