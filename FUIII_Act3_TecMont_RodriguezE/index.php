<!DOCTYPE html>
<html>
<head>
	<title>Registrar Alumno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registrar Alumno</h1>
    	<input type="text" name="matricula" placeholder="Matricula">
    	<input type="text" name="nombre" placeholder="Nombre Completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="text" name="grupo" placeholder="Grupo">
    	<input type="text" name="especialidad" placeholder="Especialidad">



    	<input type="submit" name="register">
    </form>
        <?php 
        include("alumnos.php");
        ?>
</body>
</html>