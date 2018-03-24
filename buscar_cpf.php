<?php 

include ("conn.php");

$cpf = $_GET ['cpf'];

$sql = mysqli_query($conn, "select * from tb_inscritos where cpf = " .$cpf);
$result = mysqli_fetch_array($sql);

if ($result) {
    echo "<div style='text-align:center;' role='alert'>".$result['nome']." - ".$result['cpf']." - "." confirmar"."</div>";
} else {
    echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>Nenhum registro encontrado</div>";
}

?>