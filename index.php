<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>

    <form action="register.php" method="post">
        <input type="email" placeholder="mail" id="mail">
        <input type="text" name="message" placeholder="message" id="message">
        <input type="submit">
    </form>

    <?php
        $email = trim($_POST["mail"]);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'email est bonne !";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'email n'est pas valide !";
        }

        if (isset($_GET['mail'])) {
            echo " Il y a eu une erreur lors de l'envoie du mail !";
        }
        elseif (isset($_GET["message"])){
            echo " Le mail a été envoyé avec succés !";
        }
    ?>

</body>
</html>