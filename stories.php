<?php
    session_start();
    $userID=$_SESSION['userid'];
    
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } //echo "Connected successfully";
    
    
    $pavadinimas_EN=$_POST['countryID1'];
    $pavadinimas_LT=$_POST['countryID3'];
    $title=$_POST['IstoPavadinimas'];
    $text=$_POST['IstoTekstas'];
    
    
    $sql = "SELECT ID FROM Stories";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $lastID++;
     }
    } else {
     //echo "0 results";
    }
    $lastID++;
    //echo $lastID;

    date_default_timezone_set("Europe/Vilnius");
    $data=date("Y-m-d h:i:s");
    
    $expensions= array("jpeg","jpg","png", "webp");

    if($pavadinimas_EN!=''){
        $file_path .= "Stories"."/".$pavadinimas_EN . "/";
            if (!file_exists($file_path)) {
                mkdir($file_path);
            }
        }

    if(isset($_FILES['IstoFailas1'])){
        $errors1= array();
        $file_name1 = $_FILES['IstoFailas1']['name'];
        $file_size1 =$_FILES['IstoFailas1']['size'];
        $file_tmp1 =$_FILES['IstoFailas1']['tmp_name'];
        $file_type1=$_FILES['IstoFailas1']['type'];
        $file_ext1=strtolower(end(explode('.',$_FILES['IstoFailas1']['name'])));
        
        if(in_array($file_ext1,$expensions)=== false){
        $errors1[]="extension not allowed";
        }
        
        if($file_size1 > 10485760){
        $errors1[]='File size must be excately 10 MB';
        }
        
        if(empty($errors1)){
            $failu_sk="1 ";
            if($lastID!=''){
                $file_path="";
                $file_path .= "Stories"."/".$pavadinimas_EN ."/".$lastID."/";
                echo $file_path;
                    if (!file_exists($file_path)) {
                        mkdir($file_path);
                    }
                }
            move_uploaded_file($file_tmp1,"Stories/$pavadinimas_EN/$lastID/".$file_name1);
            $adresas1="Stories/$pavadinimas_EN/$lastID/$file_name1";
            $adresas11="Stories/$pavadinimas_EN/$lastID/1.$file_ext1";
            rename($adresas1, $adresas11);
        }else{
            $adresas11="";
            print_r($errors1);
        }
    }
    if(isset($_FILES['IstoFailas2'])){
        $errors2= array();
        $file_name2 = $_FILES['IstoFailas2']['name'];
        $file_size2 =$_FILES['IstoFailas2']['size'];
        $file_tmp2 =$_FILES['IstoFailas2']['tmp_name'];
        $file_type2=$_FILES['IstoFailas2']['type'];
        $file_ext2=strtolower(end(explode('.',$_FILES['IstoFailas2']['name'])));
        
        if(in_array($file_ext2,$expensions)=== false){
        $errors2[]="extension not allowed";
        }
        
        if($file_size2 > 10485760){
        $errors2[]='File size must be excately 10 MB';
        }
        
        if(empty($errors2)==true){
            $failu_sk.="2 ";
            if($lastID!=''){
                $file_path="";
                $file_path .= "Stories"."/".$pavadinimas_EN ."/".$lastID."/";
                echo $file_path;
                    if (!file_exists($file_path)) {
                        mkdir($file_path);
                    }
                }
            move_uploaded_file($file_tmp2,"Stories/$pavadinimas_EN/$lastID/".$file_name2);
            $adresas2="Stories/$pavadinimas_EN/$lastID/$file_name2";
            $adresas22="Stories/$pavadinimas_EN/$lastID/2.$file_ext2";
            rename($adresas2, $adresas22);
        }else{
            $adresas22="";
            print_r($errors2);
        }
    }
    if(isset($_FILES['IstoFailas3'])){
        $errors3= array();
        $file_name3 = $_FILES['IstoFailas3']['name'];
        $file_size3 =$_FILES['IstoFailas3']['size'];
        $file_tmp3 =$_FILES['IstoFailas3']['tmp_name'];
        $file_type3=$_FILES['IstoFailas3']['type'];
        $file_ext3=strtolower(end(explode('.',$_FILES['IstoFailas3']['name'])));
        
        if(in_array($file_ext3,$expensions)=== false){
        $errors3[]="extension not allowed";
        }
        
        if($file_size3 > 10485760){
        $errors3[]='File size must be excately 10 MB';
        }
        
        if(empty($errors3)==true){
            $failu_sk.="3 ";
            if($lastID!=''){
                $file_path="";
                $file_path .= "Stories"."/".$pavadinimas_EN ."/".$lastID."/";
                echo $file_path;
                    if (!file_exists($file_path)) {
                        mkdir($file_path);
                    }
                }
            move_uploaded_file($file_tmp3,"Stories/$pavadinimas_EN/$lastID/".$file_name3);
            $adresas3="Stories/$pavadinimas_EN/$lastID/$file_name3";
            $adresas33="Stories/$pavadinimas_EN/$lastID/3.$file_ext3";
            rename($adresas3, $adresas33);
        }else{
            $adresas33="";
            print_r($errors3);
        }
    }
    if(isset($_FILES['IstoFailas4'])){
        $errors4= array();
        $file_name4 = $_FILES['IstoFailas4']['name'];
        $file_size4 =$_FILES['IstoFailas4']['size'];
        $file_tmp4 =$_FILES['IstoFailas4']['tmp_name'];
        $file_type4=$_FILES['IstoFailas4']['type'];
        $file_ext4=strtolower(end(explode('.',$_FILES['IstoFailas4']['name'])));
        
        if(in_array($file_ext4,$expensions)=== false){
        $errors4[]="extension not allowed";
        }
        
        if($file_size4 > 10485760){
        $errors4[]='File size must be excately 2 MB';
        }
        
        if(empty($errors4)==true){
            $failu_sk.="4 ";
            if($lastID!=''){
                $file_path="";
                $file_path .= "Stories"."/".$pavadinimas_EN ."/".$lastID."/";
                echo $file_path;
                    if (!file_exists($file_path)) {
                        mkdir($file_path);
                    }
                }
            move_uploaded_file($file_tmp4,"Stories/$pavadinimas_EN/$lastID/".$file_name4);
            $adresas4="Stories/$pavadinimas_EN/$lastID/$file_name4";
            $adresas44="Stories/$pavadinimas_EN/$lastID/4.$file_ext4";
            rename($adresas4, $adresas44);
        }else{
            $adresas44="";
            print_r($errors4);
        }
    }
   
   $text=nl2br($text);

    $sql = "INSERT INTO Stories (Title, Script, Picture1, Picture2, Picture3, Picture4, CountryEN, Rating, RatingSum, RatingCount, UserID, Created, Mode) VALUES ('$title', '$text', '$adresas11', '$adresas22', '$adresas33', '$adresas44', '$pavadinimas_EN', '0', '0', '0', '$userID', '$data', 'Aktyvi');";
    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
        header("Location : index?status=user?stories?uploaded=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location : index?status=user?stories?uploaded=fail");
    }

    /*$i=0;
    $sql = "SELECT ID, Title, Script, Picture1, Picture2, Picture3, Picture4, CountryEN, Rating, UserID, Created, Mode FROM Stories WHERE Mode='Aktyvi' && CountryEN='$pavadinimas_EN'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $i++;
        $id1[$i]=$row['ID'];
        $title1[$i]=$row['Title'];
        $text1[$i]=$row['Script'];
        $picture1[$i]=$row['Picture1'];
        $picture2[$i]=$row['Picture2'];
        $picture3[$i]=$row['Picture3'];
        $picture4[$i]=$row['Picture4'];
        $rating1[$i]=$row['Rating'];
        $data1[$i]=$row['Created'];
     }
    } else {
     echo "0 results";
    }

    array_multisort($data1, SORT_DESC, $id1, $title1, $text1, $picture1, $picture2, $picture3, $picture4, $rating1);

    setcookie("VI1", $i, time() + (86400), "/");
    setcookie("VI2", serialize($id1), time() + (86400), "/");
    setcookie("VI3", serialize($title1), time() + (86400), "/");
    setcookie("VI4", serialize($text1), time() + (86400), "/");
    setcookie("VI5", serialize($picture1), time() + (86400), "/");
    setcookie("VI6", serialize($picture2), time() + (86400), "/");
    setcookie("VI7", serialize($picture3), time() + (86400), "/");
    setcookie("VI8", serialize($picture4), time() + (86400), "/");
    setcookie("VI9", serialize($rating1), time() + (86400), "/");*/
    
    $conn->close();
?>