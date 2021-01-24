<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $ID=$_POST['MF2'];
    $action=$_POST['MF1'];

    $title1=$_POST['MF3'];
    $ISO2=$_POST['filter9'];

    $skaicius1=0;
    $i=0;
    $tikras=1;

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($action==1)
    {
        $sql = "SELECT CaseName FROM Maps WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $pasalinti=$row['CaseName'];
         }
        } else {
         echo "0 results";
        }

        unlink($pasalinti);
        
        $sql = "UPDATE Maps SET Mode='Neaktyvi' WHERE ID='$ID'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location : administrator?MapTable?operation=success");
        } else {
            echo "Error updating record: " . $conn->error;
            header("Location : administrator?MapTable?operation=fail");
        }
        $sql = "SELECT ID, ISO_3166, Title, CaseName FROM Maps WHERE Mode='Aktyvi'";
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
    
    
        sort($masyvas);
        array_multisort($a, $b, $c, $d);
    
    
        session_start();
        $_SESSION['FM1']=$skaicius;
        $_SESSION['FM2']=$masyvas;
    
        $_SESSION['FM3']=$i;
        $_SESSION['FM4']=$a;
        $_SESSION['FM5']=$b;
        $_SESSION['FM6']=$c;
        $_SESSION['FM7']=$d;
    }
    else if ($action==2)
    {
        $sql = "SELECT ISO_3166, Title, CaseName FROM Maps WHERE ID='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $ISO1=$row['ISO_3166'];
            $title=$row['Title'];
            $caseName=$row['CaseName'];
            header("Location : administrator?operation=form");
         }
        } else {
         echo "0 results";
         header("Location : administrator?MapTable?operation=fail");
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
        $_SESSION['MAF1']=$skaicius1;
        $_SESSION['MAF2']=$masyvas1;
        $_SESSION['MAF3']=$ID;
        $_SESSION['MAF4']=$ISO1;
        $_SESSION['MAF5']=$title;
        $_SESSION['MAF6']=$caseName;

    }
    else if ($action==3)
    {
        $expensions= array("pdf", "docx", "doc", "rtf", "xlsx", "pptx", "jpg");
        echo "Good";
        if(isset($_FILES['failas_keisti_1'])){
            $tikras=0;
            $errors1= array();
            $file_name1 = $_FILES['failas_keisti_1']['name'];
            $file_size1 =$_FILES['failas_keisti_1']['size'];
            $file_tmp1 =$_FILES['failas_keisti_1']['tmp_name'];
            $file_type1=$_FILES['failas_keisti_1']['type'];
            $file_ext1=strtolower(end(explode('.',$_FILES['failas_keisti_1']['name'])));
            
            if(in_array($file_ext1,$expensions)=== false){
            $errors1[]="extension not allowed";
            }
            
            if($file_size1 > 10485760){
            $errors1[]='File size must be excately 10 MB';
            }
            echo "Good";
            if(empty($errors1)==true){
                $sql = "SELECT ISO_3166, CaseName FROM Maps WHERE ID='$ID'";
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
                move_uploaded_file($file_tmp1,"Maps/$pavadinimas_EN/".$file_name1);
                $adresas="Maps/$pavadinimas_EN/$file_name1";
                $sql = "UPDATE Maps SET ISO_3166='$ISO2', Title='$title1', CaseName='$adresas' WHERE ID='$ID'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    header("Location : administrator?MapTable?operation=go");
                } else {
                    echo "Error updating record: " . $conn->error;
                    header("Location : administrator?MapTable?operation=fail");
                }
            }else{

            }
        }
        if($tikras!=0){
            $sql = "UPDATE Maps SET ISO_3166='$ISO2', Title='$title1' WHERE ID='$ID'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header("Location : administrator?MapTable?operation=go");
            } else {
                echo "Error updating record: " . $conn->error;
                header("Location : administrator?MapTable?operation=fail");
            }
        }
        $sql = "SELECT ID, ISO_3166, Title, CaseName FROM Maps WHERE Mode='Aktyvi'";
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
        $_SESSION['FM3']=$i;
        $_SESSION['FM4']=$a;
        $_SESSION['FM5']=$b;
        $_SESSION['FM6']=$c;
        $_SESSION['FM7']=$d;
    }
    else{
        header("Location : administrator?MapTable?operation=fail");
    }
?>