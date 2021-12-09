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
            <div class="card border border-5 border-light" style="width: 18rem;">
                <img src="../assets/img/femmes/<?= $femme['picture'] ?>" class="card-img-top" alt="profile picture">
                <div class="card-body">
                    <p class="card-text"><span class="text-uppercase fw-bold"><?= $femme['lastname']; ?></span> <?= $femme['firstname']; ?>, <span class="small text-end"><?= $femme['age']; ?> ans</span></p>
                    <p class="card-text"><?= $femme['description']; ?></p>
                    <p class="card-text small"><?= $femme['zipcode']; ?></p>
                    <a href="#" class="btn btn-danger rounded-circle" ><i class="bi bi-heart"></i></a>
                </div>
            </div>
        </div>
   <?php endif;
endforeach
?>

<?php 

foreach($hommes as $homme) : ?>
<!-- si la clé existe et a pour valeur "vrai", on affiche -->
<?php if (array_key_exists('is_enabled', $homme) && $homme['is_enabled'] == true): ?>
        <div class="col pt-3">
            <div class="card border border-5 border-light" style="width: 18rem;">
                <img src="../assets/img/hommes/<?= $homme['picture'] ?>" class="card-img-top" alt="profile picture">
                <div class="card-body">
                    <p class="card-text"><span class="text-uppercase fw-bold"><?= $homme['lastname']; ?></span> <?= $homme['firstname']; ?>, <span class="small text-end"><?= $homme['age']; ?> ans</span></p>
                    <p class="card-text"><?= $homme['description']; ?></p>
                    <p class="card-text small"><?= $homme['zipcode']; ?></p>
                    <a href="#" class="btn btn-danger rounded-circle" ><i class="bi bi-heart"></i></a>
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