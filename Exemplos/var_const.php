<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const_var</title>
</head>
<body>
    <?php 
       /*var aluno = "nome"; 
       int = numero, 
       string= caractere,
        boleano = true/false, 
        float = 0.0 */ 

       $aluno = "Arnoldo shuaseneguer";  
       $idade = "130 anos";

       /*const inicia com a palavra "define" entre aspas duplas
       1º constante
       2º valor */

              define("instituicao", "centro de educacao tec. do amazonas");

    echo "Olá Aluno,  $aluno $idade bem vindo ao cetam " . instituicao 
    
    
    ?>

</body>
</html>