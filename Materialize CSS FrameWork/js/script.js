
/** SLIDER TRANSITION */
var contador = 1;

setInterval(function(){
    document.getElementById('radio-' + contador).checked = true;
    
    contador ++;
    
    if(contador > 5){
        contador = 1
    };
}, 2000)

/** CAROUSEL */
    var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  //Inicialitazion of Carousel

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
  });

/** SPECIAL OPTIONS CAROUSEL */
var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  var instance = M.Carousel.init({
    fullWidth: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });


/** FLOATING ACTION BUTTON */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
});

/** MENU MOBILE */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

  // Or with jQuery

$(document).ready(function(){
    $('.sidenav').sidenav();
});

$(".button-collapse").sideNav();

/** MENU MOBILE TEST */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

  // Or with jQuery

$(document).ready(function(){
    $('.sidenav').sidenav();
});

/** BACK & FORWARD BUTTONS */
document.querySelector("button.back").ariaSelected(
    function retroceder(){
    window.history.back();
});

document.querySelector("button.next").ariaSelected(
    function seguinte(){
    window.history.forward();
});

/** CALCULATE VALOR */
function calc_total(){
    var qtd1 = parseInt(document.getElementById("cMat").value)
    var qtd2 = parseInt(document.getElementById("cCart").value)

        tot1 = qtd1 * 1500
        tot2 = qtd2 * 2000
    
        tot = tot1 + tot2

    document.getElementById("cTot").value = tot
}

function calc(){
    var qtd1 = parseInt(document.getElementById("cMat").value)
    var qtd2 = parseInt(document.getElementById("cCart").value)

        tot1 = qtd1 * 1250
        tot2 = qtd2 * 2000
    
        tot = tot1 + tot2

    document.getElementById("cTot").value = tot
}

/** COLLAPSIBLE INITIALIZATION */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

/** ALERT MENSAGE */
function alerta(){
    alert("Esta secção é exclusiva aos estudantes já matriculados; pois só pode ter acesso ao formulário de confirmação quem possuí um ID de estudante dentro do nosso sistema.");
}

/** CHARACTER COUNTER */
$(document).ready(function() {
    $('input#password, input#confirm_password').characterCounter();
});

/** ANNOUNCE ALERT */

document.querySelector("body.anuncio");

function announce(){
    window.confirm("Este formulário só pode ser aberto por alguém responsável de uma instituição. Se não pretende cadastrar a sua instituição então eu recomendo que volte na página inicial do site.");
}

/** CHIPS */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
  });

  var chip = {
    tag: 'chip content',
    image: '', //optional
  };
    
  instance.addChip({
    tag: 'chip content',
    image: '', // optional
  });