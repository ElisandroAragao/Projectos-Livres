<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastro de Cursos</title>

    <!-- Links Styles CSS -->
    <link rel="stylesheet" href='../css/style.css'>
    <link rel="stylesheet" href='../css/bootstrap.min.css'>
</head>
<body>
    
    <div class='container'>    
        <form method='get' action='cad_inst.php' class='needs-validation' novalidate>
            <h2 class='display-6 text-center py-2'>Inserir os Cursos da Instituição</h2>
            <hr>

            <div class='container row mb-3 g-2'>
                <div class='col-4'>
                    <label for='curso1' class='form-label'>1º Curso</label>
                    <input type='text' name='curso' id='curso1' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='curso2' class='form-label'>2º Curso</label>
                    <input type='text' name='curso' id='curso2' class='form-control' required>
                </div>
                
                <div class='col-4'>
                    <label for='curso3' class='form-label'>3º Curso</label>
                    <input type='text' name='curso' id='curso3' class='form-control' required>
                </div>
            </div>
        
            <hr>
            <button id='cad' class='btn btn-primary container'>Cadastrar</button>
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
</html>