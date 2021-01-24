<?php
    $ISO=$_POST['NN1'];

    $link1=$_POST['NN3'];
    $link2=$_POST['NN5'];
    $link3=$_POST['NN7'];
    $link4=$_POST['NN9'];
    $link5=$_POST['NN11'];

    $LinkName1=$_POST['NN2'];
    $LinkName2=$_POST['NN4'];
    $LinkName3=$_POST['NN6'];
    $LinkName4=$_POST['NN8'];
    $LinkName5=$_POST['NN10'];

    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 
    
    if($link1!="" && $ISO!='Pasirinkite šalį (ISO)')
    {
        $sql = "INSERT INTO Links (ISO_3166, Link, LinkName, Mode) VALUES ('$ISO', '$link1', '$LinkName1', 'Aktyvi');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            header("Location : administrator?links?reference=fail");
            echo "Error: " . $sql . "<br>" . $conn->error;
            $created=false;
        }
    }

    if($link2!="" && $ISO!='Pasirinkite šalį (ISO)')
    {
        $sql = "INSERT INTO Links (ISO_3166, Link, LinkName, Mode) VALUES ('$ISO', '$link2', '$LinkName2', 'Aktyvi');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    if($link3!="" && $ISO!='Pasirinkite šalį (ISO)')
    {
        $sql = "INSERT INTO Links (ISO_3166, Link, LinkName, Mode) VALUES ('$ISO', '$link3', '$LinkName3', 'Aktyvi');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    if($link4!="" && $ISO!='Pasirinkite šalį (ISO)')
    {
        $sql = "INSERT INTO Links (ISO_3166, Link, LinkName, Mode) VALUES ('$ISO', '$link4', '$LinkName4', 'Aktyvi');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    if($link5!="" && $ISO!='Pasirinkite šalį (ISO)')
    {
        $sql = "INSERT INTO Links (ISO_3166, Link, LinkName, Mode) VALUES ('$ISO', '$link5', '$LinkName5', 'Aktyvi');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    header("Location : administrator?links?reference=uploaded");

?>