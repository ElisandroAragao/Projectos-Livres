<?php
include_once('../php/conexao.php');
$n = $_POST['nome_inst'];
$ni = $_POST['nif_inst'];
$mu = $_POST['mun_inst'];
$di = $_POST['dist_inst'];
$r = $_POST['rua_inst'];
$im1 = $_FILES['image1']['name'];
$im2 = $_FILES['image2']['name'];
$tmp1 = $_FILES['image1']['tmp_name'];
$tmp2 = $_FILES['image2']['tmp_name'];
$dir = "img_inst/";
$img1 = $dir.$im1;
$img2 = $dir.$im2;
$hoje = date('Y-m-d');

if(move_uploaded_file($tmp1,$img1) && move_uploaded_file($tmp2,$img2)){
        $sql = "insert into endereco values(default,'$mu','$r','$di')";
        $res = mysqli_query($con,$sql);
        $id_end = $con->insert_id;
    if($res){
    $sql = "insert into instituicao values(default,'$n','$ni',$id_end,'$img1','$img2','$hoje')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo "Cadastrado com sucesso";
    }
}else{
    echo "Não cadastrado";
}
    }else{
        echo "Upload falhado";
}

?>