<?php
   require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
    $code=$_POST['country_ISO'];
    $action=$_POST['country_action'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } echo "Connected successfully"; 

    if($action == 1)
    {
        $sql = "UPDATE List SET Mode='Neaktyvi' WHERE ISO_3166='$code'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    
    if($action == 2)
    {
        $sql = "UPDATE List SET Mode='Aktyvi' WHERE ISO_3166='$code'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    if($action == 3)
    {
        $sql = "SELECT Info FROM Airport WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $airport=$row['Info'];
         }
        } else {
         echo "0 results";
        }
        $sql = "SELECT Info FROM Area WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $area=$row['Info'];
         }
        } else {
         echo "0 results";
        }
        $sql = "SELECT Info FROM Balance WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $balance=$row['Info'];
         }
        } else {
         echo "0 results";
        }
        $sql = "SELECT Info FROM Balance WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $balance=$row['Info'];
         }
        } else {
         echo "0 results";
        }
        $sql = "SELECT Info FROM Big_Mac WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $big_mac=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $skaiciusM=0;

        $sql = "SELECT Info FROM Cities WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $skaiciusM++;
            $cities[$skaiciusM]=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $skaiciusK=0;

        $sql = "SELECT Info FROM Culture WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $skaiciusK++;
            $culture[$skaiciusK]=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Currency WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $currency=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Deepest WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $deepest=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Distant WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $distant=$row['Info'];
         }
        } else {
         echo "0 results";
        }
    
        $sql = "SELECT Info FROM District WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $district=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $skaiciusZ=0;

        $sql = "SELECT Info FROM DoYouKnow WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $skaiciusZ++;
            $DoYouKnow[$skaiciusZ]=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM GDP WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $gdp=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Government WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $government=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Groups WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $groups=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Growth WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $growth=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Happiness WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $happiness=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Harbor WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $harbor=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM HDI WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $hdi=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM High WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $high=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Island WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $island=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Lake WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $lake=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Languages WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $languages=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Literacy WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $literacy=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Longest WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $longest=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Low WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $low=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $skaiciusG=0;

        $sql = "SELECT Info FROM Nature WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $skaiciusG++;
            $nature[$skaiciusG]=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM People WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $people=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Place WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $place=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Religion WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $religion=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM River WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $river=$row['Info'];
         }
        } else {
         echo "0 results";
        }

        $sql = "SELECT Info FROM Terrirories WHERE ISO_3166='$code'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $terrirories=$row['Info'];
         }
        } else {
         echo "0 results";
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
        $_SESSION['G1']=$airport;
        $_SESSION['G2']=$area;
        $_SESSION['G3']=$balance;
        $_SESSION['G4']=$big_mac;
        $_SESSION['G5']=$skaiciusM;
        $_SESSION['G6']=$cities;
        $_SESSION['G7']=$skaiciusK;
        $_SESSION['G8']=$culture;
        $_SESSION['G9']=$currency;
        $_SESSION['G10']=$deepest;
        $_SESSION['G11']=$distant;
        $_SESSION['G12']=$district;
        $_SESSION['G13']=$skaiciusZ;
        $_SESSION['G14']=$DoYouKnow;
        $_SESSION['G15']=$gdp;
        $_SESSION['G16']=$government;
        $_SESSION['G17']=$groups;
        $_SESSION['G18']=$growth;
        $_SESSION['G19']=$happiness;
        $_SESSION['G20']=$harbor;
        $_SESSION['G21']=$hdi;
        $_SESSION['G22']=$high;
        $_SESSION['G23']=$island;
        $_SESSION['G24']=$lake;
        $_SESSION['G25']=$languages;
        $_SESSION['G26']=$literacy;
        $_SESSION['G27']=$longest;
        $_SESSION['G28']=$low;
        $_SESSION['G29']=$skaiciusG;
        $_SESSION['G30']=$nature;
        $_SESSION['G31']=$people;
        $_SESSION['G32']=$place;
        $_SESSION['G33']=$religion;
        $_SESSION['G34']=$river;
        $_SESSION['G35']=$terrirories;
        $_SESSION['G36']=$city;
        $_SESSION['G37']=$count;
        $_SESSION['G38']=$link;
        $_SESSION['G39']=$linkName;
        $_SESSION['G40']=$latitude;
        $_SESSION['G41']=$longitude;
        $_SESSION['G42']=$file1;
        $_SESSION['G43']=$file2;
        $_SESSION['G44']=$file3;
        $_SESSION['G45']=$countryLT;
        $_SESSION['G46']=$countryEN;
        $_SESSION['G47']=$countryGAL;
        $_SESSION['G48']=$abbreviation;
        $_SESSION['G49']=$flag;
        $_SESSION['G50']=$background;
        $_SESSION['G51']=$code;

        header("Location: administrator?modify_country");
    }
    if($action==2 || $action==1 )
    {
        $skaicius=-1;
        $ID;
        $ISO_3166;
        $CountryLT;
        $Capital;
        $Mode;

        $sql = "SELECT ID, ISO_3166, CountryLT, Capital, Mode FROM List";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $skaicius++;
            $ID[$skaicius]=$row['ID'];
            $ISO_3166[$skaicius]=$row['ISO_3166'];
            $CountryLT[$skaicius]=$row['CountryLT'];
            $Capital[$skaicius]=$row['Capital'];
            $Mode[$skaicius]=$row['Mode'];
            
        }
        } else {
        echo "0 results";
        }
        echo $skaicius;
        array_multisort($ISO_3166, $ID, $CountryLT, $Capital, $Mode);
        session_start();
        $_SESSION['peržiūrėti1']=$ID;
        $_SESSION['peržiūrėti2']=$ISO_3166;
        $_SESSION['peržiūrėti3']=$CountryLT;
        $_SESSION['peržiūrėti4']=$Capital;
        $_SESSION['peržiūrėti5']=$Mode;
        $_SESSION['peržiūrėti6']=$skaicius;
        header("Location: administrator?view");
    }

?>