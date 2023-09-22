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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    </head>
    
    <body class="container" id="a" style="background-image: url('img/e6e48ff71c621a0b61e39025ecdd3912-gpLarge.jpg'); background-repeat: no-repeat; background-size: cover;">
        
    <div class="container-fluid">
           <br>
      </div>
        <header>
            <nav class = "navbar" navbar-expand bg-dark>
                <a class="navbar-brand" href="#"><strong>Biblioteca</strong></a>
        </header>
    
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
                        <input type="submit" value ="logar" class="bnt btn-success">
                       
                    </td>
            
        </fieldset>
        
         <?php
         include('teste.php');
         $login = new Login();
         $user = new User();
    
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
            session_start();
            

            @$matricula = $_POST['matricula'];
            @$senha = $_POST['senha'];
            
            if(empty($matricula)||empty($senha)){
                echo ('<div class = " alert alert-danger" role="alert"> Todos os campos são obrigatórios');
            }
            else{
                //$matricula_digitada = $_POST['matricula'];
                //$senha_digitada = $_POST['senha'];
                //echo $login->login($matricula, $senha);
                if ($login->login($matricula, $senha)) {
                    // Usuário e senha válidos, redirecione para a página de sucesso
                    $user->createUser($login->matriculaPassou, $login->senhaPassou, $login->emailPassou);
                    $_SESSION['user'] = $user;
                    header("Location: pagina2.php");
                    //exit(); // Certifique-se de encerrar o script após a redireção
                } 
                else {
                    // Usuário ou senha incorretos, exiba uma mensagem de erro
                    echo "Usuário ou senha incorretos. Tente novamente.";
                }
            
            }

            
        }
         

        // Verifique se o usuário e a senha coincidem com os dados armazenados
    


        ?>
    </body>
</html>
