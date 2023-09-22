<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro da Biblioteca</title>
        <style>
            #a {
                background: gray;
            }
            body{
                color:black;
            }
            p{
                color:black;
            }

            input, select, textarea {
                border-radius: 5px;
            }
        </style>
        <style>
            /* Defina o estilo do corpo (body) para incluir a imagem de fundo */
            body {
                background-image: url('img/livro.jpg'); /* Substitua 'caminho/para/sua/imagem.jpg' pelo caminho real da sua imagem */
                background-size: cover; /* Isso faz com que a imagem cubra todo o fundo */
                background-repeat: no-repeat; /* Evita que a imagem seja repetida */
                background-attachment: fixed; /* Fixa a imagem de fundo para que ela não role com a página */
            }

        </style>

        <link href ="css/bootstrap.min.css " rel="stylesheet" type="text/css"/> 

    </head>

    <body class="container" id="a">


        <div>
            <p align ="center">
                <b><h3>Login</h3></b>
        </div>
        <form method="post" action="pagina2.php">
            <br> 
            </br> 
            <fieldset>
                <br>
                <label> Nome</label> 
                <input type= "text" name="nome" class="form-control" id="cliente" placeholder="digite seu nome completo" >

                <br>
                <label>Matrícula</label> 
                <input type="float" name="matricula" class="form-control" id="matricula" placeholder="digite o número da sua matrícula" >
                <br>
                <td>Bibliotecas</td>
                <select id="bibliotecas" name="bibliotecas">
                    <option>BC</option>
                    <option>BSCAL</option>
                    <option>BSCCNE</option>
                    <option>BSCCSH</option>
                    <option>BSCE</option>
                    <option>BSCEFD</option>
                    <option>BSCT</option>
                    <option>BSCTISM</option>
                    <option>BSCP</option>
                    <option>BSCS</option>

                </select>
                <br>
                <br>
                <label>Título da obra</label>
                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="digite o título da obra">
                <label>Autor</label> 
                <input type="text" name="autor" class="form-control" id="autor" placeholder="digite o nome do autor">
                <br>
                <input type="submit" class="btn btn-success" value="Salvar">

                <!-- <div class= "data">
                 <label>Data: </label>
                  <input type="date" class="form-control" id="data">
                 </div>-->
                <br>
                <?php
                session_start();
                if (isset($_SESSION['user'])) {
                    require_once './teste.php';
                    $user = new User();
                    $user = $_SESSION['user'];
                    //var_dump($user);
                }
                if ($_POST) {

                    @$nome = $_POST['nome'];
                    @$matricula = $_POST['matricula'];
                    @$bibliotecas = $_POST['bibliotecas'];
                    @$autor = $_POST['autor'];
                    @$email = $_POST['email'];

                    print_r($_POST);
                                      
                    if (empty($nome) || empty($matricula) || empty($bibliotecas)|| empty($titulo)|| empty($autor) || empty($email)) {
                        echo ('<div class = "alert alert-danger" role="alert"> Todos os campos são obrigatórios.</div>');
                    } else {
                        echo('<fieldset>');
                        echo ('<legend>');
                        echo ('Dados Cadastrados');
                        echo ($nome);
                        echo ($matricula);
                        echo($bibliotecas);
                        echo ($titulo);
                        echo ($autor);
                        echo ($email);
                        echo('</legend>');
                        echo ('</fieldset>');
                    }
                }
                ?>
