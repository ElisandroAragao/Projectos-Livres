<?php
include_once('php/conexao.php');

if(isset($_POST['buscar'])){
$busca_id = $_POST['buscar'];
$sql ="select * from aluno a join morada m on a.morada=m.id_morada join curso_instituicao ci on a.curso=ci.id join instituicao i on ci.id_instituicao=i.id_inst join endereco e on i.id_inst=e.id_endereco join curso c on ci.id_curso=c.id_curso where a.id_aluno=$busca_id";
$res = mysqli_query($con,$sql);
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Confirmation of Student</title>

    <!-- Links Style -->
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
    
    <!-- FORMULARY LAYOUT -->
    <div class='formulario container rounded thumbnail'>
        <h1>Formulário de Confirmação</h1>
        <form action='print-pdf.php' method='post' class='needs-validation' novalidate>
            <h1 class='display-6'>Dados Pessoais</h1>
            <hr>

            <div class='row mb-3 g-2'>";
            foreach($res as $re){
                echo"<div class='col-4'>
                    <label for='name' class='form-label'>Nome</label>
                    <input type='text' id='name' value='$re[Pnome]' name='nome' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='snome' class='form-label'>Sobre Nome:</label>
                    <input type='text' id='snome' value='$re[Mnome]' name='snome' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='apelido' class='form-label'>Apelido</label>
                    <input type='text' id='apelido' value='$re[apelido]' name='apelido' class='form-control' required>
                </div>
                <div class='col-6'>
                    <label for='bilhete' class='form-label'>Bilhete de Identidade (BI)</label>
                    <input type='text' id='bilhete' value='$re[NBI]'name='bi' class='form-control' pattern='[0-9]{12}' readonly>
                </div>
                <div class='col-3'>
                    <label for='date' class='form-label'>Data de Nascimento</label>
                    <input type='date' id='date' value='$re[data_insc]' name='date' class='form-control' required readonly>
                </div>
                <div class='col-3'>
                    <label for='idsys' class='form-label'>ID Systema</label>
                    <input type='text' id='idsys' value='$busca_id' name='idsys' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='prov' class='form-label'>Província</label>
                    <input type='text' id='prov' value='$re[prov]' name='prov' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='mun' class='form-label'>Município</label>
                    <input type='text' id='mun' value='$re[mun]' name='mun' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='bairro' class='form-label'>Bairro / Rua</label>
                    <input type='text' id='bairro'value='$re[br_a]' name='residencia' class='form-control' required>
                </div>
                <div class='col-8'>
                    <label for='email' class='form-label'>E-mail</label>
                    <input type='email' id='email' value='$re[email]' name='email' class='form-control' required>
                </div>
                <div class='col-4'>
                    <label for='tel' class='form-label'>Telefone</label>
                    <input type='tel' id='tel' value='$re[tel]' name='tel' class='form-control' pattern='[0-9]{9}' required>
                </div>
            </div>

            <h1 class='display-6'>Informações Academicas</h1>
            <hr>

            <div class='row mb-3 g-2'>
                <div class='col-6'>
                    <label for='nome' class='form-label'>Nome da Instituição</label>
                    <input type='text' id='nome' value='$re[nome_inst]' name='nome' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='nif' class='form-label'>NIF</label>
                    <input type='text' id='nif' value='$re[NIF]' name='nif' class='form-control' readonly>
                </div>
                <div class='col-2'>
                    <label for='id' class='form-label'>ID Instituição</label>
                    <input type='text' id='id' value='$re[id_inst]' name='id' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='prov' class='form-label'>Municipio</label>
                    <input type='text' id='prov' value='$re[municipio]' name='prov' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='mun' class='form-label'>Avenida</label>
                    <input type='text' id='mun' value='$re[avenida]' name='mun' class='form-control' readonly>
                </div>
                
                <div class='col-4'>
                    <label for='bairro' class='form-label'>Bairro / Rua</label>
                    <input type='text' id='bairro' value='$re[distrito]' name='bairro' class='form-control' readonly>
                </div>
                <div class='col-8'>
                    <label for='correio' class='form-label'>Correio Electrônico</label>
                    <input type='email' id='correio' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='contacto' class='form-label'>Contacto</label>
                    <input type='tel' id='contacto' name = 'contacto' class='form-control' readonly>
                </div>
                <div class='col-8'>
                    <label for='curso' class='form-label' aria-required='true'>Curso</label>
                    <input type='text' name='curso' value='$re[nome_curso]' id='curso' class='form-control' readonly>
                </div>

                <span class='display-6'>Entrega de Documentos</span>
                <hr>
                
                <div class='container'>
                    <span>Cópia do Bilhete</span>        
                    <input type='file' id='arquivo' class='form-control' required>
                    <span>Certificado</span>
                    <input type='file' id='arquivo' class='form-control' required>
                    <span>Foto Passe</span>
                    <input type='file' id='arquivo' class='form-control' required>
                </div>

                <div class='mt-3 form-check'>
                    <input type='checkbox' class='form-check-input' id='uniforme' name='estado' value='u'>
                    <label for='uniforme' class='form-check-label'>Uniforme de Estudante</label>
                </div>
                <div class='mt-2 form-check'>
                    <input type='checkbox' class='form-check-input' id='cartao' name='estado' value='c' required>
                    <label for='cartao' class='form-check-label' aria-required='true'>Cartão de Estudante</label>
                </div>
            </div>
            <hr>

            <div class='mb-3 form-check'>
                <input type='checkbox' id='lembrar' class='form-check-input' required>
                <label for='lembrar' class='form-check-label' aria-required='true'>Marque o campo se tem a plena certeza de que esta de acordo com a política do site.</label>
            </div>";
            }
            echo"
            <button class='btn btn-primary container text-center' onclick='confirmar()'>Enviar</button>
            <br><br>
        </form>   
    </div>

    <script src='js/script.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>

    <script>

        function confirmar(){
            window.confirm('Preencheu o formulário correctamente?');
        }

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
    }else{
        header('Location: confirmation.html');
    }
?>