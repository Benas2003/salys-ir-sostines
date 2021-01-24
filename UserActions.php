<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    $kodas=$_POST['U1'];
    $action=$_POST['U2'];
    
    $S8=0;
    
    $vardas=$_POST['U3'];
    $paštas=$_POST['U4'];
    $slaptažodis=$_POST['U5'];
    $statusas=$_POST['filter6'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($action==1)
    {
        $sql = "UPDATE Users SET Mode='Užblokuota' WHERE ID='$kodas'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?users?action=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?users?action=fail");
        }
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
    }
    else if ($action==2)
    {
        $sql = "UPDATE Users SET Mode='Aktyvi' WHERE ID='$kodas'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?users?action=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?users?action=fail");
        }
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
    }
    else if ($action==3)
    {
        $sql = "SELECT ID, FirstName, Email, Parole, Generated_code, LastTimeActive, Mode FROM Users WHERE ID='$kodas'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $ID1=$row['ID'];
            $name1=$row['FirstName'];
            $mail1=$row['Email'];
            $parole1=$row['Parole'];
            $code1=$row['Generated_code'];
            $last1=$row['LastTimeActive'];
            $mode1=$row['Mode'];
            header("Location : administrator?action=form");
        }
        } else {
        echo "0 results";
        header("Location : administrator?users?action=fail");
        }
        session_start();
        $_SESSION['SSU1']=$ID1;
        $_SESSION['SSU2']=$name1;
        $_SESSION['SSU3']=$mail1;
        $_SESSION['SSU4']=$parole1;
        $_SESSION['SSU5']=$code1;
        $_SESSION['SSU6']=$last1;
        $_SESSION['SSU7']=$mode1;
    }
    else if ($action==4)
    {
        $sql = "UPDATE Users SET FirstName='$vardas', Email='$paštas', Parole='$slaptažodis', Mode='$statusas' WHERE ID='$kodas'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?users?action=go");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?users?action=fail");
        }
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
    }
    else if ($action==5)
    {

	

        echo "Benas";
        $sql = "SELECT ID, Title, CountryEN, Rating, UserID, Created, Mode FROM Stories WHERE UserID='$kodas'";
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
            header("Location : administrator?users?action=stories");
        }
        } else {
        echo "0 results";
        header("Location : administrator?users");
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
        $_SESSION['KVI8']=$kodas;
    }
    else{
        header("Location : administrator?users?action=fail");
    }

?>