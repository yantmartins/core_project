let bot = document.getElementById("buscar");

let modal = document.getElementById("modal");
let bot_cadastrar = document.getElementById('cadastrar');

function chamaModal(){
    modal.classList.remove("oculta");
    modal.classList.add("chama");
}

bot_cadastrar.addEventListener('click', (event) => {
    event.preventDefault();

    let nome = document.getElementById("nome").value;
    let cpf = document.getElementById("cpf").value;
    let email = document.getElementById("email").value;
    let cidade = document.getElementById("cidade").value;

    console.log(nome);
    console.log(cpf);
    console.log(email);
    console.log(cidade);
    
    chamaModal();
})

let titulo = document.querySelector("#titulo"); //Chamando pelo ID por isso a # -> Mais usado no mercado

// let divs = document.querySelectorAll(".cards"); //Pegando elementos da classe cards

console.log(titulo.textContent); // O titulo é um h1 e ele contem um texto nele, que é chamado pelo textContent
console.log(titulo.textContent.length);

// titulo.textContent = "Novo Titulo"; // Mudando o conteudo do texto do h1 - titulo
// console.log(titulo.textContent);

async function getData(){

    const response = await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/distritos')
    const dados = await response.json()

    console.log(dados)
    console.log(dados.length)

    for(var i = 0; i < dados.length; i++){
        document.write("<br>");
        document.write(dados[i].nome)
    }
}

bot.addEventListener('click', getData)
