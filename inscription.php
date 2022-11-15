<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    require('config.php');
    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '" . hash('sha256', $password) . "')";
        // Exécute la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
        }
    } else {
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title"><a href="https://waytolearnx.com/">WayToLearnX.com</a></h1>
            <h1 class="box-title">S'inscrire</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
            <input type="text" class="box-input" name="email" placeholder="Email" required />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
            <input type="submit" name="submit" value="S'inscrire" class="box-button" />
            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
        </form>
    <?php } ?>
</body>

</html>a
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php
    require('connect.php');
    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '" . hash('sha256', $password) . "')";
        // Exécute la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
        }
    } else {
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title"><a href="https://waytolearnx.com/">WayToLearnX.com</a></h1>
            <h1 class="box-title">S'inscrire</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
            <input type="text" class="box-input" name="email" placeholder="Email" required />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
            <input type="submit" name="submit" value="S'inscrire" class="box-button" />
            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
        </form>
    <?php } ?>
</body>

</html>a