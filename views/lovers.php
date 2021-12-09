<!-- include header + navbar -->
<?php 
include_once('header.php'); 
include('../controllers/lovers-controller.php');
?>



<div class="container pt-5">
    <div class="row">
    <?php 

foreach($femmes as $femme) : ?>
<!-- si la clé existe et a pour valeur "vrai", on affiche -->
<?php if (array_key_exists('is_enabled', $femme) && $femme['is_enabled'] == true): ?>
        <div class="col pt-3">
            <div class="card" style="width: 18rem;">
                <img src="../assets/img/femmes/<?= $femme['picture'] ?>" class="card-img-top" alt="profile picture">
                <div class="card-body">
                    <p class="card-text"><?= $femme['lastname']; ?></p>
                    <p class="card-text"><?= $femme['firstname']; ?></p>
                    <p class="card-text"><?= $femme['age']; ?></p>
                    <p class="card-text"><?= $femme['zipcode']; ?></p>
                    <p class="card-text"><?= $femme['description']; ?></p>

                    <a href="#" class="btn btn-primary">Like</a>
                </div>
            </div>
        </div>
   <?php endif;
endforeach

?>
    </div>
    
</div>


<!-- Footer -->
<?php include_once('footer.php'); ?>