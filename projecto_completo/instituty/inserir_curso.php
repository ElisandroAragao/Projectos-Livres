<?php
include_once('../php/conexao.php');
$sq = "select * from curso";
$curso = mysqli_query($con,$sq);
$id = $_GET['id'];
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastro de Cursos</title>

    <!-- Links Styles CSS -->
    <link rel='stylesheet' href='../css/style.css'>
    <link rel='stylesheet' href='../css/bootstrap.min.css'>
</head>
<body>
    
    <div class='container'>    
        <form method='post' action='cad_curso.php?id=$id' class='needs-validation' novalidate>
            <h2 class='display-6 text-center py-1'>Cadastrar Curso</h2>
            <hr>

            <div class='container row mb-3 g-2'>
                <div class='col'>
                    <select name='curso' class='form-control'>";
                        foreach($curso as $cu):
                            echo "<option value='$cu[id_curso]'>".$cu['nome_curso']."</option>";
                        endforeach;
                        echo"
                        </select>
                </div>
            </div>
            <button class='btn btn-primary container text-center col' name='cad_curso'>Cadastrar</button>
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