<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

    <img class="image" src="./areaAdm/loginAdm/img/fundo.jpg">

    <div class="formulas">
        
        <div class="desgraca">
            <img class="logo" src="./areaAdm/loginAdm/img/logo.png">                                        

            <h1>Login Adm</h1>

            <form method="post" action="./areaAdm/loginAdm/login/valida_login.php">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">

                <?php if (isset($_GET['login']) && $_GET['login'] == "erro"){
                    ?>

                    <div class="text-danger">
                        Usuário ou senha invalido(s)
                    </div>
                <?php    
                }
                ?>

                <button type="submit" name="botao">Entrar</button>
            </form>
        </div>
    
    </div>

</body>
</html>