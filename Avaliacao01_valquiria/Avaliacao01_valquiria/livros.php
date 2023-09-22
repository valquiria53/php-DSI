<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tabelaLivros = array(
            array('livros' => 'livro 1', 'autor' => 'fulano', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
            array('livros' => 'livro 2', 'autor' => 'fulano 2', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
            array('livros' => 'livro 3', 'autor' => 'fulano 3', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
            array('livros' => 'livro 4', 'autor' => 'fulano 4', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
            array('livros' => 'livro 5', 'autor' => 'fulano 5', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
            array('livros' => 'livro 6', 'autor' => 'fulano 6', 'biblioteca' => 'fadfad', 'data' => '12/05/2023'),
        );
        
        foreach ($tabelaLivros as $indice => $valor) {
            echo '<p>'.$valor['autor'].'</p>';
        }
        
        //pega do banco de dados (foreach) 
        ?>
    </body>
</html>
