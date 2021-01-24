<?php    
    // Failo kintamieji
    $valstybiu_kodai;
    $kodu_skaicius=0;
    
    // Prisijungimas prie duomenų bazės
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Tikrinamas prisijungimas
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    // Nuskaitomi visų valstybių kodai
    $sql = "SELECT ISO_3166 FROM List";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $kodu_skaicius++;
        $valstybiu_kodai[$kodu_skaicius]=$row['ISO_3166'];
        }
    } else {
        echo "0 results";
    }

    // Rūšiavimas
    sort($valstybiu_kodai);

    // Grįžimas į administrator.php failą
    header("Location : administrator?links");

    // Duomenų perdavimas
    session_start();
    $_SESSION['Valstybiu_kodu_skaicius_1']=$kodu_skaicius;
    $_SESSION['Valstybiu_kodai_1']=$valstybiu_kodai;
?>