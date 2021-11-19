<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['matricula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['grupo']) >= 1 && strlen($_POST['especialidad']) >= 1) {
	    $matricula = trim($_POST['matricula']);
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $grupo = trim($_POST['grupo']);
	    $especialidad = trim($_POST['especialidad']);


	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO alumnos(matricula, nombre, email, grupo, especialidad, fecha_reg) VALUES ('$matricula','$nombre','$email','$grupo','$especialidad','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>