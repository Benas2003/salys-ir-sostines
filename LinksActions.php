<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $action=$_POST['LV1'];
    $ID=$_POST['LV2'];
    $nuoroda=$_POST['LV3'];
    $nuorodaPav=$_POST['LV4'];
    $kodas=$_POST['filter2'];

    $skaicius=0;
    $masyvas;

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 
    
    if($action==1)
    {
        $sql = "UPDATE Links SET Mode='Neaktyvi' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?tableLinks?innovated=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?tableLinks?innovated=fail");
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


        array_multisort($a, $b, $c, $d);


        session_start();
        $_SESSION['FL3']=$i;
        $_SESSION['FL4']=$a;
        $_SESSION['FL5']=$b;
        $_SESSION['FL6']=$c;
        $_SESSION['FL7']=$d;
    }
    else if ($action==2)
    {
        $sql = "SELECT ISO_3166, Link, LinkName FROM Links WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $ISO=$row['ISO_3166'];
            $link=$row['Link'];
            $linkName=$row['LinkName'];
            header("Location : administrator?innovated=form");
         }
        } else {
         echo "0 results";
         header("Location : administrator?tableLinks?innovated=fail");
        }
        
        $sql = "SELECT ISO_3166 FROM List WHERE ISO_3166!='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $skaicius++;
            $masyvas[$skaicius]=$row['ISO_3166'];
        }
        } else {
        echo "0 results";
        }
        sort($masyvas);
    }
    else if ($action==3)
    {
        $sql = "UPDATE Links SET Link='$nuoroda', ISO_3166='$kodas', LinkName='$nuorodaPav' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?tableLinks?innovated=go");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?tableLinks?innovated=fail");
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


        array_multisort($a, $b, $c, $d);


        session_start();
        $_SESSION['FL3']=$i;
        $_SESSION['FL4']=$a;
        $_SESSION['FL5']=$b;
        $_SESSION['FL6']=$c;
        $_SESSION['FL7']=$d;
    }
    else
    {
        header("Location : administrator?tableLinks?innovated=fail");
    }

    session_start();
    $_SESSION['FF1']=$ID;
    $_SESSION['FF2']=$ISO;
    $_SESSION['FF3']=$link;
    $_SESSION['FF4']=$linkName;
    $_SESSION['FF5']=$skaicius;
    $_SESSION['FF6']=$masyvas;

    $conn->close();
?>