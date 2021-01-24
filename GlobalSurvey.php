<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $action=$_POST['GA1'];
    $ID=$_POST['GA2'];

    $apklausa=$_POST['GA3'];
    $apklausosPav=$_POST['GA4'];
    
    $i=0;

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($action==1)
    {
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && AllCountries='Taip' && ISO_3166='Visos'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            $d[$i]=$row['ID'];
            $a[$i]=$row['ISO_3166'];
            $b[$i]=$row['Survey'];
            $c[$i]=$row['SurveyName'];
        }
        } else {
        echo "0 results";
        }
        
        array_multisort($a, $b, $c, $d);

        session_start();
        $_SESSION['GSS1']=$d;
        $_SESSION['GSS2']=$a;
        $_SESSION['GSS3']=$b;
        $_SESSION['GSS4']=$c;
        $_SESSION['GSS5']=$i;

        header("Location : administrator?global=table");
    }
    else if($action==2)
    {
        $sql = "UPDATE Survey SET Mode='Neaktyvi' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?global=table?all=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?global=table?all=fail");
        }
        
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && AllCountries='Taip' && ISO_3166='Visos'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            $d[$i]=$row['ID'];
            $a[$i]=$row['ISO_3166'];
            $b[$i]=$row['Survey'];
            $c[$i]=$row['SurveyName'];
        }
        } else {
        echo "0 results";
        }
        
        array_multisort($a, $b, $c, $d);

        session_start();
        $_SESSION['GSS1']=$d;
        $_SESSION['GSS2']=$a;
        $_SESSION['GSS3']=$b;
        $_SESSION['GSS4']=$c;
        $_SESSION['GSS5']=$i;

    }
    else if($action==3)
    {
        $sql = "SELECT ISO_3166, Survey, SurveyName FROM Survey WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $ISO=$row['ISO_3166'];
            $survey=$row['Survey'];
            $surveyName=$row['SurveyName'];
            header("Location : administrator.php?all=form");
         }
        } else {
         echo "0 results";
         header("Location : administrator?global=table?all=fail");
        }

        session_start();
        $_SESSION['GAA1']=$ID;
        $_SESSION['GAA2']=$ISO;
        $_SESSION['GAA3']=$survey;
        $_SESSION['GAA4']=$surveyName;
    }
    else if($action==4)
    {
        $sql = "UPDATE Survey SET Survey='$apklausa', SurveyName='$apklausosPav' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?global=table?all=go");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?global=table?all=fail");
        }
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && AllCountries='Taip' && ISO_3166='Visos'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            $d[$i]=$row['ID'];
            $a[$i]=$row['ISO_3166'];
            $b[$i]=$row['Survey'];
            $c[$i]=$row['SurveyName'];
        }
        } else {
        echo "0 results";
        }
        
        array_multisort($a, $b, $c, $d);

        session_start();
        $_SESSION['GSS1']=$d;
        $_SESSION['GSS2']=$a;
        $_SESSION['GSS3']=$b;
        $_SESSION['GSS4']=$c;
        $_SESSION['GSS5']=$i;
    }
    else{
        header("Location : administrator?global=table?all=fail");
    }

?>