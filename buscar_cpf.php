<?php 

include ("conn.php");

$cpf = $_GET ['cpf'];

$sql = mysqli_query($conn, "select * from tb_inscritos where cpf = " .$cpf);
$result = mysqli_fetch_array($sql);

if ($result) {
    echo "<div class='col-md-6' style='background-color:#F2F2F2; border-bottom: 1px solid #ccc;'>".$result['nome']."</div>
            <div class='col-md-4' style='background-color:#F2F2F2; border-bottom: 1px solid #ccc;'>".$result['cpf']."</div>
            <div class='col-md-2' style='background-color:#F2F2F2; border-bottom: 1px solid #ccc;'><a onclick='confirmarPresenca(".json_encode($result['cpf']).")' href='javascript:void(0);'>check-in</a></div>";
} else {
    echo "<div class='alert alert-danger' style='text-align:center;' role='alert'>Nenhum registro encontrado</div>";
}

?>

