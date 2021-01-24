<?php
    session_start();
    $userID=$_SESSION['userid'];

    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $countryNameLT=$_POST['countryID'];
    
    $i=0;
    $sql = "SELECT ID, Title, Script, Picture1, Picture2, Picture3, Picture4, CountryEN, Rating, UserID, Created, Mode FROM Stories WHERE Mode='Aktyvi' && CountryEN='$countryNameLT'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $i++;
        $id[$i]=$row['ID'];
        $title[$i]=$row['Title'];
        $text[$i]=$row['Script'];
        $picture1[$i]=$row['Picture1'];
        $picture2[$i]=$row['Picture2'];
        $picture3[$i]=$row['Picture3'];
        $picture4[$i]=$row['Picture4'];
        $rating[$i]=$row['Rating'];
        $data[$i]=$row['Created'];
     }
    } else {
     echo "0 results";
    }

    array_multisort($data, SORT_DESC, $id, $title, $text, $picture1, $picture2, $picture3, $picture4, $rating);

    if($userID!=""){
    echo "B1";
    header("Location : index?status=user?stories");
    }
    else{
    echo "B2";
    header("Location : index?stories");
    }

    $text1 = json_encode($text);

    setcookie("VI1", $i, time() + (86400), "/");
    setcookie("VI2", serialize($id), time() + (86400), "/");
    setcookie("VI3", serialize($title), time() + (86400), "/");
    setcookie("VI4", $text1, time() + (86400), "/");
    setcookie("VI5", serialize($picture1), time() + (86400), "/");
    setcookie("VI6", serialize($picture2), time() + (86400), "/");
    setcookie("VI7", serialize($picture3), time() + (86400), "/");
    setcookie("VI8", serialize($picture4), time() + (86400), "/");
    setcookie("VI9", serialize($rating), time() + (86400), "/");
?>