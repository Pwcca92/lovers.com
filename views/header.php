<!-- Add include of the php controller -->

<!--  End of php controller -->

<?php 
    $page = "home";
    $url = "";
    if ($page != $url) {
        $urlLovers = '../views/lovers.php';
        $urlUser = '../views/users.php';
        $urlIndex = "/index.php";
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />

    <title>Lovers.com</title>
</head>

<body>
    <!-- Header 2 rows -->
    <header>
        <div class="container-full p-2 mx-auto bg-dark">
            <h1 class="text-light text-center fs-1"><i class="bi bi-heart align-middle"></i> Amour, Gloire et Bébé <i class="bi bi-heart align-middle"></i></h1>
            <p class="text-muted text-center">
                Laissez l'amour venir à vous grâce à la magie de Cupidon !
            </p>
        </div>
    </header>

    <!-- Add a navbar -->
    <nav class="navbar px-5 pt-0 navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="<?= $urlIndex ?>"><i class="bi bi-heart-fill"></i> Lovers.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- if $user is not set this items collapse  -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $urlLovers ?>">Nos Célibataires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $urlUser ?>">Mes informations</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Begin of body -->