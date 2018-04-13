<?php 

include ("conn.php");
include ("funcoes.php");

$cpf = $_GET ['cpf'];
$count = 0;

$sql = mysqli_query($conn, "select * from tb_inscritos where cpf = " .$cpf);
$result = mysqli_fetch_array($sql);

    if ($result) {
        if ($result['confirmado'] == 1) {
            $checkin = "Confirmado";
        } else {
            $checkin = "<a onclick='confirmarPresenca(".json_encode($result['cpf']).", ".$count.")' href='javascript:void(0);'>
                        <i class='far fa-check-square fa-lg'></i>
                        </a>";
        }
        echo "<div class='col-md-6 list-inscritos'>".$result['nome']."</div>
        <div class='col-md-4 list-inscritos'>".mask($result['cpf'],'###.###.###-##')."</div>
        <div class='col-md-2 list-inscritos checkin' id='checkin-".$count."'>".$checkin."</div>";
        $count = $count = + 1;

    } else {
        echo "<div class='alert alert-danger col-md-12' style='text-align:center; margin-top:5px;' role='alert'>Nenhum registro encontrado</div>";
    }

?>

