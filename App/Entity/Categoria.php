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
    
    public function buscar_por_id($id){
        $db = new Database('categoria'); 
        $where = 'id_categoria ='.$id;
        $res = $db->select($where)->fetchObject(self::class);
        return  $res;        
    }

    public function atualizar(){
        $db = new Database('categoria');
        $res = $db->update(
            'id_categoria ='.$this->id_categoria,
            [
                "descricao" => $this->descricao,
                "cor" => $this->cor,
                "icone" => $this->icone,
            ]
            );
            return $res;
    }
    public function excluir(){
        //O comando abaixo instancia o banco e conecta com a tabela nele
        $db = new Database('categoria');
        $where = 'id_categoria ='.$this->id_categoria;
        $res = $db->delete($where); //Instanciar o objeto com o ID de quem vai ser deletado
        return $res;
    }


}
// $objCate = new Categoria();
// $objCate->id_categoria = 15;

// $retorno = $objCate->excluir();

// if($retorno == "ERRO"){
//     echo 'Excluído com sucesso!';
// }else{
//     echo 'ERRO!!!';
// }

// $objCate->excluir();

// $cate = new Categoria();
// $cate->descricao = 'ESTETICA';
// $cate->cor = 'FUCSIA';
// $cate->icone = 'J';

// echo '<pre>';
// print_r($cate);
// echo '</pre>';

// $result = $cate->cadastrar();

// echo '<br>';
// echo $result;

// $categorias = $cate->buscar();

// echo '<pre>';
// print_r($categorias);
// echo '</pre>';

// foreach($categorias as $categ){
//     echo 'ID:'.$categ->id_categoria. ' | '. $categ->descricao . ' | ' .$categ->cor . ' | ' .$categ->icone;
//     echo '<br>';
// }