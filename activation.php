<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
 
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/Exception.php';
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/PHPMailer.php';
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/SMTP.php';

    date_default_timezone_set("Europe/Vilnius");
    $date=date("Y-m-d H:i:s");


    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $url_components = parse_url($url); 
  
    parse_str($url_components['query'], $params); 
      
    $iURL=$params['url'];
    
    $pavyko=false;

    function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
    }
  
    $IP=getUserIpAddr();

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully";

    $sql = "SELECT iURL FROM ActivationURL WHERE iURL='$iURL' && Mode='Neaktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        header("Location: log?activated=false");
     }
    } else {

        $sql = "SELECT iURL FROM ActivationURL WHERE iURL='$iURL' && Mode='Panaudota'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            header("Location: log?activated=already");
        }
        } else{

            $sql = "SELECT UserID FROM ActivationURL WHERE iURL='$iURL' && Mode='Aktyvi'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ID=$row['UserID'];
            }
            }else{
            echo "Error selecting record: " . $conn->error;
            }

            $sql = "UPDATE Users SET Mode='Aktyvi', LastTimeActive='$date', IP='$IP' WHERE ID='$ID' && Mode='Neaktyvi'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                $pavyko=true;
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $sql = "UPDATE ActivationURL SET Mode='Panaudota' WHERE iURL='$iURL' && Mode='Aktyvi'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
        
    }

    if($pavyko==true)
    {
            $sql = "SELECT FirstName, Email, Parole, Generated_code FROM Users WHERE ID='$ID' && Mode='Aktyvi'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $name=$row['FirstName'];
                $pastas=$row['Email'];
                $slaptazodis=$row['Parole'];
                $kodas1=$row['Generated_code'];
            }
            }else{
            echo "Error selecting record: " . $conn->error;
            }

            $email = new PHPMailer;
            $email->CharSet = 'UTF-8';                              
            //Set PHPMailer to use SMTP.
            $email->IsSMTP();
            $email->IsHTML(true);
            $email->Host = $Host;
            $email->SMTPAuth = true;
            $email->SMTPSecure = $SMTPSecure;
            $email->Username = $EmailHostUsername;
            $email->Password = $EmailHostPassword;
            $email->Port = $EmailHostPort;    
            
            $email->setFrom($EmailHostUsername, 'Šalys ir sostinės');

            /* Add a recipient. */
            $email->addAddress($pastas);
        
            /* Set the subject. */
            $email->Subject = 'Jūsų paskyra „Šalys ir sostinės” aktyvuota';
        
            /* Set the mail message body. */
            $email->Body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml' lang='en-GB'>
            <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <title>Demystifying Email Design</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

            <style type='text/css'>
            a[x-apple-data-detectors] {color: inherit !important;}
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
            
            .social-media {
            display: flex;
            justify-content: center;
            }
            
            .social-icon {
            height: 46px;
            width: 46px;
            display: block;
            justify-content: center;
            align-items: center;
            margin: 0 0.45rem;
            color: #333;
            border-radius: 50%;
            border: 1px solid #333;
            text-decoration: none;
            font-size: 1.1rem;
            transition: 0.3s;
            }
            
            .social-icon:hover {
            color: #4481eb;
            border-color: #4481eb;
            }

            .center {
            display: block;
            margin: 0 auto;
            margin-top:12.5px;
            }

            </style>
            
            </head>
            <body style='margin: 0; padding: 0;'>
            <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
            <td style='padding: 20px 0 30px 0;'>
            
            <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse; border: 1px solid #cccccc;'>
            <tr>
            <td align='center' bgcolor='white' style='padding: 40px 0 30px 0;'>
            <img src='https://countries-capitals.com/images/email_verified.png' alt='El. paštas patvirtintas' width='512' height='512' style='display: block;' />
            </td>
            </tr>
            <tr>
            <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
            <td style='color: #153643; font-family: 'Roboto', sans-serif;'>
            <h1 style='font-size: 24px; margin: 0;'>Jūsų paskyra buvo sėkmingai aktyvuota!</h1>
            <br>
            <br>
            </td>
            </tr>
            <tr>
            <td>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
            <td width='260' valign='top'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
            <td>
            <img src='https://countries-capitals.com/images/stories.png' alt='Pasidalink savo patirtimi' width='128' height='128' style='display: block;' />
            </td>
            </tr>
            <tr>
            <td style='color: #153643; font-family: 'Roboto', sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;'>
            <br>
            <p style='margin: 0;'>Pasidalink savo kelionių patirtimi, įspūdžiais, bei nuotraukomis.</p>
            </td>
            </tr>
            </table>
            </td>
            <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
            <td width='260' valign='top'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
            <td>
            <img src='https://countries-capitals.com/images/interactive.png' alt='Interaktyvus žemėlapis' width='128' height='128' style='display: block;' />
            </td>
            </tr>
            <tr>
            <td style='color: #153643; font-family: 'Roboto', sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;'>
            <br>
            <p style='margin: 0;'>Nori pasižymėti šalis, kurias jau aplankei, gal kaip tik tas, kurias norėtum aplankyti. Interaktyvus žemėlapis <strong>jau greitai</strong>. Nepraleisk šanso išbandyti pirmas!</p>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            <tr>
            <td bgcolor='#e3f8fa' style='padding: 30px 30px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
            <tr>
            <td style='color: black; font-family: 'Roboto', sans-serif; font-size: 14px;'>
            <p style='margin: 0;'>© Šalys ir sostinės, Lietuva 2021</p>
            </td>
            <td align='right'>
            <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse;'>
            <tr>
            <div class='social-media'>
            <a href='#' class='social-icon'>
            <img src='https://countries-capitals.com/images/social/facebook.png' alt='' width='17' height='17' class='center'/>
            </a>
            <a href='#' class='social-icon'>
            <img src='https://countries-capitals.com/images/social/twitter.png' alt='' width='17' height='17' class='center'/>
            </a>
            <a href='#' class='social-icon'>
            <img src='https://countries-capitals.com/images/social/google-plus.png' alt='' width='17' height='17' class='center'/>
            </a>
            <a href='#' class='social-icon'>
            <img src='https://countries-capitals.com/images/social/linkedin.png' alt='' width='17' height='17' class='center'/>
            </a>
            </div>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            
            </td>
            </tr>
            </table>
            </body>
            </html>";
        
            if (!$email->send()){
                echo $email->ErrorInfo;
                header("Location: log?activated=false");
            }
            else{
                header("Location: index?status=user?activated");
            }
            
            
    }
    session_start();
    $_SESSION['PATVIRTINIMAS'] = $name;

    /*session_start();
    $_SESSION['username'] = $name;
    $_SESSION['userid'] = $ID;
    $_SESSION['useremail'] = $pastas;
    $_SESSION['userparole'] = $slaptazodis;*/
    setcookie("Laikinasis", serialize($kodas1), time() + (86400*30), "/");
    
    $conn->close();
?>