<?php
include_once '../db.php';

/* Codigo para insertar datos*/
if(isset($_POST['save']))
{
    $pais_proveniencia  = $MySQLiconn->real_escape_string($_POST['pais_proveniencia']);
    $producto = $MySQLiconn->real_escape_string($_POST['producto']);
    $descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
    $fecha_exportacion = $MySQLiconn->real_escape_string($_POST['fecha_exportacion']);
    $pais_receptor = $MySQLiconn->real_escape_string($_POST['pais_receptor']);

    //$SQL = $MySQLiconn->query("INSERT INTO pais (pais_proveniencia, producto, descripcion, fecha_exportacion, pais_receptor) VALUES('$pais_proveniencia','$producto','$descripcion','$fecha_exportacion','$pais_receptor')");
    $SQL = $MySQLiconn->prepare("CALL insert_pais(?,?,?,?,?)");
    $SQL->bind_param("sssss",$pais_proveniencia,$producto,$descripcion,$fecha_exportacion,$pais_receptor);
    $SQL->execute();    
    $SQL->close();

    if(!$SQL)
    {
        echo $MySQLiconn->error;
    }
}
/* Codigo para insertar datos*/
/* Codigo para eliminar datos*/
if(isset($_GET['del']))
{
    //$SQL = $MySQLiconn->query("DELETE FROM pais WHERE id=".$_GET['del']);
    $SQL = $MySQLiconn->prepare("CALL delete_pais(?)");
    $SQL->bind_param("s",$_GET['del']);
    $SQL->execute();    
    $SQL->close();
    header("Location: pais.php");
}
/* Codigo para eliminar datos*/
/* Codigo para actualizar datos*/
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM pais WHERE id
        =".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    //$SQL = $MySQLiconn->query("UPDATE pais SET pais_proveniencia='".$_POST['pais_proveniencia']."', producto='".$_POST['producto']."', descripcion='".$_POST['descripcion']."', fecha_exportacion='".$_POST['fecha_exportacion']."', pais_receptor='".$_POST['pais_receptor']."' WHERE id=".$_GET['edit']);
    $pais_proveniencia  = $MySQLiconn->real_escape_string($_POST['pais_proveniencia']);
    $producto = $MySQLiconn->real_escape_string($_POST['producto']);
    $descripcion = $MySQLiconn->real_escape_string($_POST['descripcion']);
    $fecha_exportacion = $MySQLiconn->real_escape_string($_POST['fecha_exportacion']);
    $pais_receptor = $MySQLiconn->real_escape_string($_POST['pais_receptor']);
    //inicio
    $SQL = $MySQLiconn->prepare("CALL actu_pais(?,?,?,?,?,?)");
    $SQL->bind_param("ssssss",$pais_proveniencia,$producto,$descripcion,$fecha_exportacion,$pais_receptor,$_GET['edit']);
    $SQL->execute();    
    $SQL->close();
    header("Location: pais.php");
}
/* Codigo para actualizar datos*/
if(isset($_GET['enviar']))
{
    $busqueda = $_GET['busqueda'];
    $SQL = $MySQLiconn->query("SELECT * FROM pais WHERE pais_proveniencia LIKE '%$busqueda%'");
    $getROW = $SQL->fetch_array();
}
/* Codigo busqueda de datos*/
?>