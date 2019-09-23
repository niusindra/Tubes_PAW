<?php include '../layout/dashboarduser.php';
$id=$_GET['id']; 

$query = mysqli_query($con, "SELECT * FROM users where id='$id'") or die(mysqli_error($con)); 
$data = mysqli_fetch_assoc($query);
// $clicked;
// function setStyle($string){
//     global $clicked;
//     $clicked=$string;
// }
$style="No Style Selected"
?>
<form action="" method="post">
        <div class="container" id="gallery">
            <h1 style="margin-top:1em;color:white" class="title is-1 has-text-centered">Choose Your Style</h1>
                
                <div class="columns ">
                <?php

                    $hair_style= array('Slicked Back Undercut', 'Long Comb + Low Fade', 'Long Special Hairystyle', 'Medium Side Swept', 'Messy Taper Hairstyle', 'Short Haircut + Undercut', 'Short Special Quiff', 'Short Sides Long Top', 'Short Special Textured', 'Slicked Back Wavy', 'Textured Pompadour', 'Textured Crop Top Fade', 'Faux Hawk Fade', 'Spiky Hair Special Fade', 'Side Part + High Bald Fade', 'Slick Back With Flow');
                    $hair_style_image= array('Slicked_Back_Undercut', 'Long_Comb_Over_Low_Fade', 'Long_Hairstyle', 'Medium_Side_Swept', 'Messy_Taper_Hairstyle', 'Short_Haircut_Combed_Over_Undercut', 'Short_Quiff', 'Short_Sides_Long_Top', 'Short_Textured', 'Slicked_Back_Wavy', 'Textured_Pompadour_Fade', 'Textured_Crop_Top_Fade', 'Faux_Hawk_Fade', 'Spiky_Hair_Fade', 'Side_Part_Hairstyle_High_Bald_Fade', 'Slick_Back_With_Flow');
                    $counter=0;
                    while($counter<sizeof($hair_style)){
                        echo '
                            <div class="column ">
                                <div class="tile is-parent">
                                    <article class="tile is-child notification">
                                        <p class="title is-6">'.$hair_style[$counter].'</p>
                                        
                                        
                                            <figure class="image">
                                                <img src="../css/Hair-Style/'.$hair_style_image[$counter].'.png" >
                                            </figure>
                                            
                                        <input  type="radio" name="getstyle" value="'.$hair_style[$counter].'">
                                    </article>
                                </div> 
                            </div>
                        ';
                        if(($counter+1)%4==0){
                            echo'</div>
                            <div class="columns">';
                        }
                        // else if($counter+1==sizeof($hair_style)){
                        //     echo'</div>';
                        // }
                            
                        $counter++;
                    }
                    
                ?>
                </div>


        </div>
        <div style="margin:0em 6em 1em">
            <input class="button is-fullwidth" type="submit" name="submitstyle"  value="Commit">
        </div>
        </form>
            <?php 
            if (isset($_POST['submitstyle'])) {

                if(isset($_POST['getstyle'])){
                    $style= $_POST ['getstyle'];
                } else {
                    $style= "No Style Selected";
                }
                }
            ?>
        <div style="margin:0em 6em 1em">
            <a class="button modal-button is-fullwidth"data-target="#myModal" aria-haspopup="true">
                Book Now
            </a>
        </div>
        
        <div class="modal" id="myModal">
            <div class="modal-background"></div>
                <div class="modal-content">
                    <div class="box">

                    <div class="field">
                    <label class="label">Nama pemesan</label>
                    <div class="control">
                        <input class="input" type="text" value="<?php echo $data['username'] ?>">
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Style</label>
                    <div class="control is-expanded" >
                        <input class="input" type="text" value="<?php echo $style?>">
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Layanan</label>
                    <div class="control is-expanded">
                        <div class="select">
                        <select>
                            <option>Cukur Rambut</option>
                            <option>Shaving</option>
                            <option>Cukur Rambut + Shaving</option>
                        </select>
                        </div>
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Layanan Tambahan</label>
                    <div class="control is-expanded">
                        <div class="select">
                        <select>
                            <option>Keramas / Creambath</option>
                            <option>Pijat</option>
                            <option>Keramas + Pijat</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <label class="label">Tanggal</label>
                    <div class="field is-grouped is-grouped-left">
                    
                        <div class="control">
                            <div class="select">
                            <select>
                            <?php for($d = 1; $d<=31; $d++) {?>
                        <option value="<?php echo $d ?>"><?php echo $d ?></option><?php }?>
                            </select>
                            </div>
                        </div>
                        <div class="control">
                            <div class="select">
                            <select>
                            <?php for($m = 0; $m<=11; $m++) {?>
                        <?php
                            $nama_bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','October','November','Desember')?>
                        <option value="<?php echo $m ?>"><?php echo $nama_bulan[$m] ?></option><?php } ?>
                            </select>
                            </div>
                        </div>   
                        <div class="control">
                            <div class="select">
                            <select>
                            <?php for($y = 2019; $y>=1900; $y-- ) {?>
                        <option value="<?php echo $y ?>"><?php echo $y ?></option><?php } ?>
                            </select>
                            </div>
                        </div>         
                    </div>
                    
                    <div class="control">
                        <button class="button is-dark">Submit</button>
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

// Initialize all input of type date
var calendars = bulmaCalendar.attach('[type="date"]', options);

// Loop on each calendar initialized
for(var i = 0; i < calendars.length; i++) {
	// Add listener to date:selected event
	calendars[i].on('select', date => {
		console.log(date);
	});
}

// To access to bulmaCalendar instance of an element
var element = document.querySelector('#my-element');
if (element) {
	// bulmaCalendar instance is available as element.bulmaCalendar
	element.bulmaCalendar.on('select', function(datepicker) {
		console.log(datepicker.data.value());
	});
}


</script>