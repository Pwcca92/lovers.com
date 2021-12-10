<!-- include header + navbar -->
<?php include_once('views/header.php');
session_start();
 ?>
<div class="container">
    <!-- Titre -->
    <div class="row">
        <h2 class="titre">Inscription</h2>
    </div>
    <!-- Fomulaire -->
    <form action="controllers/user-controller.php" method="post" enctype="multipart/form-data">
        <div class="row p-4">

            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="lastname" class="form-control" id="inputname" placeholder="" value="">
                    <label for="inputname">Nom</label>
                   
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="firstname" class="form-control" id="inputfname" value="">
                    <label for="inputfname">Prénom</label>
                   
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <select class="form-select" type="text" name="gender1" aria-label="Default select example" value="">
                        <option selected>Vous êtes</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <select class="form-select" type="text" name="gender2" aria-label="Default select example" value="">
                        <option selected>Vous recherchez</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="date" name="age" class="form-control" id="inputdate" value="">
                    <label for="inputdate"></label>  
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <input type="text" name="zipcode" class="form-control" id="inputpostal" placeholder="" value="">
                    <label for="inputpostal">Code postal</label>    
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-lg-6 col-sm-12 py-2">
                 
                <div class="form-floating">                  
                    <input type="email" name="mail" class="form-control" id="email" aria-describedby="emailHelp">
                    <label for="email" class="form-label">mail@mail.com</label>
                    <div id="emailHelp" class="form-text">Nous ne partagerons votre e-mail.</div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 py-2">
                <div class="form-floating">
                    <div>
                        <label for="formFile" class="form-label">Choisir une photo de profil</label>
                        <input class="form-control" type="file" name="picture" id="formFile">
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