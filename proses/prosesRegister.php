<?php

if(isset($_POST['store'])){
    include('../db.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
        // check first if record exists
        $query = "SELECT id FROM users WHERE email = ? and verified = '1'";
        $stmt = $con->prepare( $query );
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $num = $stmt->rowCount();
 
        if($num>0){
            echo "<div>Your email is already activated.</div>";
        }
 
        else{
 
            // check first if there's unverified email related
            $query = "SELECT id FROM users WHERE email = ? and verified = '0'";
            $stmt = $con->prepare( $query );
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $num = $stmt->rowCount();
 
            if($num>0){
 
                // you have to create a resend verification script
                echo "<div>Your email is already in the system but not yet verified.</div>";
            }
 
            else{
 
                // now, compose the content of the verification email, it will be sent to the email provided during sign up
                // generate verification code, acts as the "key"
                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
 
                // send the email verification
                $verificationLink = "./activate.php?code=" . $verificationCode;
 
                $htmlStr = "";
                $htmlStr .= "Hi " . $email . ",<br /><br />";
 
                $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='../index.php' target='_blank'>BARBAR BARBER</a><br />";
 
 
                $name = "The Code of a Ninja";
                $email_sender = "no-reply@codeofaninja.com";
                $subject = "Verification Link | The Code Of A Ninja | Subscription";
                $recipient_email = $email;
 
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $headers .= "From: {$name} <{$email_sender}> \n";
 
                $body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                if( mail($recipient_email, $subject, $body, $headers) ){
 
                    // tell the user a verification email were sent
                    echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";

 
                    //write query
                    $query = "INSERT INTO
                                users
                            SET
                                username = ?,
                                email = ?,
                                password = ?,
                                verified = '0',
                                verification_code = ?
                                ";
 
                    $stmt = $con->prepare($query);
 
                    $stmt->bindParam(1, $name);
                    $stmt->bindParam(2, $email);
                    $stmt->bindParam(3, $password);
                    $stmt->bindParam(4, $verificationCode);
 
                    // Execute the query
                    if($stmt->execute()){
                        // echo "<div>Unverified email was saved to the database.</div>";
                    }else{
                        echo "<div>Unable to save your email to the database.";
                        //print_r($stmt->errorInfo());
                    }
 
                }else{
                    die("Sending failed.");
                }
            }
 
 
        }
 
    
 
}
 
// show your sign up or registration form
// echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
//     echo "<input type='email' name='email' placeholder='Enter your email address to subscribe' required />";
//     echo "<input type='submit' value='Subscribe' />";
// echo "</form>";


//==============================================================================================================================

// if(isset($_POST['store'])){
//     include('../db.php');

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//     $input = mysqli_query($con,"INSERT INTO users(name, email, password) VALUES('$name','$email','$password')")or die(mysqli_error($con));
//     if($input){
//         echo '<script>alert("success"); window.location = "../login_page.php"</script>';
//     }else{
//         echo '<script>alert("failed"); window.location = "../register_page.php"</script>';
//     }
// }else{
//     echo '<script>window.history.back()</script>';
// }
?>

