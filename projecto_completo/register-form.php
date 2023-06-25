<?php
include_once('php/conexao.php');
if(isset($_GET['curso'])){
$id_inst = $_GET['id'];
$Curso = $_GET['curso'];
$sql = "select * from instituicao i join endereco e on i.fk_endereco = e.id_endereco join curso_instituicao ci on i.id_inst=ci.id_instituicao join curso c on c.id_curso=ci.id_curso where i.id_inst=$id_inst and c.nome_curso='$Curso'";
$res = mysqli_query($con,$sql);

echo"
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Register of Student</title>

    <!-- Links Style -->
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
    
<!-- FORMULARY LAYOUT -->
    <div class='formulario container rounded thumbnail'>
        <h1 class='matri'>Formulário de Matrícula</h1>
        <form action='print-pdf.php?' method='post' class='needs-validation'>
            <h1 class='display-6'>Dados Pessoais</h1>
            <hr>

            <div class='row mb-3 g-2'>
                <div class='col-4'>
                    <label for='nome' class='form-label'>Nome</label>
                    <input type='text' id='nome' name='nome' class='form-control' >
                </div>
                <div class='col-4'>
                    <label for='snome class='form-label'>Sobre Nome:</label>
                    <input type='text' id='snome' name='snome' class='form-control'>
                </div>
                <div class='col-4'>
                    <label for='apelido' class='form-label'>Apelido</label>
                    <input type='text' id='apelido' name='apelido' class='form-control' >
                </div>
                <div class='col-5'>
                    <label for='bilhete' class='form-label'>Bilhete de Identidade (BI)</label>
                    <input type='text' id='bilhete' name='bi' class='form-control'  >
                </div>
                <div class='col-3'>
                    <label for='date' class='form-label'>Data de Nascimento</label>
                    <input type='date' id=
                    date' name='date' class='form-control' >
                </div>
                <div class='col-2'>
                    <p id='sexo'>Sexo</p>
                    <input type='radio' id='Masc' name='sexo' value='M'  style='margin-left: 3px;'>
                    <label for='Masc' class='form-check-label'>Masculino</label>

                        
                    <input type='radio' id='Fem' name='sexo' value='F' >
                    <label for='Fem' class='form-check-label>Feminino</label>
                </div>
                <div class='col-4'>
                    <label for='prov' class='form-label'>Provincia</label>
                    <input type='text' id='prov' name='prov' class='form-control' >
                </div>
                <div class='col-4'>
                    <label for='mun' class='form-label'>Município</label>
                    <input type='text' id='mun' name='mun' class='form-control' >
                </div> 
                <div class='col-4'>
                    <label for='bairro' class='form-label'>Bairro / Rua</label>
                    <input type='text' id='bairro' name='bairro' minlength='0' class='form-control' >
                </div>
                <div class='col-8'>
                    <label for='email' class='form-label'>E-mail</label>
                    <input type='email' id='email' name='email' class='form-control' >
                </div>
                <div class='col-4'>
                    <label for='tel' class='form-label'>Telefone</label>
                    <input type='tel' id='tel' name='tel' class='form-control'  >
                </div>
            </div>

            <h1 class='display-6'>Informações Academicas</h1>
            <hr>

            <div class='row mb-3 g-2'>
                <div class='col-6'>
                    
                    <label for='nome' class='form-label'>Nome da Instituição</label>";
                    foreach($res as $re):
                    echo "<input type='text' id='nome' name ='n_inst' class='form-control' value='$re[nome_inst]' readonly>";
                    echo"
                </div>
                <div class='col-4'>
                    <label for='nif' class='form-label'>NIF</label>";
                    echo "<input type='text' id='nif' class='form-control' value='$re[NIF]' readonly>";

                    echo"
                </div>
                <div class='col-2'>
                    <label for='id' class='form-label'>ID Instituição</label>";
                    echo "<input type='text' id='id' name='id' class='form-control' value='$id_inst' readonly>";
                    echo"
                </div>
                <div class='col-4'>
                    <label for='prov' class='form-label'>Município</label>
                    <input type='text' value='$re[municipio]' id='prov' name='mun_i' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='mun' class='form-label'>Distrito</label>
                    <input type='text' value='$re[distrito]' id='mun' name='dist' class='form-control' readonly>
                </div>
                
                <div class='col-4'>
                    <label for='bairro' class='form-label'>Bairro / Rua</label>
                    <input type='text' value='$re[rua]' id='bairro' name='bairro_i' class='form-control' readonly>
                </div>
                <div class='col-8'>
                    <label for='correio' class='form-label'>Correio Electrônico</label>
                    <input type='text' id='correio' class='form-control' readonly>
                </div>
                <div class='col-4'>
                    <label for='contacto' class='form-label'>Contacto</label>
                    <input type='tel' id='contacto' name = 'contacto' class='form-control' readonly>
                </div>
                <div class='col-8'>
                    <label for='' class='form-label' aria-required='true'>Curso</label>";
                    echo "<input type='text' name='curso' id='nome' class='form-control' value='$re[nome_curso]' readonly>";
                    endforeach;
                    echo"
                <span class='display-6'>Entrega de Documentos</span>
                <hr>
                
                <div class='container'>
                    <span>Cópia do Bilhete</span>        
                    <input type='file' id='arquivo' class='form-control' >
                    <span>Certificado</span>
                    <input type='file' id='arquivo' class='form-control' >
                    <span>Foto Passe</span>
                    <input type='file' id='arquivo' class='form-control' >
                </div>

                <div class='mt-3 form-check form-check-inline'>
                    <input type='checkbox' class='form-check-input' id='uniforme' name='estado' value='u' >
                    <label for='uniforme' class='form-check-label' aria-required='true'>Uniforme de Estudante</label>
                </div>
                <div class='mt-2 form-check form-check-inline'>
                    <input type='checkbox' class='form-check-input' id='cartao' name='estado' value='c' >
                    <label for='cartao' class='form-check-label' aria-required='true'>Cartão de Estudante</label>
                </div>
            </div>
            <hr>

            <div class='mb-3 form-check'>
                <input type='checkbox' id='lembrar' class='form-check-input' >
                <label for='lembrar' class='form-check-label' aria-required='true'>Marque o campo se tem a plena certeza de que esta de acordo com a política do site.</label>
            </div>
            
            <button class='btn btn-primary container text-center' name='registrar'>Enviar</button>
            <br><br>
        </form>   
    </div>

    <script src='js/script.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>

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
}else if(isset($_GET['id'])){
    $id_inst = $_GET['id'];
    $sql = "select * from instituicao i join endereco e on i.fk_endereco = e.id_endereco  where i.id_inst=$id_inst";
    $res = mysqli_query($con,$sql);
    
    $sql1 ="select c.nome_curso from instituicao i join endereco e on i.fk_endereco = e.id_endereco join curso_instituicao ci on i.id_inst=ci.id_instituicao join curso c on c.id_curso=ci.id_curso where i.id_inst=$id_inst";
    $res1 = mysqli_query($con,$sql1);
    echo"
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Register of Student</title>
    
        <!-- Links Style -->
        <link rel='stylesheet' href='css/style.css'>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
    </head>
    <body>
        
    <!-- FORMULARY LAYOUT -->
        <div class='formulario container rounded thumbnail'>
            <h1 class='matri'>Formulário de Matrícula</h1>
            <form action='print-pdf.php?' method='post' class='needs-validation'>
                <h1 class='display-6'>Dados Pessoais</h1>
                <hr>
    
                <div class='row mb-3 g-2'>
                    <div class='col-4'>
                        <label for='nome' class='form-label'>Nome</label>
                        <input type='text' id='nome' name='nome' class='form-control' >
                    </div>
                    <div class='col-4'>
                        <label for='snome class='form-label'>Sobre Nome:</label>
                        <input type='text' id='snome' name='snome' class='form-control'>
                    </div>
                    <div class='col-4'>
                        <label for='apelido' class='form-label'>Apelido</label>
                        <input type='text' id='apelido' name='apelido' class='form-control' >
                    </div>
                    <div class='col-5'>
                        <label for='bilhete' class='form-label'>Bilhete de Identidade (BI)</label>
                        <input type='text' id='bilhete' name='bi' class='form-control'  >
                    </div>
                    <div class='col-3'>
                        <label for='date' class='form-label'>Data de Nascimento</label>
                        <input type='date' id=
                        date' name='date' class='form-control' >
                    </div>
                    <div class='col-2'>
                        <p id='sexo'>Sexo</p>
                        <input type='radio' id='Masc' name='sexo' value='M'  style='margin-left: 3px;'>
                        <label for='Masc' class='form-check-label'>Masculino</label>
    
                            
                        <input type='radio' id='Fem' name='sexo' value='F' >
                        <label for='Fem' class='form-check-label>Feminino</label>
                    </div>
                    <div class='col-4'>
                        <label for='prov' class='form-label'>Provincia</label>
                        <input type='text' id='prov' name='prov' class='form-control' >
                    </div>
                    <div class='col-4'>
                        <label for='mun' class='form-label'>Município</label>
                        <input type='text' id='mun' name='mun' class='form-control' >
                    </div> 
                    <div class='col-4'>
                        <label for='bairro' class='form-label'>Bairro / Rua</label>
                        <input type='text' id='bairro' name='bairro' minlength='0' class='form-control' >
                    </div>
                    <div class='col-8'>
                        <label for='email' class='form-label'>E-mail</label>
                        <input type='email' id='email' name='email' class='form-control' >
                    </div>
                    <div class='col-4'>
                        <label for='tel' class='form-label'>Telefone</label>
                        <input type='tel' id='tel' name='tel' class='form-control'  >
                    </div>
                </div>
    
                <h1 class='display-6'>Informações Academicas</h1>
                <hr>
    
                <div class='row mb-3 g-2'>
                    <div class='col-6'>
                        
                        <label for='nome' class='form-label'>Nome da Instituição</label>";
                        foreach($res as $re):
                        echo "<input type='text' id='nome' name ='n_inst' class='form-control' value='$re[nome_inst]' readonly>";
                        echo"
                    </div>
                    <div class='col-4'>
                        <label for='nif' class='form-label'>NIF</label>";
                        echo "<input type='text' id='nif' class='form-control' value='$re[NIF]' readonly>";
    
                        echo"
                    </div>
                    <div class='col-2'>
                        <label for='id' class='form-label'>ID Instituição</label>";
                        echo "<input type='text' id='id' name='id' class='form-control' value='$id_inst' readonly>";
                        echo"
                    </div>
                    <div class='col-4'>
                        <label for='prov' class='form-label'>Município</label>
                        <input type='text' value='$re[municipio]' id='prov' name='mun_i' class='form-control' readonly>
                    </div>
                    <div class='col-4'>
                        <label for='mun' class='form-label'>Distrito</label>
                        <input type='text' value='$re[distrito]' id='mun' name='dist' class='form-control' readonly>
                    </div>
                    
                    <div class='col-4'>
                        <label for='bairro' class='form-label'>Bairro / Rua</label>
                        <input type='text' value='$re[rua]' id='bairro' name='bairro_i' class='form-control' readonly>
                    </div>
                    <div class='col-8'>
                        <label for='correio' class='form-label'>Correio Electrônico</label>
                        <input type='text' id='correio' class='form-control' readonly>
                    </div>
                    <div class='col-4'>
                        <label for='contacto' class='form-label'>Contacto</label>
                        <input type='tel' id='contacto' name = 'contacto' class='form-control' readonly>
                    </div>
                    <div class='col-8'>
                        <label for='' class='form-label' aria-required='true'>Curso</label>";
                        endforeach;
                        echo "<select id='contacto' name = 'curso' class='form-control' readonly>";
                        foreach($res1 as $re):
                            echo "<option value='$re[id_curso]'>".$re['nome_curso']."</option>";
                        endforeach;
                        echo"
                        </select>
                    <span class='display-6'>Entrega de Documentos</span>
                    <hr>
                    
                    <div class='container'>
                        <span>Cópia do Bilhete</span>        
                        <input type='file' id='arquivo' class='form-control' >
                        <span>Certificado</span>
                        <input type='file' id='arquivo' class='form-control' >
                        <span>Foto Passe</span>
                        <input type='file' id='arquivo' class='form-control' >
                    </div>
    
                    <div class='mt-3 form-check form-check-inline'>
                        <input type='checkbox' class='form-check-input' id='uniforme' name='estado' value='u' >
                        <label for='uniforme' class='form-check-label' aria-required='true'>Uniforme de Estudante</label>
                    </div>
                    <div class='mt-2 form-check form-check-inline'>
                        <input type='checkbox' class='form-check-input' id='cartao' name='estado' value='c' >
                        <label for='cartao' class='form-check-label' aria-required='true'>Cartão de Estudante</label>
                    </div>
                </div>
                <hr>
    
                <div class='mb-3 form-check'>
                    <input type='checkbox' id='lembrar' class='form-check-input' >
                    <label for='lembrar' class='form-check-label' aria-required='true'>Marque o campo se tem a plena certeza de que esta de acordo com a política do site.</label>
                </div>
                
                <button class='btn btn-primary container text-center' name='registrar'>Enviar</button>
                <br><br>
            </form>   
        </div>
    
        <script src='js/script.js'></script>
        <script src='js/bootstrap.bundle.min.js'></script>
    
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
}else{
header('Location: register.html');
}
?>