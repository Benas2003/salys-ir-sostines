<?php
    $S13=0;
    $M13;
    $i=0;
    
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $sql = "SELECT ISO_3166 FROM List";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $S13++;
        $M13[$S13]=$row['ISO_3166'];
     }
    } else {
     echo "0 results";
    }

    $sql = "SELECT ID, ISO_3166, Title, CaseName FROM Routes WHERE Mode='Aktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $i++;
        $a[$i]=$row['ID'];
        $b[$i]=$row['ISO_3166'];
        $c[$i]=$row['Title'];
        $d[$i]=$row['CaseName'];
     }
    } else {
     echo "0 results";
    }


    sort($M13);
    array_multisort($a, $b, $c, $d);

    print_r($M13);

    session_start();
    $_SESSION['FR1']=$S13;
    $_SESSION['FR2']=$M13;

    $_SESSION['FR3']=$i;
    $_SESSION['FR4']=$a;
    $_SESSION['FR5']=$b;
    $_SESSION['FR6']=$c;
    $_SESSION['FR7']=$d;

    header("Location : administrator?RoutesTable");

?>