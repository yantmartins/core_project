<?php

require '../DB/Database.php';

class Colabora{

    public int $id_colab;
    public string $nome;
    public string $email;
    public string $fone;

    public function cadastrar(){
        //O comando abaixo instancia o banco e conecta com a tabela nele
        $db = new Database('colabora');

        //chama a função insert do banco e passa o Array como parametro
        $res = $db->insert(
            [
                'nome'=>$this->nome,
                'email'=>$this->email,
                'fone'=>$this->fone,
            ]
            );
        return $res;    
    }

    public function buscar($where = null,$order = null,$limit = null){
        $db = new Database('colabora'); 

        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return  $res;
       
    }
    public function buscar_por_id($id){
        $db = new Database('colabora'); 
        $where = 'id_colab ='.$id;
        $res = $db->select($where)->fetchObject(self::class);
        return  $res;        
    }

    public function atualizar(){
        $db = new Database('colabora');
        $res = $db->update(
            'id_colab ='.$this->id_colab,
            [
                "nome" => $this->nome,
                "email" => $this->email,
                "fone" => $this->fone,
            ]
            );
            return $res;
    }


    public function excluir(){
        //O comando abaixo instancia o banco e conecta com a tabela nele
        $db = new Database('colabora');
        $where = 'id_colab ='.$this->id_colab;//Instanciar o objeto com o ID de quem vai ser deletado
        $res = $db->delete($where); //Delete chamando a classe where que chamou o ID a ser deletado
        return $res->rowCount();
    }

}

$objUser = new Colabora();

$enzo = $objUser->buscar_por_id(6);
print_r($enzo);

$enzo->nome = "Arimura ENZOS";
$enzo->email = "takaronomuro@gmail.com";

echo '<br>';
print_r($enzo);

$enzo_atual = $enzo->atualizar();

echo '<br>';
echo $enzo_atual;



// $objColab = new Colabora();
// $objColab->id_colab = 5;

// $retorno = $objColab->excluir();

// if($retorno == "ERRO"){
//     echo 'Excluído com sucesso!';
// }else{
//     echo 'ERRO!!!';
// }

// $objColab->excluir();

// print_r($objColab);

// $colab = new Colabora();
// $colab->nome = "Yan Torres";
// $colab->email = "yantmartins@live.com";
// $colab->fone = "6799999999999";

// echo '<pre>';
// print_r($colab);
// echo '</pre>';

// $result = $colab->cadastrar();

// echo '<br>';
// echo $result;

// $colaboradores = $colab->buscar();

// echo '<pre>';
// print_r($colaboradores);
// echo '</pre>';

// foreach($colaboradores as $func){
//     echo 'ID:'.$func->id_colab. ' | '. $func->nome . ' | ' .$func->email . ' | ' .$func->fone;
//     echo '<br>';
// }