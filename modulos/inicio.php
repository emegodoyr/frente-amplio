<div class="row">
  <div class="col-md-8">
    <h2>Titular de la convocatoria</h2>
<span class="textoConvocatoria">
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id metus risus. Sed sed egestas velit, nec semper eros. Integer et rhoncus felis, vitae commodo sem. Donec placerat elit non magna hendrerit efficitur. Nulla venenatis maximus consequat. Integer tincidunt libero non dolor accumsan, quis volutpat lectus consequat. Curabitur ut condimentum enim.
</p>
<p>
  Vivamus non sagittis nunc. Integer elit purus, gravida tempus lorem eget, vehicula iaculis felis. Etiam bibendum lacus ac massa viverra, et faucibus neque semper. Integer nibh justo, ullamcorper ut pellentesque in, finibus convallis lacus. Phasellus eget pellentesque odio, quis auctor est. Nulla at tellus laoreet, placerat nisl vitae, gravida diam. Nunc quis suscipit nunc, nec ultrices velit. Aliquam in magna eros. Integer venenatis magna eleifend dui sagittis, bibendum scelerisque metus ornare.
</p>

<p>
  Maecenas orci lectus, auctor nec nisi ac, sollicitudin pulvinar tellus. Suspendisse varius blandit posuere. Nulla lacinia eu lectus at tempor. Aliquam erat volutpat. Nunc at velit eget velit aliquet elementum. Maecenas mi tortor, pharetra at vehicula nec, pharetra at magna. Duis quis erat ut enim dapibus dignissim. Aliquam lorem nisi, pretium ac rhoncus nec, viverra vel ex. Morbi ullamcorper aliquam lacus sed semper. Nam laoreet sem in faucibus tempor. Etiam scelerisque blandit molestie. Etiam venenatis libero id sem tincidunt, a hendrerit nibh ultricies. Pellentesque tortor orci, ultrices vel aliquet nec, scelerisque at massa.
</p>
<p>
  Nulla sit amet dignissim lectus. Cras velit nibh, faucibus auctor risus at, tincidunt cursus dolor. Aenean nisl nisl, pretium eget mi lobortis, feugiat auctor turpis. Integer posuere nisi cursus mi efficitur, et suscipit mi dapibus. Duis ante purus, bibendum et eleifend vel, ullamcorper vel velit. Donec ultrices malesuada nisi vitae sollicitudin. Sed ex dui, aliquam quis diam id, maximus cursus lacus. Proin nec feugiat nunc. Fusce nibh ante, tempor non semper nec, mattis nec odio. Pellentesque sed nisl risus. Quisque eget porttitor turpis, ac iaculis libero. Proin vulputate nibh sed mi viverra eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer ac semper enim, in congue metus. In hac habitasse platea dictumst.
</p>

  </span>
  </div>
  <div class="col-md-4">
  <h4 class="cuantasFirmas">Llevamos <?php echo $firmas; ?> firmas</h4>


<div class="well">
<h3>Súmate a esta convocatoria</h3>

<form action="?#gracias" method="post">
<input type="hidden" name="enviar" value="1">
<div class="form-group">
<label for="nombres">Nombres:</label>
<input type="text" class="form-control" id="nombres" name="nombres">
</div>
<div class="form-group">
<label for="apellidos">Apellidos:</label>
<input type="text" class="form-control" id="apellidos" name="apellidos">
</div>
<div class="form-group">
<label for="rut">Rut:</label>
<input type="text" class="form-control" id="rut" name="rut">
</div>
<div class="form-group">
<label for="email">Correo electrónico:</label>
<input type="email" class="form-control" id="email" name="email">
</div>

<div class="checkbox">
<label><input type="checkbox" checked name="recibirMails" value="si"> Estoy de acuerdo en recibir información sobre el Frente Amplio.</label>
</div>
<button type="submit" class="btn btn-success btn-block">Firmar la convocatoria</button>
</form>

</div>
<h4>
<small><?php echo $aclaracion_datos; ?></small>
</h4>

 </div>
</div>
