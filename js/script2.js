
let titulo = document.getElementById("titulo");

titulo.addEventListener("click", function(){

    titulo.style.color = 'red';
});

titulo.addEventListener("dblclick", function(){

    titulo.style.color = 'blue';
});

// TUDO NO JAVASCRIPT É UM OBJETO

let formulario = document.getElementById("formulario");

console.log(formulario);

console.log( formulario.nome );

console.log(formulario.cpf);

// DUAS FORMAS DE ENVIAR O FORMULARIO PARA O PHP, uma é pelo evento de SUBMIT, ou pelo evento de CLICK no botão de CADASTRAR
console.log(formulario.cadastrar)

formulario.cadastrar.addEventListener('click', function(event){
    
    event.preventDefault(); // serve para impedir o comportamento padrão do evento, que no caso de um formulário é enviar os dados e recarregar a página.

   
    let nome = formulario.nome.value;
    let cpf = formulario.cpf.value;
    let email = formulario.email.value;

    if(nome == ""){
        alert("Preencha o nome!");
    }

    if(cpf.length < 11){
        alert("CPF incompleto");
    }


    console.log(nome);
    console.log(cpf);
    console.log(email);
})