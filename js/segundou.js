function chamaModal(){
    form_categoria.classList.remove("oculta");
    form_categoria.classList.add("chama");
}

function fechaModal(){
    form_categoria.classList.remove("chama");
    form_categoria.classList.add("oculta");
}

let form_categoria = document.querySelector('#form_categoria');
//Capturamos o FORM

let bot_categoria = document.querySelector('.btn_cad');
//Capturamos o BUTTON de Categoria

bot_categoria.addEventListener('click', function(){

    chamaModal();

    let bot_cadastrar_categoria = document.getElementById('bot_cadastrar_categoria');

    bot_cadastrar_categoria.addEventListener('click', async function(event){

        event.preventDefault();
        const new_form = document.getElementById('form_categoria');

        const formData = new FormData(new_form); //convertendo o formulario para enviar ao PHP

        //console.log(new_form.descricao.value);

        let dados_php = await fetch('./actions/cadastrar_categoria.php',{
            method: 'POST',
            body:formData
        });

        let response = await dados_php.json();

        console.log(response);
        if(response.status == "OK"){
            alert("CADASTRADO COM SUCESSO")
            fechaModal();
        }
    })   
})