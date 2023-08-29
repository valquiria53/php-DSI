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
        <form method="post" action="index.php">
        <br> 
        </br> 
        <fieldset>
            <br>
            <label>Matrícula</label> 
                <input type="float" name="matricula" class="form-control" id="matricula" placeholder="digite o número da sua matrícula" >
                <br>
                    
                 <label>e-mail</label> 
                <input type="text" name="email" class="form-control" id="email" placeholder="digite seu e-mail" >
            <br>
                  <label> Senha</label>
                  <input type="text" name="senha" class="form-control" id="senha" placeholder="digite sua senha">
            <td> 
            <br>
                        <input type="submit" value ="logar">
                    </td>
            
        </fieldset>
        
         <?php
         include('teste.php');
         $user = new Login();
    
        // if ($_REQUEST) {
        //     if (isset($_REQUEST['cod'])) {
        //         $cod = $_REQUEST['cod'];
        //         if ($cod == 'error') {
        //             echo('<div class="d-grid">');
        //             echo('<div class="alert alert-danger">');
        //             echo('Usuário ou senha inválidos!');
        //             echo('</div>');
        //             echo ('</div>');
        //     }else if($cod == '172'){
        //         echo('<div class="d-grid">');
        //         echo('<div class="alert alert-warning">');
        //         echo('Sua sessão expirou!');
        //         echo('</div>');
        //         echo ('</div>');
        //     }
        // }
        // }
        if($_POST){
            @$matricula = $_POST['matricula'];
            @$senha = $_POST['senha'];
            
            if(empty($matricula)||empty($senha)){
                echo ('<div class = "alert"> Todos os campos são obrigatórios');
            }
            else{
                $matricula_digitada = $_POST['matricula'];
                $senha_digitada = $_POST['senha'];

                $user->login($matricula_digitada, $senha_digitada);
                
                if ($user->passou) {
                    // Usuário e senha válidos, redirecione para a página de sucesso
                    header("Location: pagina2.php");
                    exit(); // Certifique-se de encerrar o script após a redireção
                } 
                else {
                    // Usuário ou senha incorretos, exiba uma mensagem de erro
                    if ($user->passou){
                        echo "passou";
                    }
                    else{
                        echo "nao";
                    }
                    echo "Usuário ou senha incorretos. Tente novamente.";
                }
            
            }

            
        }
         

        // Verifique se o usuário e a senha coincidem com os dados armazenados
    


        ?>
    </body>
</html>
