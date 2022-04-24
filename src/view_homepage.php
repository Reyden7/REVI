<?php include "inc/header.php"; ?>
<link rel="stylesheet" href="css/homePage.css">

<div class="container">
    <div class="row mt-5">
        <div class="col-12 mt-5 "></div>

    </div>
</div>

<video class="w-100" autoplay  class="demoVideo"  muted loop>
  <source src="/src/recherche.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>


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
</input>


     

    
<?php include "inc/footer.php"; ?>

