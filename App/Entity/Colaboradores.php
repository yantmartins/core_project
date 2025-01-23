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
        $db->insert(
            [
                'nome'=>$this->nome,
                'email'=>$this->email,
                'fone'=>$this->fone,
            ]
            );
        return true;    
    }

    public function buscar($where = null,$order = null,$limit = null){

        return (new Database('colabora'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    

}

$colab = new Colabora();
$colab->nome = "Yan Torres";
$colab->email = "yantmartins@live.com";
$colab->fone = "6799999999999";

echo '<pre>';
print_r($colab);
echo '</pre>';

$result = $colab->cadastrar();

echo '<br>';
echo $result;

$colaboradores = $colab->buscar();

echo '<pre>';
print_r($colaboradores);
echo '</pre>';

foreach($colaboradores as $func){
    echo 'ID:'.$func->id_colab. ' | '. $func->nome . ' | ' .$func->email . ' | ' .$func->fone;
    echo '<br>';
}