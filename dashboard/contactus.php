<?php include '../layout/dashboard.php';?>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3> Contact Us</h3>
    <h4>Feel Free Contact us , and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel"  name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Subject" type="text" name="subject" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit"  data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
  </div>

    </body>
    </html>
    <style lang="css">

.homeStyle{
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
display: flex;
align-items: center;
font-size: 50px;
font-weight: bold;
color: white;

}

.homeStyle h1{
 margin: 0px auto;
 padding: 10px;
 border-radius: 20px;
 background-color: #6bd6a6;

}

body {
	line-height:30px;
	color:#777;
    background:#0CF;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;

}

.container {
	max-width:700px;
	width:80%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:rgba(0, 0, 0, 0.6);
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #FFF;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
    color: #FFF;
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] 
{
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}
</style>
