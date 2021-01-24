<?php
    $S9=0;
    $M9;
    
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
        $S9++;
        $M9[$S9]=$row['ISO_3166'];
        }
    } else {
        echo "0 results";
    }
    sort($M9);
    header("Location : administrator?upload");
    session_start();
    $_SESSION['UF01']=$S9;
    $_SESSION['UF02']=$M9;
?>