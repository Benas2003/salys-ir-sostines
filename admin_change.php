<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    $admin_ID=$_POST['A1'];
    $admin_name=$_POST['A2'];
    $admin_last=$_POST['A3'];
    $admin_mail=$_POST['A4'];
    $admin_pass=$_POST['A5'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully";


    $sql = "UPDATE Administrators SET FirstName='$admin_name', LastName='$admin_last', Email='$admin_mail', Parole='$admin_pass' WHERE ID='$admin_ID'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        $pavyko=true;
    } else {
        echo "Error updating record: " . $conn->error;
        $pavyko=false;
        //header("Location: administrator.php?change?admin_data=fail");
    }

    if($pavyko==true)
    {
        $sql = "SELECT ID, FirstName, LastName, Email, Parole, Mode FROM Administrators WHERE ID='$admin_ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
        while($row = $result->fetch_assoc()) {
            $admin_name=$row['FirstName'];
            $admin_last=$row['LastName'];
            $admin_mail=$row['Email'];
            $admin_pass=$row['Parole'];
            header("Location: administrator?change?admin_data=fail");
        }
        } else {
        echo "0 results";
        }

        session_start();
        $_SESSION['admin1'] = $admin_ID;
        $_SESSION['admin2'] = $admin_name;
        $_SESSION['admin3'] = $admin_last;
        $_SESSION['admin4'] = $admin_mail;
        $_SESSION['admin5'] = $admin_pass;
    }
    $conn->close();

?>