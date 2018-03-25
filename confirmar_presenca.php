<?php 

include ("conn.php");

$cpf = $_GET['cpf'];

$sql_inscrito = mysqli_query ($conn, "select * from tb_inscritos where cpf = '".$cpf."' and confirmado = '1'");
$result_inscrito = mysqli_fetch_array ($sql_inscrito);

if ($result_inscrito) {
    echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>Inscrição já confirmada!</div>";
} else {

    $sql = mysqli_query($conn, "update tb_inscritos set confirmado = '1' where cpf = '".$cpf."'");
    $result = mysqli_fetch_array($sql);

    if (!mysqli_error($conn)) {
        echo "<div class='alert alert-success' style='text-align:center;' role='alert'>Inscrição confirmada</div>";
    } else {
        echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>Erro: ".mysqli_error($conn)."</div>";
    }
}

?>