<?php
	$varNombre = $_POST['nombre'];
	$varEmail = $_POST['correo'];
	$varTelefono = $_POST['telefono'];
	$varProducto = $_POST['producto'];
	if(isset($_POST['submit']) && $varNombre != '' && $varEmail != '' && $varTelefono != '' && $varProducto != '')
	{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "From: contacto@elgon.com\r\n";
		$headers .= "Reply-to:". $email ."\r\n";
		$receptor = "web@merkategia.com";
		$asunto = "Nueva solicitud de información producto Elgon";
		$mensaje = '
			<html>
				<head>
					<title>Nueva solicitud de información producto Elgon</title>
				</head>
				<body>
					<table style="border: 0; border-collapse: collapse; width: 410px;">
						<tr>
							<td colspan="2">
								<h1>Nueva solicitud de información de producto Elgon</h1>
							</td>
						</tr>
						<tr>
							<td>Nombre</td>
							<td>'.$varNombre.'</td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td>'.$varEmail.'</td>
						</tr>
						<tr>
							<td>Teléfono</td>
							<td>'.$varTelefono.'</td>
						</tr>
						<tr>
							<td>Producto</td>
							<td>'.$varProducto.'</td>
						</tr>
					</table>
				</body>
			</html>
		';		
		
		mail($receptor,$asunto,$mensaje,$headers);
		header('Location: '.$varProducto.'/?success');
	}
	else
	{
		header('Location: '.$varProducto.'/?error');
	}
?>