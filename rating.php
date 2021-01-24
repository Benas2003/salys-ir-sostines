<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    session_start();
    $userID=$_SESSION['userid'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } //echo "Connected successfully";

    $storyID=$_POST['storyID'];
    $rate=$_POST['value'];
    $pavadinimas_EN=$_POST['countryID2'];

    $sql = "SELECT Rating, RatingCount, RatingSum FROM Stories WHERE Mode='Aktyvi' && ID='$storyID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
       $rating=$row['Rating'];
       $ratingCount=$row['RatingCount'];
       $ratingSum=$row['RatingSum'];
     }
    } else {
     //echo "0 results";
    }

    $ratingSum=$ratingSum+$rate;
    $ratingCount++;
    $rating=$ratingSum/$ratingCount;
    $rating=round($rating,1);
    
    $sql = "UPDATE Stories SET Rating='$rating', RatingCount='$ratingCount', RatingSum='$ratingSum' WHERE ID='$storyID'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        if($userID==""){
        header("Location : index?stories?rate=success");
        }else{
        header("Location : index?status=user?stories?rate=success");
        }
    } else {
        echo "Error updating record: " . $conn->error;
        if($userID==""){
        header("Location : index?stories?rate=fail");
        }else{
        header("Location : index?status=user?stories?rate=fail");
        }
    }
?>