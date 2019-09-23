<?php include '../layout/dashboard.php';?>

        <div class="container" id="gallery">
            <br>
            <h1 class="title is-1 has-text-centered">Choose Your Style</h1>
            <div class="columns">

            <?php

                $hair_style= array('Slicked Back Undercut', 'Long Comb + Low Fade', 'Long Special Hairystyle', 'Medium Side Swept', 'Messy Taper Hairstyle', 'Short Haircut + Undercut', 'Short Special Quiff', 'Short Sides Long Top', 'Short Special Textured', 'Slicked Back Wavy', 'Textured Pompadour', 'Textured Crop Top Fade', 'Faux Hawk Fade', 'Spiky Hair Special Fade', 'Side Part + High Bald Fade', 'Slick Back With Flow');
                $hair_style_image= array('Slicked_Back_Undercut', 'Long_Comb_Over_Low_Fade', 'Long_Hairstyle', 'Medium_Side_Swept', 'Messy_Taper_Hairstyle', 'Short_Haircut_Combed_Over_Undercut', 'Short_Quiff', 'Short_Sides_Long_Top', 'Short_Textured', 'Slicked_Back_Wavy', 'Textured_Pompadour_Fade', 'Textured_Crop_Top_Fade', 'Faux_Hawk_Fade', 'Spiky_Hair_Fade', 'Side_Part_Hairstyle_High_Bald_Fade', 'Slick_Back_With_Flow');
                $counter=0;
                while($counter<sizeof($hair_style)){
                    echo '
                        <div class="column">
                            <div class="tile is-parent">
                                <article class="tile is-child notification">
                                    <p class="title is-6">'.$hair_style[$counter].'</p>
                                    
                                    <a class="modal-button "data-target="#myModal" aria-haspopup="true">
                                        <figure class="image">
                                            <img src="../css/Hair-Style/'.$hair_style_image[$counter].'.png" >
                                        </figure>
                                    </a>
                                </article>
                            </div> 
                        </div>
                    ';
                    if(($counter+1)%4==0){
                        echo'</div>
                        <div class="columns">';
                    }
                        
                    $counter++;
                }

            ?>
            </div>

        </div>

        <div class="modal" id="myModal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box" >
    Halo Barberian, silahkan log in terlebih dahulu untuk melakukan booking.
        <div class="control" style="align-items: center">
        <a class="button is-dark" href="../login_page.php" style="display: flex;margin-top:1em">
            Log In
        </a>
        </div>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

    </body>
    </html>
    <script>
    document.querySelectorAll('.modal-button').forEach(function(el) {
  el.addEventListener('click', function() {
    var target = document.querySelector(el.getAttribute('data-target'));
    
    target.classList.add('is-active');
    
    target.querySelector('.modal-close').addEventListener('click',   function() {
        target.classList.remove('is-active');
     });
  });
});
</script>