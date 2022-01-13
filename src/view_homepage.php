<?php include "inc/header.php"; ?>
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
<div class="container ">
  <div class="row-12">
    <div class="col">
    <h1> <strong>La junior Agence</strong></h1>
      <h4> <regular>Que se passe-t-il lorsque vous prenez XX étudiant.e.s du Master REVI de l’Université de Bourgogne à Dijon, des êtres curieux de nature, et que vous les mettez ensemble ? La réponse est un concentré de curiosité, d’énergie et de potentiel : La Junior Agence/Le REVI Network. 
Encadré par des experts dans les domaines de recherche et de veille informationnelle, cette fine équipe étudiante réalise des projets géniaux et ambitieux. <br> 
</h2></regular>
    </div>
    <div class="col-3"  >
    </div >
    <div class="col-3">

  </div>
</div>

<input type="button" value="" onClick="AfficherMasquer()"  style="background:transparent;border:none ; width:20px"/>
            <script type="text/javascript">
                function AfficherMasquer()
                {
                divInfo = document.getElementById('divacacher');
                var audio = new Audio('audio/audio.mp3').play()
                
                if (divInfo.style.display == 'none')
                divInfo.style.display = 'block';
                
                
                else
                divInfo.style.display = 'none';
                
                }
                
                </script>
               
            
                <div id="divacacher" style="display:none;">             
                    <img src="img/tope.png"  alt="profile-image" class=" img-fluid w-50 h-50" style="z-index:1"/>
                </div>

<div class="container backgroundBande " >
  <div class="row-full shadow ">
      <span class="text-center "> 
        
          <div class="col-12 pt-4 ">
          
            <h1 class="fontbandeau" >Nos Compétences</h1>
            
          </div>
        </div>
      
      </span>
    </div>
</div>
<div class="container ">
  <div class="row ">
    <div class="col-1"></div>
    <div class="col-10">
      <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner carouselcontent">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/CommunicationNR.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="img/RechercheNR.png" class="d-block  w-100">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>
          <div class="carousel-item " data-bs-interval="10000">
            <img src="img/VeilleNR.png" class="d-block w-100 h-100">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
</div>

<div class="container  mt-5">
<div class="accordion " id="accordionPanelsStayOpenExample">
  <div class="accordion-item backgroundText  ">
    <h2 class="accordion-header " id="panelsStayOpen-headingOne">
      <button class="accordion-button AcordionTitle-font" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Communication
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show shadow" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body shadow">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header shadow" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed AcordionTitle-font" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Veille
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse shadow" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body shadow">
      Recherche, analyse et diffusion de l’information. La junior agence se chargera du traitement de données et la surveillance de environnement de votre entreprise pour anticiper ses évolutions.       </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed AcordionTitle-font shadow" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Recherche
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse shadow" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body shadow">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>

<div class="container backgroundBande " >
  <div class="row-full shadow ">
      <span class="text-center ">
          <div class="col-12 pt-4 ">
            <h1 class="fontbandeau" >Ils nous ont fait confiance</h1>
          </div>
        </div>
      
      </span>
    </div>
</div>

<div class="container mt-5 ">
 
  <div class="row">
  <div class="marquee">
    <ul class="marquee-content">
      <li><img src="img/OA.png" class="w-50"  aria-hidden="true"></i></li>
      <li><img src="img/wd.png" class="w-50"  aria-hidden="true"></i></li>
      <li><img src="img/idaos.png" class="w-50"  aria-hidden="true"></i></li>
    </ul>
  </div>
  </div>
</div>
<div class="container backgroundBande " >
  <div class="row-full shadow ">
      <span class="text-center ">
          <div class="col-12 pt-4 ">
            <h1 class="fontbandeau" >Nos réalisations</h1>
          </div>
        </div>
      
      </span>
    </div>
</div>



<div class="container d-inline">
  <div class="row mt-5 ">
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid "  aria-hidden="true" id="img1">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5"  aria-hidden="true" id="img2">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid "  aria-hidden="true" id="img3">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5"  aria-hidden="true" id="img4">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid"  aria-hidden="true" id="img5">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5"  aria-hidden="true" id="img6">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid "  aria-hidden="true" id="img7">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5 "  aria-hidden="true">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid"  aria-hidden="true">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5"  aria-hidden="true">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid"  aria-hidden="true">
      <figcaption>Titre</figcaption>
    </div>
    <div class="col-1 text-center">
      <img src="img/default-image.jpg" class="w-50 img-fluid pt-5"  aria-hidden="true">
      <figcaption>Titre</figcaption>
    </div>
  </div>

</div>




</script>
        

<?php include "inc/footer.php"; ?>
