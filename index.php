<?php

require './App/DB/Database.php';
$banco = new Database('categoria');

//SELECIONA TODOS OS DADOS DO BANCO
 $dados_banco = $banco->select();

 //PRINTA TODOS OS DADOS DO BANCO
 foreach($dados_banco as $linha){
    echo $linha['id_categoria'] .' ' . $linha['descricao']. ' ' . $linha['cor']. ' ' .$linha['icone'];
     echo '<br>';
 }
 echo '<br>';

 $id = 11;
 $dados_para_atualizar = $banco->select('id_categoria = ' . $id[0]);

 $nome = $dados_para_atualizar['descricao'];

$novo_nome = "CHOPERIA";
$dados_para_atualizar['descricao'] = $novo_nome;

$parametro1 = "id_categoria =11";
$res = $banco->update($parametro1,$dados_para_atualizar);






//  foreach($dados_banco as $linha){
//     echo $linha['id_categoria'] .' ' . $linha['descricao']. ' ' . $linha['cor']. ' ' .$linha['icone'];
//     echo '<br>';
// }

// $id = 4;
// $res = $banco->delete('id_categoria = ' .$id);

// if($res == 1){
//     echo '<br>DELETADO COM SUCESSO';
// } else{
//     echo '<br>ERRO AO DELETAR ';    
// }
    
// // print_r($dados_banco);

// foreach($dados_banco as $linha){
//     print_r($linha['id_categoria'] .' '. $linha['descricao'] .' '. $linha['cor']);
//     echo '<br>';
// }


// CONDICIONAL TERNÁRIA ========= TERNO -> 3

// $x = 20;
// $y = 30;

// // $var = (condição) ? 'VERDADE' : 'FALSO'
// $res = ($x < $y) ? 'TRUE' : 'FALSE';

// echo $res;

// $dados = array(
//     'descricao' => 'GATO',
//     'cor' => 'MARROM',
//     'icone' => 'M',
//     'raça' => 'vira-lata',
//     'peso' => 5
// );
// $chaves = array_keys($dados);
// $valores = array_values($dados);

// $parametros = array_pad([],count($chaves),'?');

// print_r($chaves);
// echo '<br>';
// print_r($valores);
// echo'<br>';
// print_r($parametros);

// $query = 'INSERT INTO cliente ('.implode(',',$chaves).') VALUES ('.implode(',',$parametros).')';
// POST - FORMS
// $cat = 'SABONETE';
// $cor = 'VERMELHO';

// $dados = array(
//     'descricao' => $cat,
//     'cor' => $cor,
//     'icone' => 'M'
// );

// $cadastro = $banco->insert($dados);

// if($cadastro){
//     echo 'Cadastrado com Sucesso!!';
// }