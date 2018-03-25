<?php 

include ("conn.php");

$nome = $_GET ['nome'];

$sql = mysqli_query($conn, "select * from tb_inscritos where nome like '%".$nome."%'");
while($result = mysqli_fetch_array($sql)){

    if ($result) {
        echo "<div style='text-align:center;' role='alert'>".$result['nome']." - ".$result['cpf']." - "." 
        <a onclick='confirmarPresenca(".json_encode($result['cpf']).")' href='javascript:void(0);'>confirmar</a>"."</div>";
    } else {
        echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>Nenhum registro encontrado</div>";
    }
}
?>