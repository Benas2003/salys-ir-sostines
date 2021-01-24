<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
 
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/Exception.php';
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/PHPMailer.php';
    require '/home/u848932438/domains/bkworks.lt/public_html/testavimas/PHPMailer/src/SMTP.php';

    $pastas=$_POST['email'];
    $pastas = trim($pastas," '|', '+', '*', '/', ';', ',', '''");
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully";

    $sql = "SELECT ID FROM Users WHERE Email='$pastas'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $ID=$row['ID'];
        $remind=true;
     }
    } else {
     echo "0 results";
        $remind=false;
        header("Location: log?restore=fail");
    }

    $unikalus=false;
    $sql = "SELECT iURL FROM RestoreURL";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $masyvas[$skaicius]=$row['iURL'];
        $skaicius++;
    }
    } else {
    echo "0 results";
    }

    while($unikalus!=true)
    {
    $uniqueURL = uniqid('restore_');
    for($i=0; $i<$skaicius;$i++)
    {
        if($uniqueURL==$masyvas[$i]){$unikalus=false;}
        else {$unikalus=true;}
    }
    }

    $sql = "INSERT INTO RestoreURL (iURL, UserID, Timer, Mode) VALUES ('$uniqueURL', '$ID', '15', 'Aktyvi');";
    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
        $created=true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if($remind==true) 
    {
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
        $email->Subject = 'Jūsų paskyros „Šalys ir sostinės” slaptažodis';
    
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
        <img src='https://countries-capitals.com/images/password_restore.png' alt='El. pašto aktyvacija' width='512' height='512' style='display: block;' />
        </td>
        </tr>
        <tr>
        <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
        <tr>
        <td style='color: #153643; font-family: 'Roboto', sans-serif;'>
        <h1 style='font-size: 24px; margin: 0;'>Norėdami pasikeisti slaptažodį, spauskite ant nuorodos</h1>
        </td>
        </tr>
        <tr>
        <td style='color: #153643; font-family: 'Roboto', sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;'>
        <br>
        <h3 style='margin: 0;'><a href='https://countries-capitals.com/restore?url=$uniqueURL'>Pakeisti mano slaptažodį</a></h3>
        <br>
        <p><small>Nuoroda bus aktyvi 15 minučių</small></p>
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
        <img src='https://countries-capitals.com/images/continents.png' alt='Pažink šalis' width='128' height='128' style='display: block;' />
        </td>
        </tr>
        <tr>
        <td style='color: #153643; font-family: 'Roboto', sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;'>
        <br>
        <p style='margin: 0;'>Pažink visas pasaulio šalis, pamatyk naujausiąją informaciją pirmas.</p>
        </td>
        </tr>
        </table>
        </td>
        <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
        <td width='260' valign='top'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;'>
        <tr>
        <td>
        <img src='https://countries-capitals.com/images/virtual_reality.png' alt='Virtualios kelionės' width='128' height='128' style='display: block;' />
        </td>
        </tr>
        <tr>
        <td style='color: #153643; font-family: 'Roboto', sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;'>
        <br>
        <p style='margin: 0;'>Atrask šalį keliaudamas virtualiai, pasivaikščiok po garsiausias pasaulio lankytinas vietas. Virtualios keliones <strong>jau greitai</strong>. Nepraleisk šanso išbandyti pirmas!</p>
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
            header("Location: log?restore=fail");
        }
        else{
            header("Location: log?sent=success");
        }
    }
    $conn->close();
?>