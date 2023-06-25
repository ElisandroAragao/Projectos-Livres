<?php
include_once('../php/conexao.php');
$id = $_GET['id'];
$sq = "select * from class";
$class = mysqli_query($con,$sq);
$sql = "select i.nome_inst,c.nome_curso from instituicao i join curso_instituicao ci on i.id_inst=ci.id_instituicao join curso c on c.id_curso=ci.id_curso where i.id_inst=$id";
$curso = mysqli_query($con,$sql);
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastro de Propinas</title>

    <!-- Links Styles CSS -->
    <link rel='stylesheet' href='../css/style.css'>
    <link rel='stylesheet' href='../css/bootstrap.min.css'>
</head>
<body>
    
    <div class='container'>    
        <form method='post' action='cad_inst.php' enctype='multipart/form-data' class='needs-validation' novalidate>
            <h2 class='display-6 text-center py-1'>Cadastrar Curso</h2>
            <hr>

            <div class='container row mb-3 g-2'>
                <div class='col-4'>
                    <label for='nome_inst' class='form-label'>Preço da propina</label>
                    <input type='text' name='prop' id='nome_inst' class='form-control' required>
                </div>
                <div class='col-4'>
                <label for='nome_inst' class='form-label'>Curso</label>
                <select name='curso' class='form-control'>";
                foreach($curso as $c):
                    echo "<option value='$c[id_curso]'>".$c['nome_curso']."</option>";
                endforeach;
                echo"
                </select>
            </div>
            <div class='col-4'>
            <label for='nome_inst' class='form-label'>Classe</label>
            <select name='classe' class='form-control'>";
            foreach($class as $c):
                echo "<option value=''>".$c['n_class']."</option>";
            endforeach;
            echo"
            </select>
        </div>
            </div>
            <button class='btn btn-primary container text-center col-12'>Cadastrar</button>
        </form>
    </div>

    <!-- Scripts JavaScript -->
    <script src='../js/script.js'></script>
    <script src='../js/bootstrap.bundle.min.js'></script>

    <script>
        /** Validation Formulary */
        (function () {
        'use strict'
        
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
</body>
</html>";
?>
