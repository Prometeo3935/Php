<?php

try 
   {
     $conexion = new PDO('mysql:host=localhost;dbname=laravellasmarias','root','');
     //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
   } catch (PDOException $e)  {
     
     echo "Error: " . $e->getMsessage();
     die();
   }

   $categorias = $conexion -> prepare( 'SELECT  * FROM categorias');
   //$productos = $conexion -> prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio , $postpagina");

   $categorias -> execute();
   $categorias = $categorias -> fetchall();

   $indice = $categoria - 1;
   $url_imagen = $categorias[$indice]["imagen"];
   $titulo = $categorias[$indice]["descripcion"];
   
   //print_r($categorias[$categoria-1]["imagen"]);
  // echo 'el parametro categoria es:: '.$categoria;
   require 'header.html';
?>