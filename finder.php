<?php
  require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

  session_start();
  $vartotojas=$_SESSION['PATVIRTINIMAS'];

  $nerasta=false;

  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } echo "Connected successfully"; 

  $pavadinimas = $_POST['myCountry'];
  $pavadinimas = trim($pavadinimas," '|', '+', '*', '/', ';', ',', '''");
  $pavadinimas= mb_strtolower ($pavadinimas, 'UTF-8');
  $pavadinimas= mb_ucfirst($pavadinimas);

  if(empty($pavadinimas)){
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $url_components = parse_url($url); 
  
    parse_str($url_components['query'], $params); 
      
    $pavadinimas=$params['country'];
  }

  function mb_ucfirst($string, $encoding = 'UTF-8'){
    $strlen = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
  }

  // #PATVIRTINA
  $ISO;

  // #Info
  $pavadinimasEN;
  $sostine;
  $galininkas;
  $fonas;
  $veliava;

  // #Place
  $kur_yra;
  $plotas;
  $auksta;
  $zema;
  $upe;
  $ezeras;
  $sala;
  $fjordas;
  $gilus;
  $teritorijos;
  $nutole;

  // #OtherParameters
  $uostas;
  $oro_uostas;
  $valdymas;
  $susiskirstymas;
  $gyventojai;
  $prieaugis;
  $grupes;
  $kalbos;
  $rastingumas;
  $religija;

  // #Indicators
  $valiuta;
  $BVP;
  $balansas;
  $ZSRI;
  $laimes_indeksas;
  $big_mac;
  
  // #CapitalInfo
  $populiacija;
  $nuoroda;
  $nuorodos_pav;
  $platuma;
  $ilguma;
  $nuotrauka1;
  $nuotrauka2;
  $nuotrauka3;

  if($pavadinimas=="Null")
  {
    $nerasta=true;
    header("Location: index");
  }
  else{
    $sql = "SELECT ISO_3166, CountryEN, CountryGAL, Capital, Flag, Background FROM List WHERE CountryLT='$pavadinimas' && Mode='Aktyvi'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $ISO=$row['ISO_3166'];
        $pavadinimasEN=$row['CountryEN'];
        $galininkas=$row['CountryGAL'];
        $sostine=$row['Capital'];
        $veliava=$row['Flag'];
        $fonas=$row['Background'];
        $rasti=true;
        $nerasta=false;
    }
    } else {
    echo "0 results";
    $rasti=false;
    $nerasta=true;
    }

    if($rasti!=1)
    {
      $sql = "SELECT ISO_3166, CountryEN, CountryGAL, Capital, Flag, Background FROM List WHERE Abbreviations='$pavadinimas' && Mode='Aktyvi'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ISO=$row['ISO_3166'];
        $pavadinimasEN=$row['CountryEN'];
        $galininkas=$row['CountryGAL'];
        $sostine=$row['Capital'];
        $veliava=$row['Flag'];
        $fonas=$row['Background'];
        $rasti=true;
        $nerasta=false;
      }
      } else {
      echo "0 results";
      $rasti=false;
      $nerasta=true;
      }
    }
    if($rasti!=1)
    {
      $sql = "SELECT ISO_3166, CountryEN, CountryGAL, Capital, Flag, Background FROM List WHERE Capital='$pavadinimas' && Mode='Aktyvi'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ISO=$row['ISO_3166'];
          $pavadinimasEN=$row['CountryEN'];
          $galininkas=$row['CountryGAL'];
          $sostine=$row['Capital'];
          $veliava=$row['Flag'];
          $fonas=$row['Background'];
          $rasti=true;
          $nerasta=false;
      }
      } else {
      echo "0 results";
      $rasti=false;
      $nerasta=true;
      }
    }
  }

  if($nerasta==1){
    if (isset($vartotojas) && $vartotojas !== '') 
    {
      header("Location: index?status=user");
    }
    else
    {
      header("Location: index");
    }
  }
  if($rasti==1)
  {
    
    
    
    $sql = "SELECT Info, Link, LinkName, Latitude, Longitude, FileName1, FileName2, FileName3 FROM Capital WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $populiacija=$row['Info'];
        $nuoroda=$row['Link'];
        $nuorodos_pav=$row['LinkName'];
        $platuma=$row['Latitude'];
        $ilguma=$row['Longitude'];
        $nuotrauka1=$row['FileName1'];
        $nuotrauka2=$row['FileName2'];
        $nuotrauka3=$row['FileName3'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Place WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $kur_yra=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Area WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $plotas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM High WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $auksta=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Low WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $zema=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM River WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $upe=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Lake WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ezeras=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Island WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $sala=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Longest WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $fjordas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Deepest WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $gilus=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Territories WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $teritorijos=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Distant WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $nutole=$row['Info'];
      }
      } else {
      echo "0 results";
      }

    // MIESTAI
    $miestuSK=35;
    $sql = "SELECT City_1, City_2, City_3, City_4, City_5, City_6, City_7, City_8, City_9, City_10, City_11, City_12, City_13, City_14, City_15, City_16, City_17, City_18, City_19, City_20, City_21, City_22, City_23, City_24, City_25, City_26, City_27, City_28, City_29, City_30, City_31, City_32, City_33, City_34, City_35 FROM Cities WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $cities[1]=$row['City_1'];
            $cities[2]=$row['City_2'];
            $cities[3]=$row['City_3'];
            $cities[4]=$row['City_4'];
            $cities[5]=$row['City_5'];
            $cities[6]=$row['City_6'];
            $cities[7]=$row['City_7'];
            $cities[8]=$row['City_8'];
            $cities[9]=$row['City_9'];
            $cities[10]=$row['City_10'];
            $cities[11]=$row['City_11'];
            $cities[12]=$row['City_12'];
            $cities[13]=$row['City_13'];
            $cities[14]=$row['City_14'];
            $cities[15]=$row['City_15'];
            $cities[16]=$row['City_16'];
            $cities[17]=$row['City_17'];
            $cities[18]=$row['City_18'];
            $cities[19]=$row['City_19'];
            $cities[20]=$row['City_20'];
            $cities[21]=$row['City_21'];
            $cities[22]=$row['City_22'];
            $cities[23]=$row['City_23'];
            $cities[24]=$row['City_24'];
            $cities[25]=$row['City_25'];
            $cities[26]=$row['City_26'];
            $cities[27]=$row['City_27'];
            $cities[28]=$row['City_28'];
            $cities[29]=$row['City_29'];
            $cities[30]=$row['City_30'];
            $cities[31]=$row['City_31'];
            $cities[32]=$row['City_32'];
            $cities[33]=$row['City_33'];
            $cities[34]=$row['City_34'];
            $cities[35]=$row['City_35'];
         }
        } else {
         echo "0 results";
        }
    $cities=array_filter($cities);
    $cities=array_values($cities);
    $miestuSK=count($cities);

    /*echo "<br>";
    echo "<br>";
    echo $miestuSK;
    echo "<br>";
    print_r($cities);
    echo "<br>";
    echo "<br>";*/
    
    $sql = "SELECT Info FROM Harbor WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $uostas=$row['Info'];
      }
      } else {
      echo "0 results";
      } 
    $sql = "SELECT Info FROM Airport WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $oro_uostas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Government WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $valdymas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM District WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $susiskirstymas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM People WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $gyventojai=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Growth WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $prieaugis=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Groups WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $grupes=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Languages WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $kalbos=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Literacy WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $rastingumas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Religion WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $religija=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Currency WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $valiuta=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM GDP WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $BVP=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Balance WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $balansas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM HDI WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ZSRI=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Happiness WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $laimes_indeksas=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    $sql = "SELECT Info FROM Big_Mac WHERE ISO_3166='$ISO'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $big_mac=$row['Info'];
      }
      } else {
      echo "0 results";
      }
    
    // LANKYTINOS VIETOS - GAMTA
    $gamtaSK=10;
    $sql = "SELECT Place_1, Place_2, Place_3, Place_4, Place_5, Place_6, Place_7, Place_8, Place_9, Place_10 FROM Nature WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $gamtos_objektai[1]=$row['Place_1'];
          $gamtos_objektai[2]=$row['Place_2'];
          $gamtos_objektai[3]=$row['Place_3'];
          $gamtos_objektai[4]=$row['Place_4'];
          $gamtos_objektai[5]=$row['Place_5'];
          $gamtos_objektai[6]=$row['Place_6'];
          $gamtos_objektai[7]=$row['Place_7'];
          $gamtos_objektai[8]=$row['Place_8'];
          $gamtos_objektai[9]=$row['Place_9'];
          $gamtos_objektai[10]=$row['Place_10'];
         }
        } else {
        echo "0 results";
        }
    $gamtos_objektai=array_filter($gamtos_objektai);
    $gamtos_objektai = array_values($gamtos_objektai);
    $gamtaSK=count($gamtos_objektai);

    // LANKYTINOS VIETOS - KULTŪRA
    $kulturaSK=10;
    $sql = "SELECT Place_1, Place_2, Place_3, Place_4, Place_5, Place_6, Place_7, Place_8, Place_9, Place_10 FROM Culture WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $kulturos_objektai[1]=$row['Place_1'];
          $kulturos_objektai[2]=$row['Place_2'];
          $kulturos_objektai[3]=$row['Place_3'];
          $kulturos_objektai[4]=$row['Place_4'];
          $kulturos_objektai[5]=$row['Place_5'];
          $kulturos_objektai[6]=$row['Place_6'];
          $kulturos_objektai[7]=$row['Place_7'];
          $kulturos_objektai[8]=$row['Place_8'];
          $kulturos_objektai[9]=$row['Place_9'];
          $kulturos_objektai[10]=$row['Place_10'];
         }
        } else {
        echo "0 results";
        }
    $kulturos_objektai=array_filter($kulturos_objektai);
    $kulturos_objektai = array_values($kulturos_objektai);
    $kulturaSK=count($kulturos_objektai);

    $zemelapiaiSK=0;
    $sql = "SELECT Title, CaseName FROM Maps WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $zemelapiaiSK++;
          $zemelapiai[$zemelapiaiSK]=$row['Title'];
          $Znuorodos[$zemelapiaiSK]=$row['CaseName'];
        }
        } else {
        echo "0 results";
        }
    $marsrutaiSK=0;
    $sql = "SELECT Title, CaseName  FROM Routes WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $marsrutaiSK++;
          $marsrutai[$marsrutaiSK]=$row['Title'];
          $Mnuorodos[$marsrutaiSK]=$row['CaseName'];
        }
        } else {
        echo "0 results";
        }
    $svetaineSK=0;
    $sql = "SELECT Link, LinkName  FROM Links WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $svetaineSK++;
          $svetaines[$svetaineSK]=$row['LinkName'];
          $Snuorodos[$svetaineSK]=$row['Link'];
        }
        } else {
        echo "0 results";
        }
    $faktaiSK=4;
    $sql = "SELECT Fact_1, Fact_2, Fact_3, Fact_4 FROM DoYouKnow WHERE ISO_3166='$ISO'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            $DoYouKnow[1]=$row['Fact_1'];
            $DoYouKnow[2]=$row['Fact_2'];
            $DoYouKnow[3]=$row['Fact_3'];
            $DoYouKnow[4]=$row['Fact_4'];
         }
        } else {
         echo "0 results";
        }
    $DoYouKnow=array_filter($DoYouKnow);
    $DoYouKnow = array_values($DoYouKnow);
    $faktaiSK=count($DoYouKnow);

    $apklausaSK=0;
    $sql = "SELECT Survey, SurveyName FROM Survey WHERE ISO_3166='$ISO' || ISO_3166='Visos'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $apklausaSK++;
          $apklausos[$apklausaSK]=$row['Survey'];
          $Anuorodos[$apklausaSK]=$row['SurveyName'];
        }
        } else {
        echo "0 results";
        }
    $pavadinimas=$pavadinimas;

    setcookie("Galutinis1", $pavadinimasEN, time() + (86400), "/");
    setcookie("Galutinis2", $galininkas, time() + (86400), "/");
    setcookie("Galutinis3", $sostine, time() + (86400), "/");
    setcookie("Galutinis4", $veliava, time() + (86400), "/");
    setcookie("Galutinis5", $fonas, time() + (86400), "/");
    setcookie("Galutinis6", $populiacija, time() + (86400), "/");
    setcookie("Galutinis7", $nuoroda, time() + (86400), "/");
    setcookie("Galutinis8", $nuorodos_pav, time() + (86400), "/");
    setcookie("Galutinis9", $platuma, time() + (86400), "/");
    setcookie("Galutinis10", $ilguma, time() + (86400), "/");
    setcookie("Galutinis11", $nuotrauka1, time() + (86400), "/");
    setcookie("Galutinis12", $nuotrauka2, time() + (86400), "/");
    setcookie("Galutinis13", $nuotrauka3, time() + (86400), "/");
    setcookie("Galutinis14", $kur_yra, time() + (86400), "/");
    setcookie("Galutinis15", $plotas, time() + (86400), "/");
    setcookie("Galutinis16", $auksta, time() + (86400), "/");
    setcookie("Galutinis17", $zema, time() + (86400), "/");
    setcookie("Galutinis18", $upe, time() + (86400), "/");
    setcookie("Galutinis19", $ezeras, time() + (86400), "/");
    setcookie("Galutinis20", $sala, time() + (86400), "/");
    setcookie("Galutinis21", $fjordas, time() + (86400), "/");
    setcookie("Galutinis22", $gilus, time() + (86400), "/");
    setcookie("Galutinis23", $teritorijos, time() + (86400), "/");
    setcookie("Galutinis24", $nutole, time() + (86400), "/");
    setcookie("Galutinis25", $miestuSK, time() + (86400), "/");
    setcookie("Galutinis26", serialize($cities), time() + (86400), "/");
    setcookie("Galutinis27", $uostas, time() + (86400), "/");
    setcookie("Galutinis28", $oro_uostas, time() + (86400), "/");
    setcookie("Galutinis29", $valdymas, time() + (86400), "/");
    setcookie("Galutinis30", $susiskirstymas, time() + (86400), "/");
    setcookie("Galutinis31", $gyventojai, time() + (86400), "/");
    setcookie("Galutinis32", $prieaugis, time() + (86400), "/");
    setcookie("Galutinis33", $grupes, time() + (86400), "/");
    setcookie("Galutinis34", $kalbos, time() + (86400), "/");
    setcookie("Galutinis35", $rastingumas, time() + (86400), "/");
    setcookie("Galutinis36", $religija, time() + (86400), "/");
    setcookie("Galutinis37", $valiuta, time() + (86400), "/");
    setcookie("Galutinis38", $BVP, time() + (86400), "/");
    setcookie("Galutinis39", $balansas, time() + (86400), "/");
    setcookie("Galutinis40", $ZSRI, time() + (86400), "/");
    setcookie("Galutinis41", $laimes_indeksas, time() + (86400), "/");
    setcookie("Galutinis42", $big_mac, time() + (86400), "/");
    setcookie("Galutinis43", $gamtaSK, time() + (86400), "/");
    setcookie("Galutinis44", serialize($gamtos_objektai), time() + (86400), "/");
    setcookie("Galutinis45", $kulturaSK, time() + (86400), "/");
    setcookie("Galutinis46", serialize($kulturos_objektai), time() + (86400), "/");
    setcookie("Galutinis47", $zemelapiaiSK, time() + (86400), "/");
    setcookie("Galutinis48", serialize($zemelapiai), time() + (86400), "/");
    setcookie("Galutinis49", serialize($Znuorodos), time() + (86400), "/");
    setcookie("Galutinis50", $marsrutaiSK, time() + (86400), "/");
    setcookie("Galutinis51", serialize($marsrutai), time() + (86400), "/");
    setcookie("Galutinis52", serialize($Mnuorodos), time() + (86400), "/");
    setcookie("Galutinis53", $svetaineSK, time() + (86400), "/");
    setcookie("Galutinis54", serialize($svetaines), time() + (86400), "/");
    setcookie("Galutinis55", serialize($Snuorodos), time() + (86400), "/");
    setcookie("Galutinis56", $faktaiSK, time() + (86400), "/");
    setcookie("Galutinis57", serialize($DoYouKnow), time() + (86400), "/");
    setcookie("Galutinis58", $apklausaSK, time() + (86400), "/");
    setcookie("Galutinis59", serialize($apklausos), time() + (86400), "/");
    setcookie("Galutinis60", serialize($Anuorodos), time() + (86400), "/");
    setcookie("Galutinis61", $pavadinimas, time() + (86400), "/");

    if (isset($vartotojas) && $vartotojas !== '') 
    {
      header("Location: index?status=user?result");
    }
    else
    {
      header("Location: index?result");
    }
  }
//setcookie("platuma", $latitude, time() + (86400), "/");
//setcookie("ilguma", $longitude, time() + (86400), "/");
//setcookie("rezultatas", $nerasta, time() + (86400), "/");
?>