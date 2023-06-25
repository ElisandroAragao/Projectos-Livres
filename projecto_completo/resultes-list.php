<?php
include_once('php/conexao.php');
if(isset($_POST['pesquisa'])){
$busca = $_POST['pesquisa']; 

$sql = "select i.nome_inst,i.id_inst,c.nome_curso,cl.n_class,p.preco,pci.id_pci
from instituicao i join curso_instituicao ci on i.id_inst=ci.id_instituicao 
join curso c on c.id_curso=ci.id_curso 
join prop_class_inst pci on pci.curso_i = ci.id join class_propina cp on cp.id_cp=pci.class_p
join class_propina clp on clp.id_cp=pci.class_p 
join propina p on p.id_propina=clp.propina
join class cl on cl.id_classe=clp.class where c.nome_curso = '$busca' group by i.nome_inst order by i.nome_inst" ;

$res = mysqli_query($con,$sql);
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Resultes of Search</title>

    <!-- Links Style CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>

    <!-- Nav Menu & Side Nav Menu -->
    <nav class='navbar bg-dark navbar-dark navbar-expand-sm'>
        <div class='container-lg'>
            <a href='index.html' id='link' class='navbar-brand d-flex align-items-center'>
               <i src='imgs/logo-2.jpg' class=''></i> NeSInfo</a>
            <button id='menu' class='navbar-toggler text-end' type='button' data-bs-toggle='collapse' data-bs-target='#menuNavbar'>
                <span class='navbar-toggler-icon'></span>
            </button>
            
            <div class='collapse navbar-collapse' id='menuNavbar'>
                <div class='navbar-nav'>
                    <a href='index.html' class='nav-link'>Página Inicial</a>
                    <a href='information.html' class='nav-link'>Informação</a>
                    <a href='confirmation.html' class='nav-link'>Confirmação</a>
                    <a href='register.html' class='nav-link active'>Matrícula</a>
                    <a href='about-us.html' class='nav-link'>Sobre Nós</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- List of Results -->
    <div class='container'>
        <form method='post'>
            <ul class='list-inline-item'>";
                foreach ($res as $r){
                echo "<li class='list-item' name='escola'><a href='register-form.php?id=$r[id_inst]&curso=$busca'>Nome da Instituicao: ".$r['nome_inst']."<br>Curso Escolhido: ".$busca."<br>Classe: ".$r['n_class']."ª<br>Propina: ".$r['preco']."KZ</a></li>";
            }  
           echo"
        </form>
    </div>

    <!-- Links JavaScript -->
    <script src='js/script.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>
</body>
</html>";
}else{
    header('Location: register.html');
}
?>