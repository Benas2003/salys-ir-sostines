<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $code=$_POST['K002'];
    $failas=$_POST['K001'];
    echo $code;
    echo "<br>";
    echo $failas;

    $expensions= array("jpeg","jpg","png", "webp");


    //move_uploaded_file($file_tmp1,"Pictures/$pavadinimas_EN/".$file_name1);
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($failas==1)
    {
        if(isset($_FILES['sostinė1_1'])){
            $errors1= array();
            $file_name1 = $_FILES['sostinė1_1']['name'];
            $file_size1 =$_FILES['sostinė1_1']['size'];
            $file_tmp1 =$_FILES['sostinė1_1']['tmp_name'];
            $file_type1=$_FILES['sostinė1_1']['type'];
            $file_ext1=strtolower(end(explode('.',$_FILES['sostinė1_1']['name'])));
            
            if(in_array($file_ext1,$expensions)=== false){
                $errors1[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size1 > 10485760){
                $errors1[]='File size must be excately 2 MB';
            }
            
            if(empty($errors1)==true){
                $sql = "SELECT CountryEN FROM List WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $pavadinimas_EN=$row['CountryEN'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                $naujas_adresas1="Pictures/$pavadinimas_EN/$file_name1";
                
                $sql = "SELECT FileName1 FROM Capital WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $adresas1=$row['FileName1'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                if($pavyko==true)
                {
                    $sql = "UPDATE Capital SET FileName1='$naujas_adresas1' WHERE ISO_3166='$code'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                        $pavyko=true;
                    } else {
                        echo "Error updating record: " . $conn->error;
                        $pavyko=false;
                        
                    }
                }
                if($pavyko==true)
                {
                unlink($adresas1);
                move_uploaded_file($file_tmp1,"Pictures/$pavadinimas_EN/".$file_name1);
                echo "Success";
                header("Location: administrator?modify_country?photo=changed");
                }
                else{
                    header("Location: administrator?modify_country?photo=fail");
                }
            }else{
                print_r($errors1);
                header("Location: administrator?modify_country?photo=fail");
            }
        }
    }
    else if($failas==2)
    {
        if(isset($_FILES['sostinė2_1'])){
            $errors2= array();
            $file_name2 = $_FILES['sostinė2_1']['name'];
            $file_size2 =$_FILES['sostinė2_1']['size'];
            $file_tmp2 =$_FILES['sostinė2_1']['tmp_name'];
            $file_type2=$_FILES['sostinė2_1']['type'];
            $file_ext2=strtolower(end(explode('.',$_FILES['sostinė2_1']['name'])));
            
            if(in_array($file_ext2,$expensions)=== false){
                $errors2[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size2 > 10485760){
                $errors2[]='File size must be excately 10 MB';
            }
            
            if(empty($errors2)==true){
                $sql = "SELECT CountryEN FROM List WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $pavadinimas_EN=$row['CountryEN'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                $naujas_adresas2="Pictures/$pavadinimas_EN/$file_name2";
                
                $sql = "SELECT FileName2 FROM Capital WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $adresas2=$row['FileName2'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                if($pavyko==true)
                {
                    $sql = "UPDATE Capital SET FileName2='$naujas_adresas2' WHERE ISO_3166='$code'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                        $pavyko=true;
                    } else {
                        echo "Error updating record: " . $conn->error;
                        $pavyko=false;
                        
                    }
                }
                if($pavyko==true)
                {
                unlink($adresas2);
                move_uploaded_file($file_tmp2,"Pictures/$pavadinimas_EN/".$file_name2);
                echo "Success";
                header("Location: administrator?modify_country?photo=changed");
            }
            else{
                header("Location: administrator?modify_country?photo=fail");
            }
        }else{
            print_r($errors2);
            header("Location: administrator?modify_country?photo=fail");
        }
        }
    }
    else if($failas==3)
    {
        if(isset($_FILES['sostinė3_1'])){
            $errors3= array();
            $file_name3 = $_FILES['sostinė3_1']['name'];
            $file_size3 =$_FILES['sostinė3_1']['size'];
            $file_tmp3 =$_FILES['sostinė3_1']['tmp_name'];
            $file_type3=$_FILES['sostinė3_1']['type'];
            $file_ext3=strtolower(end(explode('.',$_FILES['sostinė3_1']['name'])));
            
            if(in_array($file_ext3,$expensions)=== false){
                $errors3[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size3 > 10485760){
                $errors3[]='File size must be excately 10 MB';
            }
            
            if(empty($errors3)==true){
                $sql = "SELECT CountryEN FROM List WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $pavadinimas_EN=$row['CountryEN'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                $naujas_adresas3="Pictures/$pavadinimas_EN/$file_name3";
                
                $sql = "SELECT FileName3 FROM Capital WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $adresas3=$row['FileName3'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                if($pavyko==true)
                {
                    $sql = "UPDATE Capital SET FileName3='$naujas_adresas3' WHERE ISO_3166='$code'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                        $pavyko=true;
                    } else {
                        echo "Error updating record: " . $conn->error;
                        $pavyko=false;
                        
                    }
                }
                if($pavyko==true)
                {
                unlink($adresas3);
                move_uploaded_file($file_tmp3,"Pictures/$pavadinimas_EN/".$file_name3);
                echo "Success";
                header("Location: administrator?modify_country?photo=changed");
                }
                else{
                    header("Location: administrator?modify_country?photo=fail");
                }
            }else{
                print_r($errors3);
                header("Location: administrator?modify_country?photo=fail");
            }
        }
    }
    else if($failas==4)
    {
        if(isset($_FILES['vėliava_1'])){
            $errors4= array();
            $file_name4 = $_FILES['vėliava_1']['name'];
            $file_size4 =$_FILES['vėliava_1']['size'];
            $file_tmp4 =$_FILES['vėliava_1']['tmp_name'];
            $file_type4=$_FILES['vėliava_1']['type'];
            $file_ext4=strtolower(end(explode('.',$_FILES['vėliava_1']['name'])));
            
            if(in_array($file_ext4,$expensions)=== false){
                $errors4[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size4 > 10485760){
                $errors4[]='File size must be excately 10 MB';
            }
            
            if(empty($errors4)==true){
                $naujas_adresas4="Flags/$file_name4";

                $sql = "SELECT Flag FROM List WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $adresas4=$row['Flag'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                if($pavyko==true)
                {
                    $sql = "UPDATE List SET Flag='$naujas_adresas4' WHERE ISO_3166='$code'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                        $pavyko=true;
                    } else {
                        echo "Error updating record: " . $conn->error;
                        $pavyko=false;
                        
                    }
                }
                if($pavyko==true)
                {
                unlink($adresas4);
                move_uploaded_file($file_tmp4,"Flags/".$file_name4);
                echo "Success";
                header("Location: administrator?modify_country?photo=changed");
                }
                else{
                    header("Location: administrator?modify_country?photo=fail");
                }
            }else{
                print_r($errors4);
                header("Location: administrator?modify_country?photo=fail");
            }
        }
    }
    else if($failas==5)
    {
        if(isset($_FILES['fonas_1'])){
            $errors5= array();
            $file_name5 = $_FILES['fonas_1']['name'];
            $file_size5 =$_FILES['fonas_1']['size'];
            $file_tmp5 =$_FILES['fonas_1']['tmp_name'];
            $file_type5=$_FILES['fonas_1']['type'];
            $file_ext5=strtolower(end(explode('.',$_FILES['fonas_1']['name'])));
            
            if(in_array($file_ext5,$expensions)=== false){
                $errors5[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size5 > 10485760){
                $errors5[]='File size must be excately 10 MB';
            }
            
            if(empty($errors5)==true){
                $naujas_adresas5="Regions/$file_name5";

                $sql = "SELECT Background FROM List WHERE ISO_3166='$code'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $pavyko=true;
                while($row = $result->fetch_assoc()) {
                    $adresas5=$row['Background'];
                }
                } else {
                $pavyko=false;
                echo "0 results";
                } 
                if($pavyko==true)
                {
                    $sql = "UPDATE List SET Background='$naujas_adresas5' WHERE ISO_3166='$code'";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                        $pavyko=true;
                    } else {
                        echo "Error updating record: " . $conn->error;
                        $pavyko=false;
                        
                    }
                }
                if($pavyko==true)
                {
                unlink($adresas5);
                move_uploaded_file($file_tmp5,"Regions/".$file_name5);
                echo "Success";
                header("Location: administrator?modify_country?photo=changed");
                }
                else{
                    header("Location: administrator?modify_country?photo=fail");
                }
            }else{
                $klaida=5;
                print_r($errors5);
                header("Location: administrator?modify_country?photo=fail");
            }
        }
    }
    else{
        header("Location: administrator?modify_country?photo=fail");
    }




    $sql = "SELECT City, Info, Link, LinkName, Latitude, Longitude, FileName1, FileName2, FileName3 FROM Capital WHERE ISO_3166='$code'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $city=$row['City'];
        $count=$row['Info'];
        $link=$row['Link'];
        $linkName=$row['LinkName'];
        $latitude=$row['Latitude'];
        $longitude=$row['Longitude'];
        $file1=$row['FileName1'];
        $file2=$row['FileName2'];
        $file3=$row['FileName3'];
    }
    } else {
    echo "0 results";
    }

    $sql = "SELECT CountryLT, CountryEN, CountryGAL, Abbreviations, Flag, Background FROM List WHERE ISO_3166='$code'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $countryLT=$row['CountryLT'];
        $countryEN=$row['CountryEN'];
        $countryGAL=$row['CountryGAL'];
        $abbreviation=$row['Abbreviations'];
        $flag=$row['Flag'];
        $background=$row['Background'];
    }
    } else {
    echo "0 results";
    }

    session_start();
    $_SESSION['G42']=$file1;
    $_SESSION['G43']=$file2;
    $_SESSION['G44']=$file3;
    $_SESSION['G49']=$flag;
    $_SESSION['G50']=$background;


?>