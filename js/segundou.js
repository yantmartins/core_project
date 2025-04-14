function chamaModal(){
    form_categoria.classList.remove("oculta");
    form_categoria.classList.add("chama");
}

let form_categoria = document.querySelector('#form_categoria');
let bot_categoria = document.querySelector('.btn_cad');

bot_categoria.addEventListener('click', function(){

    chamaModal();

    const formulario_modal = document.querySelector('#form_categoria');

    formulario_modal.bot_cadastrar_categoria.addEventListener('click', async function(event){
        
        event.preventDefault();

        var descricao = formulario_modal.descricao.value;
        var cor = formulario_modal.cor.value;
        var icone = formulario_modal.icone.value;
        
        let dados_php = await fetch('./index.php',{
            method: 'POST',
            body: formulario_modal
        });
        
        let response = await dados_php.json();

        console.log(response);


    })
})