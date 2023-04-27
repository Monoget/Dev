<?php
$from_email='contact@monoget.me';
if (isset($_POST['submit'])) {

    $name = $_POST['contact-name'];

    $email = $_POST['contact-email'];

    $subject_contact = $_POST['subject'];


    $email_to = $email;
    $subject = 'Email From Monoget Saha';
    $userName = $name ;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: Monoget Saha <" . $from_email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo/logo-dark.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out me</p>   
                        
                            <p style='color:black'>I'm excited to join you on your journey with me!<br>
                                I'm look forward to speaking with you about projects we need to take to get you into your project.<br>
                                If there are any changes to your contact information or availability, please let me know by<br>
                                Reaching us at <a href='callto:8801799039179'>(880) 179 903 9179</a> or <a href='mailto:monoget1@gmail.com'>monoget1@gmail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>I am look forward to speaking with you!<br>
                                Monoget Saha
                             </p> 
                        </div>
                    </body>
                </html>
                ";

    if ( mail($email_to, $subject, $messege, $headers)) {

    } else {

    }

    $backend_message='';

    $i=0;
    foreach ($_POST as $key => $value) {
        if($i<count($_POST)-1){
            $backend_message.= htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
        }
        $i++;
    }

    $email_to = 'monoget1@gmail.com';
    $subject = $subject_contact;

    $headers = "From: Monoget Saha <" . $from_email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo/logo-dark.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>New Contact Info Data</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='index.html';
                </script>";
    } else {

    }
}