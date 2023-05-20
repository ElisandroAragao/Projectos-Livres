
/** FUNCTION BUTTONS */

function retroceder(){
    window.history.back();
}

function next(){
    alert("Confime se o seu formulário foi preenchido correctamente!")
    window.confirm("Quer seguir para o próximo passo?")
    window.history.forward(); 
}

/** PAYMENT ALERT */
function pagar(){
    alert("Pagamento feito com sucesso!");
}

/** MENSAGE OF ERROR */

var a = document.getElementsByClassName('sugest')

    function mensage(){
        a.innerText = 'There isn´t more sugestions ...';
        a.style.background = 'red'
    }

/** TIME COUNT OF SLIDER */

var contador = 1;

setInterval(function(){
    document.getElementById('radio-' + contador).checked = true;
    
    contador ++;
    
    if(contador > 5){
        contador = 1
    };
}, 2000)

/** FUNCTION TO CALCULE THE VALOR */

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