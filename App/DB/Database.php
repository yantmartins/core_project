<?php 

class Database{
    private $conn;
    private string $local='10.28.1.115'; //localhost
    private string $db ='bosque';
    private string $user = 'devweb'; // root
    private string $password = 'suporte@22';
    private string $table;

    function __construct($table = null){
        $this->table = $table;
        $this->conecta();
    }

    private function conecta(){
        try{
            $this->conn = new PDO("mysql:host=".$this->local.";dbname=".$this->db,$this->user,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            // echo "Conectado com sucesso!";
        }catch(PDOException $err){
            die("Connection Failed ".$err->getMessage());
        }
    }

    public function execute($query, $binds = []){
        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);
            return $stmt;
        }catch(PDOException $err){
            die("Connection Failed ".$err->getMessage());
        }
    }

    public function insert($values){
        //VALUES é um array associativo -> tipo um DICIONÁRIO do PYTHON
        $fields = array_keys($values); // quebra o array em 2 partes

        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO '.$this->table. ' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
        
        $res = $this->execute($query, array_values($values));

        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function select($where = null,$order = null,$limit = null,$fields = '*'){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table .' '.$where;

        return $this->execute($query)->fetchAll();
    }

    public function delete($where){
        //montar query
        $query = 'DELETE FROM ' .$this->table.' WHERE '.$where;
        
        //DEBUG
        //echo $query;
        //exit;

        $result = $this->execute($query);
        if($result){
            return true;
        }else{
            return false;
        }
        return $result;
    }
}

