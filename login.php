

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="Styleloginphp.css"/>
	<head>
	</head>
	<body>
	<header>
	<?php
	
	$user=($_POST['user']);
	$pasw=$_POST["pasw"];
	$pasw2=$_POST['pasw2'];
	
	if ($pasw==$pasw2){
	
		//echo "<font size=60><br>"."login exitoso"."</br> </font>";
		header("Location: formulario.html"); 
} 
	
	else
	{echo "revisa tus datos algo anda mal"; } 
	
?>
</header>
	<a href="loginindex.html"> regresar </a>
	</body>


</html>