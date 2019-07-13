<?php

    $categoria = $_GET['categoria'];  
    //$id = $_GET['id'];
    $pagina = $_GET['pagina'];    
    
  try 
   {
     $conexion = new PDO('mysql:host=localhost;dbname=laravellasmarias','root','');
     //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
   } catch (PDOException $e)  {
     
     echo "Error: " . $e->getMsessage();
     die();
   }

   $pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1; //caambiee yyo pagina por paginaActtual
   $postpagina =  8;
   $inicio =  ($pagina > 1) ? ($pagina * $postpagina - $postpagina) : 0;

   $productos = $conexion -> prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productos where categoria_id = $categoria LIMIT $inicio , $postpagina");
   //$productos = $conexion -> prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio , $postpagina");

   $productos -> execute();
   $productos = $productos -> fetchall();   

  //print_r($productos);
    
   if (!$productos) //caammbie yo dedeciaa producto
   {
   //	header('Location: paginacion.php');
      echo '<h2>No existen productos para la categoria</h2>';
   }

   //$productos = $productos [0];

   $totalfilas = $conexion->query('select FOUND_ROWS() as total');
   $totalfilas = $totalfilas->fetch()['total'];

   $numeropaginas = ceil($totalfilas/$postpagina);

  // echo $totalfilas;
   //echo $numeropaginas;

   //$stmt = $conexion->prepare("INSERT INTO productos (detalle) VALUES (?)");
   //$stmt->bind_param('s', $detalle);
// Establecer parámetros y ejecutar
//$detalle = "cuidado capilar";
//$stmt->execute();

//echo "Se han creado las entradas exitosamente";

   require 'paginacion.html';



?>