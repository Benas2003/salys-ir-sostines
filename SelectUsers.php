<?php
    $S8=0;
    $ID;
    $name;
    $mail;
    $parole;
    $code;
    $last;
    $mode;

    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $sql = "SELECT ID, FirstName, Email, Parole, Generated_code, LastTimeActive, Mode FROM Users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $S8++;
        $ID[$S8]=$row['ID'];
        $name[$S8]=$row['FirstName'];
        $mail[$S8]=$row['Email'];
        $parole[$S8]=$row['Parole'];
        $code[$S8]=$row['Generated_code'];
        $last[$S8]=$row['LastTimeActive'];
        $mode[$S8]=$row['Mode'];
     }
    } else {
    echo "0 results";
    }
    array_multisort($ID, $name, $mail, $parole, $code, $last, $mode);

    session_start();
    $_SESSION['SU1']=$S8;
    $_SESSION['SU2']=$ID;
    $_SESSION['SU3']=$name;
    $_SESSION['SU4']=$mail;
    $_SESSION['SU5']=$parole;
    $_SESSION['SU6']=$code;
    $_SESSION['SU7']=$last;
    $_SESSION['SU8']=$mode;

    header("Location : administrator?users");

    $conn->close();

?>