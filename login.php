<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    $pastas=$_POST['email'];
    $slaptazodis=$_POST['password'];
    $nerasta=0;

    date_default_timezone_set("Europe/Vilnius");
    $date=date("Y-m-d H:i:s");

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

    
    $pastas = trim($pastas," '|', '+', '*', '/', ';', ',', '''");
    $slaptazodis = trim($slaptazodis," '|', '+', '*', '/', ';', ',', '''");
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully";
    

    $sql = "SELECT ID, FirstName, Email, Parole, Mode FROM Users WHERE Email='$pastas' && Parole='$slaptazodis' && Mode='Neaktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['activation_email']=$pastas;
        $_SESSION['activation_password']=$slaptazodis;
        header("Location: log?needsactivation");
     }
    } else {
     echo "0 results";
        $nerasta++;
    }

    $sql = "SELECT ID, FirstName, Email, Parole, Generated_code, Mode FROM Users WHERE Email='$pastas' && Parole='$slaptazodis' && Mode='Aktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $pastas=$pastas;
        $slaptazodis=$slaptazodis;
     while($row = $result->fetch_assoc()) {
        $ID=$row['ID'];
        $name=$row['FirstName'];
        $kodas=$row['Generated_code'];
        setcookie("Laikinasis", serialize($kodas), time() + (86400*30), "/");
        header("Location: index?status=user");
     }
      $sql = "UPDATE Users SET LastTimeActive='$date', IP='$IP' WHERE Email='$pastas' && Parole='$slaptazodis'";
      if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
      } else {
      echo "Error updating record: " . $conn->error;
      }
    } else {
     echo "0 results";
        $nerasta++;
    }

    $sql = "SELECT ID, FirstName, LastName, Email, Parole, Mode FROM Administrators WHERE Email='$pastas' && Parole='$slaptazodis' && Mode='Aktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $admin_email=$pastas;
        $admin_pass=$slaptazodis;
     while($row = $result->fetch_assoc()) {
        $admin_ID=$row['ID'];
        $admin_name=$row['FirstName'];
        $admin_last=$row['LastName'];
        header("Location: administrator");
     }
     $sql = "UPDATE Administrators SET LoginDate='$date', IP='$IP' WHERE Email='$pastas' && Parole='$slaptazodis'";
      if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
      } else {
      echo "Error updating record: " . $conn->error;
      }
    } else {
     echo "0 results";
        $nerasta++;
    }
    
    if($nerasta==3){
      header("Location: log?sign_in=fail");
    }


    session_start();
    $_SESSION['PATVIRTINIMAS'] = $name;
    
    /*session_start();
    $_SESSION['username'] = $name;
    $_SESSION['userid'] = $ID;
    $_SESSION['useremail'] = $pastas;
    $_SESSION['userparole'] = $slaptazodis;*/

    session_start();
    $_SESSION['admin1'] = $admin_ID;
    $_SESSION['admin2'] = $admin_name;
    $_SESSION['admin3'] = $admin_last;
    $_SESSION['admin4'] = $admin_email;
    $_SESSION['admin5'] = $admin_pass;

    $conn->close();
?>