<?php    
    $S3=0;
    $M3;
    
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
        $S3++;
        $M3[$S3]=$row['ISO_3166'];
        }
    } else {
        echo "0 results";
    }
    sort($M3);
    header("Location : administrator?survey");
    session_start();
    $_SESSION['FF03']=$S3;
    $_SESSION['FF04']=$M3;
?>