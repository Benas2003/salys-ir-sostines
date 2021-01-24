<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully";   

    $skaicius=-1;
    $ID;
    $ISO_3166;
    $CountryLT;
    $Capital;
    $Mode;

    $sql = "SELECT ID, ISO_3166, CountryLT, Capital, Mode FROM List";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $skaicius++;
        $ID[$skaicius]=$row['ID'];
        $ISO_3166[$skaicius]=$row['ISO_3166'];
        $CountryLT[$skaicius]=$row['CountryLT'];
        $Capital[$skaicius]=$row['Capital'];
        $Mode[$skaicius]=$row['Mode'];
        
     }
    } else {
     echo "0 results";
    }
    echo $skaicius;
    array_multisort($ISO_3166, $ID, $CountryLT, $Capital, $Mode);
    session_start();
    $_SESSION['peržiūrėti1']=$ID;
    $_SESSION['peržiūrėti2']=$ISO_3166;
    $_SESSION['peržiūrėti3']=$CountryLT;
    $_SESSION['peržiūrėti4']=$Capital;
    $_SESSION['peržiūrėti5']=$Mode;
    $_SESSION['peržiūrėti6']=$skaicius;
    header("Location: administrator?view");
    $conn->close();
?>