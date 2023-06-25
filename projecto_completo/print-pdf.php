<?php
include_once('php/conexao.php');
if(isset($_POST['registrar'])){
$c = $_POST['curso'];
$id = $_POST['id'];
$id_curso = 0;


$sql = 'select i.nome_inst,ci.id from instituicao i 
join curso_instituicao ci on ci.id_instituicao=i.id_inst 
join curso c on ci.Id_curso=c.Id_curso where c.nome_curso like '$c' and i.id_inst = $id';
$res = mysqli_query($con,$sql);
foreach($res as $r):
    $id_curso = $r['id'];
endforeach;

$pnome = $_POST['nome'];
$snome = $_POST['snome'];
$apel = $_POST['apelido'];
$bi = $_POST['bi'];
$m = $_POST['mun'];
$data = $_POST['date'];
$prov = $_POST['prov'];
$br = $_POST['bairro'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$s = $_POST['sexo'];
$hoje = date('Y-m-d');
$i = $_POST['n_inst'];

$sql = 'insert into morada values(default,'$m','$prov','$br')';
$res = mysqli_query($con,$sql);
$idm = $con->insert_id;  
$ida = 0;
if($res):
    $sql = 'insert into aluno values(default,'$pnome','$snome','$apel','$tel','$bi','$data','$s','$email',$id_curso,$idm)';
    $res = mysqli_query($con,$sql);
    $ida = $con->insert_id;
    if($res):
        echo 'Aluno Cadastrado';
    else:
        echo 'Aluno não cadastrado';
        
    endif;
else:
    echo 'Erro ao cadastrar';
endif;
echo'
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Imprimir PDF</title>

    <!-- Links Styles CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
    <div id='content' class='container text-sm-start'>
        <div id='conteu'>
            <span class='display-5' style='font-weight: bold; font-size: 32pt;'>Comprovativo de Matrícula</span>
            
            <p><b>Nome:</b><i><?php echo '  '.$pnome.' '.$snome.' '.$apel;  ?></i></p>
            <p><b>Instituição:</b><i><?php echo $i; ?> </i></p>
            <p><b>Curso:</b><i> <?php echo $c; ?></i></p>
            <p><b>ID:</b><i> <?php $ida; ?> </i></p>
            <p><b>Classe:</b><i> 10ª </i></p>
            <p><b>Data de Inscrição:</b><i> <?php echo $hoje; ?> </i></p>
        </div>

        <button id='print-btn' class='btn btn-primary text-sm-center' type='submit' onclick='funcao_pdf()'>IMPRIMIR</button>
    </div>

    <!-- Links JavaScript -->
    <script src='js/script.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>
</body>
</html>';
}else{
    header('Location: register.html');
}
?>