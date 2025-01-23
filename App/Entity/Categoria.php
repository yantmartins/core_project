<?php

require '../DB/Database.php';

class Categoria{
    public int $id_categoria;
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
    public function buscar($where = null,$order = null,$limit = null){

        return (new Database('categoria'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
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

$categorias = $cate->buscar();

echo '<pre>';
print_r($categorias);
echo '</pre>';

foreach($categorias as $categ){
    echo 'ID:'.$categ->id_categoria. ' | '. $categ->descricao . ' | ' .$categ->cor . ' | ' .$categ->icone;
    echo '<br>';
}