<?php

$enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'formulario', 3306);
$cadena="INSERT INTO `formulario`.`registro`
(`nombreMascota`,
`edadMascota`,
`nombrePropietario`,
`telefonoFijo`,
`telefonoCelular`,
`direccion`,
`email`,
`numero de identificacion`,
`estrato`,
`clave`,
`confirmacion`)
VALUES
('".$_REQUEST['nombreMascota']."','".$_REQUEST['edadMascota']."','".$_REQUEST['nombrePropietario']."','".$_REQUEST['telefonoFijo']."','".$_REQUEST['telefonoCelular']."','".$_REQUEST['direccion']."','".$_REQUEST['email']."','".$_REQUEST['NumeroDeIdentificacion']."','".$_REQUEST['estrato']."',".$_REQUEST['clave'].",".$_REQUEST['confirmacion'].")";
mysqli_query($enlace, $cadena);