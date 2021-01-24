<!doctype html>
<html lang="lt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administatoriaus skydelis</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="admin.css" !important>
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <link rel="shortcut icon" href="images/dashboard(1).png" type="image/x-icon">
    <link rel="icon" href="images/dashboard(1).png" type="image/x-icon">

    
    <!--<script src="mobile-detect.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/mobile-detect@1.4.4/mobile-detect.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>

  body{
    font-family: "Poppins", sans-serif;
    background-image: url('');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  .container {
  padding: 2px 16px;
  }


  .zoom {
  display: inline-block;
  padding: 50px;
  transition: transform .2s;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  } 

  .zoom1 {
  display: inline-block;
  transition: transform .2s; 
  width: 50px;
  height: 50px;
  margin: 0 auto;
  margin-bottom: 1%;
  margin-right: 1%;
  margin-left: 5%
  } 
  .zoom1:hover {
    transform: scale(2); 
  }

  .zoom:hover {
    transform: scale(2);
  }

</style>
</head>
<body>
<script>
    <?php
        require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';

        session_start();
        $admin_ID = $_SESSION['admin1'];
        $admin_name = $_SESSION['admin2'];
        $admin_last = $_SESSION['admin3'];
        $admin_email = $_SESSION['admin4'];
        $admin_pass = $_SESSION['admin5'];

        $tikrinti;

        $blog_countries_count=0;
        $blog_countries_LT_array;
        $blog_countries_EN_array;

        if(array_key_exists('admin2',$_SESSION) && !empty($_SESSION['admin2'])) {
        $tikrinti=0;
        }
        else{
        header("Location: log");
        }
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT ISO_3166, CountryLT, CountryEN FROM List WHERE Mode='Aktyvi'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $blog_countries_count++;
            $blog_countries_LT_array[$blog_countries_count]=$row['CountryLT'];
            $blog_countries_EN_array[$blog_countries_count]=$row['CountryEN'];
        }
        }

        array_multisort($blog_countries_LT_array, $blog_countries_EN_array);

        session_start();
        $ISO_3166=$_SESSION['Grąžintas1'];
        $pavadinimas_LT=$_SESSION['Grąžintas2'];
        $sostinės_pavadinimas=$_SESSION['Grąžintas3'];
        $trumpinys=$_SESSION['Grąžintas4'];
        $pavadinimas_EN=$_SESSION['Grąžintas5'];
        $kur_yra=$_SESSION['Grąžintas6'];
        $plotas=$_SESSION['Grąžintas7'];
        $a_vieta=$_SESSION['Grąžintas8'];
        $ž_vieta=$_SESSION['Grąžintas9'];
        $upė=$_SESSION['Grąžintas10'];
        $d_ežeras=$_SESSION['Grąžintas11'];
        $d_sala=$_SESSION['Grąžintas12'];
        $fjordas=$_SESSION['Grąžintas13'];
        $g_ežeras=$_SESSION['Grąžintas14'];
        $e_teritorijos=$_SESSION['Grąžintas15'];
        $n_valdos=$_SESSION['Grąžintas16'];
        $miestas1=$_SESSION['Grąžintas17'];
        $miestas2=$_SESSION['Grąžintas18'];
        $miestas3=$_SESSION['Grąžintas19'];
        $miestas4=$_SESSION['Grąžintas20'];
        $miestas5=$_SESSION['Grąžintas21'];
        $miestas6=$_SESSION['Grąžintas22'];
        $miestas7=$_SESSION['Grąžintas23'];
        $miestas8=$_SESSION['Grąžintas24'];
        $miestas9=$_SESSION['Grąžintas25'];  
        $miestas10=$_SESSION['Grąžintas26'];
        $miestas11=$_SESSION['Grąžintas27'];
        $miestas12=$_SESSION['Grąžintas28'];
        $miestas13=$_SESSION['Grąžintas29'];
        $miestas14=$_SESSION['Grąžintas30'];
        $miestas15=$_SESSION['Grąžintas31'];
        $miestas16=$_SESSION['Grąžintas32'];
        $miestas17=$_SESSION['Grąžintas33'];
        $miestas18=$_SESSION['Grąžintas34'];  
        $miestas19=$_SESSION['Grąžintas35'];
        $miestas20=$_SESSION['Grąžintas36'];
        $miestas21=$_SESSION['Grąžintas37'];
        $miestas22=$_SESSION['Grąžintas38'];
        $miestas23=$_SESSION['Grąžintas39'];
        $miestas24=$_SESSION['Grąžintas40'];
        $miestas25=$_SESSION['Grąžintas41'];
        $miestas26=$_SESSION['Grąžintas42'];
        $miestas27=$_SESSION['Grąžintas43'];  
        $miestas28=$_SESSION['Grąžintas44'];
        $miestas29=$_SESSION['Grąžintas45'];
        $miestas30=$_SESSION['Grąžintas46'];
        $miestas31=$_SESSION['Grąžintas47'];
        $miestas32=$_SESSION['Grąžintas48'];
        $miestas33=$_SESSION['Grąžintas49'];
        $miestas34=$_SESSION['Grąžintas50'];
        $miestas35=$_SESSION['Grąžintas51'];
        $svar_uostas=$_SESSION['Grąžintas52'];
        $svar_oro=$_SESSION['Grąžintas53'];
        $valdymas=$_SESSION['Grąžintas54'];
        $susiskirstymas=$_SESSION['Grąžintas55'];
        $gyventojai=$_SESSION['Grąžintas56'];
        $prieaugis=$_SESSION['Grąžintas57'];
        $grupės=$_SESSION['Grąžintas58'];
        $kalbos=$_SESSION['Grąžintas59'];
        $raštingumas=$_SESSION['Grąžintas60'];
        $religijos=$_SESSION['Grąžintas61'];
        $valiuta=$_SESSION['Grąžintas62'];
        $BVP=$_SESSION['Grąžintas63'];
        $prek_balansas=$_SESSION['Grąžintas64'];
        $ŽSRI=$_SESSION['Grąžintas65'];
        $laimės_indeksas=$_SESSION['Grąžintas66'];
        $big_mac=$_SESSION['Grąžintas67'];
        $gamta1=$_SESSION['Grąžintas68'];
        $gamta2=$_SESSION['Grąžintas69'];
        $gamta3=$_SESSION['Grąžintas70'];
        $gamta4=$_SESSION['Grąžintas71'];
        $gamta5=$_SESSION['Grąžintas72'];
        $gamta6=$_SESSION['Grąžintas90'];
        $gamta7=$_SESSION['Grąžintas91'];
        $gamta8=$_SESSION['Grąžintas92'];
        $gamta9=$_SESSION['Grąžintas93'];
        $gamta10=$_SESSION['Grąžintas94'];
        $kultūra1=$_SESSION['Grąžintas73'];
        $kultūra2=$_SESSION['Grąžintas74'];
        $kultūra3=$_SESSION['Grąžintas75'];
        $kultūra4=$_SESSION['Grąžintas76'];
        $kultūra5=$_SESSION['Grąžintas77'];
        $kultūra6=$_SESSION['Grąžintas95'];
        $kultūra7=$_SESSION['Grąžintas96'];
        $kultūra8=$_SESSION['Grąžintas97'];
        $kultūra9=$_SESSION['Grąžintas98'];
        $kultūra10=$_SESSION['Grąžintas99'];
        $faktas1=$_SESSION['Grąžintas78'];
        $faktas2=$_SESSION['Grąžintas79'];
        $faktas3=$_SESSION['Grąžintas80'];
        $faktas4=$_SESSION['Grąžintas81'];
        $skaičius=$_SESSION['Grąžintas82'];
        $nuoroda=$_SESSION['Grąžintas83'];
        $nuorodos_pav=$_SESSION['Grąžintas84'];
        $platuma=$_SESSION['Grąžintas85'];
        $ilguma=$_SESSION['Grąžintas86'];
        $pavadinimas_GAL=$_SESSION['Grąžintas87'];

        session_start();
        $ISO_3166_1=$_SESSION['Rezultatas1'];
        $pavadinimas_LT_1=$_SESSION['Rezultatas2'];
        $sostinės_pavadinimas_1=$_SESSION['Rezultatas3'];
        $trumpinys_1=$_SESSION['Rezultatas4'];
        $pavadinimas_EN_1=$_SESSION['Rezultatas5'];
        $kur_yra_1=$_SESSION['Rezultatas6'];
        $plotas_1=$_SESSION['Rezultatas7'];
        $a_vieta_1=$_SESSION['Rezultatas8'];
        $ž_vieta_1=$_SESSION['Rezultatas9'];
        $upė_1=$_SESSION['Rezultatas10'];
        $d_ežeras_1=$_SESSION['Rezultatas11'];
        $d_sala_1=$_SESSION['Rezultatas12'];
        $fjordas_1=$_SESSION['Rezultatas13'];
        $g_ežeras_1=$_SESSION['Rezultatas14'];
        $e_teritorijos_1=$_SESSION['Rezultatas15'];
        $n_valdos_1=$_SESSION['Rezultatas16'];
        $miestas1_1=$_SESSION['Rezultatas17'];
        $miestas2_1=$_SESSION['Rezultatas18'];
        $miestas3_1=$_SESSION['Rezultatas19'];
        $miestas4_1=$_SESSION['Rezultatas20'];
        $miestas5_1=$_SESSION['Rezultatas21'];
        $miestas6_1=$_SESSION['Rezultatas22'];
        $miestas7_1=$_SESSION['Rezultatas23'];
        $miestas8_1=$_SESSION['Rezultatas24'];
        $miestas9_1=$_SESSION['Rezultatas25'];  
        $miestas10_1=$_SESSION['Rezultatas26'];
        $miestas11_1=$_SESSION['Rezultatas27'];
        $miestas12_1=$_SESSION['Rezultatas28'];
        $miestas13_1=$_SESSION['Rezultatas29'];
        $miestas14_1=$_SESSION['Rezultatas30'];
        $miestas15_1=$_SESSION['Rezultatas31'];
        $miestas16_1=$_SESSION['Rezultatas32'];
        $miestas17_1=$_SESSION['Rezultatas33'];
        $miestas18_1=$_SESSION['Rezultatas34'];  
        $miestas19_1=$_SESSION['Rezultatas35'];
        $miestas20_1=$_SESSION['Rezultatas36'];
        $miestas21_1=$_SESSION['Rezultatas37'];
        $miestas22_1=$_SESSION['Rezultatas38'];
        $miestas23_1=$_SESSION['Rezultatas39'];
        $miestas24_1=$_SESSION['Rezultatas40'];
        $miestas25_1=$_SESSION['Rezultatas41'];
        $miestas26_1=$_SESSION['Rezultatas42'];
        $miestas27_1=$_SESSION['Rezultatas43'];  
        $miestas28_1=$_SESSION['Rezultatas44'];
        $miestas29_1=$_SESSION['Rezultatas45'];
        $miestas30_1=$_SESSION['Rezultatas46'];
        $miestas31_1=$_SESSION['Rezultatas47'];
        $miestas32_1=$_SESSION['Rezultatas48'];
        $miestas33_1=$_SESSION['Rezultatas49'];
        $miestas34_1=$_SESSION['Rezultatas50'];
        $miestas35_1=$_SESSION['Rezultatas51'];
        $svar_uostas_1=$_SESSION['Rezultatas52'];
        $svar_oro_1=$_SESSION['Rezultatas53'];
        $valdymas_1=$_SESSION['Rezultatas54'];
        $susiskirstymas_1=$_SESSION['Rezultatas55'];
        $gyventojai_1=$_SESSION['Rezultatas56'];
        $prieaugis_1=$_SESSION['Rezultatas57'];
        $grupės_1=$_SESSION['Rezultatas58'];
        $kalbos_1=$_SESSION['Rezultatas59'];
        $raštingumas_1=$_SESSION['Rezultatas60'];
        $religijos_1=$_SESSION['Rezultatas61'];
        $valiuta_1=$_SESSION['Rezultatas62'];
        $BVP_1=$_SESSION['Rezultatas63'];
        $prek_balansas_1=$_SESSION['Rezultatas64'];
        $ŽSRI_1=$_SESSION['Rezultatas65'];
        $laimės_indeksas_1=$_SESSION['Rezultatas66'];
        $big_mac_1=$_SESSION['Rezultatas67'];
        $gamta1_1=$_SESSION['Rezultatas68'];
        $gamta2_1=$_SESSION['Rezultatas69'];
        $gamta3_1=$_SESSION['Rezultatas70'];
        $gamta4_1=$_SESSION['Rezultatas71'];
        $gamta5_1=$_SESSION['Rezultatas72'];
        $gamta6_1=$_SESSION['Rezultatas100'];
        $gamta7_1=$_SESSION['Rezultatas101'];
        $gamta8_1=$_SESSION['Rezultatas102'];
        $gamta9_1=$_SESSION['Rezultatas103'];
        $gamta10_1=$_SESSION['Rezultatas104'];
        $kultūra1_1=$_SESSION['Rezultatas73'];
        $kultūra2_1=$_SESSION['Rezultatas74'];
        $kultūra3_1=$_SESSION['Rezultatas75'];
        $kultūra4_1=$_SESSION['Rezultatas76'];
        $kultūra5_1=$_SESSION['Rezultatas77'];
        $kultūra6_1=$_SESSION['Rezultatas105'];
        $kultūra7_1=$_SESSION['Rezultatas106'];
        $kultūra8_1=$_SESSION['Rezultatas107'];
        $kultūra9_1=$_SESSION['Rezultatas108'];
        $kultūra10_1=$_SESSION['Rezultatas109'];
        $faktas1_1=$_SESSION['Rezultatas78'];
        $faktas2_1=$_SESSION['Rezultatas79'];
        $faktas3_1=$_SESSION['Rezultatas80'];
        $faktas4_1=$_SESSION['Rezultatas81'];
        $skaičius_1=$_SESSION['Rezultatas82'];
        $nuoroda_1=$_SESSION['Rezultatas83'];
        $nuorodos_pav_1=$_SESSION['Rezultatas84'];
        $platuma_1=$_SESSION['Rezultatas85'];
        $ilguma_1=$_SESSION['Rezultatas86'];

        $adresas1=$_SESSION['Rezultatas87'];
        $adresas2=$_SESSION['Rezultatas88'];
        $adresas3=$_SESSION['Rezultatas89'];
        $adresas4=$_SESSION['Rezultatas90'];
        $adresas5=$_SESSION['Rezultatas91'];
        $galininkas=$_SESSION['Rezultatas92'];


        session_start();
        $salys_skaicius=$_SESSION['peržiūrėti6'];
        $salys1=$_SESSION['peržiūrėti1'];
        $salys2=$_SESSION['peržiūrėti2'];
        $salys3=$_SESSION['peržiūrėti3'];
        $salys4=$_SESSION['peržiūrėti4'];
        $salys5=$_SESSION['peržiūrėti5'];


        session_start();
        $airport=$_SESSION['G1'];
        $area=$_SESSION['G2'];
        $balance=$_SESSION['G3'];
        $BIGMAC=$_SESSION['G4'];
        $cities=$_SESSION['G6'];
        $culture=$_SESSION['G8'];
        $currency=$_SESSION['G9'];
        $deepest=$_SESSION['G10'];
        $distant=$_SESSION['G11'];
        $district=$_SESSION['G12'];
        $DoYouKnow=$_SESSION['G14'];
        $gdp=$_SESSION['G15'];
        $government=$_SESSION['G16'];
        $groups=$_SESSION['G17'];
        $growth=$_SESSION['G18'];
        $happiness=$_SESSION['G19'];
        $harbor=$_SESSION['G20'];
        $hdi=$_SESSION['G21'];
        $high=$_SESSION['G22'];
        $island=$_SESSION['G23'];
        $lake=$_SESSION['G24'];
        $languages=$_SESSION['G25'];
        $literacy=$_SESSION['G26'];
        $longest=$_SESSION['G27'];
        $low=$_SESSION['G28'];
        $nature=$_SESSION['G30'];
        $people=$_SESSION['G31'];
        $place=$_SESSION['G32'];
        $religion=$_SESSION['G33'];
        $river=$_SESSION['G34'];
        $terrirories=$_SESSION['G35'];
        $city=$_SESSION['G36'];
        $count=$_SESSION['G37'];
        $link=$_SESSION['G38'];
        $linkName=$_SESSION['G39'];
        $latitude=$_SESSION['G40'];
        $longitude=$_SESSION['G41'];
        $file1=$_SESSION['G42'];
        $file2=$_SESSION['G43'];
        $file3=$_SESSION['G44'];
        $countryLT=$_SESSION['G45'];
        $countryEN=$_SESSION['G46'];
        $countryGAL=$_SESSION['G47'];
        $abbreviation=$_SESSION['G48'];
        $flag=$_SESSION['G49'];
        $background=$_SESSION['G50'];
        $code=$_SESSION['G51'];

        session_start();
        $skaicius1=$_SESSION['FL1'];
        $masyvas1=$_SESSION['FL2'];

        $skaicius2=$_SESSION['FL3'];
        $masyvas2=$_SESSION['FL5'];
        $masyvas3=$_SESSION['FL6'];
        $masyvas4=$_SESSION['FL7'];
        $masyvas5=$_SESSION['FL4'];

        session_start();
        $I1=$_SESSION['FF1'];
        $K1=$_SESSION['FF2'];
        $N1=$_SESSION['FF3'];
        $NP1=$_SESSION['FF4'];
        $S1=$_SESSION['FF5'];
        $M1=$_SESSION['FF6'];

        //Gaunami duomenys iš Filter1.php
        session_start();
        $S2=$_SESSION['Valstybiu_kodu_skaicius_1'];
        $M2=$_SESSION['Valstybiu_kodai_1'];

        session_start();
        $S3=$_SESSION['FF03'];
        $M3=$_SESSION['FF04'];

        session_start();
        $I2=$_SESSION['SS1'];
        $K2=$_SESSION['SS2'];
        $N2=$_SESSION['SS3'];
        $NP2=$_SESSION['SS4'];

        $S4=$_SESSION['SS7'];

        $S5=$_SESSION['SS5'];
        $M5=$_SESSION['SS6'];

        session_start();
        $I3=$_SESSION['AA1'];
        $K3=$_SESSION['AA2'];
        $N3=$_SESSION['AA3'];
        $NP3=$_SESSION['AA4'];
        $S6=$_SESSION['AA5'];
        $M6=$_SESSION['AA6'];

        session_start();
        $I4=$_SESSION['GSS1'];
        $K4=$_SESSION['GSS2'];
        $N4=$_SESSION['GSS3'];
        $NP4=$_SESSION['GSS4'];
        $S7=$_SESSION['GSS5'];

        session_start();
        $I5=$_SESSION['GAA1'];
        $K5=$_SESSION['GAA2'];
        $N5=$_SESSION['GAA3'];
        $NP5=$_SESSION['GAA4'];

        session_start();
        $S8=$_SESSION['SU1'];
        $I6=$_SESSION['SU2'];
        $N6=$_SESSION['SU3'];
        $E6=$_SESSION['SU4'];
        $P6=$_SESSION['SU5'];
        $K6=$_SESSION['SU6'];
        $L6=$_SESSION['SU7'];
        $Status=$_SESSION['SU8'];

        session_start();
        $I7=$_SESSION['SSU1'];
        $N7=$_SESSION['SSU2'];
        $E7=$_SESSION['SSU3'];
        $P7=$_SESSION['SSU4'];
        $K7=$_SESSION['SSU5'];
        $L7=$_SESSION['SSU6'];
        $Status1=$_SESSION['SSU7'];

        session_start();
        $S9=$_SESSION['UF01'];
        $M9=$_SESSION['UF02'];

        session_start();
        $failu_sk=$_SESSION['FUS1'];

        session_start();
        $S10=$_SESSION['FM1'];
        $M10=$_SESSION['FM2'];
        $S11=$_SESSION['FM3'];
        $I8=$_SESSION['FM4'];
        $K8=$_SESSION['FM5'];
        $FN8=$_SESSION['FM6'];
        $F8=$_SESSION['FM7'];

        session_start();
        $S12=$_SESSION['MAF1'];
        $M12=$_SESSION['MAF2'];
        $I9=$_SESSION['MAF3'];
        $K9=$_SESSION['MAF4'];
        $T9=$_SESSION['MAF5'];
        $CN9=$_SESSION['MAF6'];

        session_start();
        $S13=$_SESSION['FR1'];
        $M13=$_SESSION['FR2'];
        $S14=$_SESSION['FR3'];
        $I10=$_SESSION['FR4'];
        $K10=$_SESSION['FR5'];
        $FN10=$_SESSION['FR6'];
        $F10=$_SESSION['FR7'];

        session_start();
        $S15=$_SESSION['FAF1'];
        $M15=$_SESSION['FAF2'];
        $I11=$_SESSION['FAF3'];
        $K11=$_SESSION['FAF4'];
        $T11=$_SESSION['FAF5'];
        $CN11=$_SESSION['FAF6'];

        session_start();
        $SK1=$_SESSION['KVI1'];
        $ID1=$_SESSION['KVI2'];
        $PAV1=$_SESSION['KVI3'];
        $VAL1=$_SESSION['KVI4'];
        $REI1=$_SESSION['KVI5'];
        $DAT1=$_SESSION['KVI6'];
        $STA1=$_SESSION['KVI7'];
        $VID1=$_SESSION['KVI8'];


    ?>
    $(document).ready(function(){
      console.log(<?php echo $tikrinti; ?>);

    $( ".hero-section" ).css( "display", "flex" );
    $("#atsijungimas").hover(function(){
    $("#atsijungti").attr("src", "images/logout(1).png");
    }, function(){
    $("#atsijungti").attr("src", "images/logout.png");
    });

    $("#keitimas1").hover(function(){
    $("#keitimas2").attr("src", "images/arrow.png");
    }, function(){
    $("#keitimas2").attr("src", "images/arrow(1).png");
    });

    $("#keitimas3").hover(function(){
    $("#keitimas4").attr("src", "images/arrow.png");
    }, function(){
    $("#keitimas4").attr("src", "images/arrow(1).png");
    });

    $("#keitimas5").hover(function(){
    $("#keitimas6").attr("src", "images/arrow.png");
    }, function(){
    $("#keitimas6").attr("src", "images/arrow(1).png");
    });

    $("#keitimas7").hover(function(){
    $("#keitimas8").attr("src", "images/arrow.png");
    }, function(){
    $("#keitimas8").attr("src", "images/arrow(1).png");
    });

    $("#keitimas9").hover(function(){
    $("#keitimas10").attr("src", "images/arrow.png");
    }, function(){
    $("#keitimas10").attr("src", "images/arrow(1).png");
    });

    $("#keitimas11").hover(function(){
    $("#keitimas12").attr("src", "images/tick.png");
    }, function(){
    $("#keitimas12").attr("src", "images/tick(1).png");
    });

    $("#keitimas13").hover(function(){
    $("#keitimas14").attr("src", "images/tick.png");
    }, function(){
    $("#keitimas14").attr("src", "images/tick(1).png");
    });

    $("#keitimas15").hover(function(){
    $("#keitimas16").attr("src", "images/tick.png");
    }, function(){
    $("#keitimas16").attr("src", "images/tick(1).png");
    });

    $("#keitimas17").hover(function(){
    $("#keitimas18").attr("src", "images/tick.png");
    }, function(){
    $("#keitimas18").attr("src", "images/tick(1).png");
    });

    $("#keitimas19").hover(function(){
    $("#keitimas20").attr("src", "images/tick.png");
    }, function(){
    $("#keitimas20").attr("src", "images/tick(1).png");
    });

    $("#keitimas21").hover(function(){
    $("#keitimas22").attr("src", "images/server.png");
    }, function(){
    $("#keitimas22").attr("src", "images/server(1).png");
    });

    $("#keitimas23").hover(function(){
    $("#keitimas24").attr("src", "images/server.png");
    }, function(){
    $("#keitimas24").attr("src", "images/server(1).png");
    });

    $("#keitimas25").hover(function(){
    $("#keitimas26").attr("src", "images/server.png");
    }, function(){
    $("#keitimas26").attr("src", "images/server(1).png");
    });

    $("#keitimas001").hover(function(){
    $("#keitimas002").attr("src", "images/filter.png");
    }, function(){
    $("#keitimas002").attr("src", "images/filter(1).png");
    });

    $("#keitimas003").hover(function(){
    $("#keitimas004").attr("src", "images/filter.png");
    }, function(){
    $("#keitimas004").attr("src", "images/filter(1).png");
    });

    $("#keitimas005").hover(function(){
    $("#keitimas006").attr("src", "images/global.png");
    }, function(){
    $("#keitimas006").attr("src", "images/global(1).png");
    });

    $("#keitimas007").hover(function(){
    $("#keitimas008").attr("src", "images/local.png");
    }, function(){
    $("#keitimas008").attr("src", "images/local(1).png");
    });

    $("#keitimas009").hover(function(){
    $("#keitimas010").attr("src", "images/filter.png");
    }, function(){
    $("#keitimas010").attr("src", "images/filter(1).png");
    });

    $("#keitimas011").hover(function(){
    $("#keitimas012").attr("src", "images/highway.png");
    }, function(){
    $("#keitimas012").attr("src", "images/highway(1).png");
    });

    $("#keitimas013").hover(function(){
    $("#keitimas014").attr("src", "images/globe.png");
    }, function(){
    $("#keitimas014").attr("src", "images/globe(1).png");
    });

    $("#keitimas015").hover(function(){
    $("#keitimas016").attr("src", "images/filter.png");
    }, function(){
    $("#keitimas016").attr("src", "images/filter(1).png");
    });
    var str = window.location.href;

    var where = "<?php echo $kur_yra_1 ?>";
    var area = "<?php echo $plotas_1 ?>";
    var high = "<?php echo $a_vieta_1 ?>";
    var low = "<?php echo $ž_vieta_1 ?>";
    var river = "<?php echo $upė_1 ?>";
    var lake = "<?php echo $d_ežeras_1 ?>";
    var island = "<?php echo $d_sala_1 ?>";
    var longest = "<?php echo $fjordas_1 ?>";
    var deepest = "<?php echo $g_ežeras_1 ?>";
    var terittories = "<?php echo $e_teritorijos_1 ?>";
    var remote = "<?php echo $n_valdos_1; ?>";
    var remote1 = "<?php echo $n_valdos; ?>";
    var remote2 = "<?php echo $distant; ?>";

    function br2nl(str) {
    return str.replace(/<br\s*\/?>/mg,"\n");
    }
    remote1=br2nl(remote1);
    remote2=br2nl(remote2);
    $("#Textarea1").html(remote1);
    $("#KeitimasTextarea1").html(remote2);

    var administracinis_sus=br2nl("<?php echo $susiskirstymas; ?>");
    var valiuta=br2nl("<?php echo $valiuta; ?>");
  
  
    $("#Textarea2").html(administracinis_sus);
    $("#Textarea3").html(valiuta);

    /*var administracinis_sus1=br2nl("</?php echo ; ?>");
    var valiuta1=br2nl("</?php echo ; ?>");
    
    $("#KeitimasTextarea2").html(administracinis_sus1);
    $("#KeitimasTextarea3").html(valiuta1);*/

    if(str.includes("?statistics")){
    $( ".hero-section" ).css( "display", "none" );
    }
    if(str.includes("?blog")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".BlogForm" ).css( "display", "table" );
    }
    if(str.includes("?users")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".vartotojai" ).css( "display", "table" );
    }
    if(str.includes("?new")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".nauja" ).css( "display", "block" );
    }
    if(str.includes("?view")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".salys" ).css( "display", "table" );
    }
    if(str.includes("?upload")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".ikeltiF" ).css( "display", "block" );
    }
    if(str.includes("?links")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".ikeltiN" ).css( "display", "block" );
    }
    if(str.includes("?survey")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".ikeltiA" ).css( "display", "block" );
    }
    if(str.includes("?change")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".keisti" ).css( "display", "block" );
    }
    if(str.includes("?modify_country")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".keitimas" ).css( "display", "block" );
    }
    if(str.includes("?tableLinks")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".tableLinks" ).css( "display", "block" );
    }
    if(str.includes("?tableQuiz")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".tableSurvey" ).css( "display", "block" );
    }
    if(str.includes("?innovated=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".LinksForm" ).css( "display", "block" );
    }
    if(str.includes("?interview=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".SurveyForm" ).css( "display", "block" );
    }
    if(str.includes("?global=table")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".GlobalTableSurvey" ).css( "display", "block" );
    }
    if(str.includes("?all=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".GlobalSurveyForm" ).css( "display", "block" );
    }
    if(str.includes("?action=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".UserForm" ).css( "display", "block" );
    }
    if(str.includes("?action=stories")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".vartotojai" ).css( "display", "none" );
    $( ".storiesTable" ).css( "display", "table" );
    }
    if(str.includes("?MapTable")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".mapsTable" ).css( "display", "block" );
    }
    if(str.includes("?RoutesTable")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".routesTable" ).css( "display", "block" );
    }
    if(str.includes("?operation=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".MapsForm" ).css( "display", "block" );
    }
    if(str.includes("?effect=form")){
    $( ".hero-section" ).css( "display", "none" );
    $( ".RoutesForm" ).css( "display", "block" );
    }
    

    if(str.includes("?result")){
      $( ".hero-section" ).css( "display", "none" );
      if(where!="")
      {
        $("#country_place").html(where);
        $( "#country_place" ).css( "display", "block" );
      }
      if(area!="")
      {
        $("#country_area").html(area);
        $( "#country_area" ).css( "display", "block" );
      }
      if(high!="")
      {
        $("#country_highest").html(high);
        $( "#country_highest" ).css( "display", "block" );
      }
      if(low!="")
      {
        $("#country_lowest").html(low);
        $( "#country_lowest" ).css( "display", "block" );
      }
      if(river!="")
      {
        $("#country_river").html(river);
        $( "#country_river" ).css( "display", "block" );
      }
      if(lake!="")
      {
        $("#country_lake").html(lake);
        $( "#country_lake" ).css( "display", "block" );
      }
      if(island!="")
      {
        $("#country_island").html(island);
        $( "#country_island" ).css( "display", "block" );
      }
      if(remote!="")
      {
        $("#country_remote").html(remote);
        $( "#country_remote" ).css( "display", "block" );
      }
      if(longest!="")
      {
        $("#country_longest").html(longest);
        $( "#country_longest" ).css( "display", "block" );
      }
      if(deepest!="")
      {
        $("#country_deepest").html(deepest);
        $( "#country_deepest" ).css( "display", "block" );
      }
      if(terittories!="")
      {
        $("#country_terittories").html(terittories);
        $( "#country_terittories" ).css( "display", "block" );
      }
      if("<?php echo $miestas1_1 ?>"!="")
      {
        $("#city_1").html("<?php echo $miestas1_1 ?>");
        $( "#city_1" ).css( "display", "block" );
      }
      if("<?php echo $miestas2_1 ?>"!="")
      {
        $("#city_2").html("<?php echo $miestas2_1 ?>");
        $( "#city_2" ).css( "display", "block" );
      }
      if("<?php echo $miestas3_1 ?>"!="")
      {
        $("#city_3").html("<?php echo $miestas3_1 ?>");
        $( "#city_3" ).css( "display", "block" );
      }
      if("<?php echo $miestas4_1 ?>"!="")
      {
        $("#city_4").html("<?php echo $miestas4_1 ?>");
        $( "#city_4" ).css( "display", "block" );
      }
      if("<?php echo $miestas5_1 ?>"!="")
      {
        $("#city_5").html("<?php echo $miestas5_1 ?>");
        $( "#city_5" ).css( "display", "block" );
      }
      if("<?php echo $miestas6_1 ?>"!="")
      {
        $("#city_6").html("<?php echo $miestas6_1 ?>");
        $( "#city_6" ).css( "display", "block" );
      }
      if("<?php echo $miestas7_1 ?>"!="")
      {
        $("#city_7").html("<?php echo $miestas7_1 ?>");
        $( "#city_7" ).css( "display", "block" );
      }
      if("<?php echo $miestas8_1 ?>"!="")
      {
        $("#city_8").html("<?php echo $miestas8_1 ?>");
        $( "#city_8" ).css( "display", "block" );
      }
      if("<?php echo $miestas9_1 ?>"!="")
      {
        $("#city_9").html("<?php echo $miestas9_1 ?>");
        $( "#city_9" ).css( "display", "block" );
      }
      if("<?php echo $miestas10_1 ?>"!="")
      {
        $("#city_10").html("<?php echo $miestas10_1 ?>");
        $( "#city_10" ).css( "display", "block" );
      }
      if("<?php echo $miestas11_1 ?>"!="")
      {
        $("#city_11").html("<?php echo $miestas11_1 ?>");
        $( "#city_11" ).css( "display", "block" );
      }
      if("<?php echo $miestas12_1 ?>"!="")
      {
        $("#city_12").html("<?php echo $miestas12_1 ?>");
        $( "#city_12" ).css( "display", "block" );
      }
      if("<?php echo $miestas13_1 ?>"!="")
      {
        $("#city_13").html("<?php echo $miestas13_1 ?>");
        $( "#city_13" ).css( "display", "block" );
      }
      if("<?php echo $miestas14_1 ?>"!="")
      {
        $("#city_14").html("<?php echo $miestas14_1 ?>");
        $( "#city_14" ).css( "display", "block" );
      }
      if("<?php echo $miestas15_1 ?>"!="")
      {
        $("#city_15").html("<?php echo $miestas15_1 ?>");
        $( "#city_15" ).css( "display", "block" );
      }
      if("<?php echo $miestas16_1 ?>"!="")
      {
        $("#city_16").html("<?php echo $miestas16_1 ?>");
        $( "#city_16" ).css( "display", "block" );
      }
      if("<?php echo $miestas17_1 ?>"!="")
      {
        $("#city_17").html("<?php echo $miestas17_1 ?>");
        $( "#city_17" ).css( "display", "block" );
      }
      if("<?php echo $miestas18_1 ?>"!="")
      {
        $("#city_18").html("<?php echo $miestas18_1 ?>");
        $( "#city_18" ).css( "display", "block" );
      }
      if("<?php echo $miestas19_1 ?>"!="")
      {
        $("#city_19").html("<?php echo $miestas19_1 ?>");
        $( "#city_19" ).css( "display", "block" );
      }
      if("<?php echo $miestas20_1 ?>"!="")
      {
        $("#city_20").html("<?php echo $miestas20_1 ?>");
        $( "#city_20" ).css( "display", "block" );
      }
      if("<?php echo $miestas21_1 ?>"!="")
      {
        $("#city_21").html("<?php echo $miestas21_1 ?>");
        $( "#city_21" ).css( "display", "block" );
      }
      if("<?php echo $miestas22_1 ?>"!="")
      {
        $("#city_22").html("<?php echo $miestas22_1 ?>");
        $( "#city_22" ).css( "display", "block" );
      }
      if("<?php echo $miestas23_1 ?>"!="")
      {
        $("#city_23").html("<?php echo $miestas23_1 ?>");
        $( "#city_23" ).css( "display", "block" );
      }
      if("<?php echo $miestas24_1 ?>"!="")
      {
        $("#city_24").html("<?php echo $miestas24_1 ?>");
        $( "#city_24" ).css( "display", "block" );
      }
      if("<?php echo $miestas25_1 ?>"!="")
      {
        $("#city_25").html("<?php echo $miestas25_1 ?>");
        $( "#city_25" ).css( "display", "block" );
      }
      if("<?php echo $miestas26_1 ?>"!="")
      {
        $("#city_26").html("<?php echo $miestas26_1 ?>");
        $( "#city_26" ).css( "display", "block" );
      }
      if("<?php echo $miestas27_1 ?>"!="")
      {
        $("#city_27").html("<?php echo $miestas27_1 ?>");
        $( "#city_27" ).css( "display", "block" );
      }
      if("<?php echo $miestas28_1 ?>"!="")
      {
        $("#city_28").html("<?php echo $miestas28_1 ?>");
        $( "#city_28" ).css( "display", "block" );
      }
      if("<?php echo $miestas29_1 ?>"!="")
      {
        $("#city_29").html("<?php echo $miestas29_1 ?>");
        $( "#city_29" ).css( "display", "block" );
      }
      if("<?php echo $miestas30_1 ?>"!="")
      {
        $("#city_30").html("<?php echo $miestas30_1 ?>");
        $( "#city_30" ).css( "display", "block" );
      }
      if("<?php echo $miestas31_1 ?>"!="")
      {
        $("#city_31").html("<?php echo $miestas31_1 ?>");
        $( "#city_31" ).css( "display", "block" );
      }
      if("<?php echo $miestas32_1 ?>"!="")
      {
        $("#city_32").html("<?php echo $miestas32_1 ?>");
        $( "#city_32" ).css( "display", "block" );
      }
      if("<?php echo $miestas33_1 ?>"!="")
      {
        $("#city_33").html("<?php echo $miestas33_1 ?>");
        $( "#city_33" ).css( "display", "block" );
      }
      if("<?php echo $miestas34_1 ?>"!="")
      {
        $("#city_34").html("<?php echo $miestas34_1 ?>");
        $( "#city_34" ).css( "display", "block" );
      }
      if("<?php echo $miestas35_1 ?>"!="")
      {
        $("#city_35").html("<?php echo $miestas35_1 ?>");
        $( "#city_35" ).css( "display", "block" );
      }
      if("<?php echo $svar_uostas_1 ?>"!="")
      {
        $("#country_harbor").html("<?php echo $svar_uostas_1 ?>");
        $( "#country_harbor" ).css( "display", "block" );
      }
      if("<?php echo $svar_oro_1 ?>"!="")
      {
        $("#country_airport").html("<?php echo $svar_oro_1 ?>");
        $( "#country_airport" ).css( "display", "block" );
      }

      if("<?php echo $valdymas_1 ?>"!="")
      {
        $("#country_goverment").html("<?php echo $valdymas_1 ?>");
        $( "#country_goverment" ).css( "display", "block" );
      }
      if("<?php echo $susiskirstymas_1 ?>"!="")
      {
        $("#country_division").html("<?php echo $susiskirstymas_1 ?>");
        $( "#country_division" ).css( "display", "block" );
      }
      if("<?php echo $gyventojai_1 ?>"!="")
      {
        $("#country_people").html("<?php echo $gyventojai_1 ?>");
        $( "#country_people" ).css( "display", "block" );
      }
      var growth="<?php echo $prieaugis_1 ?>";
      if(growth!="")
      {
        
        $("#country_growth").css('color', 'green');
        $("#country_growth").html("<span style=color:#212529;>Natūralus gyventojų prieaugis :</span> " + growth);
        
        if(growth.includes("-"))
        {
          $("#country_growth").css('color', 'red');
        }
        $( "#country_growth" ).css( "display", "block" );
      }
      if("<?php echo $grupės_1 ?>"!="")
      {
        $("#country_ethnic").html("<?php echo $grupės_1 ?>");
        $( "#country_ethnic" ).css( "display", "block" );
      }
      if("<?php echo $kalbos_1 ?>"!="")
      {
        $("#country_language").html("<?php echo $kalbos_1 ?>");
        $( "#country_language" ).css( "display", "block" );
      }
      if("<?php echo $raštingumas_1 ?>"!="")
      {
        $("#country_literacy").html("<?php echo $raštingumas_1 ?>");
        $( "#country_literacy" ).css( "display", "block" );
      }
      if("<?php echo $religijos_1 ?>"!="")
      {
        $("#country_religions").html("<?php echo $religijos_1 ?>");
        $( "#country_religions" ).css( "display", "block" );
      }
      if("<?php echo $valiuta_1 ?>"!="")
      {
        $("#country_currency").html("<?php echo $valiuta_1 ?>");
        $( "#country_currency" ).css( "display", "block" );
      }
      if("<?php echo $BVP_1 ?>"!="")
      {
        $("#country_BVP").html("<?php echo $BVP_1 ?>");
        $( "#country_BVP" ).css( "display", "block" );
      }
      var balance ="<?php echo $prek_balansas_1 ?>";
      if(balance!="")
      {
        
        $("#country_balance").css('color', 'green');
        $("#country_balance").html("<span style=color:#212529;>Užsienio prekybos balansas :</span> " + balance);
        
        if(balance.includes("-"))
        {
          $("#country_balance").css('color', 'red');
        }
        $( "#country_balance" ).css( "display", "block" );
      }
      if("<?php echo $ŽSRI_1 ?>"!="")
      {
        $("#country_ŽSRI").html("<?php echo $ŽSRI_1 ?>");
        $( "#country_ŽSRI" ).css( "display", "block" );
      }
      if("<?php echo $laimės_indeksas_1 ?>"!="")
      {
        $("#country_happiness").html("<?php echo $laimės_indeksas_1 ?>");
        $( "#country_happiness" ).css( "display", "block" );
      }
      if("<?php echo $big_mac_1 ?>"!="")
      {
        $("#country_big_mac").html("<?php echo $big_mac_1 ?>");
        $( "#country_big_mac" ).css( "display", "block" );
      }
      if("<?php echo $gamta1_1 ?>"!="")
      {
        $("#country_nature_1").html("<?php echo $gamta1_1 ?>");
        $( "#country_nature_1" ).css( "display", "block" );
      }
      if("<?php echo $gamta2_1 ?>"!="")
      {
        $("#country_nature_2").html("<?php echo $gamta2_1 ?>");
        $( "#country_nature_2" ).css( "display", "block" );
      }
      if("<?php echo $gamta3_1 ?>"!="")
      {
        $("#country_nature_3").html("<?php echo $gamta3_1 ?>");
        $( "#country_nature_3" ).css( "display", "block" );
      }
      if("<?php echo $gamta4_1 ?>"!="")
      {
        $("#country_nature_4").html("<?php echo $gamta4_1 ?>");
        $( "#country_nature_4" ).css( "display", "block" );
      }
      if("<?php echo $gamta5_1 ?>"!="")
      {
        $("#country_nature_5").html("<?php echo $gamta5_1 ?>");
        $( "#country_nature_5" ).css( "display", "block" );
      }
      if("<?php echo $gamta6_1 ?>"!="")
      {
        $("#country_nature_6").html("<?php echo $gamta6_1 ?>");
        $( "#country_nature_6" ).css( "display", "block" );
      }
      if("<?php echo $gamta7_1 ?>"!="")
      {
        $("#country_nature_7").html("<?php echo $gamta7_1 ?>");
        $( "#country_nature_7" ).css( "display", "block" );
      }
      if("<?php echo $gamta8_1 ?>"!="")
      {
        $("#country_nature_8").html("<?php echo $gamta8_1 ?>");
        $( "#country_nature_8" ).css( "display", "block" );
      }
      if("<?php echo $gamta9_1 ?>"!="")
      {
        $("#country_nature_9").html("<?php echo $gamta9_1 ?>");
        $( "#country_nature_9" ).css( "display", "block" );
      }
      if("<?php echo $gamta10_1 ?>"!="")
      {
        $("#country_nature_10").html("<?php echo $gamta10_1 ?>");
        $( "#country_nature_10" ).css( "display", "block" );
      }

      if("<?php echo $kultūra1_1 ?>"!="")
      {
        $("#country_culture_1").html("<?php echo $kultūra1_1 ?>");
        $( "#country_culture_1" ).css( "display", "block" );
      }
      if("<?php echo $kultūra2_1 ?>"!="")
      {
        $("#country_culture_2").html("<?php echo $kultūra2_1 ?>");
        $( "#country_culture_2" ).css( "display", "block" );
      }
      if("<?php echo $kultūra3_1 ?>"!="")
      {
        $("#country_culture_3").html("<?php echo $kultūra3_1 ?>");
        $( "#country_culture_3" ).css( "display", "block" );
      }
      if("<?php echo $kultūra4_1 ?>"!="")
      {
        $("#country_culture_4").html("<?php echo $kultūra4_1 ?>");
        $( "#country_culture_4" ).css( "display", "block" );
      }
      if("<?php echo $kultūra5_1 ?>"!="")
      {
        $("#country_culture_5").html("<?php echo $kultūra5_1 ?>");
        $( "#country_culture_5" ).css( "display", "block" );
      }
      if("<?php echo $kultūra6_1 ?>"!="")
      {
        $("#country_culture_6").html("<?php echo $kultūra6_1 ?>");
        $( "#country_culture_6" ).css( "display", "block" );
      }
      if("<?php echo $kultūra7_1 ?>"!="")
      {
        $("#country_culture_7").html("<?php echo $kultūra7_1 ?>");
        $( "#country_culture_7" ).css( "display", "block" );
      }
      if("<?php echo $kultūra8_1 ?>"!="")
      {
        $("#country_culture_8").html("<?php echo $kultūra8_1 ?>");
        $( "#country_culture_8" ).css( "display", "block" );
      }
      if("<?php echo $kultūra9_1 ?>"!="")
      {
        $("#country_culture_9").html("<?php echo $kultūra9_1 ?>");
        $( "#country_culture_9" ).css( "display", "block" );
      }
      if("<?php echo $kultūra10_1 ?>"!="")
      {
        $("#country_culture_10").html("<?php echo $kultūra10_1 ?>");
        $( "#country_culture_10" ).css( "display", "block" );
      }
      if("<?php echo $faktas1_1 ?>"!="")
      {
        $("#DoYouKnow1").html("<?php echo $faktas1_1 ?>");
        $( "#DoYouKnow1" ).css( "display", "block" );
      }
      if("<?php echo $faktas2_1 ?>"!="")
      {
        $("#DoYouKnow2").html("<?php echo $faktas2_1 ?>");
        $( "#DoYouKnow2" ).css( "display", "block" );
      }
      if("<?php echo $faktas3_1 ?>"!="")
      {
        $("#DoYouKnow3").html("<?php echo $faktas3_1 ?>");
        $( "#DoYouKnow3" ).css( "display", "block" );
      }
      if("<?php echo $faktas4_1 ?>"!="")
      {
        $("#DoYouKnow4").html("<?php echo $faktas4_1 ?>");
        $( "#DoYouKnow4" ).css( "display", "block" );
      }

    $("#country_name").html("Trumpai apie <?php echo $galininkas; ?> ...");
    $("#capital_photo_1").attr("src", "<?php echo $adresas1; ?>");
    $("#capital_photo_2").attr("src", "<?php echo $adresas2; ?>");
    $("#capital_photo_3").attr("src", "<?php echo $adresas3; ?>");
    $("#flag_image").attr("src", "<?php echo $adresas4; ?>");
    document.body.style.backgroundImage = 'url("<?php echo $adresas5;?>")';

    $( ".rezultatas" ).css( "display", "block" );
    $( ".card" ).css( "display", "none" );
    $( ".sidenav" ).css( "display", "none" );
    }


    if(str.includes("?created=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Šalis sėkmingai sukurta!</b> Toliau galite pridėti nuorodas, žemėlapius, maršrutus ir apklausas </h4>',
			})
    }
    if(str.includes("?new/error_file=1")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Klaida 1 faile!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?new/error_file=2")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Klaida 2 faile!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?new/error_file=3")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Klaida 3 faile!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?new/error_file=4")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Klaida 4 faile!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?new/error_file=5")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Klaida 5 faile!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?reference=uploaded")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Visos nuorodos įkeltos!</b></h4>',
			})
    }
    if(str.includes("?reference=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Nuorodų įkelti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?innovated=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Nuorodos ištrinta!</b></h4>',
			})
    }
    if(str.includes("?innovated=go")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Nuorodos duomenys atnaujinti!</b></h4>',
			})
    }
    if(str.includes("?innovated=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Nuorodos pasiekti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?quiz=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Apklausų įkelti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?quiz=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Apklausos įkeltos!</b></h4>',
			})
    }
    if(str.includes("?interview=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Apklausa ištrinta!</b></h4>',
			})
    }
    if(str.includes("?interview=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Apklausos pasiekti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?interview=go")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Apklausos duomenys atnaujinti!</b></h4>',
			})
    }

    if(str.includes("?all=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Apklausa ištrinta!</b></h4>',
			})
    }
    if(str.includes("?all=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Apklausos pasiekti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }
    if(str.includes("?all=go")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Apklausos duomenys atnaujinti!</b></h4>',
			})
    }

    if(str.includes("?action=successs")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Vartotojo užblokuotas!</b></h4>',
			})
    }

    if(str.includes("?action=fail")){
      Swal.fire({
  		icon: 'error',
      html:
      '<h4><b> Vartotojo duomenų pasiekti nepavyko!</b> Bandykite dar kartą </h4>',
			})
    }

    if(str.includes("?action=go")){
      Swal.fire({
  		icon: 'success',
      html:
      '<h4><b> Vartotojo duomenys atnaujinti!</b></h4>',
			})
    }
    if(str.includes("?photo=changed")){
      Swal.fire({
  		icon: 'success',
      html:
      '<h4><b> Nuotrauka pakeista!</b></h4>',
			})
    }
    if(str.includes("?photo=fail")){
      Swal.fire({
  		icon: 'error',
      html:
      '<h4><b> Nuotraukos pakeisti nepavyko!</b></h4>',
			})
    }
    if(str.includes("?case=fail")){
      Swal.fire({
  		icon: 'error',
      html:
      '<h4><b> Failų įkelti nepavyko!</b></h4>',
			})
    }
    if(str.includes("?case=success")){
      Swal.fire({
  		icon: 'success',
      html:
      '<h4><b><?php echo $failu_sk; ?> failas/-i įkelti!</b></h4>',
			})
    }
    if(str.includes("?operation=fail")){
      Swal.fire({
  		icon: 'error',
      html:
      '<h4><b> Failo pasiekti nepavyko!</b></h4>',
			})
    }
    if(str.includes("?operation=success")){
      Swal.fire({
  		icon: 'success',
      html:
      '<h4><b>Failas ištrintas!</b></h4>',
			})
    }
    if(str.includes("?operation=go")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Failo duomenys atnaujinti!</b></h4>',
			})
    }
    if(str.includes("?effect=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Failo ištrintas!</b></h4>',
			})
    }
    if(str.includes("?effect=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Failo pasiekti nepavyko!</b></h4>',
			})
    }
    if(str.includes("?effect=go")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Failo duomenys atnaujinti!</b></h4>',
			})
    }

    if(str.includes("?work=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Valstybės duomenys atnaujinti!</b></h4>',
			})
    }

    if(str.includes("?data=success")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Įrašo duomenys atnaujinti!</b></h4>',
			})
    }

    if(str.includes("?data=fail")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Įrašo duomenų atnaujinti nepavyko!</b></h4>',
			})
    }

    if(str.includes("?blog=created")){
      Swal.fire({
  		icon: 'success',
      html:
 			'<h4><b> Įrašas paskelbtas!</b></h4>',
			})
    }

    if(str.includes("?blog=failed")){
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Įrašas paskelbti nepavyko!</b></h4>',
			})
    }
    

    // Add <sup> element
    $("#AddToPlotas").click(function(){
      var text = $('#area');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToEžeras").click(function(){
      var text = $('#lake');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToSala").click(function(){
      var text = $('#island');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToGyventojai").click(function(){
      var text = $('#people');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToPrieaugis").click(function(){
      var text = $('#increment');
      text.val(text.val() + '‰');    
    }); 


    $("#AddToPlotas1").click(function(){
      var text = $('#area1');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToEžeras1").click(function(){
      var text = $('#lake1');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToSala1").click(function(){
      var text = $('#island1');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToGyventojai1").click(function(){
      var text = $('#people1');
      text.val(text.val() + '<sup>2</sup>');    
    }); 
    $("#AddToPrieaugis1").click(function(){
      var text = $('#increment1');
      text.val(text.val() + '‰');    
    }); 

    // Show file input
    $("#keitimas2").click(function(){
      $( ".input1" ).css( "display", "block" );
    }); 

    $("#keitimas4").click(function(){
      $( ".input2" ).css( "display", "block" );
    }); 

    $("#keitimas6").click(function(){
      $( ".input3" ).css( "display", "block" );
    }); 

    $("#keitimas8").click(function(){
      $( ".input4" ).css( "display", "block" );
    }); 

    $("#keitimas10").click(function(){
      $( ".input5" ).css( "display", "block" );
    }); 

    /*list.sort(function(a, b) {
      return a.name > b.name;
    });*/

    document.getElementById('customCheck1').onchange = function() {
    document.getElementById('selectas').disabled = this.checked;
    };

    /*document.getElementById('customCheck1').onchange = function() {
    document.getElementById('selectas').enabled = !this.checked;
    };*/

    $("#resetas").click(function(){
      $("#selectas").prop('disabled', false);
    });

    $("#siunciu").click(function(){
      var good = "";
      var good1 = "";
      var good2 = "";
      var lines = $('#Textarea1').val().split('\n');
      for (var i = 0; i < lines.length; i++) {
        good += lines[i];
        if(i!=lines.length-1) {good += "<br>";}
      }
    $("#inputas").val(good);
    var lines1 = $('#Textarea2').val().split('\n');
      for (var y = 0; y < lines1.length; y++) {
        good1 += lines1[y];
        if(y!=lines1.length-1) {good1 += "<br>";}
      }
    $("#inputas2").val(good1);
    var lines2 = $('#Textarea3').val().split('\n');
      for (var u = 0; u < lines2.length; u++) {
        good2 += lines2[u];
        if(u!=lines2.length-1) {good2 += "<br>";}
      }
    $("#inputas3").val(good2);

    var myForm = $('.nauja');

    if(myForm[0].checkValidity() == true) {
      myForm.submit();
    }
    else{
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Formos sistema patvirtinti negali! PRAŠOME UŽPILDYTI VISUS BŪTINUS LANGELIUS</b></h4> ' +
      '<br>' +
      '<p><small>Būtini : ISO 3166, š. pavadinimas (LT ir EN), š. sostinė, š. galininkas, kur yra ir plotas</small></p>',
			})
    }
    });

    $("#siunciu1").click(function(){
      var good = "";
      var lines = $('#KeitimasTextarea1').val().split('\n');
      for (var i = 0; i < lines.length; i++) {
        good += lines[i];
        if(i!=lines.length-1) {good += "<br>";}
      }
    $("#inputas1").val(good);
      var good1 = "";
      var lines1 = $('#KeitimasTextarea2').val().split('\n');
      for (var y = 0; y < lines1.length; y++) {
        good1 += lines1[y];
        if(y!=lines1.length-1) {good1 += "<br>";}
      }
    $("#inputas4").val(good1);
      var good2 = "";
      var lines2 = $('#KeitimasTextarea3').val().split('\n');
      for (var u = 0; u < lines2.length; u++) {
        good2 += lines2[u];
        if(u!=lines2.length-1) {good2 += "<br>";}
      }
    var myForm = $('.keisti_duomenis');

    if(myForm[0].checkValidity() == true) {
      myForm.submit();
    }
    else{
      Swal.fire({
  		icon: 'error',
      html:
 			'<h4><b> Formos sistema patvirtinti negali! PRAŠOME UŽPILDYTI VISUS BŪTINUS LANGELIUS</b></h4> ' +
      '<br>' +
      '<p><small>Būtini : ISO 3166, š. pavadinimas (LT ir EN), š. sostinė, š. galininkas, kur yra ir plotas. Visi miestų, lankytinų vietų ir faktų laukeliai</small></p>',
			})
    }
    });

    var navTrigger = document.getElementsByClassName('nav-trigger')[0],
        body = document.getElementsByTagName('body')[0];

    navTrigger.addEventListener('click', toggleNavigation);

    function toggleNavigation(event) {
      event.preventDefault();
      body.classList.toggle('nav-open');
    }

    });
</script>

    <a href="#navigation" class="nav-trigger">
      Menu <span></span>
    </a>

    <nav class="nav-container" id="navigation">
      <header>
        <h2>Valdymo skydas</h2>
      </header>

      <ul class="nav" style="display:block !important">
        <li><a href="administrator">Pagrindinis</a></li>
        <li><a href="?blog">Blog'as</a></li>
        <li><a href="SelectUsers">Registruoti vartotojai</a></li>
        <li><a href="?new">Nauja šalis</a></li>
        <li><a href="SelectCountries">Peržiūrėti šalis</a></li>
        <li><a href="Filter3">Failai</a></li>
        <li><a href="Filter1">Nuorodos</a></li>
        <li><a href="Filter2">Apklausos</a></li>
        <li><a href="?change">Keisti duomenis</a></li>
        <li><a href="logout">Atsijungti <?php echo $admin_name;?></a></li>
      </ul>
    </nav>
    <div class="overlay"></div> 


    <section class="hero-section" style="display:none">
    <div class="card-grid">
      <a class="card" href="?blog">
        <div class="card__background" style="background-image: url(images/blog.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Blog'as</h3>
        </div>
      </a>
      <a class="card" href="SelectUsers">
        <div class="card__background" style="background-image: url(images/team.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Registruoti vartotojai</h3>
        </div>
      </a>
      <a class="card" href="?new">
        <div class="card__background" style="background-image: url(images/create.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Nauja šalis</h3>
        </div>
      </li>
      <a class="card" href="SelectCountries">
        <div class="card__background" style="background-image: url(images/memory.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Peržiūrėti šalis</h3>
        </div>
      </a>

      <a class="card" href="Filter3">
        <div class="card__background" style="background-image: url(images/upload.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Failai</h3>
        </div>
      </a>

      <a class="card" href="Filter1">
        <div class="card__background" style="background-image: url(images/chain.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Nuorodos</h3>
        </div>
      </a>

      <a class="card" href="Filter2">
        <div class="card__background" style="background-image: url(images/survey.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Apklausos</h3>
        </div>
      </a>

      <a class="card" href="?change">
        <div class="card__background" style="background-image: url(images/process.png)"></div>
        <div class="card__content">
          <p class="card__category">Pagrindinis</p>
          <h3 class="card__heading">Duomenys</h3>
        </div>
      </a>
    <div>
  </section>


    <!-- Blog'as -->
    <div class="BlogForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
          <form action="BlogActions.php" method="POST" enctype="multipart/form-data"> 
            <h3>Įrašo sukūrimo forma</h3>
            <br>
            <input class="form-control" name="B1" type="text" placeholder="Pavadinimas" required>
            <br>
            <label for="B2" >Nedidelės apimties tekstas</label>
            <input class="form-control" name="B2" id="B2" type="text" placeholder="Tekstas" required>
            <br>
            <select class="custom-select" name = "B3">
            <option selected>Bendra informacija</option>
              <?php
                for($blog=1; $blog<=$blog_countries_count; $blog++){
              ?>
              <option value="<?php echo $blog_countries_LT_array[$blog];?>"><?php echo $blog_countries_LT_array[$blog];?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <br>
            <div class="form-group">
            <label for="exampleFormControlFile1">Įrašo nuotrauka</label>
            <input type="file" name="B4" class="form-control-file" id="exampleFormControlFile20">
            </div>
            <br>
          <button value="1" name="B5" type="submit" class="btn btn-outline-info"><img width="5%" height="5%" src="images/send.png"></img> Sukurti</button>
          </form>
    </div>
    
    <!-- VARTOTOJAI -->
    <table class="table vartotojai" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
		<thead class="thead-dark">
			<tr>
			<th scope="col">#</th>
			<th scope="col">Vardas</th>
			<th scope="col">El.paštas</th>
			<th scope="col">Slaptažodis</th>
      <th scope="col">Sugeneruotas kodas</th>
			<th scope="col">Paskutinį kartą aktyvus</th>
      <th scope="col">Statusas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
      <?php
        for($s=0;$s<$S8;$s++) {
      ?>
			<tr>
				<form action="UserActions.php" method="POST">
				<td scope="row">
        <input name="U1" type="text" class="card-text" style="display: none;" value='<?php echo $I6[$s];?>'></input>
        <p><?php echo $I6[$s];?></p>
				</td>
				<td><?php echo $N6[$s];?></td>
				<td><?php echo $E6[$s];?></td>
				<td><?php echo $P6[$s];?></td>
				<td><?php echo $K6[$s];?></td>
        <td><?php echo $L6[$s];?></td>
        <td><?php echo $Status[$s];?></td>
				<td>
          <button name="U2" value="5" type="submit" class="btn btn-outline-info">Peržiūrėti įrašus</button>
					<button name="U2" value="3" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button name="U2" value="1" type="submit" class="btn btn-outline-danger">Blokuoti</button>
					<button name="U2" value="2" type="submit" class="btn btn-outline-success">Aktyvuoti</button>
				</td>
				</form>
      </tr>
      <?php
        }
      ?>
		</tbody>
    </table>
    

    <!-- VARTOTOJO ĮRAŠŲ LENTELĖ --->
    <table class="table storiesTable" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
		<thead class="thead-dark">
			<tr>
      <th scope="col"></th>
      <th scope="col">Pavadinimas</th>
			<th scope="col">Šalis</th>
      <th scope="col">Reitingas</th>
			<th scope="col">Sukurta</th>
      <th scope="col">Statusas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
      <?php
        for($v=0;$v<$SK1;$v++) {
      ?>
			<tr>
				<form action="StoriesActions.php" method="POST">
				<td scope="row">
        <input name="VIV3" type="text" class="card-text" style="display: none;" value='<?php echo $VID1;?>' readonly></input>
        <input name="VIV2" type="text" class="card-text" style="display: none;" value='<?php echo $ID1[$v];?>' readonly></input>
				</td>
				<td><?php echo $PAV1[$v];?></td>
				<td><?php echo $VAL1[$v];?></td>
				<td><?php echo $REI1[$v];?></td>
				<td><?php echo $DAT1[$v];?></td>
        <td><?php echo $STA1[$v];?></td>
				<td>
					<button name="VIV1" value="1" type="submit" class="btn btn-outline-danger">Blokuoti</button>
					<button name="VIV1" value="2" type="submit" class="btn btn-outline-success">Aktyvuoti</button>
				</td>
				</form>
      </tr>
      <?php
        }
      ?>
		</tbody>
    </table>

    <!-- VARTOTOJŲ KEITIMO FORMA -->
    <div class="UserForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
          <form action="UserActions.php" method="POST">
            <input name="U1" type="text" class="card-text" style="display: none;" value='<?php echo $I7;?>'></input>
            <input type="text" class="form-control" placeholder="Vartotojo ID" value='<?php echo $I7;?>' disabled></input>
            <br>
            <input class="form-control" name="U3" type="text" placeholder="Vardas" value='<?php echo $N7;?>'>
            <br>
            <input class="form-control" name="U4" type="text" placeholder="El. paštas" value='<?php echo $E7;?>'>
            <br>
            <input class="form-control" name="U5" type="text" placeholder="Slaptažodis" value='<?php echo $P7;?>'>
            <br>
            <input class="form-control" type="text" placeholder="Sugeneruotas kodas" value='<?php echo $K7;?>' disabled>
            <br>
            <input class="form-control" type="text" placeholder="Paskutinį kartą lankėsi" value='<?php echo $L7;?>' disabled>
            <br>
            <select class="custom-select" name = "filter6"  style="font-family : 'Quicksand', 'sans-serif';" >
              <option selected><?php echo $Status1;?></option>
              <?php
                if($Status1=="Užblokuota")
                {
              ?>
                  <option>Aktyvi</option>
              <?php
                }
                else {
              ?>
                  <option>Užblokuota</option>
              <?php
                }
              ?>
            </select>
            <br>
            <br>
            <button value="4" name="U2" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>

    


    <!-- NAUJA ŠALIS -->
    <form style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;" class="nauja" method="POST" action="create.php" enctype="multipart/form-data">
    <h1>NAUJA VALSTYBĖ</h1>
    <br>
    <h3>Bendroji informacija</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N1" class="form-control" required placeholder="ISO 3166 (Alpha 2)" value="<?php echo $ISO_3166;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N2" class="form-control" required placeholder="Šalies pavadinimas" value="<?php echo $pavadinimas_LT;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N3" class="form-control" required placeholder="Šalies sostinės pavadinimas" value="<?php echo $sostinės_pavadinimas;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N4" class="form-control" placeholder="Šalies trumpinys (jei turi)" value="<?php echo $trumpinys;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N5" class="form-control"  required placeholder="Šalies pavadinimas (EN) BŪTINAS ĮVEDIMAS" value="<?php echo $pavadinimas_EN;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N87" class="form-control"  required placeholder="Šalies pavadinimas galininko linksniu (LT) BŪTINAS ĮVEDIMAS" value="<?php echo $pavadinimas_GAL?>">
    </div>
    </div>
    <br>
    <h3>Vietovė</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N6" class="form-control" placeholder="Kur yra" value="<?php echo $kur_yra;?>" required>
    </div>
    <br>
    <div class="col">
      <input type="text" name="N7" id="area" class="form-control" placeholder="Plotas" value="<?php echo $plotas;?>" required>
    </div>
    <button type="button" id="AddToPlotas" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    <div class="col">
      <input type="text" name="N8" class="form-control" placeholder="Aukščiausia vieta" value="<?php echo $a_vieta;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N9" class="form-control" placeholder="Žemiausia vieta" value="<?php echo $ž_vieta;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N10" class="form-control" placeholder="Ilgiausia upė" value="<?php echo $upė;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N11" id="lake" class="form-control" placeholder="Didžiausias ežeras" value="<?php echo $d_ežeras;?>">
    </div>
    <button type="button" id="AddToEžeras" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    <div class="col">
      <input type="text" name="N12" id="island" class="form-control" placeholder="Didžiausia sala (kai kurios)" value="<?php echo $d_sala;?>">
    </div>
    <button type="button" id="AddToSala" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N13" class="form-control" placeholder="Ilgiausias fjordas (kai kurios)" value="<?php echo $fjordas;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N14" class="form-control" placeholder="Giliausias ežeras (kai kurios)" value="<?php echo $g_ežeras;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N15" class="form-control" placeholder="Eksteritorinės valdos (kai kurios)" value="<?php echo $e_teritorijos;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <textarea class="form-control" id="Textarea1" placeholder="Nutolusios valdos (kai kurios)" rows="2"></textarea>
    <input name="N16" id="inputas" type="text" class="card-text" style="display: none;"></input>
    </div>
    </div>
    <br>
    <h3>Miestai</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N17" placeholder="1" value="<?php echo $miestas1;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N18" placeholder="2" value="<?php echo $miestas2;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N19" placeholder="3" value="<?php echo $miestas3;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N20" placeholder="4" value="<?php echo $miestas4;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N21" placeholder="5" value="<?php echo $miestas5;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N22" placeholder="6" value="<?php echo $miestas6;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N23" placeholder="7" value="<?php echo $miestas7;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N24" placeholder="8" value="<?php echo $miestas8;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N25" placeholder="9" value="<?php echo $miestas9;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N26" placeholder="10" value="<?php echo $miestas10;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N27" placeholder="11" value="<?php echo $miestas11;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N28" placeholder="12" value="<?php echo $miestas12;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N29" placeholder="13" value="<?php echo $miestas13;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N30" placeholder="14" value="<?php echo $miestas14;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N31" placeholder="15" value="<?php echo $miestas15;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N32" placeholder="16" value="<?php echo $miestas16;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N33" placeholder="17" value="<?php echo $miestas17;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N34" placeholder="18" value="<?php echo $miestas18;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N35" placeholder="19" value="<?php echo $miestas19;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N36" placeholder="20" value="<?php echo $miestas20;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N37" placeholder="21" value="<?php echo $miestas21;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N38" placeholder="22" value="<?php echo $miestas22;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N39" placeholder="23" value="<?php echo $miestas23;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N40" placeholder="24" value="<?php echo $miestas24;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N41" placeholder="25" value="<?php echo $miestas25;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N42" placeholder="26" value="<?php echo $miestas26;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N43" placeholder="27" value="<?php echo $miestas27;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N44" placeholder="28" value="<?php echo $miestas28;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N45" placeholder="29" value="<?php echo $miestas29;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N46" placeholder="30" value="<?php echo $miestas30;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N47" placeholder="31" value="<?php echo $miestas31;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N48"placeholder="32" value="<?php echo $miestas32;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N49" placeholder="33" value="<?php echo $miestas33;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N50" placeholder="34" value="<?php echo $miestas34;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N51" placeholder="35" value="<?php echo $miestas35;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N52" placeholder="Svarbiausias uostas" value="<?php echo $svar_uostas;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N53" placeholder="Svarbiausias oro uostas" value="<?php echo $svar_oro;?>">
    </div>
    </div>
    <br>
    <h3>Valstybė</h3>
    <br>
    <input type="text" class="form-control" name="N54" placeholder="Valdymo forma/santvarka" value="<?php echo $valdymas;?>">
    <br>
    <textarea class="form-control" id="Textarea2" placeholder="Administracinis susiskirstymas" rows="2"><?php echo $susiskirstymas;?></textarea>
    <input name="N55" id="inputas2" type="text" class="card-text" style="display: none;"></input>
    <br>
    <h3>Gyventojai</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" id="people" name="N56" class="form-control" placeholder="Gyventojų sk., mieste esančių (%), tankumas, vid. gyv. trukmė" value="<?php echo $gyventojai;?>">
    </div>
    <button type="button" id="AddToGyventojai" class="btn btn-primary btn-sm"><sup>2</sup></button>
    </div>
    <br>
   
    <div class="row">
    <div class="col">
      <input type="text" id="increment" name="N57" class="form-control" placeholder="Natūralus gyventojų prieaugis" value="<?php echo $prieaugis;?>">
    </div>
    <button type="button" id="AddToPrieaugis" class="btn btn-primary btn-sm">‰</button>
    <br>
    <div class="col">
      <input type="text" name="N58" class="form-control" placeholder="Etninės/rasinės grupės" value="<?php echo $grupės;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N59" class="form-control" placeholder="Kalbos" value="<?php echo $kalbos;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="N60" class="form-control" placeholder="Raštingumas" value="<?php echo $raštingumas;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="N61" class="form-control" placeholder="Religijos" value="<?php echo $religijos;?>">
    </div>
    </div>
    <br>
    <h3>Ekonomika</h3>
    <br>
    <div class="row">
    <div class="col">
        <textarea class="form-control" id="Textarea3" placeholder="Valiuta" rows="2"><?php echo $valiuta;?></textarea>
        <input name="N62" id="inputas3" type="text" class="card-text" style="display: none;"></input>
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N63" placeholder="BVP 1 gyv./metus" value="<?php echo $BVP;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N64" placeholder="Prekybos balansas" value="<?php echo $prek_balansas;?>">
    </div>
    </div>
    <br>
    <h3>Kiti rodikliai</h3>
    <br>
    <div class="row">
    <div class="col">
    <input type="text" class="form-control" name="N65" placeholder="ŽSRI" value="<?php echo $ŽSRI;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N66" placeholder="Laimės indeksas" value="<?php echo $laimės_indeksas;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N67" placeholder="Big Mac indeksas" value="<?php echo $big_mac;?>">
    </div>
    </div>
    <br>
    <h3>Lankytinos vietos</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N68" placeholder="Gamtos obj. 1" value="<?php echo $gamta1;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N69" placeholder="Gamtos obj. 2" value="<?php echo $gamta2;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N70" placeholder="Gamtos obj. 3" value="<?php echo $gamta3;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N71" placeholder="Gamtos obj. 4" value="<?php echo $gamta4;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N72" placeholder="Gamtos obj. 5" value="<?php echo $gamta5;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N90" placeholder="Gamtos obj. 6" value="<?php echo $gamta6;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N91" placeholder="Gamtos obj. 7" value="<?php echo $gamta7;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N92" placeholder="Gamtos obj. 8" value="<?php echo $gamta8;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N93" placeholder="Gamtos obj. 9" value="<?php echo $gamta9;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N94" placeholder="Gamtos obj. 10" value="<?php echo $gamta10;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N73" placeholder="Kultūros obj. 1" value="<?php echo $kultūra1;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N74" placeholder="Kultūros obj. 2" value="<?php echo $kultūra2;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N75" placeholder="Kultūros obj. 3" value="<?php echo $kultūra3;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N76" placeholder="Kultūros obj. 4" value="<?php echo $kultūra4;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N77" placeholder="Kultūros obj. 5" value="<?php echo $kultūra5;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N95" placeholder="Kultūros obj. 6" value="<?php echo $kultūra6;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N96" placeholder="Kultūros obj. 7" value="<?php echo $kultūra7;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N97" placeholder="Kultūros obj. 8" value="<?php echo $kultūra8;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N98" placeholder="Kultūros obj. 9" value="<?php echo $kultūra9;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N99" placeholder="Kultūros obj. 10" value="<?php echo $kultūra10;?>">
    </div>
    </div>
    <br>
    <h3>KITI PARAMETRAI</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N78" placeholder="Ar žinai, kad ..." value="<?php echo $faktas1;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N79" placeholder="Ar žinai, kad ..." value="<?php echo $faktas2;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N80" placeholder="Ar žinai, kad ..." value="<?php echo $faktas3;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N81" placeholder="Ar žinai, kad ..." value="<?php echo $faktas4;?>">
    </div>
    </div>
    <br>
    <h3>Sostinės informacija</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N82" placeholder="Gyventojų sk." value="<?php echo $skaičius;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N83" placeholder="Internetinio puslapio nuoroda" value="<?php echo $nuoroda;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N84" placeholder="Internetinio puslapio nuorodos pavadinimas" value="Nuoroda į miesto puslapį" value="<?php echo $nuorodos_pav;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="N85" placeholder="Platuma" value="<?php echo $platuma;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="N86" placeholder="Ilguma" value="<?php echo $ilguma;?>">
    </div>
    </div>
    <br>
    

    <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="exampleFormControlFile1">Sostinės nuotrauka 1</label>
    <input type="file" name="sostinė1" class="form-control-file" id="exampleFormControlFile1">
    </div>
    </div>
    <br>
    <div class="col">
    <div class="form-group">
    <label for="exampleFormControlFile1">Sostinės nuotrauka 2</label>
    <input type="file" name="sostinė2" class="form-control-file" id="exampleFormControlFile2">
  </div>
    </div>
    <br>
    <div class="col">
    <div class="form-group">
    <label for="exampleFormControlFile1">Sostinės nuotrauka 3</label>
    <input type="file" name="sostinė3" class="form-control-file" id="exampleFormControlFile3">
  </div>
    </div>
    <br>
    <div class="col">
    <div class="form-group">
    <label for="exampleFormControlFile1">Vėliava</label>
    <input type="file" name="vėliava" class="form-control-file" id="exampleFormControlFile4">
     </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="exampleFormControlFile1">Fonas</label>
    <input type="file" name="fonas" class="form-control-file" id="exampleFormControlFile5">
     </div>
    </div>
    </div>
    <br>
    <br>
    <button type="button" id="siunciu" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir peržiūrėti</button>
    <button type="reset" class="btn btn-outline-danger btn-lg btn-block">Ištrinti</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
    <!-- PERŽIŪRĖTI ŠALIS -->

    <table class="table salys" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166 (2)</th>
			<th scope="col">Šalis</th>
			<th scope="col">Sostinė</th>
			<th scope="col">Statusas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
    <?php
      for($i=0;$i<=$salys_skaicius; $i=$i+1)
      {
    ?>
			<tr>
				<form action="CountryActions.php" method="POST">
				<td scope="row">
        <input name="country_ISO" id="country_ID" type="text" class="card-text" style="display: none;" value='<?php echo $salys2[$i]?>'></input>
        <p for="country_ID"><?php echo $salys2[$i]?></p>
        </td>
        <td><?php echo $salys3[$i] ?></td>
				<td><?php echo $salys4[$i] ?></td>
				<td><?php echo $salys5[$i] ?></td>
				<td>
					<button name="country_action" value="3" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button name="country_action" value="1" type="submit" class="btn btn-outline-danger">Deaktyvuoti</button>
					<button name="country_action" value="2" type="submit" class="btn btn-outline-success">Aktyvuoti</button>
				</td>
        </form>
      </tr>
      <?php
      }
      ?>
		</tbody>
	  </table>

    <!-- ĮKELTI FAILUS -->
    <form style="display: none; margin: 0 auto; max-width:90%; margin-top:5%;" class="ikeltiF" method="POST" action="UploadFiles.php" enctype="multipart/form-data">
    <h1 style="display:inline-block;">ĮKELTI FAILUS (Žemėlapius ir maršrutus)</h1><a href="SelectMaps"><button id="keitimas21" style="display:inline-block; float: right;" type="button" class="btn btn-outline-info"><img  id="keitimas22" src="images/server(1).png"></img></button></a>
    <br>
    <br>
    <select style="font-family : 'Quicksand', 'sans-serif';" class="custom-select" name = "filter7">
      <option selected>Pasirinkite šalį (ISO)</option>
        <?php
          for($g=0; $g<$S9; $g++){
        ?>
        <option value="<?php echo $M9[$g];?>"><?php echo $M9[$g];?></option>
        <?php
        }
        ?>
    </select>
    <br>
    <!--<input type="text" class="form-control" placeholder="Priskirti šaliai (ISO 3166 (2))">-->
    <br>
    <div class="custom-control custom-radio">
    <input type="radio" id="customRadio1" value='2' name="customRadio1" class="custom-control-input">
    <label class="custom-control-label" for="customRadio1">Žemėlapiai</label>
    </div>
    <div class="custom-control custom-radio">
    <input type="radio" id="customRadio2" value='1' name="customRadio1" class="custom-control-input">
    <label class="custom-control-label" for="customRadio2">Maršrutai</label>
    </div>
    <br>
    <div class="form-group">
    <label for="exampleFormControlFile1">Failas 1</label>
    <input type="file" name="failas1" class="form-control-file" id="exampleFormControlFile10">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Failas 2</label>
    <input type="file" name="failas2" class="form-control-file" id="exampleFormControlFile11">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Failas 3</label>
    <input type="file" name="failas3" class="form-control-file" id="exampleFormControlFile12">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Failas 4</label>
    <input type="file" name="failas4" class="form-control-file" id="exampleFormControlFile13">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Failas 5</label>
    <input type="file" name="failas5" class="form-control-file" id="exampleFormControlFile14">
    <br>
    <br>
    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir išsaugoti</button>
    <button type="reset" class="btn btn-outline-danger btn-lg btn-block">Ištrinti</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    </form>

    <!-- Ž. FAILŲ LENTELĖ -->
    <div class="mapsTable" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
    <form action="FilterMaps.php" method="POST" style="display:inline">
    <select class="custom-select" name = "filter8" style="font-family : 'Quicksand', 'sans-serif';" >
      <option selected>Pasirinkite šalį (ISO)</option>
      <?php
        for($h=0; $h<$S10; $h++){
      ?>
      <option value="<?php echo $M10[$h];?>"><?php echo $M10[$h];?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <button type="submit" id="keitimas009" class="btn btn-outline-warning"><img id="keitimas010" src="images/filter(1).png"></img></button>
    </form>
    <button style="display:inline" type="button" id="keitimas011" class="btn btn-outline-warning"><a href="SelectRoutes"><img id="keitimas012" src="images/highway(1).png"></img></button></a>
    <br>
    <br>
    <br>
    <h3>Žemėlapiai</h3>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166</th>
			<th scope="col">Failo pavadinimas</th>
			<th scope="col">Failo nuoroda</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
        <?php
          for($j=0;$j<$S11;$j=$j+1) {
        ?>
			<tr>
				<form action="MapsActions.php" method="POST">
				<td scope="row">
				<input name="MF2" type="text" class="card-text" style="display: none;" value='<?php echo $I8[$j];?>'></input>
        <p ><?php echo $K8[$j];?></p>
				</td>
				<td><?php echo $FN8[$j];?></td>
        <td><?php echo $F8[$j];?></td>
				<td>
					<button value="2" name="MF1" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button value="1" name="MF1" type="submit" class="btn btn-outline-danger">Ištrinti</button>
				</td>
				</form>
			</tr>
      <?php
          }
        ?>
		</tbody>
	  </table>
    </div>

    <!-- M. FAILŲ LENTELĖ -->

    <div class="routesTable" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
    <form action="FilterRoutes.php" method="POST" style="display:inline">
    <select class="custom-select" name = "filter10" style="font-family : 'Quicksand', 'sans-serif';" >
      <option selected>Pasirinkite šalį (ISO)</option>
      <?php
        for($l=0; $l<$S13; $l++){
      ?>
      <option value="<?php echo $M13[$l];?>"><?php echo $M13[$l];?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <button type="submit" id="keitimas015" class="btn btn-outline-warning"><img id="keitimas016" src="images/filter(1).png"></img></button>
    </form>
    <a href="SelectMaps"><button style="display:inline" type="button" id="keitimas013" class="btn btn-outline-warning"><img id="keitimas014" src="images/globe(1).png"></img></button></a>
    <br>
    <br>
    <h3>Maršrutai</h3>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166</th>
			<th scope="col">Failo pavadinimas</th>
			<th scope="col">Failo nuoroda</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
        <?php
          for($z=0;$z<$S14;$z=$z+1) {
        ?>
			<tr>
				<form action="RoutesActions.php" method="POST">
				<td scope="row">
				<input name="RF2" type="text" class="card-text" style="display: none;" value='<?php echo $I10[$z];?>'></input>
        <p ><?php echo $K10[$z];?></p>
				</td>
				<td><?php echo $FN10[$z];?></td>
        <td><?php echo $F10[$z];?></td>
				<td>
					<button value="2" name="RF1" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button value="1" name="RF1" type="submit" class="btn btn-outline-danger">Ištrinti</button>
				</td>
				</form>
			</tr>
      <?php
          }
        ?>
		</tbody>
	  </table>
    </div>

    <!-- Ž. FAILŲ FORMA -->

    <div class="MapsForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;" >
          <form action="MapsActions.php" method="POST" enctype="multipart/form-data">
            <input name="MF2" type="text" class="card-text" style="display: none;" value='<?php echo $I9;?>'></input>
            <select class="custom-select" name = "filter9"  style="font-family : 'Quicksand', 'sans-serif';" >
              <option selected><?php echo $K9;?></option>
              <?php
                for($k=0; $k<$S12; $k++){
              ?>
              <option value="<?php echo $M12[$k];?>"><?php echo $M12[$k];?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <br>
            <input class="form-control" name="MF3" type="text" placeholder="Failo nuorodos pavadinimas" value='<?php echo $T9;?>'>
            <br>
            <input class="form-control" type="text" placeholder="Failo vieta serveryje" value='<?php echo $CN9;?>' disabled>
            <br>
            <br>
            <h3 style="text-align:left;">Jei norite pakeisti patį failą</h3>
            <br>
            <div style="text-align:left;" class="form-group">
            <label for="exampleFormControlFile1">Įkelkite norimą failą</label>
            <input type="file" name="failas_keisti_1" class="form-control-file" id="exampleFormControlFile15">
            </div>
            <br>
            
            <button value="3" name="MF1" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>
    <!-- M. FAILŲ FORMA -->
    <div class="RoutesForm" style="display: none; left: 17.5%; position:absolute; margin-top:5%; text-align:center;" >
          <form action="RoutesActions.php" method="POST" enctype="multipart/form-data">
            <input name="RF2" type="text" class="card-text" style="display: none;" value='<?php echo $I11;?>'></input>
            <select class="custom-select" name = "filter11"  style="font-family : 'Quicksand', 'sans-serif';" >
              <option selected><?php echo $K11;?></option>
              <?php
                for($x=0; $x<$S15; $x++){
              ?>
              <option value="<?php echo $M15[$x];?>"><?php echo $M15[$x];?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <br>
            <input class="form-control" name="RF3" type="text" placeholder="Failo nuorodos pavadinimas" value='<?php echo $T11;?>'>
            <br>
            <input class="form-control" type="text" placeholder="Failo vieta serveryje" value='<?php echo $CN11;?>' disabled>
            <br>
            <br>
            <h3 style="text-align:left;">Jei norite pakeisti patį failą</h3>
            <br>
            <div style="text-align:left;" class="form-group">
            <label for="exampleFormControlFile1">Įkelkite norimą failą</label>
            <input type="file" name="failas_keisti_2" class="form-control-file" id="exampleFormControlFile16">
            </div>
            <br>
            
            <button value="3" name="RF1" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>

    <!-- ĮKELTI NUORODAS -->
    <form style="display: none; margin: 0 auto; max-width:90%; margin-top:5%;" class="ikeltiN" method="POST" action="UploadLinks.php">
    <h1 style="display:inline-block;">ĮKELTI NUORODAS</h1><a href="SelectLinks"><button id="keitimas23" style="display:inline-block; float: right;" type="button" class="btn btn-outline-info"><img  id="keitimas24" src="images/server(1).png"></img></button></a>
    <br>
    <br>
    <select class="custom-select" name = "NN1">
      <option selected>Pasirinkite šalį (ISO)</option>
        <?php
          for($t=0; $t<$S2; $t++){
        ?>
        <option value="<?php echo $M2[$t];?>"><?php echo $M2[$t];?></option>
        <?php
        }
        ?>
    </select>
    <br>
    <br>
    <h3>1</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="NN2" class="form-control" placeholder="Nuorodos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="NN3" class="form-control" placeholder="Nuorodos adresas">
    </div>
    </div>
    <br>
    <h3>2</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="NN4" class="form-control" placeholder="Nuorodos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="NN5" class="form-control" placeholder="Nuorodos adresas">
    </div>
    </div>
    <br>
    <h3>3</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="NN6" class="form-control" placeholder="Nuorodos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="NN7" class="form-control" placeholder="Nuorodos adresas">
    </div>
    </div>
    <br>
    <h3>4</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="NN8" class="form-control" placeholder="Nuorodos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="NN9" class="form-control" placeholder="Nuorodos adresas">
    </div>
    </div>
    <br>
    <h3>5</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="NN10" class="form-control" placeholder="Nuorodos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="NN11" class="form-control" placeholder="Nuorodos adresas">
    </div>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir išsaugoti</button>
    <button type="reset" class="btn btn-outline-danger btn-lg btn-block">Ištrinti</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </form>

    <!-- NUORODŲ LENTELĖ -->
    <div class="tableLinks" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
    <form action="FilterLinks.php" method="POST">
    <select class="custom-select" name = "filter1" style="font-family : 'Quicksand', 'sans-serif';" >
      <option selected>Pasirinkite šalį (ISO)</option>
      <?php
        for($u=0; $u<$skaicius1; $u++){
      ?>
      <option value="<?php echo $masyvas1[$u];?>"><?php echo $masyvas1[$u];?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <button type="submit" id="keitimas001" class="btn btn-outline-warning"><img id="keitimas002" src="images/filter(1).png"></img></button>
    </form>
    <br>
    <br>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166</th>
			<th scope="col">Nuoroda</th>
			<th scope="col">Nuorodos pavadinimas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
        <?php
          for($y=0;$y<$skaicius2;$y=$y+1) {
        ?>
			<tr>
				<form action="LinksActions.php" method="POST">
				<td scope="row">
				<input name="LV2" type="text" class="card-text" style="display: none;" value='<?php echo $masyvas5[$y];?>'></input>
        <p ><?php echo $masyvas2[$y];?></p>
				</td>
				<td><?php echo $masyvas3[$y];?></td>
        <td><?php echo $masyvas4[$y];?></td>
				<td>
					<button value="2" name="LV1" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button value="1" name="LV1" type="submit" class="btn btn-outline-danger">Ištrinti</button>
				</td>
				</form>
			</tr>
      <?php
          }
        ?>
		</tbody>
	  </table>
    </div>

    <!-- NUORODŲ FORMA -->
    <div class="LinksForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
          <form action="LinksActions.php" method="POST">
            <input name="LV2" type="text" class="card-text" style="display: none;" value='<?php echo $I1;?>'></input>
            <select class="custom-select" name = "filter2"  style="font-family : 'Quicksand', 'sans-serif';" >
              <option selected><?php echo $K1;?></option>
              <?php
                for($p=0; $p<$S1; $p++){
              ?>
              <option value="<?php echo $M1[$p];?>"><?php echo $M1[$p];?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <br>
            <input class="form-control" name="LV3" type="text" placeholder="Nuoroda" value='<?php echo $N1;?>'>
            <br>
            <input class="form-control" name="LV4" type="text" placeholder="Nuorodos pavadinimas" value='<?php echo $NP1;?>'>
            <br>
            <button value="3" name="LV1" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>

    <!-- ĮKELTI APKLAUSAS -->
    <form style="display: none; margin: 0 auto; max-width:90%; margin-top:5%;" class="ikeltiA" method="POST" action="UploadSurvey">
    <h1 style="display:inline-block;">ĮKELTI APKLAUSAS</h1><a href="SelectSurvey"><button id="keitimas25" style="display:inline-block; float: right;" type="button" class="btn btn-outline-info"><img  id="keitimas26" src="images/server(1).png"></img></button></a>
    <br>
    <br>
    <select id="selectas" class="custom-select" name = "filter3"  style="font-family : 'Quicksand', 'sans-serif';" >
    <option selected>Pasirinkite šalį (ISO)</option>
      <?php
        for($r=0; $r<$S3; $r++){
      ?>
      <option value="<?php echo $M3[$r];?>"><?php echo $M3[$r];?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="checkbox1" value="value1">
    <label class="custom-control-label" for="customCheck1">Visoms šalims</label>
    </div>
    <br>
    <h3>1</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="AA2" class="form-control" placeholder="Apklausos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="AA7" class="form-control" placeholder="Apklausos adresas">
    </div>
    </div>
    <br>
    <h3>2</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="AA3" class="form-control" placeholder="Apklausos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="AA8" class="form-control" placeholder="Apklausos adresas">
    </div>
    </div>
    <br>
    <h3>3</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="AA4" class="form-control" placeholder="Apklausos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="AA9" class="form-control" placeholder="Apklausos adresas">
    </div>
    </div>
    <br>
    <h3>4</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="AA5" class="form-control" placeholder="Apklausos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="AA10" class="form-control" placeholder="Apklausos adresas">
    </div>
    </div>
    <br>
    <h3>5</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="AA6" class="form-control" placeholder="Apklausos pavadinimas">
    </div>
    <br>
    <div class="col">
      <input type="text" name="AA11" class="form-control" placeholder="Apklausos adresas">
    </div>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir išsaugoti</button>
    <button type="reset" id="resetas" class="btn btn-outline-danger btn-lg btn-block">Ištrinti</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </form>

    <!-- APKLAUSŲ LENTELĖ -->
    <div class="tableSurvey" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
    <form style="display:inline;" action="FilterSurvey" method="POST">
    <select class="custom-select" name = "filter4" style="font-family : 'Quicksand', 'sans-serif';" >
      <option selected>Pasirinkite šalį (ISO)</option>
      <?php
        for($e=0; $e<$S5; $e++){
      ?>
      <option value="<?php echo $M5[$e];?>"><?php echo $M5[$e];?></option>
      <?php
      }
      ?>
    </select>
    <br>
    <br>
    <button type="submit" id="keitimas003" class="btn btn-outline-warning"><img id="keitimas004" src="images/filter(1).png"></img></button>
    </form>
    <form style="display:inline;" action="GlobalSurvey" method="POST">
    <button name="GA1" value="1" type="submit" id="keitimas005" class="btn btn-outline-warning"><img id="keitimas006" src="images/global(1).png"></img></button>
    </form>
    <br>
    <br>
    <h3>Lokalios apklausos</h3>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166</th>
			<th scope="col">Apklausos nuoroda</th>
			<th scope="col">Apklausos pavadinimas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
        <?php
          for($w=0;$w<$S4;$w=$w+1) {
        ?>
			<tr>
				<form action="SurveyActions" method="POST">
				<td scope="row">
				<input name="AV1" type="text" class="card-text" style="display: none;" value='<?php echo $I2[$w];?>'></input>
        <p for="country_ID"><?php echo $K2[$w];?></p>
				</td>
				<td><?php echo $N2[$w];?></td>
        <td><?php echo $NP2[$w];?></td>
				<td>
					<button value="2" name="AV2" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button value="1" name="AV2" type="submit" class="btn btn-outline-danger">Ištrinti</button>
				</td>
				</form>
			</tr>
      <?php
          }
        ?>
		</tbody>
	  </table>
    </div>

    <!-- APKLAUSŲ FORMA -->
    <div class="SurveyForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
          <form action="SurveyActions" method="POST">
            <input name="AV1" type="text" class="card-text" style="display: none;" value='<?php echo $I3;?>'></input>
            <select class="custom-select" name = "filter5"  style="font-family : 'Quicksand', 'sans-serif';" >
              <option selected><?php echo $K3;?></option>
              <?php
                for($q=0; $q<$S6; $q++){
              ?>
              <option value="<?php echo $M6[$q];?>"><?php echo $M6[$q];?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <br>
            <input class="form-control" name="AV3" type="text" placeholder="Apklausos nuoroda" value='<?php echo $N3;?>'>
            <br>
            <input class="form-control" name="AV4" type="text" placeholder="Apklausos pavadinimas" value='<?php echo $NP3;?>'>
            <br>
            <button value="3" name="AV2" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>

    <!-- GLOBALIŲ APKLAUSŲ LENTELĖ -->
    <div class="GlobalTableSurvey" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
    <form action="SelectSurvey" method="POST">
    <button type="submit" id="keitimas007" class="btn btn-outline-warning"><img id="keitimas008" src="images/local(1).png"></img></button>
    </form>
    <br>
    <br>
    <h3>Globalios apklausos</h3>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
			<th scope="col">ISO 3166</th>
			<th scope="col">Apklausos nuoroda</th>
			<th scope="col">Apklausos pavadinimas</th>
			<th scope="col">Veiksmai</th>
			</tr>
		</thead>
		<tbody>
        <?php
          for($a=0;$a<$S7;$a=$a+1) {
        ?>
			<tr>
				<form action="GlobalSurvey" method="POST">
				<td scope="row">
				<input name="GA2" type="text" class="card-text" style="display: none;" value='<?php echo $I4[$a];?>'></input>
        <p for="country_ID"><?php echo $K4[$a];?></p>
				</td>
				<td><?php echo $N4[$a];?></td>
        <td><?php echo $NP4[$a];?></td>
				<td>
					<button value="3" name="GA1" type="submit" class="btn btn-outline-warning">Keisti</button>
					<button value="2" name="GA1" type="submit" class="btn btn-outline-danger">Ištrinti</button>
				</td>
				</form>
			</tr>
      <?php
          }
        ?>
		</tbody>
	  </table>
    </div>

    <!-- GLOBALIŲ APKLAUSŲ FORMA -->
    <div class="GlobalSurveyForm" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;">
          <form action="GlobalSurvey.php" method="POST">
            <input name="GA2" type="text" class="card-text" style="display: none;" value='<?php echo $I5;?>'></input>
            <input class="form-control" type="text" placeholder="ISO 3166" value='<?php echo $K5;?>' disabled></input>
            <br>
            <input class="form-control" name="GA3" type="text" placeholder="Apklausos nuoroda" value='<?php echo $N5;?>'>
            <br>
            <input class="form-control" name="GA4" type="text" placeholder="Apklausos pavadinimas" value='<?php echo $NP5;?>'>
            <br>
            <button value="4" name="GA1" type="submit" class="btn btn-outline-warning">Keisti</button>
          </form>
    </div>

    <!--KEISTI DUOMENIS-->
    <form style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;" class="keisti" method="POST" action="admin_change.php">
    <h1>KEISTI PASKYROS DUOMENIS</h1>
    <br>
    <div class="row">
    <div class="col">
      <input style="display: none;" name="A1" type="text" value="<?php echo $admin_ID;?>">
      <input type="text" name="A2" class="form-control" placeholder="Vardas" value="<?php echo $admin_name;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="A3" class="form-control" placeholder="Pavardė" value="<?php echo $admin_last;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="A4" class="form-control" placeholder="El. paštas" value="<?php echo $admin_email;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="A5" class="form-control" placeholder="Slaptažodis" value="<?php echo $admin_pass;?>">
    </div>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir išsaugoti</button>
    </form>

    <div class = "rezultatas capital_info" style="display:none;">
    <h1 id="capital_name" style="text-align:center; color:black !important; display:grid"><?php echo $sostinės_pavadinimas_1;?></h1>
    <br>
    <h6 id="capital_coordinates">Miesto koordinatės : <?php echo $platuma_1;?> <?php echo $ilguma_1;?></h6>
    <br>
    <h6 id="capital_population"><?php echo $skaičius_1;?></h6>
    <br>
    <a id="capital_website" href="<?php echo $nuoroda_1;?>" target="_blank"><?php echo $nuorodos_pav_1;?></a>
  </div>
  
  
  <div id="carouselExampleIndicators" class="carousel slide nuotraukos rezultatas" data-ride="carousel" style="display:none;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="capital_photo_1" src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="capital_photo_2" src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="capital_photo_3" src="" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  
  
  <div class = "rezultatas country_info" style="display:none;">
    <h1 id="country_name" style="text-align:center; color:black !important; display:grid">Trumpai apie ... </h1>
    <br>
    <img id="flag_image" src="">
    <br>
    <br>
    <img class="icons" src='Icons/Vietovė.png'>
    <br>
    <br>
    <h6 id="country_place"></h6>
    <h6 id="country_area"></h6>
    <h6 id="country_highest"></h6>
    <h6 id="country_lowest"></h6>
    <h6 id="country_river"></h6>
    <h6 id="country_lake"></h6>
    <h6 id="country_island"></h6>
    <h6 id="country_remote"></h6>
    <h6 id="country_longest"></h6>
    <h6 id="country_deepest"></h6>
    <h6 id="country_terittories"></h6>
    <br>
    <br> 
    <img class="icons vienas" src='Icons/Miestai.png' >
  <br>
  <br> 
  <h5 id='cities'>Didesni miestai : </h5>
  <p id="city_1" ></p>
  <p id="city_2" ></p>
  <p id="city_3" ></p>
  <p id="city_4" ></p>
  <p id="city_5" ></p>
  <p id="city_6" ></p>
  <p id="city_7" ></p>
  <p id="city_8" ></p>
  <p id="city_9" ></p>
  <p id="city_10" ></p>
  <p id="city_11" ></p>
  <p id="city_12" ></p>
  <p id="city_13" ></p>
  <p id="city_14" ></p>
  <p id="city_15" ></p>
  <p id="city_16" ></p>  
  <p id="city_17" ></p>
  <p id="city_18" ></p>
  <p id="city_19" ></p>
  <p id="city_20" ></p>
  <p id="city_21" ></p>
  <p id="city_22" ></p>
  <p id="city_23" ></p>
  <p id="city_24" ></p>
  <p id="city_25" ></p>
  <p id="city_26" ></p>
  <p id="city_27" ></p>
  <p id="city_28" ></p>
  <p id="city_29" ></p>
  <p id="city_30" ></p>
  <p id="city_31" ></p>
  <p id="city_32" ></p>
  <p id="city_33" ></p>
  <p id="city_34" ></p>
  <p id="city_35" ></p>
  <br id="contry_tab">   
  <h6 id="country_harbor"></h6>
  <h6 id="country_airport"></h6>
  <br>
  <br> 
  <img class="icons" src='Icons/Valdymas.png'>
  <br>
  <br> 
  <h6 id="country_goverment"></h6>
  <h6 id="country_division"></h6>
  <br>
  <br> 
  <img class="icons" src='Icons/Gyventojai.png'>
  <br>
  <br>  
  <h6 id="country_people"></h6>
  <h6 id="country_growth"></h6>
  <h6 id="country_ethnic"></h6>
  <h6 id="country_language"></h6>
  <h6 id="country_literacy"></h6>
  <h6 id="country_religions"></h6>
  <br>
  <br>
  <img class="icons" src='Icons/Ekonomika.png'>
  <br>  
  <br>
  <h6 id="country_currency"></h6>
  <h6 id="country_BVP" ></h6>
  <h6 id="country_balance" ></h6>
  <br>
  <br>
  <img class="icons" src='Icons/Rodikliai.png'>
  <br>
  <br>
  <h6 id="country_ŽSRI"></h6>
  <h6 id="country_happiness"></h6>
  <h6 id="country_big_mac"></h6>
  <br>
  <br>
  <img class="icons" src='Icons/Lankytinos_vietos.png'>
  <br>
  <br>
  <h5 id="gamtos_obj">Gamtiniai objektai</h5>
  <h6 id="country_nature_1"></h6>
  <h6 id="country_nature_2"></h6>
  <h6 id="country_nature_3"></h6>
  <h6 id="country_nature_4"></h6>
  <h6 id="country_nature_5"></h6>
  <h6 id="country_nature_6"></h6>
  <h6 id="country_nature_7"></h6>
  <h6 id="country_nature_8"></h6>
  <h6 id="country_nature_9"></h6>
  <h6 id="country_nature_10"></h6>
  <br>
  <h5 id="kulturos_obj">Kultūriniai objektai</h5>
  <h6 id="country_culture_1"></h6>
  <h6 id="country_culture_2"></h6>
  <h6 id="country_culture_3"></h6>
  <h6 id="country_culture_4"></h6>
  <h6 id="country_culture_5"></h6>
  <h6 id="country_culture_6"></h6>
  <h6 id="country_culture_7"></h6>
  <h6 id="country_culture_8"></h6>
  <h6 id="country_culture_9"></h6>
  <h6 id="country_culture_10"></h6>
  <br>
  <br>
  <img class="icons" src='Icons/Žemėlapiai.png'>
  <br>
  <br>
  <h5>Čia bus įkelti žemėlapiai. Pvz.:</h5>
  <a href="#">30 lankytinų vietų Aukštaitijoje</a>
  <br>
  <br>
  <img class="icons" src='Icons/Maršrutai.png'>
  <br>
  <br>
  <h5>Čia bus įkelti maršrutai. Pvz.:</h5>
  <a href="#">Aplankykite 10 didžiausių Lietuvos ežerų</a>
  <br>
  <br>
  <img class="icons" src='Icons/Nuorodos.png'>
  <br>
  <br>
  <h5>Čia bus įkeltos nuorodos. Pvz.:</h5>
  <a href="#">Nuorodą į Nidoje esančius apribojimus karantino laikotarpiu</a>
  <br>
  <br>
  <img class="icons" src='Icons/Ar_žinai_kad.png'>
  <br>
  <br>
  <h5>Ar žinai, kad...</h5>
  <h6 id="DoYouKnow1"></h6>
  <h6 id="DoYouKnow2"></h6>
  <h6 id="DoYouKnow3"></h6>
  <h6 id="DoYouKnow4"></h6>
  <br>
  <img class="icons" src='Icons/Apklausos.png'>
  <br>
  <br>
  <h5>Čia bus įkeltos apklausos. Pvz.:</h5>
  <a href="#">Nuorodą į apklausą apie tai, kaip Jūsų manymu pasaulį paveikė Covid-19 pandemija</a>
  <br>
  <br>
  <a style="display:inline-block; font-size:0.87rem;" id="clear" class="btn btn-primary btn-lg btn-block" href="administrator" role="button">Grįžti atgal į panelę</a>
  <!---<a style="display:inline-block; font-size:0.87rem;" id="clear" class="btn btn-primary btn-lg btn-block" disabled>Dalintis savo įspūdžiais šioje šalyje</a>-->
  </div>
  <br>
  <br>

  <!-- KEITIMO FORMA -->
  <div class="keitimas" style="display: none; margin: 0 auto; max-width:90%; margin-top:5%; text-align:center;" >
  <form  method="POST" action="CountryChange.php" class="keisti_duomenis">
    <h1 style="text-transform: uppercase;">Valstybės informacijos keitimo forma</h1>
    <br>
    <h3>Bendroji informacija</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" style="display: none;" name="K1" class="form-control" placeholder="ISO 3166 (Alpha 2)" value="<?php echo $code;?>" >
      <input type="text" class="form-control" placeholder="ISO 3166 (Alpha 2)" value="<?php echo $code;?>" disabled>
    </div>
    <br>
    <div class="col">
      <input type="text" name="K2" class="form-control" placeholder="Šalies pavadinimas" value="<?php echo $countryLT;?>" readonly>
    </div>
    <br>
    <div class="col">
      <input type="text" name="K3" class="form-control" placeholder="Šalies sostinės pavadinimas" value="<?php echo $city;?>">
    </div>
    <br>
    <div class="col">
      <?php
        if($abbreviation!="null")
        {
      ?>
      <input type="text" name="K4" class="form-control" placeholder="Šalies trumpinys (jei turi)" value="<?php echo $abbreviation;?>">
      <?php
        } else {
      ?>
      <input type="text" name="K4" class="form-control" placeholder="Šalies trumpinys (jei turi)" value="">
       <?php
        } 
      ?>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="K5" class="form-control" placeholder="Šalies pavadinimas (EN) BŪTINAS ĮVEDIMAS" value="<?php echo $countryEN;?>" disabled>
    </div>
    <br>
    <div class="col">
      <input type="text" name="K6" class="form-control" placeholder="Šalies pavadinimas galininko linksniu (LT) BŪTINAS ĮVEDIMAS" value="<?php echo $countryGAL?>">
    </div>
    </div>
    <br>
    <h3>Vietovė</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="K7" class="form-control" placeholder="Kur yra" value="<?php echo $place;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K8" id="area1" class="form-control" placeholder="Plotas" value="<?php echo $area;?>">
    </div>
    <button type="button" id="AddToPlotas1" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    <div class="col">
      <input type="text" name="K9" class="form-control" placeholder="Aukščiausia vieta" value="<?php echo $high;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K10" class="form-control" placeholder="Žemiausia vieta" value="<?php echo $low;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="K11" class="form-control" placeholder="Ilgiausia upė" value="<?php echo $river;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K12" id="lake1" class="form-control" placeholder="Didžiausias ežeras" value="<?php echo $lake;?>">
    </div>
    <button type="button" id="AddToEžeras1" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    <div class="col">
      <input type="text" name="K13" id="island1" class="form-control" placeholder="Didžiausia sala (kai kurios)" value="<?php echo $island;?>">
    </div>
    <button type="button" id="AddToSala1" class="btn btn-primary btn-sm"><sup>2</sup></button>
    <br>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="K14" class="form-control" placeholder="Ilgiausias fjordas (kai kurios)" value="<?php echo $longest;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K15" class="form-control" placeholder="Giliausias ežeras (kai kurios)" value="<?php echo $deepest;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K16" class="form-control" placeholder="Eksteritorinės valdos (kai kurios)" value="<?php echo $terrirories;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <textarea class="form-control" id="KeitimasTextarea1" placeholder="Nutolusios valdos (kai kurios)" rows="2"><?php echo $distant;?></textarea>
    <input name="K17" id="inputas1" type="text" class="card-text" style="display: none;"></input>
    </div>
    </div>
    <br>
    <h3>Miestai</h3>
    <br>
    <!--</?php
      $line1=17;
      for($f=1;$f<=$skaiciusM;$f++) {
      $line1++;
    ?>-->
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K18" placeholder="Miestas 1" value="<?php echo $cities[1];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K19" placeholder="Miestas 2" value="<?php echo $cities[2];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K20" placeholder="Miestas 3" value="<?php echo $cities[3];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K21" placeholder="Miestas 4" value="<?php echo $cities[4];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K22" placeholder="Miestas 5" value="<?php echo $cities[5];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K23" placeholder="Miestas 6" value="<?php echo $cities[6];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K24" placeholder="Miestas 7" value="<?php echo $cities[7];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K25" placeholder="Miestas 8" value="<?php echo $cities[8];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K26" placeholder="Miestas 9" value="<?php echo $cities[9];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K27" placeholder="Miestas 10" value="<?php echo $cities[10];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K28" placeholder="Miestas 11" value="<?php echo $cities[11];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K29" placeholder="Miestas 12" value="<?php echo $cities[12];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K30" placeholder="Miestas 13" value="<?php echo $cities[13];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K31" placeholder="Miestas 14" value="<?php echo $cities[14];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K32" placeholder="Miestas 15" value="<?php echo $cities[15];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K33" placeholder="Miestas 16" value="<?php echo $cities[16];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K34" placeholder="Miestas 17" value="<?php echo $cities[17];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K35" placeholder="Miestas 18" value="<?php echo $cities[18];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K36" placeholder="Miestas 19" value="<?php echo $cities[19];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K37" placeholder="Miestas 20" value="<?php echo $cities[20];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K38" placeholder="Miestas 21" value="<?php echo $cities[21];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K39" placeholder="Miestas 22" value="<?php echo $cities[22];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K40" placeholder="Miestas 23" value="<?php echo $cities[23];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K41" placeholder="Miestas 24" value="<?php echo $cities[24];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K42" placeholder="Miestas 25" value="<?php echo $cities[25];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K43" placeholder="Miestas 26" value="<?php echo $cities[26];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K44" placeholder="Miestas 27" value="<?php echo $cities[27];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K45" placeholder="Miestas 28" value="<?php echo $cities[28];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K46" placeholder="Miestas 29" value="<?php echo $cities[29];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K47" placeholder="Miestas 30" value="<?php echo $cities[30];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K48" placeholder="Miestas 31" value="<?php echo $cities[31];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K49" placeholder="Miestas 32" value="<?php echo $cities[32];?>">
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" name="K50" placeholder="Miestas 33" value="<?php echo $cities[33];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K51" placeholder="Miestas 34" value="<?php echo $cities[34];?>">
      </div>
      <br>
      <div class="col">
      <input type="text" class="form-control" name="K52" placeholder="Miestas 35" value="<?php echo $cities[35];?>">
      </div>
      </div>
    <!--</?php
      }
    ?>-->
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K53" placeholder="Svarbiausias uostas" value="<?php echo $harbor;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K54" placeholder="Svarbiausias oro uostas" value="<?php echo $airport;?>">
    </div>
    </div>
    <br>
    <h3>Valstybė</h3>
    <br>
    <input type="text" class="form-control" name="K55" placeholder="Valdymo forma/santvarka" value="<?php echo $government;?>">
    <br>
    <textarea class="form-control"  id="KeitimasTextarea2" placeholder="Administracinis susiskirstymas" rows="2"><?php echo $district;?></textarea>
    <input name="K56" id="inputas4" type="text" class="card-text" style="display: none;"></input>
    <br>
    <h3>Gyventojai</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" id="people1" name="K57" class="form-control" placeholder="Gyventojų sk., mieste esančių (%), tankumas, vid. gyv. trukmė" value="<?php echo $people;?>">
    </div>
    <button type="button" id="AddToGyventojai1" class="btn btn-primary btn-sm"><sup>2</sup></button>
    </div>
    <br>
   
    <div class="row">
    <div class="col">
      <input type="text" id="increment1" name="K58" class="form-control" placeholder="Natūralus gyventojų prieaugis" value="<?php echo $growth;?>">
    </div>
    <button type="button" id="AddToPrieaugis1" class="btn btn-primary btn-sm">‰</button>
    <br>
    <div class="col">
      <input type="text" name="K59" class="form-control" placeholder="Etninės/rasinės grupės" value="<?php echo $groups;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K60" class="form-control" placeholder="Kalbos" value="<?php echo $languages;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" name="K61" class="form-control" placeholder="Raštingumas" value="<?php echo $literacy;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="K62" class="form-control" placeholder="Religijos" value="<?php echo $religion;?>">
    </div>
    </div>
    <br>
    <h3>Ekonomika</h3>
    <br>
    <div class="row">
    <div class="col">
        <textarea class="form-control"  id="KeitimasTextarea3" placeholder="Valiuta" rows="2"><?php echo $currency;?></textarea>
        <input name="K63" id="inputas5" type="text" class="card-text" style="display: none;"></input>
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K64" placeholder="BVP 1 gyv./metus" value="<?php echo $gdp;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K65" placeholder="Prekybos balansas" value="<?php echo $balance;?>">
    </div>
    </div>
    <br>
    <h3>Kiti rodikliai</h3>
    <br>
    <div class="row">
    <div class="col">
    <input type="text" class="form-control" name="K66" placeholder="ŽSRI" value="<?php echo $hdi;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K67" placeholder="Laimės indeksas" value="<?php echo $happiness;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K68" placeholder="Big Mac indeksas" value="<?php echo $BIGMAC;?>">
    </div>
    </div>
    <br>
    <h3>Lankytinos vietos</h3>
    <br>
    <h4>Gamtiniai objektai</h4>
    <br>
    <!--</?php
      $eilė1=68;
      for($i=1;$i<=$skaiciusG;$i++)
      {
        $eilė1++;
    ?>-->
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K69" placeholder="Gamtos obj. 1" value="<?php echo $nature[1];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K70" placeholder="Gamtos obj. 2" value="<?php echo $nature[2];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K71" placeholder="Gamtos obj. 3" value="<?php echo $nature[3];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K72" placeholder="Gamtos obj. 4" value="<?php echo $nature[4];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K73" placeholder="Gamtos obj. 5" value="<?php echo $nature[5];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K74" placeholder="Gamtos obj. 6" value="<?php echo $nature[6];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K75" placeholder="Gamtos obj. 7" value="<?php echo $nature[7];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K76" placeholder="Gamtos obj. 8" value="<?php echo $nature[8];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K77" placeholder="Gamtos obj. 9" value="<?php echo $nature[9];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K78" placeholder="Gamtos obj. 10" value="<?php echo $nature[10];?>">
    </div>
    </div>
    <!--</?php
      }
    ?>-->
    <br>
    <h4>Kultūriniai objektai</h4>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K79" placeholder="Kultūros obj. 1" value="<?php echo $culture[1];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K80" placeholder="Kultūros obj. 2" value="<?php echo $culture[2];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K81" placeholder="Kultūros obj. 3" value="<?php echo $culture[3];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K82" placeholder="Kultūros obj. 4" value="<?php echo $culture[4];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K83" placeholder="Kultūros obj. 5" value="<?php echo $culture[5];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K84" placeholder="Kultūros obj. 6" value="<?php echo $culture[6];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K85" placeholder="Kultūros obj. 7" value="<?php echo $culture[7];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K86" placeholder="Kultūros obj. 8" value="<?php echo $culture[8];?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K87" placeholder="Kultūros obj. 9" value="<?php echo $culture[9];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K88" placeholder="Kultūros obj. 10" value="<?php echo $culture[10];?>">
    </div>
    </div>
    <br>
    <h3>KITI PARAMETRAI (Ar žinai, kad ...)</h3>
    <br>
    <div class="row">
    <div class="col">
    <input type="text" class="form-control" name="K89" placeholder="Ar žinai, kad ..." value="<?php echo $DoYouKnow[1];?>">
    </div>
    <br>
    <div class="col">
    <input type="text" class="form-control" name="K90" placeholder="Ar žinai, kad ..." value="<?php echo $DoYouKnow[2];?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <input type="text" class="form-control" name="K91" placeholder="Ar žinai, kad ..." value="<?php echo $DoYouKnow[3];?>">
    </div>
    <br>
    <div class="col">
    <input type="text" class="form-control" name="K92" placeholder="Ar žinai, kad ..." value="<?php echo $DoYouKnow[4];?>">
    </div>
    </div>
    <br>
    <br>
    <h3>Sostinės informacija</h3>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K93" placeholder="Gyventojų sk." value="<?php echo $count;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K94" placeholder="Internetinio puslapio nuoroda" value="<?php echo $link;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K95" placeholder="Internetinio puslapio nuorodos pavadinimas" value="Nuoroda į miesto puslapį" value="<?php echo $linkName;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="K96" placeholder="Platuma" value="<?php echo $latitude;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" class="form-control" name="K97" placeholder="Ilguma" value="<?php echo $longitude;?>">
    </div>
    </div>
    <br>
    <button type="button" id="siunciu1" class="btn btn-outline-success btn-lg btn-block">Patvirtinti ir pakeisti</button>
    <br>
    </form>
    <div><h3 style="display:inline-block">NUOTRAUKOS</h3>
      <div>
        <img class="zoom" src="<?php echo $file1?>"><?php echo $file1?></img>
        <button id="keitimas1" type="button" class="btn btn-outline-info"><img id="keitimas2" src="images/arrow(1).png"></img></button>
        <form enctype="multipart/form-data" method="POST" action="PhotoChange.php">
        <input type="text" name="K002" class="form-control" style="display:none" value="<?php echo $code;?>">
        <div class="form-group input1" style="display:none">
        <label for="exampleFormControlFile1">KEISTI (Sostinės nuotrauka 1)</label>
        <input  type="file" name="sostinė1_1" class="form-control-file" id="exampleFormControlFile6">
        <br>
        <button id="keitimas11" name="K001" value="1" type="sumbit" class="btn btn-outline-success"><img id="keitimas12" src="images/tick(1).png"></img></button>
        </div>
        </form>
      </div>
      <div>
        <img class="zoom" src="<?php echo $file2?>"><?php echo $file2?></img>
        <button id="keitimas3" type="button" class="btn btn-outline-info"><img id="keitimas4" src="images/arrow(1).png"></img></button>
        <form enctype="multipart/form-data" method="POST" action="PhotoChange.php">
        <input type="text" name="K002" class="form-control" style="display:none" value="<?php echo $code;?>">
        <div class="form-group input2" style="display:none">
        <label for="exampleFormControlFile1">KEISTI (Sostinės nuotrauka 2)</label>
        <input  type="file" name="sostinė2_1" class="form-control-file" id="exampleFormControlFile7">
        <br>
        <button id="keitimas13" name="K001" value="2" type="sumbit" class="btn btn-outline-success"><img id="keitimas14" src="images/tick(1).png"></img></button>
        </div>
        </form>
      </div>
      <div>
        <img class="zoom" src="<?php echo $file3?>"><?php echo $file3?></img>
        <button id="keitimas5" type="button" class="btn btn-outline-info"><img id="keitimas6" src="images/arrow(1).png"></img></button>
        <form enctype="multipart/form-data" method="POST" action="PhotoChange.php">
        <input type="text" name="K002" class="form-control" style="display:none" value="<?php echo $code;?>">
        <div class="form-group input3" style="display:none">
        <label for="exampleFormControlFile1">KEISTI (Sostinės nuotrauka 3)</label>
        <input  type="file" name="sostinė3_1" class="form-control-file" id="exampleFormControlFile8">
        <br>
        <button id="keitimas15" name="K001" value="3" type="sumbit" class="btn btn-outline-success"><img id="keitimas16" src="images/tick(1).png"></img></button>
        </div>
        </form>
      </div>
      <div>
        <img class="zoom1" src="<?php echo $flag?>"><?php echo $flag?></img>
        <button id="keitimas7" type="button" class="btn btn-outline-info"><img id="keitimas8" src="images/arrow(1).png"></img></button>
        <form enctype="multipart/form-data" method="POST" action="PhotoChange.php">
        <input type="text" name="K002" class="form-control" style="display:none" value="<?php echo $code;?>">
        <div class="form-group input4" style="display:none">
        <label for="exampleFormControlFile1">KEISTI (Vėliava)</label>
        <input  type="file" name="vėliava_1" class="form-control-file" id="exampleFormControlFile9">
        <br>
        <button id="keitimas17" name="K001" value="4" type="sumbit" class="btn btn-outline-success"><img id="keitimas18" src="images/tick(1).png"></img></button>
        </div>
        </form>
      </div>
      <div>
        <img class="zoom" src="<?php echo $background?>"><?php echo $background?></img>
        <button id="keitimas9" type="button" class="btn btn-outline-info"><img id="keitimas10" src="images/arrow(1).png"></img></button>
        <form enctype="multipart/form-data" method="POST" action="PhotoChange.php">
        <input type="text" name="K002" class="form-control" style="display:none" value="<?php echo $code;?>">
        <div class="form-group input5" style="display:none">
        <label for="exampleFormControlFile1">KEISTI (Fonas)</label>
        <input type="file" name="fonas_1" class="form-control-file" id="exampleFormControlFile10">
        <br>
        <button id="keitimas19" name="K001" value="5" type="submit" class="btn btn-outline-success"><img id="keitimas20" src="images/tick(1).png"></img></button>
        </div>
        </form>
      </div>
    <!--<button type="button" class="btn btn-outline-danger btn-lg btn-block">Ištrinti</button>-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    </div>


    <!--<div class="footer">
    <p>2020, autoriaus teisės saugomos. Powered by <b>Benas Kubilius</b></p>
    </div>-->

</body>
