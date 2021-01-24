<?php
     require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } echo "Connected successfully";   
    

    $expensions= array("jpeg","jpg","png", "webp");

    $teisingai=0;
    $klaida=0;

    //Bendroji informacija
    $ISO_3166=$_POST['N1'];
    $pavadinimas_LT=$_POST['N2'];
    $sostinės_pavadinimas=$_POST['N3'];
    $trumpinys=$_POST['N4'];
    $pavadinimas_EN=$_POST['N5'];

    // Vietovė
    $kur_yra=$_POST['N6'];
    $plotas=$_POST['N7'];
    $aukščiausia_vieta=$_POST['N8'];
    $žemiausia_vieta=$_POST['N9'];
    $ilgiausia_upė=$_POST['N10'];
    $didžiausias_ežeras=$_POST['N11'];
    $didžiausia_sala=$_POST['N12'];
    $ilgiausias_fjordas=$_POST['N13'];
    $giliausias_ežeras=$_POST['N14'];
    $eksteritorinės_teritorijos=$_POST['N15'];
    $nutolusios_valdos=$_POST['N16'];

    echo $nutolusios_valdos;
    echo "<br>";

    //Miestai
    $miestas1=$_POST['N17'];
    $miestas2=$_POST['N18'];
    $miestas3=$_POST['N19'];
    $miestas4=$_POST['N20'];
    $miestas5=$_POST['N21'];
    $miestas6=$_POST['N22'];
    $miestas7=$_POST['N23'];
    $miestas8=$_POST['N24'];
    $miestas9=$_POST['N25'];
    $miestas10=$_POST['N26'];
    $miestas11=$_POST['N27'];
    $miestas12=$_POST['N28'];
    $miestas13=$_POST['N29'];
    $miestas14=$_POST['N30'];
    $miestas15=$_POST['N31'];
    $miestas16=$_POST['N32'];
    $miestas17=$_POST['N33'];
    $miestas18=$_POST['N34'];
    $miestas19=$_POST['N35'];
    $miestas20=$_POST['N36'];
    $miestas21=$_POST['N37'];
    $miestas22=$_POST['N38'];
    $miestas23=$_POST['N39'];
    $miestas24=$_POST['N40'];
    $miestas25=$_POST['N41'];
    $miestas26=$_POST['N42'];
    $miestas27=$_POST['N43'];
    $miestas28=$_POST['N44'];
    $miestas29=$_POST['N45'];
    $miestas30=$_POST['N46'];
    $miestas31=$_POST['N47'];
    $miestas32=$_POST['N48'];
    $miestas33=$_POST['N49'];
    $miestas34=$_POST['N50'];
    $miestas35=$_POST['N51'];

    $svar_uostas=$_POST['N52'];
    $svar_oro=$_POST['N53'];

    // Valstybė
    $valdymo_forma=$_POST['N54'];
    $susiskirstymas=$_POST['N55'];

    // Gyventojai
    $gyventojai=$_POST['N56'];
    $prieaugis=$_POST['N57'];
    $grupės=$_POST['N58'];
    $kalbos=$_POST['N59'];
    $raštingumas=$_POST['N60'];
    $religijos=$_POST['N61'];

    // Ekonomika
    $valiuta=$_POST['N62'];
    $BVP=$_POST['N63'];
    $prek_balansas=$_POST['N64'];

    // Kiti rodikliai
    $ŽSRI=$_POST['N65'];
    $laimės_indeksas=$_POST['N66'];
    $big_mac=$_POST['N67'];

    // Lankytinos vietos
    $gamta1=$_POST['N68'];
    $gamta2=$_POST['N69'];
    $gamta3=$_POST['N70'];
    $gamta4=$_POST['N71'];
    $gamta5=$_POST['N72'];
    $gamta6=$_POST['N90'];
    $gamta7=$_POST['N91'];
    $gamta8=$_POST['N92'];
    $gamta9=$_POST['N93'];
    $gamta10=$_POST['N94'];

    $kultūra1=$_POST['N73'];
    $kultūra2=$_POST['N74'];
    $kultūra3=$_POST['N75'];
    $kultūra4=$_POST['N76'];
    $kultūra5=$_POST['N77'];
    $kultūra6=$_POST['N95'];
    $kultūra7=$_POST['N96'];
    $kultūra8=$_POST['N97'];
    $kultūra9=$_POST['N98'];
    $kultūra10=$_POST['N99'];

    // KITI PARAMETRAI
    $faktas1=$_POST['N78'];
    $faktas2=$_POST['N79'];
    $faktas3=$_POST['N80'];
    $faktas4=$_POST['N81'];

    // Sostinės informacija
    $skaičius=$_POST['N82'];
    $nuoroda=$_POST['N83'];
    $nuorodos_pav=$_POST['N84'];
    $platuma=$_POST['N85'];
    $ilguma=$_POST['N86'];

    $Galininkas=$_POST['N87'];

    
    if(isset($_FILES['sostinė1'])){
        $errors1= array();
        $file_name1 = $_FILES['sostinė1']['name'];
        $file_size1 =$_FILES['sostinė1']['size'];
        $file_tmp1 =$_FILES['sostinė1']['tmp_name'];
        $file_type1=$_FILES['sostinė1']['type'];
        $file_ext1=strtolower(end(explode('.',$_FILES['sostinė1']['name'])));
        
        if(in_array($file_ext1,$expensions)=== false){
            $errors1[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size1 > 10485760){
            $errors1[]='File size must be excately 2 MB';
        }
        
        if(empty($errors1)==true){
            $teisingai++;
            //move_uploaded_file($file_tmp1,"images/".$file_name1);
            echo "Success";
        }else{
            $klaida=1;
            print_r($errors1);
        }
   }
   if(isset($_FILES['sostinė2'])){
        $errors2= array();
        $file_name2 = $_FILES['sostinė2']['name'];
        $file_size2 =$_FILES['sostinė2']['size'];
        $file_tmp2 =$_FILES['sostinė2']['tmp_name'];
        $file_type2=$_FILES['sostinė2']['type'];
        $file_ext2=strtolower(end(explode('.',$_FILES['sostinė2']['name'])));
        
        if(in_array($file_ext2,$expensions)=== false){
        $errors2[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size2 > 10485760){
        $errors2[]='File size must be excately 2 MB';
        }
        
        if(empty($errors2)==true){
            $teisingai++;
            //move_uploaded_file($file_tmp2,"images/".$file_name2);
            echo "Success";
        }else{
            $klaida=2;
            print_r($errors2);
        }
    }
    if(isset($_FILES['sostinė3'])){
        $errors3= array();
        $file_name3 = $_FILES['sostinė3']['name'];
        $file_size3 =$_FILES['sostinė3']['size'];
        $file_tmp3 =$_FILES['sostinė3']['tmp_name'];
        $file_type3=$_FILES['sostinė3']['type'];
        $file_ext3=strtolower(end(explode('.',$_FILES['sostinė3']['name'])));
        
        if(in_array($file_ext3,$expensions)=== false){
            $errors3[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size3 > 10485760){
            $errors3[]='File size must be excately 2 MB';
        }
        
        if(empty($errors3)==true){
            $teisingai++;
            //move_uploaded_file($file_tmp3,"images/".$file_name3);
            echo "Success";
        }else{
            $klaida=3;
            print_r($errors3);
        }
    }
    if(isset($_FILES['vėliava'])){
        $errors4= array();
        $file_name4 = $_FILES['vėliava']['name'];
        $file_size4 =$_FILES['vėliava']['size'];
        $file_tmp4 =$_FILES['vėliava']['tmp_name'];
        $file_type4=$_FILES['vėliava']['type'];
        $file_ext4=strtolower(end(explode('.',$_FILES['vėliava']['name'])));
        
        if(in_array($file_ext4,$expensions)=== false){
            $errors4[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size4 > 10485760){
            $errors4[]='File size must be excately 2 MB';
        }
        
        if(empty($errors4)==true){
            $teisingai++;
            //move_uploaded_file($file_tmp4,"images/".$file_name4);
            echo "Success";
        }else{
            $klaida=4;
            print_r($errors4);
        }
    }
    if(isset($_FILES['fonas'])){
        $errors5= array();
        $file_name5 = $_FILES['fonas']['name'];
        $file_size5 =$_FILES['fonas']['size'];
        $file_tmp5 =$_FILES['fonas']['tmp_name'];
        $file_type5=$_FILES['fonas']['type'];
        $file_ext5=strtolower(end(explode('.',$_FILES['fonas']['name'])));
        
        if(in_array($file_ext5,$expensions)=== false){
            $errors5[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size5 > 10485760){
            $errors5[]='File size must be excately 2 MB';
        }
        
        if(empty($errors5)==true){
            $teisingai++;
            //move_uploaded_file($file_tmp5,"images/".$file_name5);
            echo "Success";
        }else{
            $klaida=5;
            print_r($errors5);
        }
    }
    if($teisingai==5 && $klaida==0)
    {
        $file_path .= "Pictures"."/".$pavadinimas_EN . "/";
        //echo=$file_path.;
        if (!file_exists($file_path)) {
            mkdir($file_path);
        }
        $file_path1 .= "Routes"."/".$pavadinimas_EN . "/";
        //echo=$file_path.;
        if (!file_exists($file_path1)) {
            mkdir($file_path1);
        }
        $file_path2 .= "Maps"."/".$pavadinimas_EN . "/";
        //echo=$file_path.;
        if (!file_exists($file_path2)) {
            mkdir($file_path2);
        }
        move_uploaded_file($file_tmp1,"Pictures/$pavadinimas_EN/".$file_name1);
        move_uploaded_file($file_tmp2,"Pictures/$pavadinimas_EN/".$file_name2);
        move_uploaded_file($file_tmp3,"Pictures/$pavadinimas_EN/".$file_name3);
        move_uploaded_file($file_tmp4,"Flags/".$file_name4);
        move_uploaded_file($file_tmp5,"Regions/".$file_name5);

        $adresas1="Pictures/$pavadinimas_EN/$file_name1";
        $adresas2="Pictures/$pavadinimas_EN/$file_name2";
        $adresas3="Pictures/$pavadinimas_EN/$file_name3";

        $adresas4="Flags/$file_name4";
        $adresas5="Regions/$file_name5";

        /*echo $adresas1;
        echo "<br>";
        echo $adresas2;
        echo "<br>";
        echo $adresas3;
        echo "<br>";
        echo $adresas4;
        echo "<br>";
        echo $adresas5;
        echo "<br>";*/

        $sql = "INSERT INTO Capital (ISO_3166, City, Info, Link, LinkName, Latitude, Longitude, FileName1, FileName2, FileName3) VALUES ('$ISO_3166', '$sostinės_pavadinimas', '$skaičius', '$nuoroda', '$nuorodos_pav', '$platuma', '$ilguma', ' $adresas1', '$adresas2' ,'$adresas3');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if($trumpinys!="")
        {
            $sql = "INSERT INTO List (ISO_3166, CountryLT, CountryEN, CountryGAL, Capital, Abbreviations, Flag, Background, Mode ) VALUES ('$ISO_3166', '$pavadinimas_LT', '$pavadinimas_EN', '$Galininkas', '$sostinės_pavadinimas', '$trumpinys', '$adresas4', '$adresas5', 'Neaktyvi');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else{
            $sql = "INSERT INTO List (ISO_3166, CountryLT, CountryEN, CountryGAL, Capital, Abbreviations, Flag, Background, Mode ) VALUES ('$ISO_3166', '$pavadinimas_LT', '$pavadinimas_EN', '$Galininkas', '$sostinės_pavadinimas', 'null', '$adresas4', '$adresas5', 'Neaktyvi');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $sql = "INSERT INTO Place (ISO_3166, Info) VALUES ('$ISO_3166' ,'$kur_yra');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $sql = "INSERT INTO Area (ISO_3166, Info) VALUES ('$ISO_3166', '$plotas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if($aukščiausia_vieta!="")
        {
            $sql = "INSERT INTO High (ISO_3166, Info) VALUES ('$ISO_3166' ,'$aukščiausia_vieta');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($žemiausia_vieta!="")
        {
            $sql = "INSERT INTO Low (ISO_3166, Info) VALUES ('$ISO_3166' ,'$žemiausia_vieta');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($ilgiausia_upė!="")
        {
            $sql = "INSERT INTO River (ISO_3166, Info) VALUES ('$ISO_3166' ,'$ilgiausia_upė');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($didžiausias_ežeras!="")
        {
            $sql = "INSERT INTO Lake (ISO_3166, Info) VALUES ('$ISO_3166' ,'$didžiausias_ežeras');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($didžiausia_sala!="")
        {
            $sql = "INSERT INTO Island (ISO_3166, Info) VALUES ('$ISO_3166' ,'$didžiausia_sala');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($ilgiausias_fjordas!="")
        {
            $sql = "INSERT INTO Longest (ISO_3166, Info) VALUES ('$ISO_3166' ,'$ilgiausias_fjordas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($giliausias_ežeras!="")
        {
            $sql = "INSERT INTO Deepest (ISO_3166, Info) VALUES ('$ISO_3166' ,'$giliausias_ežeras');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($eksteritorinės_teritorijos!="")
        {
            $sql = "INSERT INTO Territories (ISO_3166, Info) VALUES ('$ISO_3166' ,'$eksteritorinės_teritorijos');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($nutolusios_valdos!="")
        {
            $sql = "INSERT INTO Distant (ISO_3166, Info) VALUES ('$ISO_3166' ,'$nutolusios_valdos');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // MIESTAI
        $sql = "INSERT INTO Cities (ISO_3166, City_1, City_2, City_3, City_4, City_5, City_6, City_7, City_8, City_9, City_10, City_11, City_12, City_13, City_14, City_15, City_16, City_17, City_18, City_19, City_20, City_21, City_22, City_23, City_24, City_25, City_26, City_27, City_28, City_29, City_30, City_31, City_32, City_33, City_34, City_35) VALUES ('$ISO_3166', '$miestas1', '$miestas2', '$miestas3', '$miestas4', '$miestas5', '$miestas6', '$miestas7', '$miestas8', '$miestas9', '$miestas10', '$miestas11', '$miestas12', '$miestas13', '$miestas14', '$miestas15', '$miestas16', '$miestas17', '$miestas18', '$miestas19', '$miestas20', '$miestas21', '$miestas22', '$miestas23', '$miestas24', '$miestas25', '$miestas26', '$miestas27', '$miestas28', '$miestas29', '$miestas30', '$miestas31', '$miestas32', '$miestas33', '$miestas34', '$miestas35');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if($svar_uostas!="")
        {
            $sql = "INSERT INTO Harbor (ISO_3166, Info) VALUES ('$ISO_3166' ,'$svar_uostas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($svar_oro!="")
        {
            $sql = "INSERT INTO Airport (ISO_3166, Info) VALUES ('$ISO_3166' ,'$svar_oro');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($valdymo_forma!="")
        {
            $sql = "INSERT INTO Government (ISO_3166, Info) VALUES ('$ISO_3166' ,'$valdymo_forma');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($susiskirstymas!="")
        {
            $sql = "INSERT INTO District (ISO_3166, Info) VALUES ('$ISO_3166' ,'$susiskirstymas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($gyventojai!="")
        {
            $sql = "INSERT INTO People (ISO_3166, Info) VALUES ('$ISO_3166' ,'$gyventojai');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($prieaugis!="")
        {
            $sql = "INSERT INTO Growth (ISO_3166, Info) VALUES ('$ISO_3166' ,'$prieaugis');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($grupės!="")
        {
            $sql = "INSERT INTO Groups (ISO_3166, Info) VALUES ('$ISO_3166' ,'$grupės');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($kalbos!="")
        {
            $sql = "INSERT INTO Languages (ISO_3166, Info) VALUES ('$ISO_3166' ,'$kalbos');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($raštingumas!="")
        {
            $sql = "INSERT INTO Literacy (ISO_3166, Info) VALUES ('$ISO_3166' ,'$raštingumas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($religijos!="")
        {
            $sql = "INSERT INTO Religion (ISO_3166, Info) VALUES ('$ISO_3166' ,'$religijos');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($valiuta!="")
        {
            $sql = "INSERT INTO Currency (ISO_3166, Info) VALUES ('$ISO_3166' ,'$valiuta');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($BVP!="")
        {
            $sql = "INSERT INTO GDP (ISO_3166, Info) VALUES ('$ISO_3166' ,'$BVP');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($prek_balansas!="")
        {
            $sql = "INSERT INTO Balance (ISO_3166, Info) VALUES ('$ISO_3166' ,'$prek_balansas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($ŽSRI!="")
        {
            $sql = "INSERT INTO HDI (ISO_3166, Info) VALUES ('$ISO_3166' ,'$ŽSRI');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        if($laimės_indeksas!="")
        {
            $sql = "INSERT INTO Happiness (ISO_3166, Info) VALUES ('$ISO_3166' ,'$laimės_indeksas');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if($big_mac!="")
        {
            $sql = "INSERT INTO Big_Mac (ISO_3166, Info) VALUES ('$ISO_3166' ,'$big_mac');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
                $created=true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // LANKYTINOS VIETOS - GAMTA
        $sql = "INSERT INTO Nature (ISO_3166, Place_1, Place_2, Place_3, Place_4, Place_5, Place_6, Place_7, Place_8, Place_9, Place_10) VALUES ('$ISO_3166', '$gamta1', '$gamta2', '$gamta3', '$gamta4', '$gamta5', '$gamta6', '$gamta7', '$gamta8', '$gamta9', '$gamta10');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // LANKYTINOS VIETOS - KULTŪRA
        $sql = "INSERT INTO Culture (ISO_3166, Place_1, Place_2, Place_3, Place_4, Place_5, Place_6, Place_7, Place_8, Place_9, Place_10) VALUES ('$ISO_3166', '$kultūra1', '$kultūra2', '$kultūra3', '$kultūra4', '$kultūra5', '$kultūra6', '$kultūra7', '$kultūra8', '$kultūra9', '$kultūra10');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        // AR ŽINAI, KAD...
        $sql = "INSERT INTO DoYouKnow (ISO_3166, Fact_1, Fact_2, Fact_3, Fact_4 ) VALUES ('$ISO_3166' ,'$faktas1', '$faktas2', '$faktas3', '$faktas4');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        session_start();
        $_SESSION['Rezultatas1']=$ISO_3166;
        $_SESSION['Rezultatas2']=$pavadinimas_LT;
        $_SESSION['Rezultatas3']=$sostinės_pavadinimas;
        $_SESSION['Rezultatas4']=$trumpinys;
        $_SESSION['Rezultatas5']=$pavadinimas_EN;
        $_SESSION['Rezultatas6']=$kur_yra;
        $_SESSION['Rezultatas7']=$plotas;
        $_SESSION['Rezultatas8']=$aukščiausia_vieta;
        $_SESSION['Rezultatas9']=$žemiausia_vieta;
        $_SESSION['Rezultatas10']=$ilgiausia_upė;
        $_SESSION['Rezultatas11']=$didžiausias_ežeras;
        $_SESSION['Rezultatas12']=$didžiausia_sala;
        $_SESSION['Rezultatas13']=$ilgiausias_fjordas;
        $_SESSION['Rezultatas14']=$giliausias_ežeras;
        $_SESSION['Rezultatas15']=$eksteritorinės_teritorijos;
        $_SESSION['Rezultatas16']=$nutolusios_valdos;
        $_SESSION['Rezultatas17']=$miestas1;
        $_SESSION['Rezultatas18']=$miestas2;
        $_SESSION['Rezultatas19']=$miestas3;
        $_SESSION['Rezultatas20']=$miestas4;
        $_SESSION['Rezultatas21']=$miestas5;
        $_SESSION['Rezultatas22']=$miestas6;
        $_SESSION['Rezultatas23']=$miestas7;
        $_SESSION['Rezultatas24']=$miestas8;
        $_SESSION['Rezultatas25']=$miestas9;
        $_SESSION['Rezultatas26']=$miestas10;
        $_SESSION['Rezultatas27']=$miestas11;
        $_SESSION['Rezultatas28']=$miestas12;
        $_SESSION['Rezultatas29']=$miestas13;
        $_SESSION['Rezultatas30']=$miestas14;
        $_SESSION['Rezultatas31']=$miestas15;
        $_SESSION['Rezultatas32']=$miestas16;
        $_SESSION['Rezultatas33']=$miestas17;
        $_SESSION['Rezultatas34']=$miestas18;
        $_SESSION['Rezultatas35']=$miestas19;
        $_SESSION['Rezultatas36']=$miestas20;
        $_SESSION['Rezultatas37']=$miestas21;
        $_SESSION['Rezultatas38']=$miestas22;
        $_SESSION['Rezultatas39']=$miestas23;
        $_SESSION['Rezultatas40']=$miestas24;
        $_SESSION['Rezultatas41']=$miestas25;
        $_SESSION['Rezultatas42']=$miestas26;
        $_SESSION['Rezultatas43']=$miestas27;
        $_SESSION['Rezultatas44']=$miestas28;
        $_SESSION['Rezultatas45']=$miestas29;
        $_SESSION['Rezultatas46']=$miestas30;
        $_SESSION['Rezultatas47']=$miestas31;
        $_SESSION['Rezultatas48']=$miestas32;
        $_SESSION['Rezultatas49']=$miestas33;
        $_SESSION['Rezultatas50']=$miestas34;
        $_SESSION['Rezultatas51']=$miestas35;
        $_SESSION['Rezultatas52']=$svar_uostas;
        $_SESSION['Rezultatas53']=$svar_oro;
        $_SESSION['Rezultatas54']=$valdymo_forma;
        $_SESSION['Rezultatas55']=$susiskirstymas;
        $_SESSION['Rezultatas56']=$gyventojai;
        $_SESSION['Rezultatas57']=$prieaugis;
        $_SESSION['Rezultatas58']=$grupės;
        $_SESSION['Rezultatas59']=$kalbos;
        $_SESSION['Rezultatas60']=$raštingumas;
        $_SESSION['Rezultatas61']=$religijos;
        $_SESSION['Rezultatas62']=$valiuta;
        $_SESSION['Rezultatas63']=$BVP;
        $_SESSION['Rezultatas64']=$prek_balansas;
        $_SESSION['Rezultatas65']=$ŽSRI;
        $_SESSION['Rezultatas66']=$laimės_indeksas;
        $_SESSION['Rezultatas67']=$big_mac;
        $_SESSION['Rezultatas68']=$gamta1;
        $_SESSION['Rezultatas69']=$gamta2;
        $_SESSION['Rezultatas70']=$gamta3;
        $_SESSION['Rezultatas71']=$gamta4;
        $_SESSION['Rezultatas72']=$gamta5;
        $_SESSION['Rezultatas100']=$gamta6;
        $_SESSION['Rezultatas101']=$gamta7;
        $_SESSION['Rezultatas102']=$gamta8;
        $_SESSION['Rezultatas103']=$gamta9;
        $_SESSION['Rezultatas104']=$gamta10;
        $_SESSION['Rezultatas73']=$kultūra1;
        $_SESSION['Rezultatas74']=$kultūra2;
        $_SESSION['Rezultatas75']=$kultūra3;
        $_SESSION['Rezultatas76']=$kultūra4;
        $_SESSION['Rezultatas77']=$kultūra5;
        $_SESSION['Rezultatas105']=$kultūra6;
        $_SESSION['Rezultatas106']=$kultūra7;
        $_SESSION['Rezultatas107']=$kultūra8;
        $_SESSION['Rezultatas108']=$kultūra9;
        $_SESSION['Rezultatas109']=$kultūra10;
        $_SESSION['Rezultatas78']=$faktas1;
        $_SESSION['Rezultatas79']=$faktas2;
        $_SESSION['Rezultatas80']=$faktas3;
        $_SESSION['Rezultatas81']=$faktas4;
        $_SESSION['Rezultatas82']=$skaičius;
        $_SESSION['Rezultatas83']=$nuoroda;
        $_SESSION['Rezultatas84']=$nuorodos_pav;
        $_SESSION['Rezultatas85']=$platuma;
        $_SESSION['Rezultatas86']=$ilguma;

        $_SESSION['Rezultatas87']=$adresas1;
        $_SESSION['Rezultatas88']=$adresas2;
        $_SESSION['Rezultatas89']=$adresas3;
        $_SESSION['Rezultatas90']=$adresas4;
        $_SESSION['Rezultatas91']=$adresas5;
        $_SESSION['Rezultatas92']=$Galininkas;

        $_SESSION['Grąžintas1']='';
        $_SESSION['Grąžintas2']='';
        $_SESSION['Grąžintas3']='';
        $_SESSION['Grąžintas4']='';
        $_SESSION['Grąžintas5']='';
        $_SESSION['Grąžintas6']='';
        $_SESSION['Grąžintas7']='';
        $_SESSION['Grąžintas8']='';
        $_SESSION['Grąžintas9']='';
        $_SESSION['Grąžintas10']='';
        $_SESSION['Grąžintas11']='';
        $_SESSION['Grąžintas12']='';
        $_SESSION['Grąžintas13']='';
        $_SESSION['Grąžintas14']='';
        $_SESSION['Grąžintas15']='';
        $_SESSION['Grąžintas16']='';
        $_SESSION['Grąžintas17']='';
        $_SESSION['Grąžintas18']='';
        $_SESSION['Grąžintas19']='';
        $_SESSION['Grąžintas20']='';
        $_SESSION['Grąžintas21']='';
        $_SESSION['Grąžintas22']='';
        $_SESSION['Grąžintas23']='';
        $_SESSION['Grąžintas24']='';
        $_SESSION['Grąžintas25']='';
        $_SESSION['Grąžintas26']='';
        $_SESSION['Grąžintas27']='';
        $_SESSION['Grąžintas28']='';
        $_SESSION['Grąžintas29']='';
        $_SESSION['Grąžintas30']='';
        $_SESSION['Grąžintas31']='';
        $_SESSION['Grąžintas32']='';
        $_SESSION['Grąžintas33']='';
        $_SESSION['Grąžintas34']='';
        $_SESSION['Grąžintas35']='';
        $_SESSION['Grąžintas36']='';
        $_SESSION['Grąžintas37']='';
        $_SESSION['Grąžintas38']='';
        $_SESSION['Grąžintas39']='';
        $_SESSION['Grąžintas40']='';
        $_SESSION['Grąžintas41']='';
        $_SESSION['Grąžintas42']='';
        $_SESSION['Grąžintas43']='';
        $_SESSION['Grąžintas44']='';
        $_SESSION['Grąžintas45']='';
        $_SESSION['Grąžintas46']='';
        $_SESSION['Grąžintas47']='';
        $_SESSION['Grąžintas48']='';
        $_SESSION['Grąžintas49']='';
        $_SESSION['Grąžintas50']='';
        $_SESSION['Grąžintas51']='';
        $_SESSION['Grąžintas52']='';
        $_SESSION['Grąžintas53']='';
        $_SESSION['Grąžintas54']='';
        $_SESSION['Grąžintas55']='';
        $_SESSION['Grąžintas56']='';
        $_SESSION['Grąžintas57']='';
        $_SESSION['Grąžintas58']='';
        $_SESSION['Grąžintas59']='';
        $_SESSION['Grąžintas60']='';
        $_SESSION['Grąžintas61']='';
        $_SESSION['Grąžintas62']='';
        $_SESSION['Grąžintas63']='';
        $_SESSION['Grąžintas64']='';
        $_SESSION['Grąžintas65']='';
        $_SESSION['Grąžintas66']='';
        $_SESSION['Grąžintas67']='';
        $_SESSION['Grąžintas68']='';
        $_SESSION['Grąžintas69']='';
        $_SESSION['Grąžintas70']='';
        $_SESSION['Grąžintas71']='';
        $_SESSION['Grąžintas72']='';
        $_SESSION['Grąžintas90']='';
        $_SESSION['Grąžintas91']='';
        $_SESSION['Grąžintas92']='';
        $_SESSION['Grąžintas93']='';
        $_SESSION['Grąžintas94']='';
        $_SESSION['Grąžintas73']='';
        $_SESSION['Grąžintas74']='';
        $_SESSION['Grąžintas75']='';
        $_SESSION['Grąžintas76']='';
        $_SESSION['Grąžintas77']='';
        $_SESSION['Grąžintas95']='';
        $_SESSION['Grąžintas96']='';
        $_SESSION['Grąžintas97']='';
        $_SESSION['Grąžintas98']='';
        $_SESSION['Grąžintas99']='';
        $_SESSION['Grąžintas78']='';
        $_SESSION['Grąžintas79']='';
        $_SESSION['Grąžintas80']='';
        $_SESSION['Grąžintas81']='';
        $_SESSION['Grąžintas82']='';
        $_SESSION['Grąžintas83']='';
        $_SESSION['Grąžintas84']='';
        $_SESSION['Grąžintas85']='';
        $_SESSION['Grąžintas86']='';
        $_SESSION['Grąžintas87']='';

        header("Location: administrator?created=success?result");
    }
    else
    {
        session_start();
        $_SESSION['Grąžintas1']=$ISO_3166;
        $_SESSION['Grąžintas2']=$pavadinimas_LT;
        $_SESSION['Grąžintas3']=$sostinės_pavadinimas;
        $_SESSION['Grąžintas4']=$trumpinys;
        $_SESSION['Grąžintas5']=$pavadinimas_EN;
        $_SESSION['Grąžintas6']=$kur_yra;
        $_SESSION['Grąžintas7']=$plotas;
        $_SESSION['Grąžintas8']=$aukščiausia_vieta;
        $_SESSION['Grąžintas9']=$žemiausia_vieta;
        $_SESSION['Grąžintas10']=$ilgiausia_upė;
        $_SESSION['Grąžintas11']=$didžiausias_ežeras;
        $_SESSION['Grąžintas12']=$didžiausia_sala;
        $_SESSION['Grąžintas13']=$ilgiausias_fjordas;
        $_SESSION['Grąžintas14']=$giliausias_ežeras;
        $_SESSION['Grąžintas15']=$eksteritorinės_teritorijos;
        $_SESSION['Grąžintas16']=$nutolusios_valdos;
        $_SESSION['Grąžintas17']=$miestas1;
        $_SESSION['Grąžintas18']=$miestas2;
        $_SESSION['Grąžintas19']=$miestas3;
        $_SESSION['Grąžintas20']=$miestas4;
        $_SESSION['Grąžintas21']=$miestas5;
        $_SESSION['Grąžintas22']=$miestas6;
        $_SESSION['Grąžintas23']=$miestas7;
        $_SESSION['Grąžintas24']=$miestas8;
        $_SESSION['Grąžintas25']=$miestas9;
        $_SESSION['Grąžintas26']=$miestas10;
        $_SESSION['Grąžintas27']=$miestas11;
        $_SESSION['Grąžintas28']=$miestas12;
        $_SESSION['Grąžintas29']=$miestas13;
        $_SESSION['Grąžintas30']=$miestas14;
        $_SESSION['Grąžintas31']=$miestas15;
        $_SESSION['Grąžintas32']=$miestas16;
        $_SESSION['Grąžintas33']=$miestas17;
        $_SESSION['Grąžintas34']=$miestas18;
        $_SESSION['Grąžintas35']=$miestas19;
        $_SESSION['Grąžintas36']=$miestas20;
        $_SESSION['Grąžintas37']=$miestas21;
        $_SESSION['Grąžintas38']=$miestas22;
        $_SESSION['Grąžintas39']=$miestas23;
        $_SESSION['Grąžintas40']=$miestas24;
        $_SESSION['Grąžintas41']=$miestas25;
        $_SESSION['Grąžintas42']=$miestas26;
        $_SESSION['Grąžintas43']=$miestas27;
        $_SESSION['Grąžintas44']=$miestas28;
        $_SESSION['Grąžintas45']=$miestas29;
        $_SESSION['Grąžintas46']=$miestas30;
        $_SESSION['Grąžintas47']=$miestas31;
        $_SESSION['Grąžintas48']=$miestas32;
        $_SESSION['Grąžintas49']=$miestas33;
        $_SESSION['Grąžintas50']=$miestas34;
        $_SESSION['Grąžintas51']=$miestas35;
        $_SESSION['Grąžintas52']=$svar_uostas;
        $_SESSION['Grąžintas53']=$svar_oro;
        $_SESSION['Grąžintas54']=$valdymo_forma;
        $_SESSION['Grąžintas55']=$susiskirstymas;
        $_SESSION['Grąžintas56']=$gyventojai;
        $_SESSION['Grąžintas57']=$prieaugis;
        $_SESSION['Grąžintas58']=$grupės;
        $_SESSION['Grąžintas59']=$kalbos;
        $_SESSION['Grąžintas60']=$raštingumas;
        $_SESSION['Grąžintas61']=$religijos;
        $_SESSION['Grąžintas62']=$valiuta;
        $_SESSION['Grąžintas63']=$BVP;
        $_SESSION['Grąžintas64']=$prek_balansas;
        $_SESSION['Grąžintas65']=$ŽSRI;
        $_SESSION['Grąžintas66']=$laimės_indeksas;
        $_SESSION['Grąžintas67']=$big_mac;
        $_SESSION['Grąžintas68']=$gamta1;
        $_SESSION['Grąžintas69']=$gamta2;
        $_SESSION['Grąžintas70']=$gamta3;
        $_SESSION['Grąžintas71']=$gamta4;
        $_SESSION['Grąžintas72']=$gamta5;
        $_SESSION['Grąžintas90']=$gamta6;
        $_SESSION['Grąžintas91']=$gamta7;
        $_SESSION['Grąžintas92']=$gamta8;
        $_SESSION['Grąžintas93']=$gamta9;
        $_SESSION['Grąžintas94']=$gamta10;
        $_SESSION['Grąžintas73']=$kultūra1;
        $_SESSION['Grąžintas74']=$kultūra2;
        $_SESSION['Grąžintas75']=$kultūra3;
        $_SESSION['Grąžintas76']=$kultūra4;
        $_SESSION['Grąžintas77']=$kultūra5;
        $_SESSION['Grąžintas95']=$kultūra6;
        $_SESSION['Grąžintas96']=$kultūra7;
        $_SESSION['Grąžintas97']=$kultūra8;
        $_SESSION['Grąžintas98']=$kultūra9;
        $_SESSION['Grąžintas99']=$kultūra10;
        $_SESSION['Grąžintas78']=$faktas1;
        $_SESSION['Grąžintas79']=$faktas2;
        $_SESSION['Grąžintas80']=$faktas3;
        $_SESSION['Grąžintas81']=$faktas4;
        $_SESSION['Grąžintas82']=$skaičius;
        $_SESSION['Grąžintas83']=$nuoroda;
        $_SESSION['Grąžintas84']=$nuorodos_pav;
        $_SESSION['Grąžintas85']=$platuma;
        $_SESSION['Grąžintas86']=$ilguma;
        $_SESSION['Grąžintas87']=$Galininkas;

        
    }
    if(!empty($errors1) || !empty($errors2) || !empty($errors3) || !empty($errors4) || !empty($errors5))
    {
        header("Location: administrator?new/error_file=$klaida");
    }
    $conn->close();

    
?>