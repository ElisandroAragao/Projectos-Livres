<?php
include_once('php/conexao.php');

$sql = "select i.nome_inst,count(*) as inscritos,i.id_inst from aluno a join curso_instituicao ci on a.curso=ci.id join instituicao i on ci.id_instituicao=i.id_inst group by i.nome_inst order by a.id_aluno desc";

$res = mysqli_query($con,$sql);
echo"
<!DOCTYPE html>
<html lang='pt-pt'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>NesInfo</title>

  <!-- Links Styles CSS -->
  <link rel='stylesheet' href='css/style.css'>
  <link rel='stylesheet' href='css/bootstrap.min.css'>
    

</head>
<body>
  
    <!-- As a heading -->
    <nav class='navbar bg-dark navbar-dark navbar-expand-sm'>
      <div class='container'>
          <a href='index.php' id='link' class='navbar-brand d-flex align-items-center'>
             <i src='imgs/logo-2.jpg' class=''></i> NeSInfo</a>
          <button id='menu' class='navbar-toggler text-md-start' type='button' data-bs-toggle='collapse' data-bs-target='#menuNavbar'>
              <span class='navbar-toggler-icon'></span>
          </button>
          
        <div class='collapse navbar-collapse' id='menuNavbar'>
          <div class='navbar-nav'>
            <li><a href='index.php' style='padding-top: 5px; border-bottom: 2px solid #026aff;' class='nav-link active'>Página Inicial</a></li>
            <li><a href='information.html' class='nav-link'>Informação</a></li>
            <li><a href='confirmation.html' class='nav-link'>Confirmação</a></li>
            <li><a href='register.html' class='nav-link'>Matrícula</a></li>
            <li><a href='about-us.html' class='nav-link'>Sobre Nós</a></li>      
          </div>
        </div>
      </div>
    </nav>
  
        <div id='carouselExampleCaptions' class='carousel slide'>
          <div id='ind' class='carousel-indicators' style='display: none;'>
            <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
            <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
            <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
          </div>

          <div class='carousel-inner'>
            <div id='car' class='carousel-item active'>
              <img src='imgs/10.jpg' class='d-block w-100'>
              <div class='carousel-caption d-none d-md-block'>
                <h5 class='fir'>O melhor serviço encontre aqui !</h5>
                <p class='paragrafo'>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Accusamus vel adipisci alias ratione!<br>   
                  reiciendis perferendis natus totam ad eius, molestiae dicta quod?</p>
                  
                  <!-- Box Information 1 -->
                  <div class='modal fade' id='exampleModalToggle' aria-hidden='true' aria-labelledby='exampleModalToggleLabel' tabindex='-1'>
                    <div class='modal-dialog modal-dialog-centered'>
  
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <p class='h3'>Informe</p>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
  
                        <div class='modal-body'>
                          <p>Show a second modal and hide this one with the button below.</p>
                        </div>
  
                        <div class='modal-footer'>
                          <button id='botao' class='btn btn-primary' data-bs-target='#exampleModalToggle2' data-bs-toggle='modal'>Saber Mais</button>
                        </div>
  
                      </div>
                    </div>
                  </div>
  
                  <!-- Second Side of Box-Info -->
                  <div class='modal fade' id='exampleModalToggle2' aria-hidden='true' aria-labelledby='exampleModalToggleLabel2' tabindex='-1'>
                    <div class='modal-dialog modal-dialog-centered'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <p class='h3'>Informe</p>
                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                          <p>Ocultar conteudo sobre os desenvolvedores.</p>
                        </div>
                        <div class='modal-footer'>
                          <button class='btn btn-primary' data-bs-target='#exampleModalToggle' data-bs-toggle='modal'>Voltar</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Button of Box-Info -->
                  <button id='botao' class='btn btn-primary' data-bs-target='#exampleModalToggle' data-bs-toggle='modal'>Informe-se</button>
              </div>
            </div>
            
            <div id='car' class='carousel-item'>
              <img src='imgs/2.jpg' class='d-block w-100'>
              <div class='carousel-caption d-none d-md-block'>
                <h5 class='fir'>O melhor serviço encontre aqui !</h5>
                <p class='paragrafo'>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Accusamus vel adipisci alias ratione!<br>   
                  reiciendis perferendis natus totam ad eius, molestiae dicta quod?</p>
              </div>
            </div>

            <div id='car' class='carousel-item'>
              <img src='imgs/11 .jpg' class='d-block w-100'>
              <div class='carousel-caption d-none d-md-block'>
                <h5 class='fir'>O melhor serviço encontre aqui !</h5>
                <p class='paragrafo'>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Accusamus vel adipisci alias ratione!<br>   
                  reiciendis perferendis natus totam ad eius, molestiae dicta quod?</p>
              </div>
            </div>
          </div>
          
          <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Previous</span>
          </button>
          <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Next</span>
          </button>
        </div>
        
        <div class='nborda'></div>
  
        <div class='container'>
          <section class='text-center text-header'>
            <h1 class='display-5'>BALANCE IS A PREMIUM TEME FOR WORDPRESS</h1>
            <p class='lead text-sm-center text-center'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam ducimus suscipit non distinctio corrupti a ex exercitationem aliquam dolores similique labore.</p>
          </section>
        </div>
  
  <div class='cards-page'>
    <!-- Cards 1 -->
    <div id='container' class='container py-3'>
        <h1 style='text-align: center;' class='center-align display-3'>Instituições com Maiores Aderências</h1>
        <hr>
        <div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3'>";
        foreach($res as $r):
        echo"  
            <div class='col'>
                <div class='card h-90'>
                    <img src='imgs/polo1/20171205_150704.jpg' alt='' class='card-img-top'>
                    <div class='card-body'>
                        <h4 class='card-title' id='inst'>".ucwords(strtolower($r['nome_inst']))."</h4>
                        <!-- Show Conteudo -->
                        <p class='card-text'>Uma das mais chamativas na sua localidade, possuí professores qualificados para o ensino como também tem uma infra-extrutura bem chamativa no seu bairro e que possuí optimos cursos técnicos para qualquer estudante.
                        <a id='links' href='instituty/inst.html' class='card-link'>Saber Mais</a>
                        </p>
                        
                        <!-- Buttons -->
                        <a href='register-form.php?id=$r[id_inst]'><button class='btn btn-primary'>Matricular</button></a>
                        <a href='confirmation.html'><button id='btn-secundary' class='btn btn-secundary'>Confirmar</button></a>
                    </div>
                </div>
            </div>";
        endforeach;
echo"
</div>
</div>
    <!-- Card 2 -->
    <div id='container' class='container py-3'>
    <h1 style='text-align: center;' class='center-align display-3'>Instituições Adicionadas Recentemente</h1>
    <hr>
    <div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3'> ";
    foreach($res as $re){
      echo"  
            <div class='col'>
                <div class='card h-90'>
                    <img src='imgs/polo2/20210916_094733.jpg' alt='' class='card-img-top'>
                    <div class='card-body'>
                        <h4 class='card-title'>".$re['nome_inst']."</h4>
                        <!-- Show Conteudo -->
                        <p class='card-text'>Uma das mais chamativas na sua localidade, possuí professores qualificados para o ensino como também tem uma infra-extrutura bem chamativa no seu bairro e que possuí optimos cursos técnicos para qualquer estudante.
                        <a id='links' href='instituty/inst.html' class='card-link'>Saber Mais</a>
                        </p>
                        
                        <!-- Buttons -->
                        <a href='register-form.php?id=$re[id_inst]'><button class='btn btn-primary'>Matricular</button></a>
                        <a href='confirmation.html'><button id='btn-secundary' class='btn btn-secundary'>Confirmar</button></a>
                    </div>
                </div>
            </div> ";
    }

    echo"
    </div>
    </div>
    <script src='js/script.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>
</body>
</html>";
?>
