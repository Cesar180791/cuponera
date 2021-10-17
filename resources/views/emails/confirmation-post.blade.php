<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmacion de Compra</title>
</head>
<body>
	<h2>Compra Realizada con Exito</h2><br>
	<h2>Hola: {{ $Venta['nombreUsuario']}}</h2><br>
	<h2>Tu Compra por el monto de: ${{ $Venta['total']}} ha sido realizada con exito</h2><br>
	<h2>Numero de factura: {{ $Venta['sale_id']}}</h2><br>

</body>
</html>


