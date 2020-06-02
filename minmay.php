<!DOCTYPE html>
<html>
<head>
<title>Convertir a mayusculas y minusculas</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready( function () {
 $(".UpperCase").on("keypress", function () {
  $input=$(this);
  setTimeout(function () {
   $input.val($input.val().toUpperCase());
  },50);
 })
})
</script>
</head>
<body>

<form>
 <h1>Datos del Cliente</h1>
 <pre>
  Codigo    <input name="codigo">
  Nombre    <input name="nombre" class="UpperCase">
  Dirección <input name="direccion">
  Teléfono  <input name="telefono">
  Ciudad     <input name="ciudad" class="UpperCase">
 </pre>
<form>
</body>
</html>