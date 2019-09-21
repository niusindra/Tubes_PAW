<?php include '../layout/dashboarduser.php';
$id=$_GET['id']; 

$query = mysqli_query($con, "SELECT * FROM users where id='$id'") or die(mysqli_error($con)); 
$data = mysqli_fetch_assoc($query)?>

        <div class="container" id="gallery">
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
                    <div class="box">

                    <div class="field">
                    <label class="label">Nama pemesan</label>
                    <div class="control">
                        <input class="input" type="text" value=<?php echo $data['username'] ?>>
                    </div>
                    </div>

                    <div class="field">
                    <label class="label">Style</label>
                    <div class="control is-expanded" >
                        <div class="select">
                        <select>
                            <option>style 1</option>
                            <option>style 2</option>
                        </select>
                        </div>
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

                    <div class="field">
                    <label class="label">Pilih Tanggal</label>
                    <div class="control is-expanded">
                        <input type="date">
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