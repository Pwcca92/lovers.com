<?php include_once('header.php'); ?>

<!-- Begin of footer -->
<footer class="mt-5">
    <div class="modal fade" id="modalLegalContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Mentions légales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include('legal-content.php'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered modal and cards for the team -->
    <div class="modal fade" id="modalTeam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">Qui sommes nous ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row my-3">
                        <div class="col-6 m-auto">
                            <div class="card">
                                <div class="card-header">
                                    Laurent
                                </div>
                                <div class="card-body text-center">
                                    Concepteur user.php !
                                </div>
                            </div>
                        </div>
                        <div class="col-6 m-auto">
                            <div class="card">
                                <div class="card-header">
                                    Aida
                                </div>
                                <div class="card-body text-center">
                                    Conceptrice index.php !
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-6">
                            <div class="card m-auto">
                                <div class="card-header">
                                    Gregory
                                </div>
                                <div class="card-body text-center">
                                    Concepteur header.php & footer.php !
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card m-auto">
                                <div class="card-header">
                                    Julien
                                </div>
                                <div class="card-body text-center">
                                    Concepteur lovers.php !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-dark fixed-bottom">
        <div class="col justify-content-center mx-auto d-flex justify-content-around">
            <!-- Vertically centered scrollable modal for legal content -->
            <!-- Button trigger modal legal content-->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalLegalContent">
                Mentions légales
            </button>
            <!-- Button trigger modal Team-->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTeam">
                La team
            </button>
        </div>
    </div>

</footer>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Script JS popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- CDN Bootstrap 5.1.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>