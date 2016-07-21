<?php
	$varNombre = $_POST['nombre'];
	$varEmail = $_POST['correo'];
	$varTelefono = $_POST['telefono'];
	$varCiudad = $_POST['ciudadestado'];
	$varNegocio = $_POST['nombrenegocio'];
	$varComentarios = $_POST['comentarios'];
	$varUrl = $_POST['url'];
	if(isset($_POST['submit']) && $varNombre != '' && $varEmail != '' && $varTelefono != '' && $varCiudad != '' && $varNegocio != '' && $varComentarios != '')
	{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "From: contacto@elgon.com\r\n";
		$headers .= "Reply-to:". $email ."\r\n";
		$receptor = "web@merkategia.com";
		$asunto = "Nueva solicitud de más información Elgon";
		$mensaje = '
			<html>
				<head>
					<title>Nueva solicitud de más información Elgon</title>
				</head>
				<body>
					<table style="border: 0; border-collapse: collapse; width: 410px;">
						<tr>
							<td colspan="2">
								<h1>Solicitud de más información Elgon</h1>
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
							<td>ciudad / Estado</td>
							<td>'.$varCiudad.'</td>
						</tr>
						<tr>
							<td>Nombre del negocio</td>
							<td>'.$varNegocio.'</td>
						</tr>
						<tr>
							<td>Comentarios</td>
							<td>'.$varComentarios.'</td>
						</tr>
					</table>
				</body>
			</html>
		';		
		
		mail($receptor,$asunto,$mensaje,$headers);
		header('Location: '.$varUrl.'/?success');
	}
	else
	{
		header('Location: '.$varUrl.'/?error');
	}
?>