<!-- include header + navbar -->
<?php include_once('views/header.php'); ?>
<div class="container">
    <!-- Titre -->
    <div class="row"> 
        <h2 class="titre">Inscription</h2>
    </div>
    <!-- Fomulaire -->
    <form action="controllers/index-controller.php" method="post" enctype="multipart/form-data">
        <div class="row p-4">

            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="nom" class="form-control" id="inputname" placeholder="" value="">
                    <label for="floatingInputGrid">Nom</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="prenom" class="form-control" id="inputfname" value="">
                    <label for="floatingSelectGrid">Prénom</label>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="age" class="form-control" id="inputage" value="">
                    <label for="floatingSelectGrid">Age</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <select class="form-select" type="text" name="genre" aria-label="Default select example" value="">
                        <option selected>Genre</option>
                        <option value="1">Homme</option>
                        <option value="2">Famme</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="date" name="date" class="form-control" id="inputdate" value="">
                    <label for="floatingSelectGrid">Date de naissance</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="code" class="form-control" id="inputpostal" placeholder="" value="">
                    <label for="floatingInputGrid">Code postal</label>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <label for="exampleInputEmail1" class="form-label">mail@mail.com</label>
                    <input type="email" name="mail" class="form-control" id="Email1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nous ne partagerons votre e-mail.</div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <div>
                        <label for="formFile" class="form-label">Choisir une photo de profil</label>
                        <input class="form-control" type="file" name="photo" id="formFile">
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-4 pt-2 pb-3">
            <div class="col">
                <button class="btn btn-primary btn-lg" type="submit">Valider</button>
            </div>
    </form>
</div>
</div>

<?php include_once('views/footer.php'); ?>