<!DOCTYPE html>
<html lang="en">

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
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-1">
                            <div class="card-col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="./assets/image/MyAnimeList_Logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1"></h4>
                                    </div>
                                    <!-- connexin php -->
                                    <?php
                                    require('connect.php');
                                    session_start();

                                    if (isset($_POST['username'])) {
                                        $username = stripslashes($_REQUEST['username']);
                                        $username = mysqli_real_escape_string($conn, $username);
                                        $password = stripslashes($_REQUEST['password']);
                                        $password = mysqli_real_escape_string($conn, $password);
                                        $query = "SELECT * FROM `users` WHERE username='$username' and password='" . hash('sha256', $password) . "'";
                                        $result = mysqli_query($conn, $query) or die(mysql_error());
                                        $rows = mysqli_num_rows($result);
                                        if ($rows == 1) {
                                            $_SESSION['username'] = $username;
                                            header("Location: index.php");
                                        } else {
                                            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                                        }
                                    }
                                    ?>
                                    <form action="home.php" method="post">


                                        <p class="text-white">Veuillez vous connecter à votre compte</p>

                                        <div class="form-outline mb-4">
                                            <input type="username" id="username" class="form-control" placeholder="username address" />
                                            <label class="form-label" style="color: #eee;" for="username">Nom
                                                d'utilisateur</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" />
                                            <label class="form-label" style="color: #eee;" for="password">Mot de
                                                passe</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Se connecter</button>
                                            <a class="text-white" class="text-muted" href="#!"> Mot de passe oublié?</a>
                                        </div>
                                        <?php if (!empty($message)) { ?>
                                            <p class="errorMessage"><?php echo $message; ?></p>
                                        <?php } ?>
                                        <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger">Create new</button>
                                        </div> -->

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do
                                        eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>