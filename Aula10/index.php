<?php
//=========Tipos de dados - Booleanos
//True , false
//Usando os valores booleanos puros
$_SESSION['loged'] = false;

$_SESSION['loged'] = true;

if($_SESSION['logged']){
// se estiver logado[...]
    echo 'É verdadeiro';
}

//Com valores que se comportam como booleanos

$name = "Gustavo";
$logged = false;
$idade = 19;

if ($name === "Gustavo" && $age > 18 && $logged === true) {
    echo "É verdadeiro";
}else{
    echo "É falso";
}
//===============Strings
//Tudo entre '' e "" são strings

$nome = "Gustavo";
echo gettype($nome); //Retorna string

//usar "" quando quiser utilizar uma variável dentro de uma string

$idade = 19;
$nome = "Gustavo $idade";
echo $nome;
//================Numbers
//34 inteiro
//34.45 double/float
echo gettype(34);
echo gettype(34.45);
$number1 = 34;
$number2 = 44;
if(is_numeric($number1) && is_numeric($number2)) {//função verifica se é número
    echo 'é numérico';
} else {
    echo 'não é numérico';
}
// função ceil arredonda para cima
echo ceil(34.12);
echo floor(34.12); //arredonda para baixo
//===================Arrays
//Guardar mais de 1 valor dentro de uma variável
$data = ['Gustavo', 'joao', 'maria', 34, true];
print_r($data); //Resgatar valores dentro do array
var_dump($data); //resgatar todos
var_dump($data[0]); //resgatar valor específico com o índice.
$data[4] = 'teste'; //Adiciona elemento 'teste' no índice 4
var_dump($data);
$lenght = count($data); //Contar o número de elementos do array, começa pelo 1
array_push($data, 'oi');
var_dump($data);
//Array dentro de array
$pessoa = ['nome' => 'Gustavo', 'idade' => '19', 'documentos' => ['cpf' => '99999', 'rg' => '00000']];
var_dump($pessoa['documentos']);

?>