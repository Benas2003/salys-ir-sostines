<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    
    $action=$_POST['action'];
    $ID=$_POST['change1'];
    $data=$_POST['change2'];

    echo $action;
    echo '<br>';
    echo $ID;
    echo '<br>';
    echo $data;

    $find1 = strpos($data, '@');
    $find2 = strpos($data, '.');

    if($action==1 && $find1==false && $find2==false)
    {
        header("Location: index?status=user?changedata?changed=fail");
    }
    else{
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } echo "Connected successfully";

        if($action==1)
        {
            $sql = "UPDATE Users SET Email='$data' WHERE ID='$ID'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                $pavyko=true;
            } else {
                echo "Error updating record: " . $conn->error;
                $pavyko=false;
                header("Location: index?status=user?changedata?changed=fail");
            }
        }
        if($action==2)
        {
            $sql = "UPDATE Users SET Parole='$data' WHERE ID='$ID'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                $pavyko=true;
            } else {
                echo "Error updating record: " . $conn->error;
                $pavyko=false;
                header("Location: index?status=user?changedata?changed=fail");
            }
        }
        if($pavyko==true)
        {
            $sql = "SELECT FirstName, Email, Parole, Generated_code, Mode FROM Users WHERE ID='$ID'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            $pastas=$pastas;
            $slaptazodis=$slaptazodis;
            while($row = $result->fetch_assoc()) {
                $name=$row['FirstName'];
                $pastas=$row['Email'];
                $slaptazodis=$row['Parole'];
                $kodas=$row['Generated_code'];
                header("Location: index?status=user?changedata?changed=success");
            }
            } else {
            echo "0 results";
            }

            /*session_start();
            $_SESSION['username'] = $name;
            $_SESSION['useremail'] = $pastas;
            $_SESSION['userparole'] = $slaptazodis;
            $_SESSION['usercode'] = $kodas;*/
            setcookie("Laikinasis", serialize($kodas), time() + (86400*30), "/");
        }
    }
    $conn->close();
?>