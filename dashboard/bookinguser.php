<?php include '../layout/dashboarduser.php';
$id=$_GET['id']; 

$query = mysqli_query($con, "SELECT * FROM users where id='$id'") or die(mysqli_error($con)); 
$data = mysqli_fetch_assoc($query);
// $clicked;
// function setStyle($string){
//     global $clicked;
//     $clicked=$string;
// }

?>
<?php
$clicked;
function setStyle($string){
    global $clicked;
    $clicked=$string;
}
echo'
        <div class="container" id="gallery">
            <h1 class="title is-1 has-text-centered">Choose Your Style</h1>
            <div class="columns">
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Slicked Back Undercut</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick="'.setStyle("Slicked Back Undercut").'">
                        <figure class="image">
                            <img src="../css/Hair-Style/Slicked_Back_Undercut.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Long Comb + Low Fade</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick="'.setStyle("Long Comb + Low Fade").'">
                        <figure class="image">
                            <img src="../css/Hair-Style/Long_Comb_Over_Low_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Long Special Hairstyle</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Long Special Hairstyle") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Long_Hairstyle.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Medium Side Swept</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Medium Side Swept") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Medium_Side_Swept.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Messy Taper Hairstyle</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Messy Taper Hairstyle") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Messy_Taper_Hairstyle.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Short Haircut + Undercut</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick=php setStyle("Short Haircut + Undercut")>
                        <figure class="image">
                            <img src="../css/Hair-Style/Short_Haircut_Combed_Over_Undercut.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Short Special Quiff</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Short Special Quiff") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Short_Quiff.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Short Sides Long Top</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Short Sides Long Top") >
                        <figure class="image">  
                            <img src="../css/Hair-Style/Short_Sides_Long_Top.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Short Special Textured</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Short Special Textured") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Short_Textured.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Slicked Back Wavy</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Slicked Back Wavy") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Slicked_Back_Wavy.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Textured Pompadour</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Textured Pompadour") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Textured_Pompadour_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Textured Crop Top Fade</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Textured Crop Top Fade") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Textured_Crop_Top_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Faux Hawk Fade</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Faux Hawk Fade") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Faux_Hawk_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Spiky Hair Special Fade</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Spiky Hair Special Fade") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Spiky_Hair_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Side Part + High Bald Fade</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true" onclick= setStyle("Side Part + High Bald Fade") >
                        <figure class="image">
                            <img src="../css/Hair-Style/Side_Part_Hairstyle_High_Bald_Fade.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
                <div class="column">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                        <p class="title is-6">Slick Back With Flow</p>
                        <a class="modal-button "data-target="#myModal" aria-haspopup="true">
                        <figure class="image">
                            <img src="../css/Hair-Style/Slick_Back_With_Flow.png">
                        </figure>
                        </a>
                        </article>
                    </div> 
                </div>
            </div>

        </div>'
?>

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
                        <input class="input" type="text" value="<?php echo $clicked ?>">
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