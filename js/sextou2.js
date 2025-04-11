let buscar = document.getElementById("buscar");

buscar.addEventListener('click', async function(){
    try {
        let dados_php = await fetch("./teste_conn.php");
        let response = await dados_php.json();

        console.log(response);
        console.log(response.status);

        if(response.status == 200){
            alert("Dados coletados com sucesso!")
        }else{
            alert("ERRO")
        }
        
    } catch (error) {
        console.error("Erro na requisição:", error);
        alert("Erro na conexão com o servidor")
    }  
});