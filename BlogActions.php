<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

    $title=$_POST['B1'];
    $text=$_POST['B2'];
    $country=$_POST['B3'];

    $URL="https://countries-capitals.com/finder.php?country=$country";

    $expensions= array("jpeg","jpg","png", "webp");
    $count=0;

    date_default_timezone_set("Europe/Vilnius");
    $date=date("Y-m-d h:i:s");

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    $sql = "SELECT ID FROM Blog";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $count++;
        }
        }

    $count++;
    echo $count;
    if(isset($_FILES['B4'])){
        $errors4= array();
        $file_name4 = $_FILES['B4']['name'];
        $file_size4 =$_FILES['B4']['size'];
        $file_tmp4 =$_FILES['B4']['tmp_name'];
        $file_type4=$_FILES['B4']['type'];
        $file_ext4=strtolower(end(explode('.',$_FILES['B4']['name'])));
        
        if(in_array($file_ext4,$expensions)=== false){
            $errors4[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size4 > 10485760){
            $errors4[]='File size must be excately 2 MB';
        }

        
        if(empty($errors4)==true){
            $teisingai++;
            move_uploaded_file($file_tmp4,"Blog/".$file_name4);
            $adresas4="Blog/$file_name4";
            $adresas44="Blog/$count.$file_ext4";
            rename($adresas4, $adresas44);
            $sql = "INSERT INTO Blog (Country, Title, Info, href, PictureURL, CreatedBy, CreatedDate, Mode) VALUES ('$country', '$title', '$text', '$URL', '$adresas44', 'Created By Admin', '$date', 'Aktyvi');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            echo "Success";
            header("Location : administrator?blog=created");
        }else{
            $sql = "INSERT INTO Blog (Country, Title, Info, href, PictureURL, CreatedBy, CreatedDate, Mode) VALUES ('$country', '$title', '$text', '$URL', 'images/no-photo.png', 'Created By Admin', '$date', 'Aktyvi');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                header("Location : administrator?blog=created");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location : administrator?blog=failed");
            }
            $klaida=4;
            print_r($errors4);
        }
        
    }
?>