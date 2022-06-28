<?php
include_once 'db.php';

/* Codigo para insertar datos*/
if(isset($_POST['save']))
{
    $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
    $contra = $MySQLiconn->real_escape_string($_POST['contra']);

    //conusulta por procedimiento almacenado
    $SQL = $MySQLiconn->prepare("CALL insert_user(?,?)");
    $SQL->bind_param("ss",$usuario,$contra);
    $SQL->execute();    
    $SQL->close();
    //error 
    if(!$SQL)
    {
        echo $MySQLiconn->error;
    }
    header("Location: index.php");
}

/* Codigo para eliminar datos*/
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("CALL delete_user(?)");
    $SQL->bind_param("s",$_GET['del']);
    $SQL->execute();    
    $SQL->close();
    header("Location: listado.php");
}
/* Codigo para eliminar datos*/
/* Codigo para actualizar datos*/
if(isset($_GET['edit']))
{
    
    $SQL = $MySQLiconn->query("SELECT * FROM usuario WHERE id =".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{   
    $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
    $contra = $MySQLiconn->real_escape_string($_POST['contra']);
    $id_cargo = $MySQLiconn->real_escape_string($_POST['id_cargo']);

    $SQL = $MySQLiconn->prepare("CALL actu_datos(?,?,?,?)");
    $SQL->bind_param("ssss",$usuario,$contra,$id_cargo,$_GET['edit']);
    $SQL->execute();    
    $SQL->close();
    header("Location: listado.php");
}
/* Codigo para actualizar datos*/
?>