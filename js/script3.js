// MODO USADO NO MERCADO DE TRABALHO PARA VALIDAR AS INFORMACOES ANTES DE ENVIAR PARA O BANCO DE DADOS
const formulario = document.getElementById("formulario");
const bot_cadastrar = document.getElementById("cadastrar");

console.log(bot_cadastrar);

formulario.addEventListener('submit', function(event){

    event.preventDefault() 

    console.log("clicou");

    let nome = formulario.nome.value;
    let cpf = formulario.cpf.value;
    let email = formulario.email.value;

    if(nome == ""){
        alert("Favor preencher o nome");
        return false;
    }
    else if(cpf.length < 11){
        alert("CPF incompleto")
        return false;
    }
    else if(email.length < 11){
        alert("Favor preencher corretamente o email")
        return false;
    }
    else{
        return true;
    }

    event.target()
})



// var nome = document.getElementById("nome").value;
// var cpf = document.getElementById("cpf").value;
// var email = document.getElementById("email").value;
// var fone = document.getElementById("fone").value;
// var cidade = document.getElementById("cidade").value;

// var bot_cancelar = document.getElementById("cancelar");
// var bot_cadastrar = document.getElementById("cadastrar");



// bot_cadastrar.addEventListener('click', function(e){
//     e.preventDefault()

//     if(nome == ""){
//         alert("Preencha o nome!");
//     }

//     alert("Clicou no cadastrar");
// })


