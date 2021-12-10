     <!-- include header + navbar -->
     <?php include_once('views/header.php'); ?>
     <!--  -->
     <forme>
         <div class="container">
             <div class="row">
                 <h2 class="titre">inscription</h2>

             </div>
             <div class="row p-4">
                 <div class="col">
                     <div class="form-floating">
                         <input type="lastname" class="form-control" id="inputname" placeholder="" value="DOE">
                         <label for="floatingInputGrid">Nom</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-floating">
                         <input type="firstname" class="form-control" id="inputfname" value="John">
                         <label for="floatingSelectGrid">Prénom</label>
                     </div>
                 </div>
             </div>
             <div class="row p-4">
                 <div class="col">
                     <div class="form-floating">
                         <input type="text" class="form-control" id="inputage" value="33ans">
                         <label for="floatingSelectGrid">Age</label>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-floating">
                         <select class="form-select" aria-label="Default select example" value=" Gender">
                             <option selected>Gender</option>
                             <option value="1">Homme</option>
                             <option value="2">Famme</option>
                         </select>
                     </div>
                 </div>
             </div>

             <div class="row p-4">
                 <div class="col">
                     <div class="form-floating">
                         <div class="form-floating">
                             <input type="date" class="form-control" id="inputdate" value="30/03/1995">
                             <label for="floatingSelectGrid">Date de naissance</label>
                         </div>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-floating">
                         <input type="text" class="form-control" id="inputpostal" placeholder="" value="80000">
                         <label for="floatingInputGrid">Code postal</label>
                     </div>
                 </div>
             </div>

             <div class="row p-4">
                 <div class="col">
                     <div class="form-floating">
                         <label for="exampleInputEmail1" class="form-label">mail@mail.com</label>
                         <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
                         <div id="emailHelp" class="form-text">Nous ne partagerons votre e-mail.</div>
                     </div>
                 </div>
                 <div class="col">
                     <div class="form-floating">
                         <div>
                             <label for="formFile" class="form-label">Choisir une photo de profile</label>
                             <input class="form-control" type="file" id="formFile">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row px-4 y-5">
                 <div class="col ">
                     <button class="btn btn-primary btn-lg" type="submit">Valider</button>
                 </div>
             </div>
         </div>
     </forme>
     <?php include_once('views/footer.php'); ?>