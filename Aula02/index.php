<?php
//Variáveis, tipos de dados e referência.
//Variável é uma representação de um valor.
//=============================
//string: tudo entre ' ' ou " " - "Olá!" - '19'
echo gettype("Oi");
//numbers - intergers, float(double): números
echo gettype(20);
//booleans: True ou False
echo gettype(True);
//arrays: lugar onde pode colocar vários tipos de valores: strings, numeros, booleanos etc.
echo gettype(['kkkk', 12]);
//objects:

//null: ausência de valor
echo gettype(null);
//==========================
//Para criar variável começa com $. Ela deve começar com letra ou "_"
$name = 'Gustavo'; //string
$number = 19; //int
echo gettype($number); //int
//Padrões para criar variáveis compostas
//CamelCase 
$myName = "Gustavo";
//Snake_case :
$my_name = "Gustavo";
//Escolher um padrão para seguir.
//==============================
//Referência
$nome = "Alexandre";
$meuNome = &$nome; //Passando o $nome para o $meuNome como referência ao mesmo ponto na memória
$nome = "João";
echo $nome;
echo $meuNome;
//Criar o nome da variável de acordo com o valor que estará dentro dela.
?>