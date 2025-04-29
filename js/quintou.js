let cadastrar = document.getElementById('cadastrar')
let erros = document.getElementById('erros')

cadastrar.addEventListener('click', async function (event){
    event.preventDefault()

    const formulario = document.getElementById('formulario');

    const formData = new FormData(formulario);

    let dados_php = await fetch('./actions/cad_prod.php',{
        method: 'POST',
        body:formData
    });
    let response = await dados_php.json()

    if(response['error'] == false){
        const modal = document.getElementById('modal')
        modal.classList.remove('oculta')
        modal.classList.add('chama')
    }
    else{
        error = ''
        Object.keys(response).forEach(erro => {
            error += response[erro]
            erros.innerText = error
        })
    }
})

