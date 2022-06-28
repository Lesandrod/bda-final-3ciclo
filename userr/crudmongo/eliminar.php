<?php
session_start();
require 'conexion.php';
///$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
if (isset($_GET['id'])) {
   
    $estudiante = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    header("Location: index.php");
 
 }
?>