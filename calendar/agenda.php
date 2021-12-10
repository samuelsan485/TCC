<?php
require_once('../login/conexao.php');
session_start();
$dia = $_POST['diaSem'];
if (isset($_POST['codHoraH'])){
    $hora = $_POST['codHoraH'];
}else{
    $hora = $_POST['codHoraP'];
}
$sql = "insert into agenda(data_agenda, hora) values ('$dia','$hora')";
    $query = $mysqli->query($sql)or die($mysqli->error);
    if(!$query){
        echo "<script>alert('erro!')</script>";
    }
    else{
        echo "<script>window.location.href='calendario.php'</script>";
    }
?>