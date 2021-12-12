<!-- include header + navbar -->
<?php 
include_once('header.php');
include('../controllers/lovers-controller.php');
?>

<div class="container pt-5">
    <div class="row">
        <?php 
        // include des cards des prétendant.e.s
    if (isset($_COOKIE['gender2']) && $_COOKIE['gender2'] == "femme" ) { 
        foreach($femmes as $femme) { 
?>
        <div class="col pt-3">
            <div class="card border border-5 border-light" style="width: 18rem;">
                <img src="../assets/img/femmes/<?= $femme['picture'] ?>" class="card-img-top" alt="profile picture">
                <div class="card-body">
                    <p class="card-text"><span class="text-uppercase fw-bold"><?= $femme['lastname']; ?></span> <?= $femme['firstname']; ?>, <span class="small text-end"><?= $femme['age']; ?> ans</span></p>
                    <p class="card-text"><?= $femme['description']; ?></p>
                    <p class="card-text small">Département : <?= $femme['zipcode']; ?></p>
                    <a href="#" class="btn btn-white border border-danger rounded-circle" ><i class="bi bi-heart text-danger"></i></a>
                </div>
            </div>
        </div>
   <?php }
   }

if (isset($_COOKIE['gender2']) && $_COOKIE['gender2'] == "homme" ):
    foreach($hommes as $homme) : 
?>
        <div class="col pt-3">
            <div class="card border border-5 border-light" style="width: 18rem;">
                <img src="../assets/img/hommes/<?= $homme['picture'] ?>" class="card-img-top" alt="profile picture">
                <div class="card-body">
                    <p class="card-text"><span class="text-uppercase fw-bold"><?= $homme['lastname']; ?></span> <?= $homme['firstname']; ?>, <span class="small text-end"><?= $homme['age']; ?> ans</span></p>
                    <p class="card-text"><?= $homme['description']; ?></p>
                    <p class="card-text small">Département : <?= $homme['zipcode']; ?></p>
                    <a href="#" class="btn btn-white border border-danger rounded-circle" ><i class="bi bi-heart text-danger"></i></a>
                </div>
            </div>
        </div>
   <?php endforeach;
   endif

?> 
    </div>
</div>


<!-- Footer -->
<?php include_once('footer.php'); ?>