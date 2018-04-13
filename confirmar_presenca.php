<?php 

include ("conn.php");
include ("funcoes.php");

$cpf = $_GET['cpf'];

$sql = mysqli_query($conn, "update tb_inscritos set confirmado = '1' where cpf = '".$cpf."'");
$result = mysqli_fetch_array($sql);

if (!mysqli_error($conn)) {
    echo "confirmado";
} else {
    echo "<div class='alert alert-danger col-md-12' style='text-align:center; margin-top:5px;' role='alert'>Erro ao confirmar inscrição, tente novamente!</div>";
}

?>