<?php
include_once('../php/conexao.php');
$sql = "select * from instituicao where id_inst=3";
$res = mysqli_query($con,$sql);
$id = 0;
foreach($res as $r):
    $id = $r['id_inst'];
endforeach;
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Instituto</title>

    <!-- Link Styles -->
    <link rel='stylesheet' href='../css/style.css'>
    <link rel='stylesheet' href='../css/bootstrap.min.css'>
</head>
<body>

    <!-- Nav Menu & Side Nav Menu -->
    <nav class='navbar bg-dark navbar-dark navbar-expand-sm'>
        <div class='container'>
            <a href='../index.html' id='link' class='navbar-brand d-flex align-items-center'>
               <i src='../imgs/logo-2.jpg' class=''></i> NeSInfo</a>
            <button id='menu' class='navbar-toggler text-end' type='button' data-bs-toggle='collapse' data-bs-target='#menuNavbar'>
                <span class='navbar-toggler-icon'></span>
            </button>
            
            <div class='collapse navbar-collapse' id='menuNavbar'>
                <div class='navbar-nav'>
                    <li><a href='inst.php' class='nav-link'>Página Inicial</a></li>
                    <li><a href='inserir_curso.php?id=$id' class='nav-link'>Cadastrar Curso</a></li>
                    <li><a href='cad_preco.php?id=$id' class='nav-link'>Cadastrar Preço</a></li>
                    <li><a href='../register.html' class='nav-link'>Matrícula</a></li>
                    <li><a href='../about-us.html' class='nav-link'>Sobre Nós</a></li>      
                </div>
            </div>
      </div>
    </nav>";
    foreach($res as $r):
    echo "<h1 id='title-inst' class='display-2 text-center'>".$r['nome_inst']."</h1>";
    endforeach;
    echo"
    <!-- Carousel Slider -->
    <div class='container py-5'>
        <div class='carousel slide' data-bs-ride='carousel' id='ads'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>";
                foreach($res as $r):
                    echo "<img src='".$r['img1']."' class='d-block w-100 h100 rounded'>";
                endforeach;
                echo"
                </div>
                <div class='carousel-item'>
                    <img src='../imgs/polo1/20171205_151253.jpg?random=2' class='d-block w-100 h100 rounded'>
                </div>

                <button class='carousel-control-prev' data-bs-target='#ads' data-bs-slide='prev'>
                    <span class='carousel-control-prev-icon'></span>
                </button>
                <button class='carousel-control-next' data-bs-target='#ads' data-bs-slide='next'>
                    <span class='carousel-control-next-icon'></span>
                </button>
            </div>
        </div>
    </div>

    <div class='container' style='margin-top: 0px; margin-bottom: -100px;'>
        <p class='lead'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat eaque ipsam quo ipsa quae libero rem voluptatem velit soluta ratione, perferendis sequi tempore aut cupiditate omnis. Eius repellat beatae sapiente delectus non, eos, dolorem pariatur modi id facilis impedit aliquam?</p>

        <p class='lead text-center'>Aqui podes visualizar algumas áreas da insituição em que questão, talvez isso possa ser de ajuda para si nessa escolha.</p>
    </div>

    <!-- Carousel Images -->
    <div class='container py-5'>
        <div class='escolas carousel slide carousel-fade' data-bs-ride='carousel' id='ads'>
            <div class='carousel-indicators'>
                <button class='active' data-bs-target='#ads' data-bs-slide-to='0'></button>
                <button data-bs-target='#ads' data-bs-slide-to='1'></button>
                <button data-bs-target='#ads' data-bs-slide-to='2'></button>
            </div>
            <div class='carousel-inner'>
                <div class='carousel-item active' data-bs-interval='2500'>";
                foreach($res as $r):
                    echo "<img src='".$r['img2']."' alt='' id='img1' class='d-block w-100 h-auto'>";
                endforeach;
                echo"
                </div>
                <div class='carousel-item' data-bs-interval='2500'>
                    <img src='../imgs/polo1/IMG_20210105_091454.jpg?random=2' alt='' id='img2' class='d-block w-100'>
                </div>
            </div>
        </div>
    </div>
    
    <p class='lead text-center' style='margin-top: 25px;'>Abaixo temos as tabelas com os cursos, quantidade de disciplinas e preços dos uniformes e propinas para cada ano.</p>

    <!-- Table of Information 1 -->
    <div class='container'>
        <table class='table table-striped table-hover table-bordered table-sm'>
            <thead>
                <tr>
                    <td class='text-center'>Nº</td>
                    <td>Curso</td>
                    <td>Classe</td>
                    <td>Propinas</td>
                    <td>Uniforme</td>
                </tr>
            </thead>

            <tbody class='table-group-divider'>
                <tr>
                    <td class='text-center'>1</td>
                    <td>Electrecidade</td>
                    <td>10ª Classe</td>
                    <td>5.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>2</td>
                    <td>Gestão Empresarial</td>
                    <td>10ª Classe</td>
                    <td>5.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>3</td>
                    <td>Informática Geral</td>
                    <td>10ª Classe</td>
                    <td>5.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>4</td>
                    <td>Telecomunicações</td>
                    <td>10ª Classe</td>
                    <td>5.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Table of Information 2 -->
    <div class='container'>
        <table class='table table-striped table-hover table-bordered table-sm'>
            <thead>
                <tr>
                    <td class='text-center'>Nº</td>
                    <td>Curso</td>
                    <td>Classe</td>
                    <td>Propinas</td>
                    <td>Uniforme</td>
                </tr>
            </thead>

            <tbody class='table-group-divider'>
                <tr>
                    <td class='text-center'>1</td>
                    <td>Electrecidade</td>
                    <td>11ª Classe</td>
                    <td>7.000 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>2</td>
                    <td>Gestão Empresarial</td>
                    <td>11ª Classe</td>
                    <td>7.000 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>3</td>
                    <td>Informática Geral</td>
                    <td>11ª Classe</td>
                    <td>7.000 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>4</td>
                    <td>Telecomunicações</td>
                    <td>11ª Classe</td>
                    <td>7.000 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Table of Information 3 -->
    <div class='container'>
        <table class='table table-striped table-hover table-bordered table-sm'>
            <thead>
                <tr>
                    <td class='text-center'>Nº</td>
                    <td>Curso</td>
                    <td>Classe</td>
                    <td>Propinas</td>
                    <td>Uniforme</td>
                </tr>
            </thead>

            <tbody class='table-group-divider'>
                <tr>
                    <td class='text-center'>1</td>
                    <td>Electrecidade</td>
                    <td>12ª Classe</td>
                    <td>7.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>2</td>
                    <td>Gestão Empresarial</td>
                    <td>12ª Classe</td>
                    <td>7.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>3</td>
                    <td>Informática Geral</td>
                    <td>12ª Classe</td>
                    <td>7.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
                <tr>
                    <td class='text-center'>4</td>
                    <td>Telecomunicações</td>
                    <td>12ª Classe</td>
                    <td>7.500 kzs</td>
                    <td>4.500 kzs</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Paragraph -->
    <div class='container'>
        <p class='lead'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nam cum deserunt quisquam distinctio soluta? Dolore porro a asperiores perferendis excepturi facilis fugiat perspiciatis nemo distinctio minima. Cum, amet dolorum.</p>
        <p class='lead'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quae suscipit non aliquam voluptatum quam repellat voluptas magni nisi eius aspernatur magnam rerum nostrum expedita numquam, iusto veritatis porro eveniet sapiente iure amet doloribus voluptatibus debitis nesciunt. In soluta quaerat eum! Quam deserunt eveniet quaerat, modi cumque repellat officiis blanditiis dicta, repudiandae obcaecati voluptates ut? Quisquam nihil eius incidunt qui repudiandae voluptatibus officia voluptas quam voluptate nam praesentium rerum inventore, illum corrupti, dolores nisi vel tempore quis sint! Tempora, hic officia. Sapiente tempore mollitia quas? Expedita laboriosam ab maiores iusto adipisci distinctio ullam quos facere, dolorum corporis molestiae officia reprehenderit!</p>
    </div>

    <!-- Register Button -->
    <div class='container text-center pb-3'>
        <a href='../register-form.php'><button class='btn btn-primary' type='submit'>Matricular</button></a>
        <a href='../confirmation-form.html'><button id='btn-secundary' class='btn btn-secundary' type='submit'>Confirmar</button></a>
    </div>

    <script src='../js/script.js'></script>
    <script src='../js/bootstrap.bundle.min.js'></script>
</body>
</html>";
?>