var x = 10;
var y = 20;

var res = x + y;

// TIPO DE PRINTS EM JAVASCRIPT
 // alert(res);
 // document.write(res);
 // console.log(res);

console.log(res); 

var titulo = document.getElementById("titulo");

var botao_cancel = document.getElementById("cancelar");

// Colocar a função onclick direto no html apos criar a funcao no javascript

// botao_cancel.addEventListener('click',alerta) chamar a funcao pelo addEvent...

// ou criar a funcao diretamente no addEventListener



var lista = ["Limão", "Maçã", "Pera", "Banana"];

for(var i = 0; i < lista.length; i++){

    console.log(lista[i]);
}

var pessoa = {}

console.log(typeof(pessoa));

pessoa.nome = "Yan";
pessoa.fone = "67999999999";
pessoa.cidade = "Campo Grande";
pessoa.email = "yantmartins@live.com";

console.log(pessoa);

var empresa = [{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},{
    "nome": "SPLIT AIR",
    "cidade": "Campo Grande",
    "estado": "MS",
    "fone": "33333333",
    "cnpj": "55555555555"
},
]

console.log(empresa.cidade);

for(var i = 0; i < empresa.length; i++){
    console.log( empresa[i].nome, empresa[i].fone )

}

var div = document.getElementById("minhadiv");

div.addEventListener('mouseover', function(){

    div.style.backgroundColor = 'cyan';
});

div.addEventListener('mouseout', function(){

    div.style.backgroundColor = 'purple';
});

botao_cancel.addEventListener('dblclick', function(){
    console.log("Clicou");
})

var cpf = document.getElementById("cpf");

cpf.addEventListener('keypress', function(event){

    console.log(cpf.value);
})