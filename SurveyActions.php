<?php
    $ID=$_POST['AV1'];
    $action=$_POST['AV2'];
    $apklausa=$_POST['AV3'];
    $apklausosPav=$_POST['AV4'];
    $kodas=$_POST['filter5'];
    
    $skaicius=0;
    $masyvas;
    
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($action==1)
    {
        $sql = "UPDATE Survey SET Mode='Neaktyvi' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?tableQuiz?interview=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?tableQuiz?interview=fail");
        }
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && AllCountries='Ne'";
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
        $_SESSION['SS1']=$d;
        $_SESSION['SS2']=$a;
        $_SESSION['SS3']=$b;
        $_SESSION['SS4']=$c;

        $_SESSION['SS7']=$i;
    }
    else if($action==2)
    {
        $sql = "SELECT ISO_3166, Survey, SurveyName FROM Survey WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $ISO=$row['ISO_3166'];
            $survey=$row['Survey'];
            $surveyName=$row['SurveyName'];
            header("Location : administrator?interview=form");
         }
        } else {
         echo "0 results";
         header("Location : administrator?tableQuiz?interview=fail");
        }

        $sql = "SELECT ISO_3166 FROM List WHERE ISO_3166!='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $skaicius++;
            $masyvas[$skaicius]=$row['ISO_3166'];
        }
        } else {
        echo "0 results";
        }
        sort($masyvas);
    }
    else if($action==3)
    {    
        $sql = "UPDATE Survey SET Survey='$apklausa', ISO_3166='$kodas', SurveyName='$apklausosPav' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?tableQuiz?interview=go");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?tableQuiz?interview=fail");
        }
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && AllCountries='Ne'";
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
        $_SESSION['SS1']=$d;
        $_SESSION['SS2']=$a;
        $_SESSION['SS3']=$b;
        $_SESSION['SS4']=$c;

        $_SESSION['SS7']=$i;

    }
    else
    {
        header("Location : administrator?interview=form");
    }

    session_start();
    $_SESSION['AA1']=$ID;
    $_SESSION['AA2']=$ISO;
    $_SESSION['AA3']=$survey;
    $_SESSION['AA4']=$surveyName;
    $_SESSION['AA5']=$skaicius;
    $_SESSION['AA6']=$masyvas;

    $conn->close();
?>