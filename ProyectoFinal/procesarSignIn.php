<?php

$nombreu=$_REQUEST["nombrePropietario"];
$contra=$_REQUEST["clave"];
$nombrem=$_REQUEST["nombreMascota"];
$enlace= mysqli_connect("localhost","root","mysql2017","formulario",3306);
$cadena="SELECT * FROM datos WHERE nombrePropietario='$nombreu' AND clave = '$contra' AND nombreMascota = '$nombrem'" ;
$resultado= mysqli_query($enlace, $cadena);
    if(mysqli_num_rows($resultado)){
        echo "Adentro";

      } else {
      echo "Afuera";
      }
