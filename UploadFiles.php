<?php
    $ISO=$_POST['filter7'];
    $type=$_POST['customRadio1'];
    
    $expensions= array("pdf", "docx", "doc", "rtf", "xlsx", "pptx", "jpg");
    
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $sql = "SELECT CountryEN FROM List WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pavadinimas_EN=$row['CountryEN'];
    }
    } else {
    echo "0 results";
    }

    $klaida=0;
    $failu_sk="";

    if($type==1)
    {
        if(isset($_FILES['failas1'])){
            $errors1= array();
            $file_name1 = $_FILES['failas1']['name'];
            $file_size1 =$_FILES['failas1']['size'];
            $file_tmp1 =$_FILES['failas1']['tmp_name'];
            $file_type1=$_FILES['failas1']['type'];
            $file_ext1=strtolower(end(explode('.',$_FILES['failas1']['name'])));
            
            if(in_array($file_ext1,$expensions)=== false){
            $errors1[]="extension not allowed";
            }
            
            if($file_size1 > 10485760){
            $errors1[]='File size must be excately 2 MB';
            }
            
            if(empty($errors1)==true){
                $failu_sk="1 ";
                move_uploaded_file($file_tmp1,"Routes/$pavadinimas_EN/".$file_name1);
                $adresas1="Routes/$pavadinimas_EN/$file_name1";
                $sql = "INSERT INTO Routes (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name1', '$adresas1', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors1);
            }
        }
        if(isset($_FILES['failas2'])){
            $errors2= array();
            $file_name2 = $_FILES['failas2']['name'];
            $file_size2 =$_FILES['failas2']['size'];
            $file_tmp2 =$_FILES['failas2']['tmp_name'];
            $file_type2=$_FILES['failas2']['type'];
            $file_ext2=strtolower(end(explode('.',$_FILES['failas2']['name'])));
            
            if(in_array($file_ext2,$expensions)=== false){
            $klaida++;
            $errors2[]="extension not allowed";
            }
            
            if($file_size2 > 10485760){
            $errors2[]='File size must be excately 2 MB';
            }
            
            if(empty($errors2)==true){
                $failu_sk.="2 ";
                move_uploaded_file($file_tmp2,"Routes/$pavadinimas_EN/".$file_name2);
                $adresas2="Routes/$pavadinimas_EN/$file_name2";
                $sql = "INSERT INTO Routes (ISO_3166, Title, Mode) VALUES ('$ISO', '$file_name2', '$adresas2', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors2);
            }
        }
        if(isset($_FILES['failas3'])){
            $errors3= array();
            $file_name3 = $_FILES['failas3']['name'];
            $file_size3 =$_FILES['failas3']['size'];
            $file_tmp3 =$_FILES['failas3']['tmp_name'];
            $file_type3=$_FILES['failas3']['type'];
            $file_ext3=strtolower(end(explode('.',$_FILES['failas3']['name'])));
            
            if(in_array($file_ext3,$expensions)=== false){
            $errors3[]="extension not allowed";
            }
            
            if($file_size3 > 10485760){
            $errors3[]='File size must be excately 2 MB';
            }
            
            if(empty($errors3)==true){
                $failu_sk.="3 ";
                move_uploaded_file($file_tmp3,"Routes/$pavadinimas_EN/".$file_name3);
                $adresas3="Routes/$pavadinimas_EN/$file_name3";
                $sql = "INSERT INTO Routes (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name3', '$adresas3', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors3);
            }
        }
        if(isset($_FILES['failas4'])){
            $errors4= array();
            $file_name4 = $_FILES['failas4']['name'];
            $file_size4 =$_FILES['failas4']['size'];
            $file_tmp4 =$_FILES['failas4']['tmp_name'];
            $file_type4=$_FILES['failas4']['type'];
            $file_ext4=strtolower(end(explode('.',$_FILES['failas4']['name'])));
            
            if(in_array($file_ext4,$expensions)=== false){
            $errors4[]="extension not allowed";
            }
            
            if($file_size4 > 10485760){
            $errors4[]='File size must be excately 2 MB';
            }
            
            if(empty($errors4)==true){
                $failu_sk.="4 ";
                move_uploaded_file($file_tmp4,"Routes/$pavadinimas_EN/".$file_name4);
                $adresas4="Routes/$pavadinimas_EN/$file_name4";
                $sql = "INSERT INTO Routes (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name4', '$adresas4', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors4);
            }
        }
        if(isset($_FILES['failas5'])){
            $errors5= array();
            $file_name5 = $_FILES['failas5']['name'];
            $file_size5 =$_FILES['failas5']['size'];
            $file_tmp5 =$_FILES['failas5']['tmp_name'];
            $file_type5=$_FILES['failas5']['type'];
            $file_ext5=strtolower(end(explode('.',$_FILES['failas5']['name'])));
            
            if(in_array($file_ext5,$expensions)=== false){
            $errors5[]="extension not allowed";
            }
            
            if($file_size5 > 10485760){
            $errors5[]='File size must be excately 2 MB';
            }
            
            if(empty($errors5)==true){
                $failu_sk.="5";
                move_uploaded_file($file_tmp5,"Routes/$pavadinimas_EN/".$file_name5);
                $adresas5="Routes/$pavadinimas_EN/$file_name5";
                $sql = "INSERT INTO Routes (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name5', '$adresas5', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors5);
            }
        }
        if($failu_sk!="")
        {
            header("Location : administrator?upload?case=success");
        }
        else{
            header("Location : administrator?upload?case=fail");
        }
    }
    else if ($type==2)
    {
         if(isset($_FILES['failas1'])){
            $errors6= array();
            $file_name6 = $_FILES['failas1']['name'];
            $file_size6 =$_FILES['failas1']['size'];
            $file_tmp6 =$_FILES['failas1']['tmp_name'];
            $file_type6=$_FILES['failas1']['type'];
            $file_ext6=strtolower(end(explode('.',$_FILES['failas1']['name'])));
            
            if(in_array($file_ext6,$expensions)=== false){
            $errors6[]="extension not allowed";
            }
            
            if($file_size6 > 10485760){
            $errors6[]='File size must be excately 2 MB';
            }
            
            if(empty($errors6)==true){
                $failu_sk="1 ";
                move_uploaded_file($file_tmp6,"Maps/$pavadinimas_EN/".$file_name6);
                $adresas6="Maps/$pavadinimas_EN/$file_name6";
                $sql = "INSERT INTO Maps (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name6', '$adresas6', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors6);
            }
        }
        if(isset($_FILES['failas2'])){
            $errors7= array();
            $file_name7 = $_FILES['failas2']['name'];
            $file_size7 =$_FILES['failas2']['size'];
            $file_tmp7 =$_FILES['failas2']['tmp_name'];
            $file_type7=$_FILES['failas2']['type'];
            $file_ext7=strtolower(end(explode('.',$_FILES['failas2']['name'])));
            
            if(in_array($file_ext7,$expensions)=== false){
            $errors7[]="extension not allowed";
            }
            
            if($file_size7 > 10485760){
            $errors7[]='File size must be excately 2 MB';
            }
            
            if(empty($errors7)==true){
                $failu_sk.="2 ";
                move_uploaded_file($file_tmp7,"Maps/$pavadinimas_EN/".$file_name7);
                $adresas7="Maps/$pavadinimas_EN/$file_name7";
                $sql = "INSERT INTO Maps (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name7', '$adresas7', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors7);
            }
        }
        if(isset($_FILES['failas3'])){
            $errors8= array();
            $file_name8 = $_FILES['failas3']['name'];
            $file_size8 =$_FILES['failas3']['size'];
            $file_tmp8 =$_FILES['failas3']['tmp_name'];
            $file_type8=$_FILES['failas3']['type'];
            $file_ext8=strtolower(end(explode('.',$_FILES['failas3']['name'])));
            
            if(in_array($file_ext8,$expensions)=== false){
            $errors8[]="extension not allowed";
            }
            
            if($file_size8 > 10485760){
            $errors8[]='File size must be excately 2 MB';
            }
            
            if(empty($errors8)==true){
                $failu_sk.="3 ";
                move_uploaded_file($file_tmp8,"Maps/$pavadinimas_EN/".$file_name8);
                $adresas8="Maps/$pavadinimas_EN/$file_name8";
                $sql = "INSERT INTO Maps (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name8', '$adresas8', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors8);
            }
        }
        if(isset($_FILES['failas4'])){
            $errors9= array();
            $file_name9 = $_FILES['failas4']['name'];
            $file_size9 =$_FILES['failas4']['size'];
            $file_tmp9 =$_FILES['failas4']['tmp_name'];
            $file_type9=$_FILES['failas4']['type'];
            $file_ext9=strtolower(end(explode('.',$_FILES['failas4']['name'])));
            
            if(in_array($file_ext9,$expensions)=== false){
            $errors9[]="extension not allowed";
            }
            
            if($file_size9 > 10485760){
            $errors9[]='File size must be excately 2 MB';
            }
            
            if(empty($errors9)==true){
                $failu_sk.="4 ";
                move_uploaded_file($file_tmp9,"Maps/$pavadinimas_EN/".$file_name9);
                $adresas9="Maps/$pavadinimas_EN/$file_name9";
                $sql = "INSERT INTO Maps (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name9', '$adresas9', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors9);
            }
        }
        if(isset($_FILES['failas5'])){
            $errors10= array();
            $file_name10 = $_FILES['failas5']['name'];
            $file_size10 =$_FILES['failas5']['size'];
            $file_tmp10 =$_FILES['failas5']['tmp_name'];
            $file_type10=$_FILES['failas5']['type'];
            $file_ext10=strtolower(end(explode('.',$_FILES['failas5']['name'])));
            
            if(in_array($file_ext10,$expensions)=== false){
            $errors10[]="extension not allowed";
            }
            
            if($file_size10 > 10485760){
            $errors10[]='File size must be excately 2 MB';
            }
            
            if(empty($errors10)==true){
                $failu_sk.="5";
                move_uploaded_file($file_tmp10,"Maps/$pavadinimas_EN/".$file_name10);
                $adresas10="Maps/$pavadinimas_EN/$file_name10";
                $sql = "INSERT INTO Maps (ISO_3166, Title, CaseName, Mode) VALUES ('$ISO', '$file_name10', '$adresas10', 'Aktyvi');";
                if ($conn->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "Success";
            }else{
                print_r($errors10);
            }
        }
        if($failu_sk!="")
        {
            header("Location : administrator?upload?case=success");
        }
        else{
            header("Location : administrator?upload?case=fail");
        }
    }
    else{
        header("Location : administrator?upload?case=fail");
    }
    session_start();
    $_SESSION['FUS1']=$failu_sk;

?>