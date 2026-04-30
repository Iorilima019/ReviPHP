<?php
//1
echo '<pre>';
echo '1. Primeiro Código:', '<br>';
echo "Iniciando estudos em PHP";
echo '<hr>';

//2
echo '2.Variáveis Simples:', '<br>';
$escola = 'Senac Americana';
echo $escola , '<br>';
echo '<hr>';

//3
echo '3. Comentários:', '<br>';
echo '//Exemplo de comentário'; 
echo '<hr>';

//4
 echo '4.Tipos de impressões:', '<br>';
$numeros = [10, 20, 30];
echo '<pre>';
print_r ($numeros);
echo '</pre>';
echo '<hr>';

//5
echo '5. Acesso ao índice:', "<br>";
$frutas = ['Maçã', 'Banana', 'Laranja'];
echo $frutas[1] , '<br>';
echo '<hr>';

//6
echo '6. Constantes', '<br>';
define ('PI', 3.14);
var_dump(PI);
echo '<hr>';

//7
echo '7. Array associativa', '<br>';
$aluno = [
    'nome' => 'Elise',
    'curso' => 'Informatica',
    'idade' =>  19
];
echo 'O aluno ';
echo $aluno['nome'];
echo ' estuda ';
echo $aluno['curso'];

//8
echo '';


?>