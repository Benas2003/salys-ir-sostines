<?php
    require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    // #PATVIRTINA
    $ISO=$_POST['K1'];

    // #Info
    $pavadinimas=$_POST['K2'];
    $sostine=$_POST['K3'];
    $trumpinys=$_POST['K4'];
    $galininkas=$_POST['K6'];

    // #Place
    $kur_yra=$_POST['K7'];
    $plotas=$_POST['K8'];
    $auksta=$_POST['K9'];
    $zema=$_POST['K10'];
    $upe=$_POST['K11'];
    $ezeras=$_POST['K12'];
    $sala=$_POST['K13'];
    $fjordas=$_POST['K14'];
    $gilus=$_POST['K15'];
    $teritorijos=$_POST['K16'];
    $nutole=$_POST['K17'];

    // #Cities
    $miestas1=$_POST['K18'];
    $miestas2=$_POST['K19'];
    $miestas3=$_POST['K20'];
    $miestas4=$_POST['K21'];
    $miestas5=$_POST['K22'];
    $miestas6=$_POST['K23'];
    $miestas7=$_POST['K24'];
    $miestas8=$_POST['K25'];
    $miestas9=$_POST['K26'];
    $miestas10=$_POST['K27'];
    $miestas11=$_POST['K28'];
    $miestas12=$_POST['K29'];
    $miestas13=$_POST['K30'];
    $miestas14=$_POST['K31'];
    $miestas15=$_POST['K32'];
    $miestas16=$_POST['K33'];
    $miestas17=$_POST['K34'];
    $miestas18=$_POST['K35'];
    $miestas19=$_POST['K36'];
    $miestas20=$_POST['K37'];
    $miestas21=$_POST['K38'];
    $miestas22=$_POST['K39'];
    $miestas23=$_POST['K40'];
    $miestas24=$_POST['K41'];
    $miestas25=$_POST['K42'];
    $miestas26=$_POST['K43'];
    $miestas27=$_POST['K44'];
    $miestas28=$_POST['K45'];
    $miestas29=$_POST['K46'];
    $miestas30=$_POST['K47'];
    $miestas31=$_POST['K48'];
    $miestas32=$_POST['K49'];
    $miestas33=$_POST['K50'];
    $miestas34=$_POST['K51'];
    $miestas35=$_POST['K52'];

    $masyvas=array($miestas1, $miestas2, $miestas3, $miestas4, $miestas5, $miestas6, $miestas7, $miestas8, $miestas9, $miestas10, $miestas11, $miestas12, $miestas13, $miestas14, $miestas15, $miestas16, $miestas17, $miestas18, $miestas19, $miestas20, $miestas21, $miestas22, $miestas23, $miestas24, $miestas25, $miestas26, $miestas27, $miestas28, $miestas29, $miestas30, $miestas31, $miestas32, $miestas33, $miestas34, $miestas35);

    $masyvas=array_filter($masyvas);
    $skaicius=count($masyvas);
    $skaicius--;

    echo $skaicius;
    echo "<br>";
    print_r($masyvas);
    echo "<br>";



    // #OtherParameters
    $uostas=$_POST['K53'];
    $oro_uostas=$_POST['K54'];
    $valdymas=$_POST['K55'];
    $susiskirstymas=$_POST['K56'];
    $gyventojai=$_POST['K57'];
    $prieaugis=$_POST['K58'];
    $grupes=$_POST['K59'];
    $kalbos=$_POST['K60'];
    $rastingumas=$_POST['K61'];
    $religija=$_POST['K62'];

    // #Indicators
    $valiuta=$_POST['K63'];
    $BVP=$_POST['K64'];
    $balansas=$_POST['K65'];
    $ZSRI=$_POST['K66'];
    $laimes_indeksas=$_POST['K67'];
    $big_mac=$_POST['K68'];

    // #Nature
    $gamta1=$_POST['K69'];
    $gamta2=$_POST['K70'];
    $gamta3=$_POST['K71'];
    $gamta4=$_POST['K72'];
    $gamta5=$_POST['K73'];
    $gamta6=$_POST['K74'];
    $gamta7=$_POST['K75'];
    $gamta8=$_POST['K76'];
    $gamta9=$_POST['K77'];
    $gamta10=$_POST['K78'];

    $masyvasGamta=array($gamta1, $gamta2, $gamta3, $gamta4, $gamta5, $gamta6, $gamta7, $gamta8, $gamta9, $gamta10);
    $masyvasGamta=array_filter($masyvasGamta);
    $skaiciusG=count($masyvasGamta);
    $skaiciusG--;


    // #Culture
    $kultura1=$_POST['K79'];
    $kultura2=$_POST['K80'];
    $kultura3=$_POST['K81'];
    $kultura4=$_POST['K82'];
    $kultura5=$_POST['K83'];
    $kultura6=$_POST['K84'];
    $kultura7=$_POST['K85'];
    $kultura8=$_POST['K86'];
    $kultura9=$_POST['K87'];
    $kultura10=$_POST['K88'];

    $masyvasKultura=array($kultura1, $kultura2, $kultura3, $kultura4, $kultura5, $kultura6, $kultura7, $kultura8, $kultura9, $kultura10);
    $masyvasKultura=array_filter($masyvasKultura);
    $skaiciusK=count($masyvasKultura);
    $skaiciusK--;

    // #DoYouKnow
    $faktas1=$_POST['K89'];
    $faktas2=$_POST['K90'];
    $faktas3=$_POST['K91'];
    $faktas4=$_POST['K92'];

    $masyvasFaktas=array($faktas1, $faktas2, $faktas3, $faktas4);
    $masyvasFaktas=array_filter($masyvasFaktas);
    $skaiciusF=count($masyvasFaktas);
    $skaiciusF--;

    // #CapitalInfo
    $populiacija=$_POST['K93'];
    $nuoroda=$_POST['K94'];
    $nuorodos_pav=$_POST['K95'];
    $platuma=$_POST['K96'];
    $ilguma=$_POST['K97'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } //echo "Connected successfully"; 

    $sql = "UPDATE List SET CountryLT='$pavadinimas', CountryGAL='$galininkas', Capital='$sostine' WHERE ISO_3166='$ISO'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $sql = "UPDATE Capital SET City='$sostine', Info='$populiacija', Link='$nuoroda', LinkName='$nuorodos_pav', Latitude='$platuma', Longitude='$ilguma' WHERE ISO_3166='$ISO'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "SELECT Abbreviations FROM List WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }
    
    if($trumpinys="" && $trumpinys=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE List SET Abbreviations='$trumpinys' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $sql = "UPDATE Place SET Info='$kur_yra' WHERE ISO_3166='$ISO'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE Area SET Info='$plotas' WHERE ISO_3166='$ISO'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    //AUKŠTA
    $sql = "SELECT Info FROM High WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($auksta!="" && $auksta!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE High SET Info='$auksta' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($auksta!="" && $auksta!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO High (ISO_3166, Info) VALUES ('$ISO' ,'$auksta');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //ŽEMA
    $sql = "SELECT Info FROM Low WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($zema!="" && $zema!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Low SET Info='$zema' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($zema!="" && $zema!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Low (ISO_3166, Info) VALUES ('$ISO' ,'$zema');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    //UPĖ
    $sql = "SELECT Info FROM River WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($upe!="" && $upe!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE River SET Info='$upe' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($upe!="" && $upe!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO River (ISO_3166, Info) VALUES ('$ISO' ,'$upe');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //EŽERAS
    $sql = "SELECT Info FROM Lake WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($ezeras!="" && $ezeras!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Lake SET Info='$ezeras' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($ezeras!="" && $ezeras!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Lake (ISO_3166, Info) VALUES ('$ISO' ,'$ezeras');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //SALA
    $sql = "SELECT Info FROM Island WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($sala!="" && $sala!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Island SET Info='$sala' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($sala!="" && $sala!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Island (ISO_3166, Info) VALUES ('$ISO' ,'$sala');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //FJORDAS
    $sql = "SELECT Info FROM Longest WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($fjordas!="" && $fjordas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Longest SET Info='$fjordas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($fjordas!="" && $fjordas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Longest (ISO_3166, Info) VALUES ('$ISO' ,'$fjordas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //GILUS
    $sql = "SELECT Info FROM Deepest WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($gilus!="" && $gilus!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Deepest SET Info='$gilus' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($gilus!="" && $gilus!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Deepest (ISO_3166, Info) VALUES ('$ISO' ,'$gilus');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //TERITORIJOS
    $sql = "SELECT Info FROM Territories WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($teritorijos!="" && $teritorijos!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Territories SET Info='$teritorijos' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($teritorijos!="" && $teritorijos!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Territories (ISO_3166, Info) VALUES ('$ISO' ,'$teritorijos');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
    //NUTOLĘ
    $sql = "SELECT Info FROM Distant WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }
    
    if($nutole!="" && $nutole!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Distant SET Info='$nutole' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($nutole!="" && $nutole!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Distant (ISO_3166, Info) VALUES ('$ISO' ,'$nutole');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $skaiciusS=-1;
    //MIESTAI
    $sql = "SELECT ID FROM Cities WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $skaiciusS++;
        $seni[$skaiciusS]=$row['ID'];
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($skaiciusS==$skaicius)
    {
        for($i=0;$i<=$skaiciusS;$i=$i+1)
        {
            $sql = "UPDATE Cities SET Info='$masyvas[$i]' WHERE ID ='$seni[$i]' && ISO_3166='$ISO'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }else{ 
        if($skaiciusS==0)
        {
            for($v4=0; $v4<=$skaiciusS;$v4++){
                $sql = "DELETE FROM Cities WHERE ID='$seni[$v4]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }else{
            for($v4=0;$v4<=$skaiciusS;$v4++){
                $sql = "DELETE FROM Cities WHERE ID='$seni[$v4]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }
        for($v=0; $v<=$skaicius; $v=$v+1){
            $sql = "INSERT INTO Cities (ISO_3166, Info) VALUES ('$ISO', '$masyvas[$v]');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    //UOSTAS
    $sql = "SELECT Info FROM Harbor WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($uostas!="" && $uostas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Harbor SET Info='$uostas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($uostas!="" && $uostas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Harbor (ISO_3166, Info) VALUES ('$ISO' ,'$uostas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //ORO UOSTAS
    $sql = "SELECT Info FROM Airport WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $tikrinimas="allowed";
            }
        } else {
            echo "0 results";
            $tikrinimas="not_allowed";
        }

    if($oro_uostas!="" && $oro_uostas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Airport SET Info='$oro_uostas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($oro_uostas!="" && $oro_uostas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Airport (ISO_3166, Info) VALUES ('$ISO' ,'$oro_uostas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //VALDYMAS
    $sql = "SELECT Info FROM Government WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($valdymas!="" && $valdymas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Government SET Info='$valdymas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($valdymas!="" && $valdymas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Government (ISO_3166, Info) VALUES ('$ISO' ,'$valdymas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //ADMINISTRACINIS SUSKIRSTYMAS
    $sql = "SELECT Info FROM District WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($susiskirstymas!="" && $susiskirstymas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE District SET Info='$susiskirstymas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($susiskirstymas!="" && $susiskirstymas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO District (ISO_3166, Info) VALUES ('$ISO' ,'$susiskirstymas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //GYVENTOJAI
    $sql = "SELECT Info FROM People WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($gyventojai!="" && $gyventojai!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE People SET Info='$gyventojai' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($gyventojai!="" && $gyventojai!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO People (ISO_3166, Info) VALUES ('$ISO' ,'$gyventojai');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //PRIEAUGIS
    $sql = "SELECT Info FROM Growth WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($prieaugis!="" && $prieaugis!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Growth SET Info='$prieaugis' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($prieaugis!="" && $prieaugis!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Growth (ISO_3166, Info) VALUES ('$ISO' ,'$prieaugis');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //ETNINĖS/RASINĖS GRUPĖS
    $sql = "SELECT Info FROM Groups WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($grupes!="" && $grupes!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Groups SET Info='$grupes' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($grupes!="" && $grupes!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Groups (ISO_3166, Info) VALUES ('$ISO' ,'$grupes');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //KALBOS
    $sql = "SELECT Info FROM Languages WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($kalbos!="" && $kalbos!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Languages SET Info='$kalbos' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($kalbos!="" && $kalbos!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Languages (ISO_3166, Info) VALUES ('$ISO' ,'$kalbos');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //RAŠTINGUMAS
    $sql = "SELECT Info FROM Literacy WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($rastingumas!="" && $rastingumas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Literacy SET Info='$rastingumas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($rastingumas!="" && $rastingumas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Literacy (ISO_3166, Info) VALUES ('$ISO' ,'$rastingumas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    //RELIGIJA
    $sql = "SELECT Info FROM Religion WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($religija!="" && $religija!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Religion SET Info='$religija' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($religija!="" && $religija!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Religion (ISO_3166, Info) VALUES ('$ISO' ,'$religija');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //VALIUTA
    $sql = "SELECT Info FROM Currency WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($valiuta!="" && $valiuta!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Currency SET Info='$valiuta' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($valiuta!="" && $valiuta!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Currency (ISO_3166, Info) VALUES ('$ISO' ,'$valiuta');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //BVP
    $sql = "SELECT Info FROM GDP WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($BVP!="" && $BVP!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE GDP SET Info='$BVP' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($BVP!="" && $BVP!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO GDP (ISO_3166, Info) VALUES ('$ISO' ,'$BVP');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    //UŽSIENIO PREKYBOS BALANSAS
    $sql = "SELECT Info FROM Balance WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($balansas!="" && $balansas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Balance SET Info='$balansas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($balansas!="" && $balansas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Balance (ISO_3166, Info) VALUES ('$ISO' ,'$balansas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //ŽSRI (ŽMOGAUS SOCIALINĖS RAIDOS INDEKSAS)
    $sql = "SELECT Info FROM HDI WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($ZSRI!="" && $ZSRI!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE HDI SET Info='$ZSRI' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($ZSRI!="" && $ZSRI!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO HDI (ISO_3166, Info) VALUES ('$ISO' ,'$ZSRI');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //LAIMĖS INDEKSAS
    $sql = "SELECT Info FROM Happiness WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($laimes_indeksas!="" && $laimes_indeksas!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Happiness SET Info='$laimes_indeksas' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($laimes_indeksas!="" && $laimes_indeksas!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Happiness (ISO_3166, Info) VALUES ('$ISO' ,'$laimes_indeksas');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //BIG MAC
    $sql = "SELECT Info FROM Big_Mac WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tikrinimas="allowed";
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($big_mac!="" && $big_mac!=" " && $tikrinimas=="allowed")
    {
        $sql = "UPDATE Big_Mac SET Info='$big_mac' WHERE ISO_3166='$ISO'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($big_mac!="" && $big_mac!=" " && $tikrinimas!="allowed")
    {
        $sql = "INSERT INTO Big_Mac (ISO_3166, Info) VALUES ('$ISO' ,'$big_mac');";
        if ($conn->multi_query($sql) === TRUE) {
            echo "New records created successfully";
            $created=true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //LANKYTINOS VIETOS - GAMTA

    $skaicius1=-1;
    $sql = "SELECT ID FROM Nature WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $skaicius1++;
        $seniG[$skaicius1]=$row['ID'];
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($skaicius1==$skaiciusG)
    {
        for($y=0;$y<=$skaiciusG;$y=$y+1)
        {
            $sql = "UPDATE Nature SET Info='$masyvasGamta[$y]' WHERE ID ='$seniG[$y]' && ISO_3166='$ISO'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }else{
        if($skaicius1==0)
        {
            for($v3=0; $v3<=$skaicius1;$v3++){
                $sql = "DELETE FROM Nature WHERE ID='$seniG[$v3]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }else{
            for($v3=0;$v3<$skaicius1;$v3++){
                $sql = "DELETE FROM Nature WHERE ID='$seniG[$v3]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }
        for($v=0; $v<=$skaiciusG; $v=$v+1){
            $sql = "INSERT INTO Nature (ISO_3166, Info) VALUES ('$ISO', '$masyvasGamta[$v]');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    //LANKYTINOS VIETOS - KULTŪRA
    $skaicius2=-1;
    $sql = "SELECT ID FROM Culture WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $skaicius2++;
        $seniK[$skaicius2]=$row['ID'];
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }

    if($skaicius2==$skaiciusK)
    {
        for($u=0;$u<=$skaiciusK;$u=$u+1)
        {
            $sql = "UPDATE Culture SET Info='$masyvasKultura[$u]' WHERE ID ='$seniK[$u]' && ISO_3166='$ISO'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }else{
        if($skaicius2==0)
        {
            for($v2=0; $v2<=$skaicius2;$v2++){
                $sql = "DELETE FROM Culture WHERE ID='$seniK[$v2]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }else{
            for($v2=0;$v2<$skaicius2;$v2++){
                $sql = "DELETE FROM Culture WHERE ID='$seniK[$v2]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }
        for($v=0; $v<=$skaiciusK; $v=$v+1){
            $sql = "INSERT INTO Culture (ISO_3166, Info) VALUES ('$ISO', '$masyvasKultura[$v]');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    //AR ŽINAI, KAD...
    $skaicius3=-1;
    $sql = "SELECT ID FROM DoYouKnow WHERE ISO_3166='$ISO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $skaicius3++;
        $seniF[$skaicius3]=$row['ID'];
        }
    } else {
        echo "0 results";
        $tikrinimas="not_allowed";
    }
    if($skaicius3==$skaiciusF)
    {
        echo "BAD Condition";
        for($o=0;$o<=$skaiciusF;$o=$o+1)
        {
            $sql = "UPDATE DoYouKnow SET Info='$masyvasFaktas[$o]' WHERE ID ='$seniF[$o]' && ISO_3166='$ISO'";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
    else{
        if($skaicius3==0)
        {
            for($v1=0; $v1<=$skaicius3;$v1++){
                $sql = "DELETE FROM DoYouKnow WHERE ID='$seniF[$v1]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }else{
            for($v1=0;$v1<$skaicius3;$v1++){
                $sql = "DELETE FROM DoYouKnow WHERE ID='$seniF[$v1]' && ISO_3166='$ISO'";
                if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }
        echo "<br>";
        echo "<br>";
        print_r($masyvasFaktas);
        for($v=0; $v<=$skaiciusF; $v=$v+1){
            $sql = "INSERT INTO DoYouKnow (ISO_3166, Info) VALUES ('$ISO', '$masyvasFaktas[$v]');";
            if ($conn->multi_query($sql) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $skaicius5=-1;
    $sql = "SELECT ID, ISO_3166, CountryLT, Capital, Mode FROM List";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $skaicius5++;
        $ID[$skaicius5]=$row['ID'];
        $ISO_3166[$skaicius5]=$row['ISO_3166'];
        $CountryLT[$skaicius5]=$row['CountryLT'];
        $Capital[$skaicius5]=$row['Capital'];
        $Mode[$skaicius5]=$row['Mode'];
        
     }
    } else {
     echo "0 results";
    }
    //echo $skaicius5;
    array_multisort($ISO_3166, $ID, $CountryLT, $Capital, $Mode);
    session_start();
    $_SESSION['peržiūrėti1']=$ID;
    $_SESSION['peržiūrėti2']=$ISO_3166;
    $_SESSION['peržiūrėti3']=$CountryLT;
    $_SESSION['peržiūrėti4']=$Capital;
    $_SESSION['peržiūrėti5']=$Mode;
    $_SESSION['peržiūrėti6']=$skaicius5;

    header("Location: administrator?view?work=success");
?>