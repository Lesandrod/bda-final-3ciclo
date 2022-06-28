<?PHP
session_start();

if($_SESSION["autentificado"] !="2"){
    header("Location:../index.php");
    exit();
}
?>