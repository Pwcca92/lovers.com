<!-- include header + navbar -->
<?php include('views/header.php'); ?>

<div class="container mt-2 d-flex justify-content-center">
    <!-- Titre -->
    <div class="card w-75">
        <div class="card-header">
            <div class="row">
                <h2 class="title">Inscription</h2>
            </div>
        </div>

        <div class="card-body">
            <!-- Fomulaire -->
            <form action="/controllers/index-controller.php" method="post" enctype="multipart/form-data">
                <div class="row p-2">
                    <div class="col-lg-6 col-sm-12 sm-py-2 py-auto">
                        <div class="form-floating">
                            <input type="text" name="lastname" class="form-control" id="inputname" placeholder="" value="">
                            <label for="floatingInputGrid">Nom</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 sm-py-2 py-auto">
                        <div class="form-floating">
                            <input type="text" name="firstname" class="form-control" id="inputfname" value="">
                            <label for="floatingSelectGrid">Prénom</label>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-lg-6 col-sm-12 py-auto">
                        <div class="form-floating">
                            <select class="form-select" type="text" name="gender1" aria-label="Default select example" value="">
                                <option selected value="homme">Homme</option>
                                <option value="femme">Femme</option>
                            </select>
                            <label for="floatingSelectGrid">Votre genre :</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 py-auto">
                        <div class="form-floating">
                            <select class="form-select" type="text" name="gender2" aria-label="Default select example" value="">
                                <option value="homme">Homme</option>
                                <option selected value="femme">Femme</option>
                            </select>
                            <label for="floatingSelectGrid">Vous recherchez :</label>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-lg-6 col-sm-12 py-auto">
                        <div class="form-floating">
                            <input type="date" name="age" class="form-control" id="inputdate" value="">
                            <label for="floatingSelectGrid">Date de naissance</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 py-auto">
                        <div class="form-floating">
                            <input type="text" name="zipcode" class="form-control" id="inputpostal" placeholder="" value="">
                            <label for="floatingInputGrid">Code postal</label>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-lg-6 col-sm-12 py-auto">
                        <div class="form-floating">
                            <input type="email" name="mail" class="form-control" id="Email1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text text-center">Nous ne partagerons pas votre e-mail.</div>
                            <label for="floatingInputGrid">Votre mail</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="row px-3 pt-1 pb-1">
                    <div class="col d-flex flex-row-reverse">
                        <button class="btn btn-primary btn-lg" type="submit">Valider</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once('views/footer.php'); ?>