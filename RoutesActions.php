<?php  
    $ID=$_POST['RF2'];
    $action=$_POST['RF1'];
    $title1=$_POST['RF3'];
    $ISO2=$_POST['filter11'];



    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $i=0;
    $skaicius1=0;
    $tikras=1;
    
    if($action==1)
    {
        $sql = "SELECT CaseName FROM Routes WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $pasalinti=$row['CaseName'];
         }
        } else {
         echo "0 results";
        }

        unlink($pasalinti);
        
        $sql = "UPDATE Routes SET Mode='Neaktyvi' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?RoutesTable?effect=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?RoutesTable?effect=fail");

        }
        $sql = "SELECT ID, ISO_3166, Title, CaseName FROM Routes WHERE Mode='Aktyvi'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            $a[$i]=$row['ID'];
            $b[$i]=$row['ISO_3166'];
            $c[$i]=$row['Title'];
            $d[$i]=$row['CaseName'];
        }
        } else {
        echo "0 results";
        }
        array_multisort($a, $b, $c, $d);
        session_start();
        $_SESSION['FR3']=$i;
        $_SESSION['FR4']=$a;
        $_SESSION['FR5']=$b;
        $_SESSION['FR6']=$c;
        $_SESSION['FR7']=$d;
    }
    else if($action==2)
    {
        
        $sql = "SELECT ISO_3166, Title, CaseName FROM Routes WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $ISO1=$row['ISO_3166'];
            $title=$row['Title'];
            $caseName=$row['CaseName'];
            header("Location : administrator?effect=form");
         }
        } else {
         echo "0 results";
         header("Location : administrator?RoutesTable?effect=fail");
        }

        $sql = "SELECT ISO_3166 FROM List WHERE ISO_3166!='$ISO1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $skaicius1++;
            $masyvas1[$skaicius1]=$row['ISO_3166'];
        }
        } else {
        echo "0 results";
        }
        sort($masyvas1);
        
        session_start();
        $_SESSION['FAF1']=$skaicius1;
        $_SESSION['FAF2']=$masyvas1;
        $_SESSION['FAF3']=$ID;
        $_SESSION['FAF4']=$ISO1;
        $_SESSION['FAF5']=$title;
        $_SESSION['FAF6']=$caseName;
    }
    else if($action==3)
    {
        $expensions= array("pdf", "docx", "doc", "rtf", "xlsx", "pptx", "jpg");
        echo "Good";
        if(isset($_FILES['failas_keisti_2'])){
            $tikras=0;
            $errors1= array();
            $file_name1 = $_FILES['failas_keisti_2']['name'];
            $file_size1 =$_FILES['failas_keisti_2']['size'];
            $file_tmp1 =$_FILES['failas_keisti_2']['tmp_name'];
            $file_type1=$_FILES['failas_keisti_2']['type'];
            $file_ext1=strtolower(end(explode('.',$_FILES['failas_keisti_2']['name'])));
            
            if(in_array($file_ext1,$expensions)=== false){
            $errors1[]="extension not allowed";
            }
            
            if($file_size1 > 10485760){
            $errors1[]='File size must be excately 10 MB';
            }
            echo "Good";
            if(empty($errors1)==true){
                $sql = "SELECT ISO_3166, CaseName FROM Routes WHERE ID='$ID'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $senasis_ISO=$row['ISO_3166'];
                    $senasis=$row['CaseName'];
                }
                } else {
                echo "0 results";
                }       

                $sql = "SELECT CountryEN FROM List WHERE ISO_3166='$senasis_ISO'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $pavadinimas_EN=$row['CountryEN'];
                }
                } else {
                echo "0 results";
                }
                unlink($senasis);
                move_uploaded_file($file_tmp1,"Routes/$pavadinimas_EN/".$file_name1);
                $adresas="Routes/$pavadinimas_EN/$file_name1";
                $sql = "UPDATE Routes SET ISO_3166='$ISO2', Title='$title1', CaseName='$adresas' WHERE ID='$ID'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location : administrator?RoutesTable?effect=go");
                } else {
                    echo "Error updating record: " . $conn->error;
                    header("Location : administrator?RoutesTable?effect=fail");
                }
            }else{

            }
        }
        if($tikras!=0){
            $sql = "UPDATE Routes SET ISO_3166='$ISO2', Title='$title1' WHERE ID='$ID'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header("Location : administrator?RoutesTable?effect=go");
            } else {
                echo "Error updating record: " . $conn->error;
                header("Location : administrator?RoutesTable?effect=fail");
            }
        }
        $sql = "SELECT ID, ISO_3166, Title, CaseName FROM Routes WHERE Mode='Aktyvi'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            $a[$i]=$row['ID'];
            $b[$i]=$row['ISO_3166'];
            $c[$i]=$row['Title'];
            $d[$i]=$row['CaseName'];
        }
        } else {
        echo "0 results";
        }
        array_multisort($a, $b, $c, $d);


        session_start();

        $_SESSION['FR3']=$i;
        $_SESSION['FR4']=$a;
        $_SESSION['FR5']=$b;
        $_SESSION['FR6']=$c;
        $_SESSION['FR7']=$d;
    }
    else{
        header("Location : administrator?RoutesTable?effect=fail");
    }

?>