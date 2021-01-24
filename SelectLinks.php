<?php
    $skaicius=0;
    $i=0;
    $masyvas;
    
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
        $skaicius++;
        $masyvas[$skaicius]=$row['ISO_3166'];
     }
    } else {
     echo "0 results";
    }

    $sql = "SELECT ID, ISO_3166, Link, LinkName FROM Links WHERE Mode='Aktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $i++;
        $a[$i]=$row['ID'];
        $b[$i]=$row['ISO_3166'];
        $c[$i]=$row['Link'];
        $d[$i]=$row['LinkName'];
     }
    } else {
     echo "0 results";
    }


    sort($masyvas);
    array_multisort($a, $b, $c, $d);


    session_start();
    $_SESSION['FL1']=$skaicius;
    $_SESSION['FL2']=$masyvas;

    $_SESSION['FL3']=$i;
    $_SESSION['FL4']=$a;
    $_SESSION['FL5']=$b;
    $_SESSION['FL6']=$c;
    $_SESSION['FL7']=$d;

    header("Location : administrator?tableLinks");
    $conn->close();
    

?>