<?php include "inc/header.php"; ?>

<div class="container">
    <div class="row ">
        <div class="col-12  ">
        </div> 

    </div>
</div>

<br>
<div class="container-fluid backgroundBande  mt-2"  style="margin-top: -80px; ">
  <div class="row-full shadow  ">
      <span class="text-center "> 
        <div class="row ">
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
          <div class="col-4 pt-4 ">
            <h1 class="fontbandeau" >Nous contacter</h1>
          </div>
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
        </div>
        </div>
      </span>
    </div>
</div>
<div class="container">
<div class="row">
        <div class ="col-4"></div>
        <div class="col-4"></div>
        <div class ="col-4"></div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class ="col-4"></div>
        <div class="col-4">
        <form action="https://formspree.io/f/xlevlygd" method="POST">   
          <div class="mb-3">

              <label for="exampleFormControlTextarea1" class="form-label">Vos informations</label>
              <input  class="form-control" type="text" name="name" placeholder="Votre Nom et Prenom" require>
              <input type="email" name ="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre e-mail" require>
              </div>
              <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
              <textarea name="Message" class="form-control" id="exampleFormControlTextarea1" rows="3" require></textarea>
              </div>
              <input class="btn btn-primary w-100 rounded" type="submit" value="Envoyer">
          </div>
        </form>
        <div class ="col-4"></div>
    </div>
    
</div>

<?php include "inc/footer.php"; ?>
