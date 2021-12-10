<!-- include header + navbar -->
<?php include_once('header.php'); ?>


<div class="container">
    <div class="card-body" style="height:640px">
        <div class="row gutters-sm">
            <!-- Colonne 1-->
            <div class="col">
                <div class="card-body bg-secondary py-5 text-light" style="height:500px">
                    <div class="card-title text-center">
                        <h1>Votre profil</h1>
                    </div>
                    <div class="text-center py-4">
                        <!--image-->
                        <img src="../assets/img/julieDupont.jpeg" alt="Julie Dupont" class="rounded-circle" width="150">
                    </div>
                    <div class="card-text text-center py-4">
                        <div class="card-subtitle">
                        <h2><?php echo $_COOKIE['firstname']." ".$_COOKIE['lastname']?></h2>
                        </div>
                        <div class="card-text">
                        <?php echo $_COOKIE['age']?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Colonne 2-->
            <div class="col">
                <div class="card-body pt-5 p-sm-5" style="height:500px">
                    <p class="card-text py-sm-4"><?php echo $_COOKIE['zipcode']?></p>
                    <p class="card-text py-sm-4"><?php echo $_COOKIE['mail']?></p>
                    <p class="card-text py-sm-4"><?php echo "Je recherche un ".$_COOKIE['gender2']?></p>
                    <div class="card-text text-danger pt-5 pb-3"><span class="pe-4"><i
                                class="bi bi-cloud-slash-fill"></i></span><a href="#"
                            class="text-decoration-none text-secondary">effacer mes traces</a></div>
                    <div class="card-text py-3 text-danger"><span class="pe-4"><i class="bi bi-coin"></i></span><a
                            href="#" class="text-decoration-none text-secondary">Take my money</a></div>
                    <div class="card-text pt-3 text-danger"><span class="pe-4"><i
                                class="bi bi-x-circle-fill"></i></span><a href="#"
                            class="text-decoration-none text-secondary">Deconnexion</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once('footer.php'); ?>