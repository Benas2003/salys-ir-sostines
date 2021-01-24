<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $code=$_POST['filter4'];

    echo $code;

    $i=0;
    $S5=0;

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($code=="Pasirinkite šalį (ISO)")
    {
        $sql = "SELECT ISO_3166 FROM List";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $S5++;
            $M5[$S5]=$row['ISO_3166'];
        }
        } else {
        echo "0 results";
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

        sort($M5);
        array_multisort($a, $b, $c, $d);

        session_start();
        $_SESSION['SS1']=$d;
        $_SESSION['SS2']=$a;
        $_SESSION['SS3']=$b;
        $_SESSION['SS4']=$c;

        $_SESSION['SS7']=$i;

        $_SESSION['SS5']=$S5;
        $_SESSION['SS6']=$M5;
    }
    else{
        $i=0;
        $sql = "SELECT ID, ISO_3166, Survey, SurveyName FROM Survey WHERE Mode='Aktyvi' && ISO_3166='$code'";
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

    header("Location : administrator?tableQuiz");

?>