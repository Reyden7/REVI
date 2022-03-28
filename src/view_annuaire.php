<?php include "inc/header.php";

//connection avec la bdd
$bdd = mysqli_connect("localhost", "root", "");
mysqli_select_db($bdd,"bdd_revi_students");

$reponse = mysqli_query($bdd, "SELECT NOM, PRENOM, PROMOTION, ADD_MAIL, NUM_TEL, STAGE_ALTERNANCE, POST_STAGE, POST_ACTUEL  FROM STUDENT");


?>

<div class="bg0"></div>
<div class="bg0 bg2"></div>
<div class="bg0 bg3"></div>

<div class="bg1"></div>
<div class="bg1 bg4"></div>
<div class="bg1 bg5"></div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 mt-5 ">
        </div> 

    </div>
</div>
<div class="container">
<div class="row">
        <div class ="col-4"></div>
        <div class="col-4"></div>
        <div class ="col-4"></div>
    </div>
</div>
<div class="container backgroundBande " >
  <div class="row-full shadow ">
      <span class="text-center "> 
        
          <div class="col-12 pt-4 ">
          
            <h1 class="fontbandeau mb-5" >Que sont-ils devenus ?</h1>
      </span>
    </div>
    

        <table class=" table table-light table-responsive table-hover table-bordered table-sm mt-5 table-striped ">
              <thead class="thead-dark">
                <tr style="font-size:16px;text-align: center; padding-top:5px ">
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Promo</th>
                  <th scope="col">mail</th>
                  <th scope="col">téléphone</th>
                  <th scope="col">stage/ alternance</th>
                  <th scope="col">Poste lors du stage</th>
                  <th scope="col">Poste Actuel</th>
                </tr>
              </thead>
              <?php
                // on affiche les lignes du tableau une a une 
                while($donnees = mysqli_fetch_array($reponse))
                {
                  ?>
                      <tr style="font-size:14px;text-align: center; height:3rem;  ">
                      <th style="vertical-align:middle"><?php echo $donnees['NOM'];?></th>
                      <th style="vertical-align:middle"><?php echo $donnees['PRENOM'];?></th>
                      <th style="vertical-align:middle"><?php echo $donnees['PROMOTION'];?></th>
                      <th style="vertical-align:middle"><?php echo $donnees['ADD_MAIL'];?></th>
                      <th style="width: 7%;vertical-align:middle"><?php echo $donnees['NUM_TEL'];?></th>
                      <th style="width: 7%;vertical-align:middle"><?php echo $donnees['STAGE_ALTERNANCE'];?></th>
                      <th style="width: 20%;vertical-align:middle"><?php echo $donnees['POST_STAGE'];?></th>
                      <th style="width: 30%;vertical-align:middle"><?php echo $donnees['POST_ACTUEL'];?></th>
                  </tr>
                  <?php
                }
                mysqli_close($bdd);
                ?>
            </table>
     



<?php include "inc/footer.php"; ?>



