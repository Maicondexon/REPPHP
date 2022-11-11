<?php
require_once '../authenth/login.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/presentation.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<div class="container">
<body>
    <section><img src="<?php echo $user->getPicture(); ?>" alt=""></section>
    <section id="documento">
    <h2><p>Nome: <?php echo $user->getName(); ?></p><h2>
    <h2><p>E-mail: <?php echo $user->getEmail(); ?></p><h2>
    <h2><p>CPF: <?php echo $user->getCpf(); ?></p><h2>
    </section>
    <section>
    <form >
    <textarea name='content' rows='10' cols='150' maxlength='800' style='resize: none;'></textarea >
       
    </form>
    </section>
    </div> 
    <div>
        <form action="../structure/presentation.php" method="post">
        <input type="submit" value="próxima página" class="botao">
         </form>
    </div>
</body>
</html>