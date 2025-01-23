<?php

require '../DB/Database.php';

class Categoria{
    public int $id;
    public string $descricao;
    public string $cor;
    public string $icone;

    public function cadastrar(){
        
        $db = new Database('categoria');

        $db->insert(
            [
                'descricao'=>$this->descricao,
                'cor'=>$this->cor,
                'icone'=>$this->icone,
            ]
            );
        return true;    
    }

}

$cate = new Categoria();
$cate->descricao = 'ESTETICA';
$cate->cor = 'FUCSIA';
$cate->icone = 'J';

echo '<pre>';
print_r($cate);
echo '</pre>';

$result = $cate->cadastrar();

echo '<br>';
echo $result;