<?php
session_start();
require_once('conexao.php');
if (isset($_POST['submit'])) {

    $nome1 = $_POST ['nome1'];
    $nome2 = $_POST ['nome2'];
    $nomeusuario = $_POST ['nomeusuario'];
    $email = $_POST ['email'];
    $genero = $_POST ['genero'];
    $cpf = $_POST ['cpf'];
    $endereco = $_POST ['endereco'];
    $bairro = $_POST ['bairro'];
    $numcasa = $_POST ['numcasa'];
    $cep = $_POST ['cep'];
    $cidade = $_POST ['cidade'];

    $testaEmail = $mysqli->query("SELECT COUNT(*) FROM usuarios where email = '{$email}'");
    $linha = $testaEmail->fetch_row();
    if ($linha[0] > 0) {
        echo "<script>alert('Email já cadastrado')</script>";
        echo "<script>window.location.href='Registro.php'</script>";
    } else {
        $sql = "insert into usuarios(firstname,secondname,usuarioname,email,genero,cpf,endereco,bairro,numerocasa,cep,cidade ) 
        values ('$nome1','$nome2','$nomeusuario','$email','$genero','$cpf','$endereco','$bairro','$numcasa', '$cep','$cidade')";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            echo "<script>window.location.href='Registro.php'</script>";
            echo "<script>alert('Você foi cadastrado com sucesso')</script>";
        }
    }
}