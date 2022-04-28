<?php include "inc/header.php"; ?>
<!--
Désolé si ce site est moche, le developpeur aussi aurait aimer avoir une maquette à temps
            ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠛⠛⠛⠋⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠙⠛⠛⠛⠿⠻⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠋⠀⠀⠀⠀⠀⡀⠠⠤⠒⢂⣉⣉⣉⣑⣒⣒⠒⠒⠒⠒⠒⠒⠒⠀⠀⠐⠒⠚⠻⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⠏⠀⠀⠀⠀⡠⠔⠉⣀⠔⠒⠉⣀⣀⠀⠀⠀⣀⡀⠈⠉⠑⠒⠒⠒⠒⠒⠈⠉⠉⠉⠁⠂⠀⠈⠙⢿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠇⠀⠀⠀⠔⠁⠠⠖⠡⠔⠊⠀⠀⠀⠀⠀⠀⠀⠐⡄⠀⠀⠀⠀⠀⠀⡄⠀⠀⠀⠀⠉⠲⢄⠀⠀⠀⠈⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⠋⠀⠀⠀⠀⠀⠀⠀⠊⠀⢀⣀⣤⣤⣤⣤⣀⠀⠀⠀⢸⠀⠀⠀⠀⠀⠜⠀⠀⠀⠀⣀⡀⠀⠈⠃⠀⠀⠀⠸⣿⣿⣿⣿
⣿⣿⣿⣿⡿⠥⠐⠂⠀⠀⠀⠀⡄⠀⠰⢺⣿⣿⣿⣿⣿⣟⠀⠈⠐⢤⠀⠀⠀⠀⠀⠀⢀⣠⣶⣾⣯⠀⠀⠉⠂⠀⠠⠤⢄⣀⠙⢿⣿⣿
⣿⡿⠋⠡⠐⠈⣉⠭⠤⠤⢄⡀⠈⠀⠈⠁⠉⠁⡠⠀⠀⠀⠉⠐⠠⠔⠀⠀⠀⠀⠀⠲⣿⠿⠛⠛⠓⠒⠂⠀⠀⠀⠀⠀⠀⠠⡉⢢⠙⣿
⣿⠀⢀⠁⠀⠊⠀⠀⠀⠀⠀⠈⠁⠒⠂⠀⠒⠊⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⢀⣀⡠⠔⠒⠒⠂⠀⠈⠀⡇⣿
⣿⠀⢸⠀⠀⠀⢀⣀⡠⠋⠓⠤⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠄⠀⠀⠀⠀⠀⠀⠈⠢⠤⡀⠀⠀⠀⠀⠀⠀⢠⠀⠀⠀⡠⠀⡇⣿
⣿⡀⠘⠀⠀⠀⠀⠀⠘⡄⠀⠀⠀⠈⠑⡦⢄⣀⠀⠀⠐⠒⠁⢸⠀⠀⠠⠒⠄⠀⠀⠀⠀⠀⢀⠇⠀⣀⡀⠀⠀⢀⢾⡆⠀⠈⡀⠎⣸⣿
⣿⣿⣄⡈⠢⠀⠀⠀⠀⠘⣶⣄⡀⠀⠀⡇⠀⠀⠈⠉⠒⠢⡤⣀⡀⠀⠀⠀⠀⠀⠐⠦⠤⠒⠁⠀⠀⠀⠀⣀⢴⠁⠀⢷⠀⠀⠀⢰⣿⣿
⣿⣿⣿⣿⣇⠂⠀⠀⠀⠀⠈⢂⠀⠈⠹⡧⣀⠀⠀⠀⠀⠀⡇⠀⠀⠉⠉⠉⢱⠒⠒⠒⠒⢖⠒⠒⠂⠙⠏⠀⠘⡀⠀⢸⠀⠀⠀⣿⣿⣿
⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠑⠄⠰⠀⠀⠁⠐⠲⣤⣴⣄⡀⠀⠀⠀⠀⢸⠀⠀⠀⠀⢸⠀⠀⠀⠀⢠⠀⣠⣷⣶⣿⠀⠀⢰⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⠀⠁⢀⠀⠀⠀⠀⠀⡙⠋⠙⠓⠲⢤⣤⣷⣤⣤⣤⣤⣾⣦⣤⣤⣶⣿⣿⣿⣿⡟⢹⠀⠀⢸⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣧⡀⠀⠀⠀⠀⠀⠀⠀⠑⠀⢄⠀⡰⠁⠀⠀⠀⠀⠀⠈⠉⠁⠈⠉⠻⠋⠉⠛⢛⠉⠉⢹⠁⢀⢇⠎⠀⠀⢸⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⣀⠈⠢⢄⡉⠂⠄⡀⠀⠈⠒⠢⠄⠀⢀⣀⣀⣰⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⢀⣎⠀⠼⠊⠀⠀⠀⠘⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣄⡀⠉⠢⢄⡈⠑⠢⢄⡀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠉⠉⠉⠉⠉⠉⠉⠁⠀⠀⢀⠀⠀⠀⠀⠀⢻⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣦⣀⡈⠑⠢⢄⡀⠈⠑⠒⠤⠄⣀⣀⠀⠉⠉⠉⠉⠀⠀⠀⣀⡀⠤⠂⠁⠀⢀⠆⠀⠀⢸⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣦⣄⡀⠁⠉⠒⠂⠤⠤⣀⣀⣉⡉⠉⠉⠉⠉⢀⣀⣀⡠⠤⠒⠈⠀⠀⠀⠀⣸⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣶⣤⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣶⣶⣶⣤⣤⣤⣤⣀⣀⣤⣤⣤⣶⣾⣿⣿⣿⣿⣿

-->
<link rel="stylesheet" href="css/homePage.css">

<div class="container">
    <div class="row mt-5">
        <div class="col-12 mt-5 "></div>

    </div>
</div>

     
<!-- The video -->
<div class="bloc">
  <video src="video1.mp4" autoplay loop muted></video>
  
  </div>
<!-- fin -->

<div class="container-fluid backgroundBande  "  style="margin-top: -80px; margin-left:-2%">
  <div class="row-full shadow  ">
      <span class="text-center "> 
        <div class="row ">
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
          <div class="col-4 pt-4 ">
            <h1 class="fontbandeau" >Le Master REVI</h1>
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
  <div class="row" >
  <h2 class="mt-5" style="text-align: justify;">Ce master comprend deux parcours, un parcours Ingénierie de la Recherche et un parcours Veille Internationale. Il s’adresse à des étudiants diplômés en langue étrangère (allemand, anglais, espagnol, niveau licence LLCER ou équivalent. Le niveau requis en français: C2. Débouchés: – chargé de veille, analyste en e-réputation, analyste de données d’opinion – enseignant, enseignant-chercheur, travail dans l’administration de la recherche.
 </h2> </div>

</div>

<div class="container m-0 mt-5">
 
    <img style="width:174%; margin-left:-2%" src="pied.jpg">
 
</div>

<div class="container-fluid backgroundBande  "  style="margin-top: -80px; margin-left:-2%">
  <div class="row-full shadow  ">
      <span class="text-center "> 
        <div class="row ">
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
          <div class="col-4 pt-4 ">
            <h1 class="fontbandeau" >Nos Parcours</h1>
          </div>
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
        </div>
        </div>
      </span>
    </div>
</div>

<!-- Recherche -->

<div class="container-fluid mt-5 ">
  <div class="row">
    <div class="col-4">
    <h1 class="card-title text-center align-content-center" style="text-align: center; margin-left:20%"> Recherche </h1>
            <br>
            <h4 class="card-content" style="text-align: justify; margin-left:20%">Le parcours Recherche nécessite des étudiants ayant soif de curiosité, de recherche, d’approfondissement et d’interrogation. 
            Les étudiants sont amenés à faire de la  traduction et relecture d’articles, mais apportent également un soutien logistique à des colloques. 
            </h4> <br>
            <h4 class="card-content" style="text-align: justify;  margin-left:20%">
            Les étudiants apprennent les théories littéraires, l’analyse du discours et de nombreuses compétences linguistiques. La finalité de cette spécialité est de savoir rédiger des comptes-rendus et des synthèses, conduire une réflexion théorique sur la base de séminaires.
            Ce parcours se destine aux étudiants voulant être spécialistes de civilisation / culture, métiers de l’enseignement et de la recherche. 
            </h4>
    </div>
    <div class="col-7" style="margin-left:7%">
    <video style="height: 100%;" src="recherche.mp4" autoplay loop muted></video>
   
    </div>


  </div>
</div>

<!--Fin de recherche -->

<!-- Veille -->

<div class="container-fluid mt-5 " style="margin-bottom: 10rem;">
  <div class="row">
    <div class="col-7">
        <video style="height: 115%;margin-left: -2%" src="veille2.mp4" autoplay loop muted></video>
    </div>
    <div class="col-4" style="margin-left:4%">
    <h1 class="card-title text-center align-content-center" style="text-align: justify;  "> Veille </h1>
            <br>
            <h4 class="card-content" style="text-align: justify; ">Le parcours Veille Internationale permet aux étudiants de conduire une recherche approfondie, effectuer une veille informationnelle, y compris dans une langue étrangère, rédiger des synthèses, écrites ou orales. 
            </h4> <br>
            <h4 class="card-content"style="text-align: justify;  ">
            Ils sauront transposer des connaissances pour divers publics d’apprenants, assurer la conduite et le soutien de projets de recherche, aider au pilotage des entreprises et institutions et rassembler des données pour les mettre au service de décideurs ou de commanditaires professionnels.
Cette spécialité permettra aux étudiants de devenir chargé de veille et d’études, community manager, data analyst et d’autres métiers plus intéressants les uns que les autres.
            </h4>
    </div>


  </div>
</div>

<!--Fin de veille -->


<div class="container-fluid backgroundBande  "  style="margin-top: -80px; margin-left:-2%">
  <div class="row-full shadow  ">
      <span class="text-center "> 
        <div class="row ">
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
          <div class="col-4 pt-4 ">
            <h1 class="fontbandeau" >La Junior Agence</h1>
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
    <h2 class="mt-5" style="text-align: justify;">Que se passe-t-il lorsque vous prenez 20 étudiant.e.s du Master REVI de l’Université de Bourgogne à Dijon, des êtres curieux de nature, et que vous les mettez ensemble ? La réponse est un concentré de curiosité, d’énergie et de potentiel : La Junior Agence/Le REVI Network. Encadré par des experts dans les domaines de recherche et de veille informationnelle, cette fine équipe étudiante réalise des projets géniaux et ambitieux.     </h2> 
  </div>
</div>

<div class="container-fluid backgroundBande  "  style="margin-top: -80px; margin-left:-2%">
  <div class="row-full shadow  ">
      <span class="text-center "> 
        <div class="row ">
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
          <div class="col-4 pt-4 ">
            <h1 class="fontbandeau" >Ils nous ont fait confiance</h1>
          </div>
          <div class="col-4 pt-2" >
            <img style="width:65%;" src="https://cdn.discordapp.com/attachments/948510159582429254/969350159010000976/arabesque2.png" class="img-fluid">
          </div>
        </div>
        </div>
      </span>
    </div>
</div>

<div class="container mt-5 ">
  <div class=" row">
    <div class="marquee">
      <ul class="marquee-content">
        <li><img src="img/OA.png" class="w-50"  aria-hidden="true"></i></li>
        <li><img src="img/wd.png" class="w-50"  aria-hidden="true"></i></li>
        <li><img src="img/idaos.png" class="w-50"  aria-hidden="true"></i></li>
      </ul>
    </div>
  </div>
</div>

<!--
<section>
    <div class="container mt-5" >
    	<div class="row mt-5"  >
    	    
    		<div class="col-md-4 mt-5" >
    		    <div class="card profile-card-a">
    		        <img src="img/Fond.png" alt="profile-sample1" class="background"/>
    		        <img src="img/pp1.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Juliette Montillot<small>secrétaire </small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"></i></a></div>
                    </div>
                </div>
               
    		</div>
    		
    		<div class="col-md-4" >
    		    <div class="card profile-card-a">
    		        <img src="img/Fond.png" alt="profile-sample1" class="background"/>
    		        <img src="img/pp3.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content ">
                    <h2>Lou-Anne Grenouillet<small>Présidente</small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> </i></a></div>
                    </div>
                </div>
                
    		</div>
    		
    		<div class="col-md-4 mt-5" >
    		    <div class="card profile-card-a">
    		        <img src="img/Fond.png" alt="profile-sample1" class="background"/>
    		        <img src="img/pp2.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Coralie Adjam <small>trésorière</small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"></i></a></div>
                    </div>
                </div>
    		</div>
        </div>
    </div>
</div>
-->

<?php include "inc/footer.php"; ?>

