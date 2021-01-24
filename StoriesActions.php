<?php 
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $userID=$_POST['VIV3'];
    $action=$_POST['VIV1'];
    $storyID=$_POST['VIV2'];

    if($action==1)
    {
        $sql = "UPDATE Stories SET Mode='Užblokuota' WHERE ID='$storyID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?users?action=stories?data=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?users?action=stories?data=fail");
        }
    }
    if($action==2)
    {
        $sql = "UPDATE Stories SET Mode='Aktyvi' WHERE ID='$storyID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?users?action=stories?data=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?users?action=stories?data=fail");
        }
    }

    $sql = "SELECT ID, Title, CountryEN, Rating, Mode, Created FROM Stories WHERE UserID='$userID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $S8++;
        $ID[$S8]=$row['ID'];
        $title[$S8]=$row['Title'];
        $countryLT[$S8]=$row['CountryEN'];
        $rating[$S8]=$row['Rating'];
        $created[$S8]=$row['Created'];
        $mode[$S8]=$row['Mode'];
        
    }
    } else {
    echo "0 results";
    }

    array_multisort($created, SORT_DESC, $ID, $title, $countryLT, $rating, $mode);

    session_start();
    $_SESSION['KVI1']=$S8;
    $_SESSION['KVI2']=$ID;
    $_SESSION['KVI3']=$title;
    $_SESSION['KVI4']=$countryLT;
    $_SESSION['KVI5']=$rating;
    $_SESSION['KVI6']=$created;
    $_SESSION['KVI7']=$mode;
    $_SESSION['KVI8']=$userID;


?>