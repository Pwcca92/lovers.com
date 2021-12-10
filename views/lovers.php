<!-- include header + navbar -->
<?php 
$url = "lovers";
include_once('header.php'); 
?>



<div class="container pt-5">
    <div class="row">
        <?php 
        // include des cards des prétendant.e.s
        include("../controllers/lovers-controller.php") 
        ?>
    </div>
</div>


<!-- Footer -->
<?php include_once('footer.php'); ?>