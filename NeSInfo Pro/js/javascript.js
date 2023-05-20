
      var slides = document.querySelectorAll('.slides-container');
      var index = 0;

       function next(){
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length; 
        slides[index].classList.add('active');
       }

       function prev(){
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length; 
        slides[index].classList.add('active');
       }

       setInterval(next, 7000);

/*Fim de late box*/

const lightbox = document.createElement('div')
lightbox.id = 'lightbox'
document.body.appendChild(lightbox)


const images = document.querySelectorAll('img')
images.forEach(image => {
  image.addEventListener('click', e => {
      lightbox.classList.add('active')
      const img = document.createElement('img')
      img.src = image.src
      while (lightbox.firstChild){
        lightbox.removeChild(lightbox.firstChild)
      }
      lightbox.appendChild(img)
  })
})


lightbox.addEventListener('click', e => {
  if (e.target !== e.currentTarget) return
  lightbox.classList.remove('active')
});

/*late box*/

/** TELA DE PRE-CARREGAMENTO */

const pre_carregamento = document.querySelector(".pre-carregamento");

function preCarregamento(){
    pre_carregamento.style.opacity = "2";

    setTimeout(() =>{
        pre_carregamento.style.display = "none";
    }, 5000);
}   


/** GERANDO PDF */

function funcao_pdf(){
    var pegar_dados = document.getElementById('dados').innerHTML;
    var janela = window.open('', '', 'width=1000, height=600');

    janela.document.write('<html><head>');
    janela.document.write('<title>PDF</title></head>');
    janela.document.write('<body');
    janela.document.write(pegar_dados);
    janela.document.write('</body></html>');
    janela.document.close();
    janela.print();
}

/** SEND MENSAGE CONFIRM */

function send_mensage(){
  document.write("O seu comentário foi enviado para nós.");
  alert("A sua mensagem foi enviada com sucesso aos nossos desenvolvedores!")
}

/** CARREGAMENTO DE IMAGENS E CONVERTENDO EM PDF */


