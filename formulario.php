<!doctype html>
<head>
	<link rel="stylesheet" type="text/css" href="styleform.css">
</head>
<body>
<div class="echo">
<?php

	$nombre=($_POST['nombre']);
	$apellido=($_POST['apellido']);
	$nacimiento=($_POST['fec_nac']);
	$dociden=($_POST['doc_id']);
	$pag_web=($_POST["pag_web"]);
	$email=($_POST['e_mail']);
	//$edad=$nacimiento;
	$time= time();

?>
<div id="caja">	
<table border="2">

<?php
	echo"&nbsp"."hola"."&nbsp".$nombre."&nbsp".$apellido."&nbsp";
	echo"&nbsp"."bienvenido a continuacion mostraremos tus datos y tu revisaras que esten correctos"."&nbsp"."</br>";
	echo"&nbsp"."bueno empezemos"."&nbsp"."</br>";
	?>	<tr>
		<td><?php echo "&nbsp". "nombre completo:"?></td>
		<td><?php echo "&nbsp".$nombre."&nbsp".$apellido."&nbsp"."</br>"; ?></td>
		</tr>
		<tr>
		<td> <?php echo"&nbsp"."numero de identificacion:"?></td>
		<td><?php echo "&nbsp".$dociden."&nbsp"."</br>";?></td>
		</tr>
		<tr>
		<td><?php echo"&nbsp". "fecha de nacimiento"?></td>
		<td><?php echo "&nbsp".$nacimiento."&nbsp"."</br>";?></td>
		<tr>
		<td><?php echo"&nbsp"."tu edad es:"?></td>
		<td><?php echo"&nbsp";echo date ("Y;")-$nacimiento."</br>";?></td>
		</tr>
		<tr>
		<td><?php echo"&nbsp"."tu e_mail es:"?></td>
		<td><?php echo"&nbsp";$email."</br>";?></td>
		</tr>
		<tr>
		<td><?php echo"&nbsp"."tu pagina web es:"?></td>
		<td><?php echo"&nbsp";$pag_web."</br>";?></td>
		</tr>
		<table>
		<div class="php">
		 <?php echo"&nbsp"."gracias por la visita"."</br>"?>
		 <?php echo"&nbsp"."como todo esta correcto vuelve al"?><a href="index.html"> inicio </a></br>
		</div>
</div>		
	</br><a href="formulario.html" >regresar al formulario</a>
	</div>
</body>
</html>