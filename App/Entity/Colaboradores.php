<?php

require './App/DB/Database.php';

class Colabora{

    public int $id_colab;
    public string $nome;
    public string $email;
    public string $fone;
    // public string $foto;

    public function cadastrar(){
        //O comando abaixo instancia o banco e conecta com a tabela nele
        $db = new Database('colabora');

        //chama a função insert do banco e passa o Array como parametro
        $res = $db->insert(
            [
                'nome'=> $this->nome,
                'email'=> $this->email,
                'fone' => $this->fone,
                // 'foto' => $this->foto
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
        return $res;
    }

}