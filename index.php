<!doctype html>
<html lang="lt">
  <head>
	<script data-ad-client="ca-pub-9218139726910180" async 
	src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Šalys ir sostinės</title>
	<meta name="description" content="Šalys ir sostinės - tai platforma, kuri leidžia neišvykus iš namų, savo kompiuteryje ar mobiliajame įrenginyje pažinti visas pasaulio valstybes.">
	<meta name="keywords" content="šalys, sostinės, pasaulio valstybės, naujausia informacija, patikima, keliaujantiems, keliaujant, kelionė, išvyka">
	<link rel="stylesheet" href="Style.css?version=5">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="icon" href="favicon.png" type="image/x-icon">
    
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c662d04950.js" crossorigin="anonymous"></script>
	
	</head>
<body>
	
<style>
	@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap');
 	body{
    background-color: #eeeeee;
	font-family: 'Nunito', sans-serif;
	background-color: #eeeeee;
    background-image: url('');

    background-position: center center;
    background-repeat:  no-repeat;
    background-attachment: fixed;
    background-size:  cover;
	}
	body, html {
    height: 100%;
	}

	.autocomplete{
		position:relative;
	}
	input {
		border: 1px solid transparent;
		padding: 10px;
		font-size: 16px;
	}

	input[type=text] {
  		width: 100%;
	}

	input[type=submit] {
		background-color: DodgerBlue;
		color: #fff;
		cursor: pointer;
	}

	.autocomplete-items {
	position: absolute;
	border: 1px solid #d4d4d4;
	border-bottom: none;
	border-top: none;
	z-index: 99;
	top: 100%;
	left: 0;
	right: 0;
	}

	

	.autocomplete-items div {
	padding: 10px;
	cursor: pointer;
	background-color: #fff; 
	border-bottom: 1px solid #d4d4d4; 
	}

	.autocomplete-items div:hover {
	background-color: #e9e9e9; 
	}

	.autocomplete-active {
		background-color: DodgerBlue !important; 
		color: #ffffff; 
	}

	.vartotojas {
		position: fixed;
    	top: 2.5%;
    	right: 2.5%;
	}

	.vartotojas1 {
		position: fixed;
    	top: 10%;
    	right: 2.5%;
	}

	.account_info{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  		border-radius: 5px;
  		font-family: 'Nunito', sans-serif;
		background-color: white;
		display: none;
		position: sticky;
		left: 12.5%;
		max-width: 75%;
		margin: 0 auto;
		padding : 1%;
		padding-top: 5%;
		padding-bottom: 2%;
		margin-top: 1%;
	}

	.alert {
	font-family: 'Nunito', sans-serif;
	border-radius: 0rem;
	padding: 20px;
	background-color: #f44336;
	color: white;
	opacity: 1;
	transition: opacity 0.6s;
	margin-bottom: 15px;
	}
	.closebtn {
	margin-left: 15px;
	color: white;
	font-weight: bold;
	float: right;
	font-size: 22px;
	line-height: 20px;
	cursor: pointer;
	transition: 0.3s;
	}

	.closebtn:hover {
	color: black;
	}

	a,
	a:visited,
	a:hover,
	a:active {
	color: inherit;
	text-decoration: none;
	}

	#message {
	text-align: left;
	display:none;
	color: #000;
	}

	#message p {
	font-size: 15px;
	}


	.valid {
	color: green;
	}

	.valid:before {
	left: -35px;
	content: "✔";
	}


	.invalid {
	color: dimgray;
	}

	.invalid:before {
	left: -35px;
	content: "✖";
	}
</style>

	<script>
    <?php
	require '/home/u848932438/domains/countries-capitals.com/public_html/connections.php';
	$skaicius=0;
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT CountryLT FROM List WHERE Mode='Aktyvi'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$skaicius++;
		$masyvas[$skaicius]=$row['CountryLT'];
	}
	}


	$sql = "SELECT Abbreviations FROM List WHERE Abbreviations!='null' && Mode='Aktyvi'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$skaicius++;
		$masyvas[$skaicius]=$row['Abbreviations'];
	}
	}

	$sql = "SELECT City FROM Capital";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$laikinas=$row['City'];
		if(!in_array($laikinas, $masyvas)){
		$skaicius++;
		$masyvas[$skaicius]=$row['City'];
		}
	}
	}

	sort($masyvas);

	//$latitude = $_COOKIE['platuma'];
	//$longitude = $_COOKIE['ilguma'];
	//$nerasta = $_COOKIE['rezultatas'];

	$pavadinimasEN=$_COOKIE["Galutinis1"];
	$galininkas=$_COOKIE["Galutinis2"];
	$sostine=$_COOKIE["Galutinis3"];
	$veliava=$_COOKIE["Galutinis4"];
	$fonas=$_COOKIE["Galutinis5"];
	$populiacija=$_COOKIE["Galutinis6"];
	$nuoroda=$_COOKIE["Galutinis7"];
	$nuorodos_pav=$_COOKIE["Galutinis8"];
	$platuma=$_COOKIE["Galutinis9"];
	$ilguma=$_COOKIE["Galutinis10"];
	$nuotrauka1=$_COOKIE['Galutinis11'];
	$nuotrauka2=$_COOKIE['Galutinis12'];
	$nuotrauka3=$_COOKIE['Galutinis13'];
	$kur_yra=$_COOKIE['Galutinis14'];
	$plotas=$_COOKIE['Galutinis15'];
	$auksta=$_COOKIE['Galutinis16'];
	$zema=$_COOKIE['Galutinis17'];
	$upe=$_COOKIE['Galutinis18'];
	$ezeras=$_COOKIE['Galutinis19'];
	$sala=$_COOKIE['Galutinis20'];
	$fjordas=$_COOKIE['Galutinis21'];
	$gilus=$_COOKIE['Galutinis22'];
	$teritorijos=$_COOKIE['Galutinis23'];
	$nutole=$_COOKIE['Galutinis24'];
	$miestuSK=$_COOKIE['Galutinis25'];
	$miestai = unserialize($_COOKIE['Galutinis26'], ["allowed_classes" => false]);
	$uostas=$_COOKIE['Galutinis27'];
	$oro_uostas=$_COOKIE['Galutinis28'];
	$valdymas=$_COOKIE['Galutinis29'];
	$susiskirstymas=$_COOKIE['Galutinis30'];
	$gyventojai=$_COOKIE['Galutinis31'];
	$prieaugis=$_COOKIE['Galutinis32'];
	$grupes=$_COOKIE['Galutinis33'];
	$kalbos=$_COOKIE['Galutinis34'];
	$rastingumas=$_COOKIE['Galutinis35'];
	$religija=$_COOKIE['Galutinis36'];
	$valiuta=$_COOKIE['Galutinis37'];
	$BVP=$_COOKIE['Galutinis38'];
	$balansas=$_COOKIE['Galutinis39'];
	$ZSRI=$_COOKIE['Galutinis40'];
	$laimes_indeksas=$_COOKIE['Galutinis41'];
	$big_mac=$_COOKIE['Galutinis42'];
	$gamtaSK=$_COOKIE['Galutinis43'];
	$gamtos_objektai = unserialize($_COOKIE['Galutinis44'], ["allowed_classes" => false]);
	$kulturaSK=$_COOKIE['Galutinis45'];
	$kulturos_objektai = unserialize($_COOKIE['Galutinis46'], ["allowed_classes" => false]);
	$zemelapiaiSK=$_COOKIE['Galutinis47'];
	$zemelapiai = unserialize($_COOKIE['Galutinis48'], ["allowed_classes" => false]);
	$Znuorodos = unserialize($_COOKIE['Galutinis49'], ["allowed_classes" => false]);
	$marsrutaiSK=$_COOKIE['Galutinis50'];
	$marsrutai = unserialize($_COOKIE['Galutinis51'], ["allowed_classes" => false]);
	$Mnuorodos = unserialize($_COOKIE['Galutinis52'], ["allowed_classes" => false]);
	$svetaineSK=$_COOKIE['Galutinis53'];
	$svetaines = unserialize($_COOKIE['Galutinis54'], ["allowed_classes" => false]);
	$Snuorodos = unserialize($_COOKIE['Galutinis55'], ["allowed_classes" => false]);
	$faktaiSK=$_COOKIE['Galutinis56'];
	$faktai = unserialize($_COOKIE['Galutinis57'], ["allowed_classes" => false]);
	$apklausaSK=$_COOKIE['Galutinis58'];
	$apklausos = unserialize($_COOKIE['Galutinis59'], ["allowed_classes" => false]);
	$Anuorodos = unserialize($_COOKIE['Galutinis60'], ["allowed_classes" => false]);
	$pavadinimasLT=$_COOKIE['Galutinis61'];

	$code=unserialize($_COOKIE['Laikinasis'], ["allowed_classes" => false]);
	if(isset($_COOKIE["Laikinasis"])) {
		$tikrinti=0;
    }
    else{
		$tikrinti=1;
	}

	$code = (int)$code;

	$VI1=0;
    $sql = "SELECT ID, Title, Script, Picture1, Picture2, Picture3, Picture4, CountryEN, Rating, Created FROM Stories WHERE Mode='Aktyvi' && CountryEN='$pavadinimasEN'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $VI1++;
        $VI2[$VI1]=$row['ID'];
        $VI3[$VI1]=$row['Title'];
        $VI4[$VI1]=$row['Script'];
        $VI5[$VI1]=$row['Picture1'];
        $VI6[$VI1]=$row['Picture2'];
        $VI7[$VI1]=$row['Picture3'];
		$VI8[$VI1]=$row['Picture4'];
        $VI9[$VI1]=$row['Rating'];
        $data[$VI1]=$row['Created'];
	 }
	}

	array_multisort($data, SORT_DESC, $VI2, $VI3, $VI4, $VI5, $VI6, $VI7, $VI8, $VI9);
	
	$sql = "SELECT ID, FirstName, Email, Parole FROM Users WHERE Mode='Aktyvi' && Generated_code='$code'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$user=$row['FirstName'];
		$ID=$row['ID'];
		$email=$row['Email'];
		$password=$row['Parole'];
	 }
	}
	
	

	?>
    $(document).ready(function(){
	  $(".account_info").hide();
	  var str = window.location.href;
      document.body.style.backgroundImage = 'url("back.jpg")';
      $( "#city_22" ).css( "display", "none" );
      $( "#city_23" ).css( "display", "none" );
      $( "#city_24" ).css( "display", "none" );
	  $( "#city_25" ).css( "display", "none" );
      $( "#city_26" ).css( "display", "none" );
      $( "#city_27" ).css( "display", "none" );
	  $( "#city_28" ).css( "display", "none" );
      $( "#city_29" ).css( "display", "none" );
      $( "#city_30" ).css( "display", "none" );
	  $( "#city_31" ).css( "display", "none" );
      $( "#city_32" ).css( "display", "none" );
      $( "#city_33" ).css( "display", "none" );
	  $( "#city_34" ).css( "display", "none" );
      $( "#city_35" ).css( "display", "none" );
      /*$('.carousel').carousel({
  			interval: 2000
		})*/
      $( ".forma" ).css( "display", "block" );

	  var countries = <?php echo json_encode($masyvas); ?>;
	  var count = <?php echo $skaicius; ?>;

		if(str.includes("?status=user") && <?php echo $tikrinti;?>==1){
		window.location.href="https://countries-capitals.com/log";
		}


	  $(".mygtukas").click(function(){
		window.location.href="https://countries-capitals.com/log";
	  });
	  $(".blog").click(function(){
		window.location.href="https://blog.countries-capitals.com/lt";
	  });

	  $("#enter").click(function(){
		var tekstas = $('#myInput').val();
		var radau = 0;
		for(i=0; i<count; i++){
			if(countries[i].toLocaleUpperCase() == tekstas.toLocaleUpperCase()){
				$('.search').submit();
				radau = 1;
			}
		}
		if(radau==0){
			$('#myInput').val("");
			Swal.fire({
  		  	icon: 'error',
  			title: 'Oops...',
            html:
 			'<h4> Nieko rasti nepavyko! Bandykite dar kartą </h4>' +
            '<br>' +
			'<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			})
		}
	  });

	  if(str.includes("?activated")){
		Swal.fire({
  		icon: 'success',
        html:
 		'<h4><b> Paskyra aktyvuota! Sveikiname tapus „Šalys ir sostinės” vartotoju. Pažink šalis ir dalinkis savo įspūdžiais aplankytose šalyse</b></h4>' +
        '<br>' +
		'<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
		}).then(function() {
			window.location = "index?status=user";
		});
	  }
	  /*if(str.includes("?status=user")){

	  }*/
	  if(str.includes("?changedata")){
		$(".account_info").show();
		$( ".forma" ).css( "display", "none" );
	  }

	  if(str.includes("?result")){
		document.body.style.backgroundImage = 'url(<?php echo $fonas; ?>)';
		$(".forma").css( "display", "none" );
		$( ".nuotraukos" ).css( "display", "block" );
		$( ".capital_info" ).css( "display", "block" );
		$( ".reklama" ).css( "display", "block" );
		$( ".country_info" ).css( "display", "block" );
		$( ".faktai" ).css( "display", "block" );
		$( ".miestai" ).css( "display", "block" );
		$( "#circularMenu" ).css( "display", "block" );
		circularMenu
	  }
	  if(str.includes("?stories")){
		document.body.style.backgroundImage = 'url(<?php echo $fonas; ?>)';
		$(".forma").css( "display", "none" );
		$( ".nuotraukos" ).css( "display", "none" );
		$( ".capital_info" ).css( "display", "none" );
		$( ".reklama" ).css( "display", "none" );
		$( ".country_info" ).css( "display", "none" );
		$( ".faktai" ).css( "display", "none" );
		$( ".miestai" ).css( "display", "none" );
		$( ".komentarai" ).css( "display", "block" );
		$( ".pateikti" ).css( "display", "block" );
		$( "#circularMenu" ).css( "display", "none" );
	  }

	function autocomplete(inp, arr) {
	/*the autocomplete function takes two arguments,
	the text field element and an array of possible autocompleted values:*/
	var currentFocus;
	/*execute a function when someone writes in the text field:*/
	inp.addEventListener("input", function(e) {
		var a, b, i, val = this.value;
		/*close any already open lists of autocompleted values*/
		closeAllLists();
		if (!val) { return false;}
		currentFocus = -1;
		/*create a DIV element that will contain the items (values):*/
		a = document.createElement("DIV");
		a.setAttribute("id", this.id + "autocomplete-list");
		a.setAttribute("class", "autocomplete-items");
		/*append the DIV element as a child of the autocomplete container:*/
		this.parentNode.appendChild(a);
		/*for each item in the array...*/
		for (i = 0; i < arr.length; i++) {
			/*check if the item starts with the same letters as the text field value:*/
			if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
			/*create a DIV element for each matching element:*/
			b = document.createElement("DIV");
			/*make the matching letters bold:*/
			b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
			b.innerHTML += arr[i].substr(val.length);
			/*insert a input field that will hold the current array item's value:*/
			b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
			/*execute a function when someone clicks on the item value (DIV element):*/
			b.addEventListener("click", function(e) {
				/*insert the value for the autocomplete text field:*/
				inp.value = this.getElementsByTagName("input")[0].value;
				/*close the list of autocompleted values,
				(or any other open lists of autocompleted values:*/
				closeAllLists();
			});
			a.appendChild(b);
			}
		}
	});
	/*execute a function presses a key on the keyboard:*/
	inp.addEventListener("keydown", function(e) {
		var x = document.getElementById(this.id + "autocomplete-list");
		if (x) x = x.getElementsByTagName("div");
		if (e.keyCode == 40) {
			/*If the arrow DOWN key is pressed,
			increase the currentFocus variable:*/
			currentFocus++;
			/*and and make the current item more visible:*/
			addActive(x);
		} else if (e.keyCode == 38) { //up
			/*If the arrow UP key is pressed,
			decrease the currentFocus variable:*/
			currentFocus--;
			/*and and make the current item more visible:*/
			addActive(x);
		} else if (e.keyCode == 13) {
			/*If the ENTER key is pressed, prevent the form from being submitted,*/
			e.preventDefault();
			if (currentFocus > -1) {
			/*and simulate a click on the "active" item:*/
			if (x) x[currentFocus].click();
			}
		}
	});
	function addActive(x) {
		/*a function to classify an item as "active":*/
		if (!x) return false;
		/*start by removing the "active" class on all items:*/
		removeActive(x);
		if (currentFocus >= x.length) currentFocus = 0;
		if (currentFocus < 0) currentFocus = (x.length - 1);
		/*add class "autocomplete-active":*/
		x[currentFocus].classList.add("autocomplete-active");
	}
	function removeActive(x) {
		/*a function to remove the "active" class from all autocomplete items:*/
		for (var i = 0; i < x.length; i++) {
		x[i].classList.remove("autocomplete-active");
		}
	}
	function closeAllLists(elmnt) {
		/*close all autocomplete lists in the document,
		except the one passed as an argument:*/
		var x = document.getElementsByClassName("autocomplete-items");
		for (var i = 0; i < x.length; i++) {
		if (elmnt != x[i] && elmnt != inp) {
			x[i].parentNode.removeChild(x[i]);
		}
		}
	}
	/*execute a function when someone clicks in the document:*/
	document.addEventListener("click", function (e) {
		closeAllLists(e.target);
	});
}

/*An array containing all the country names in the world:*/

//var countries = ["Afganistanas", "Airija", "Albanija", "Alžyras", "Andora", "Angola", "Antigva ir Barbuda", "Argentina", "Armėnija", "Australija", "Austrija", "Azerbaidžanas", "Bahamos", "Bahreinas", "Bangladešas", "Barbadosas", "Belgija", "Belizas", "Beninas", "Bisau Gvinėja", "Bolivija", "Bosnija ir Hercegovina", "Botsvana", "Brazilija", "Brunėjus", "Bulgarija", "Burkina Fasas", "Burundis", "Butanas", "Centrinės Afrikos Respublika", "Čadas", "Čekija", "Čilė", "Danija", "Didžioji Britanija", "Jungtinė Karalystė", "Dominika", "Dominikos Respublika", "Dramblio Kaulo Krantas", "Džibutis", "Egiptas", "Ekvadoras", "Eritrėja", "Estija", "Etiopija", "Fidžis", "Filipinai", "Gabonas", "Gajana", "Gambija", "Gana", "Graikija", "Grenada", "Gruzija", "Gudija", "Baltarusija", "Gvatemala", "Gvinėja", "Haitis", "Hondūras", "Indija", "Indonezija", "Irakas", "Iranas", "Islandija", "Ispanija", "Italija", "Izraelis", "Jamaika", "Japonija", "Jemenas", "Jordanija", "Jungtiniai Arabų Emyratai", "JAE", "Jungtinės Amerikos Valstijos", "JK", "JAV", "Juodkalnija", "Kambodža", "Kamerūnas", "Kanada", "Kataras", "Kazachstanas", "Kazachija", "Kenija", "Kinija", "Kipras", "Kirgizstanas", "Kirgizija", "Kiribatis", "Kolumbija", "Komorai", "Kongas", "Kongo Demokratinė Respublika", "Kosova", "Kosta Rika", "Kroatija", "Kuba", "Kuveitas", "Laosas", "Latvija", "Lenkija", "Lesotas", "Libanas", "Liberija", "Libija", "Lichtenšteinas", "Lietuva", "Liuksemburgas", "Madagaskaras", "Makedonija", "Malaizija", "Malavis", "Maldyvai", "Malis", "Malta", "Marokas", "Maršalo Salos", "Mauricijus", "Mauritanija", "Meksika", "Mianmaras", "Birma", "Mikronezija", "Moldova", "Moldavija", "Monakas", "Mongolija", "Mozambikas", "Namibija", "Naujoji Zelandija", "Nauru", "Nepalas", "Nigerija", "Nigeris", "Nikaragva", "Norvegija", "Olandija", "Nyderlandai", "Omanas", "Pakistanas", "Palau", "Panama", "Papua Naujoji Gvinėja", "Paragvajus", "Peru", "Pietų Afrika", "Pietų Afrikos respublika", "PAR", "Pietų Korėja", "Pietų Sudanas", "Portugalija", "Prancūzija", "Pusiaujo Gvinėja", "Rytų Timoras", "Ruanda", "Rumunija", "Rusija", "Saliamono Salos", "Salvadoras", "Samoa", "San Marinas", "San Tomė ir Prinsipė", "Saudo Arabija", "Seišeliai", "Senegalas", "Sent Kitsas ir Nevis", "Sent Lusija", "Sent Vinsentas ir Grenadinai", "Serbija", "Siera Leonė", "Singapūras", "Sirija", "Slovakija", "Slovėnija", "Somalis", "Sudanas", "Suomija", "Surinamas", "Esvatinis", "Šiaurės Korėja", "Šri Lanka", "Švedija", "Šveicarija", "Tadžikistanas", "Tadžikija", "Tailandas", "Taivanas", "Tanzanija", "Togas", "Tonga", "Trinidadas ir Tobagas", "Tunisas", "Turkija", "Turkmėnistanas", "Turkmėnija", "Tuvalu", "Uganda", "Ukraina", "Urugvajus", "Uzbekistanas", "Uzbekija", "Vakarų Sachara", "Vanuatu", "Vatikanas", "Venesuela", "Vengrija", "Vietnamas", "Vokietija", "VFR", "Zambija", "Zimbabvė", "Žaliasis Kyšulys"];
countries.sort();
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

	// Get the input field
	var input = document.getElementById("myInput");

	// Execute a function when the user releases a key on the keyboard
	input.addEventListener("keyup", function(event) {
	// Number 13 is the "Enter" key on the keyboard
	if (event.keyCode === 13) {
		// Cancel the default action, if needed
		event.preventDefault();
		// Trigger the button element with a click
		document.getElementById("enter").click();
	}
	}); 
      	if(str.includes("?find=success")){
          	$( ".forma" ).css( "display", "none" );
          	$( ".capital_info" ).css( "display", "block" );
          	$( ".country_info" ).css( "display", "block" );
          	$( ".nuotraukos" ).css( "display", "block" );
        }
		/*</?php if($nerasta == 1) { 
			$nerasta="false";
			$_COOKIE['rezultatas']=$nerasta;
		?>
			Swal.fire({
  		  	icon: 'error',
  			title: 'Oops...',
            html:
 			'<h4> Nieko rasti nepavyko! Bandykite dar kartą </h4>' +
            '<br>' +
			'<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			})
		</?php 
		} ?>*/

		if(str.includes("?changed=success")){
			Swal.fire({
  		  	icon: 'success',
        	html:
 			  '<h4> Paskyros duomenys buvo sėkmingai pakeisti!</h4>' +
        	  '<br>' +
			  '<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			  })
		}
		if(str.includes("?changed=fail")){
			Swal.fire({
  		  	icon: 'error',
        	html:
 			'<h4> Paskyros duomenų pakeisti nepavyko! Bandykite dar kartą </h4>' +
        	'<br>' +
			'<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			})
		}

		if(str.includes("?uploaded=success")){
			Swal.fire({
  		  	icon: 'success',
        	html:
 			  '<h4> Jūsų įspūdžiai sėkmingai išsaugoti!</h4>' +
        	  '<br>' +
			  '<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			  })
		}
		if(str.includes("?uploaded=fail")){
			Swal.fire({
  		  	icon: 'error',
        	html:
 			'<h4> Jūsų įspūdžių išsaugoti nepavyko &#128533 ! Bandykite dar kartą </h4>' +
        	'<br>' +
			'<p>Pamatei klaidą ar iškilo techninių bėdų, susiekite: <a style="color:dodgerblue; text-decoration:none;" href="mailto:pagalba@bkworks.lt"><strong> pagalba@bkworks.lt</strong></a></p>'
			})
		}

		if(str.includes("?rate=success")){
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				onOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'success',
				title: 'Įvertinimas sėkmingas'
			})
		}
		if(str.includes("?rate=fail")){
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				onOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'error',
				title: 'Įvertininti nepavyko'
			})
		}

        $('#clear').click(function() {
		$('#myInput').val('');
		});

		/*$('#back').click(function() {
		window.location.href="https://countries-capitals.com/index?status=user?back";
		});
		$('#back1').click(function() {
		window.location.href="https://countries-capitals.com/index?back";
		});*/
		$("#go").click(function() {
		window.location.href="https://countries-capitals.com/index?status=user?stories";
		});
		$("#go1").click(function() {
		window.location.href="https://countries-capitals.com/index?stories";
		});

		var close = document.getElementsByClassName("closebtn");
		var i;

		for (i = 0; i < close.length; i++) {
		close[i].onclick = function(){
			var div = this.parentElement;
			div.style.opacity = "0";
			setTimeout(function(){ div.style.display = "none"; }, 600);
		}
		}

		var skaicius=0;
		$('#more').click(function() {
			skaicius++;
			console.log(skaicius);
			if(skaicius==1)
			{
				$(".antra").css("display", "block");
			}
			else if(skaicius==2)
			{
				$(".trecia").css("display", "block");
			}
			else if(skaicius==3)
			{
				$(".ketvirta").css("display", "block");
				$("#more").css("display", "none");
			}
		});

		document.querySelector('.Copy').onclick = function() {
			Clipboard_CopyTo('https://countries-capitals.com/finder?country=<?php echo $pavadinimasLT; ?>');
			const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
			})

			Toast.fire({
			icon: 'success',
			title: 'Nuoroda nukopijuota'
			})
		}

		var myInput = document.getElementById("change2");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {  
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
          }
          
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {  
            capital.classList.remove("invalid");
            capital.classList.add("valid");
          } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
          }

          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {  
            number.classList.remove("invalid");
            number.classList.add("valid");
          } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
          }
          
          // Validate length
          if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
          } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
          }
        }
	});

	function Clipboard_CopyTo(value) {
	var tempInput = document.createElement("input");
	tempInput.value = value;
	document.body.appendChild(tempInput);
	tempInput.select();
	document.execCommand("copy");
	document.body.removeChild(tempInput);
	}

	
  </script>
  <div class="bg-image"></div>

  <div class="alert" style="text-align:center; display:none;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <b>„Šalys ir sostinės” atsinaujina <i class="fa fa-cogs" aria-hidden="true"></i>.</b> Svetainė nebus prieinama š.m. gruodžio 18-20 d. iki 24:00 <i class="fa fa-clock-o" aria-hidden="true"></i>. Atsiprašome už laikinus nepatogumus.</b>
	</div> 

	<div id="circularMenu" class="circular-menu" style="z-index:10; display:none">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
    <i class="fa fa-plus"></i>
  </a>

  <menu class="items-wrapper">
	<p></p>
	<p style="cursor: pointer;" class="menu-item Copy"><i class="fas fa-share-square"></i></p>
	<a style="cursor: pointer;" href="https://www.facebook.com/sharer/sharer.php?u=https://countries-capitals.com/finder?country=<?php echo $pavadinimasLT; ?>" target="_blank" class="menu-item"><i class="fab fa-facebook"></i></a>
	<a style="cursor: pointer;" href="https://twitter.com/intent/tweet?url=countries-capitals.com/finder?country=<?php echo $pavadinimasLT; ?>&text=Sužinok viską apie <?php echo $galininkas; ?>" target="_blank" class="menu-item"><i class="fab fa-twitter"></i></a>
  </menu>

	</div>

	<?php if(isset($ID) && $ID !== ''){ ?>
	<div id="circularMenu1" class="circular-menu circular-menu-left selectas" style="z-index:10;">

	<a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
		<i class="fa fa-bars"></i>
	</a>

	<menu class="items-wrapper">
		<a href="index?status=user" class="menu-item fas fa-home"></a>
		<a href="index?status=user?changedata" class="menu-item fas fa-cog"></a>
		<a href="mailto:pagalba@bkworks.lt" class="menu-item fas fa-envelope-open-text"></a>
		<a href="logout" class="menu-item fas fa-sign-out-alt"></a>
	</menu>

	</div>
	<?php } ?>


  <div class='forma'>
	<img id="myPhoto" style="margin-bottom:25%" src="street-map.png" width="90%" height="90%">
   
    <h1>Šalys ir sostinės</h1>
    <br>
	<form class="search" autocomplete="off" action="finder.php" method="POST">
		<div class="autocomplete">
			<label for="myInput">Įveskite šalies arba sostinės pavadinimą</label>
			<input id="myInput" type="search" name="myCountry" class="form-control" required>
			<small id="emailHelp" class="form-text text-muted">Veskite tik lietuviškais rašmenimis</small>
		</div>
		<button id="enter" type="button" style="display:inline-block" class="btn btn-primary" >Ieškoti</button>
	</form>
    <br>
	<p>Daugelis duomenų naudota iš knygos „Šalys ir skaičiai, 2019“</p>
	<a href="https://bkworks.lt" target='_blank'><h6><p>&copy; BKWORKS, 2021<p></h6></a>
	<br>
	<?php if(!isset($ID) && $ID !== ''){ ?>
	<button id="login1" type="button" class="btn btn-outline-dark mygtukas">PRISIJUNGIMAS</button>
	<?php } ?>
	<button type="button" class="btn btn-outline-dark blog">NAUJIENOS</button>
	<!--<br>
	<br>
	<a href="finder.php?country=Vilnius"><button type="button" class="btn btn-outline-dark blog">EXAMPLE FOR GOOGLE ADSENSE</button></a>-->
  	</div>

	<div class = "capital_info" >
		<h1 id="capital_name" ><?php echo $sostine;?></h1>
		<br>
		<h6 id="capital_coordinates">Miesto koordinatės: <?php echo $platuma;?> <?php echo $ilguma;?></h6>
		<br>
		<h6 id="capital_population"><?php echo $populiacija;?></h6>
		<br>
		<a id="capital_website" style='color:#3399FF;' href="<?php echo $nuoroda;?>" target="_blank"><?php echo $nuorodos_pav;?></a>
	</div>

	<div class='reklama'>
		<h1>Advertisement place</h1>
		<br>
		<!--<p>Countries and Capitals is a website that allows one to get to know all the countries in the world on one's computer or mobile device without leaving home. The site provides a wide range of data, such as "HDI", "Happiness Index", "GDP" and many others.
		<br>Registered users can share their impressions and photos of the places they have visited.
		</p>-->
	</div>
		
	<div id="carouselExampleIndicators" class="carousel slide nuotraukos" data-ride="carousel" data-interval="2000">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
		<img id="capital_photo_1" src="<?php echo $nuotrauka1;?>" class="d-block w-100">
		</div>
		<div class="carousel-item">
		<img id="capital_photo_2" src="<?php echo $nuotrauka2;?>" class="d-block w-100">
		</div>
		<div class="carousel-item">
		<img id="capital_photo_3" src="<?php echo $nuotrauka3;?>" class="d-block w-100">
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


	
	
		<div class = "country_info">
		<h1 id="country_name" >Trumpai apie <?php echo $galininkas;?>... </h1>
		<br>
		
		<img id="flag_image" src='<?php echo $veliava;?>'>
		<br>
		<br>
		<img class="icons" src='Icons/Vietovė.png'>
		<br>
		<br>
		<h6><?php echo $kur_yra;?></h6>
		<h6><?php echo $plotas;?></h6>
		<?php
			if(isset($auksta) && $auksta !== '')
			{
		?>
				<h6><?php echo $auksta;?></h6>
		<?php
			}
		?>

		<?php
			if(isset($zema) && $zema !== '')
			{
		?>
				<h6><?php echo $zema;?></h6>
		<?php
			}
		?>

		<?php
			if(isset($upe) && $upe !== '')
			{
		?>
				<h6><?php echo $upe;?></h6>
		<?php
			}
		?>

		<?php	
			if(isset($ezeras) && $ezeras !== '')
			{
		?>
				<h6><?php echo $ezeras;?></h6>
		<?php
			}
		?>

		<?php	
			if(isset($sala) && $sala !== '')
			{
		?>
				<h6><?php echo $sala;?></h6>
		<?php
			}
		?>

		<?php	
			if(isset($fjordas) && $fjordas !== '')
			{
		?>
				<h6><?php echo $fjordas;?></h6>
		<?php
			}
		?>
	
		<?php	
			if(isset($gilus) && $gilus !== '')
			{
		?>
				<h6><?php echo $gilus;?></h6>
		<?php
			}
		?>	

		<?php	
			if(isset($teritorijos) && $teritorijos !== '')
			{
		?>
				<h6><?php echo $teritorijos;?></h6>
		<?php
			}
		?>

		<?php	
			if(isset($nutole) && $nutole !== '')
			{
		?>
				<h6><?php echo $nutole;?></h6>
		<?php
			}
		?>
		
		
		<br>
		<br> 
		<img class="icons" src='Icons/Valdymas.png'>
		<br>
		<br> 
		<?php	
			if(isset($valdymas) && $valdymas !== '')
			{
		?>
				<h6><?php echo $valdymas;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($susiskirstymas) && $susiskirstymas !== '')
			{
		?>
				<h6><?php echo $susiskirstymas;?></h6>
		<?php
			}
		?>
		<br>
		<br> 
		<img class="icons" src='Icons/Gyventojai.png'>
		<br>
		<br>  
		<?php	
			if(isset($gyventojai) && $gyventojai !== '')
			{
		?>
				<h6><?php echo $gyventojai;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($prieaugis) && $prieaugis !== '' && strpos( $prieaugis,'-') !== false)
			{
		?>
				<h6 style="display:inline-block;">Natūralus gyventojų prieaugis:&nbsp;&nbsp;</h6><h6 style="color:red; display:inline-block;"> <?php echo $prieaugis;?></h6>
		<?php
			}else if(isset($prieaugis) && $prieaugis !== '' && strpos( $prieaugis,'-') === false){
		?>
				<h6 style="display:inline-block;">Natūralus gyventojų prieaugis:&nbsp;&nbsp;</h6><h6 style="color:green; display:inline-block;"> <?php echo $prieaugis;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($grupes) && $grupes !== '')
			{
		?>
				<h6><?php echo $grupes;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($kalbos) && $kalbos !== '')
			{
		?>
				<h6><?php echo $kalbos;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($rastingumas) && $rastingumas !== '')
			{
		?>
				<h6><?php echo $rastingumas;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($religija) && $religija !== '')
			{
		?>
				<h6><?php echo $religija;?></h6>
		<?php
			}
		?>
		<br>
		<br>
		<img class="icons" src='Icons/Ekonomika.png'>
		<br>  
		<br>
		<?php	
			if(isset($valiuta) && $valiuta !== '')
			{
		?>
				<h6><?php echo $valiuta;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($BVP) && $BVP !== '')
			{
		?>
				<h6><?php echo $BVP;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($balansas) && $balansas !== '' && strpos( $balansas,'-') !== false)
			{
		?>
				<h6 style="display:inline-block;">Užsienio prekybos balansas (2019 m.):&nbsp;&nbsp;</h6><h6 style="color:red; display:inline-block;"> <?php echo $balansas;?></h6>
		<?php
			}else if(isset($balansas) && $balansas !== '' && strpos( $balansas,'-') === false){
		?>
				<h6 style="display:inline-block;">Užsienio prekybos balansas (2019 m.):&nbsp;&nbsp;</h6><h6 style="color:green; display:inline-block;"> <?php echo $balansas;?></h6>
		<?php
			}
		?>
		<br>
		<br>
		<?php if((isset($ZSRI) && $ZSRI !== '') || (isset($laimes_indeksas) && $laimes_indeksas !== '') || (isset($big_mac) && $big_mac !== '')){  ?>
		<img class="icons" src='Icons/Rodikliai.png'>
		<br>  
		<br>
		<?php } ?>
		<?php	
			if(isset($ZSRI) && $ZSRI !== '')
			{
		?>
				<h6><?php echo $ZSRI;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($laimes_indeksas) && $laimes_indeksas !== '')
			{
		?>
				<h6><?php echo $laimes_indeksas;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($big_mac) && $big_mac !== '')
			{
		?>
				<h6><?php echo $big_mac;?></h6>
		<?php
			}
		?>
		<br>
		<br>
		<?php
			if($gamtaSK!=0 || $kulturaSK!=0) {
		?>
		<img class="icons" src='Icons/Lankytinos_vietos.png'>
		<br>
		<br>

		<?php
		}
		?>
		<?php	
			if($gamtaSK!=0)
			{
		?>
				<h5>Gamtiniai objektai</h5>
		<?php
			}
		?>
		<?php

			for($i=0;$i<$gamtaSK;$i++)
			{
		?>
				<h6><?php echo $gamtos_objektai[$i];?></h6>
		<?php
			}
		?>
		<?php	
			if($kulturaSK!=0)
			{
		?>
				<br>
				<h5>Kultūriniai objektai</h5>
		<?php
			}
		?>
		<?php
			for($i=0;$i<$kulturaSK;$i++)
			{
		?>
			<h6><?php echo $kulturos_objektai[$i];?></h6>
		<?php
			}
		?>
		<br>
		<br>
		<?php	
			if($zemelapiaiSK!=0)
			{
		?>
		<img class="icons" src='Icons/Žemėlapiai.png'>
		<br>
		<br>
		<?php
			}
		?>
		<?php
			for($i=1;$i<=$zemelapiaiSK;$i++)
			{
		?>
			<a style="display:block" href="</?php echo $Znuorodos[$i];?>" target="_blank"><?php echo $zemelapiai[$i];?></a>
		<?php
			}
		?>
		<?php	
			if($marsrutaiSK!=0)
			{
		?>
		<br>
		<img class="icons" src='Icons/Maršrutai.png'>
		<br>
		<br>
		<?php
			}
		?>
		<?php
			for($i=1;$i<=$marsrutaiSK;$i++)
			{
		?>
			<a style="display:block" href="</?php echo $Mnuorodos[$i];?>" target="_blank"><?php echo $marsrutai[$i];?></a>
		<?php
			}
		?>
		<?php	
			if($marsrutaiSK!=0)
			{
		?>
		<br>
		<br>
		<img class="icons" src='Icons/Nuorodos.png'>
		<br>
		<br>
		<?php
			}
		?>
		<?php
			for($i=1;$i<=$svetaineSK;$i++)
			{
		?>
			<a style="display:block" href="</?php echo $Snuorodos[$i];?>" target="_blank"><?php echo $svetaines[$i];?></a>
		<?php
			}
		?>
		<?php	
			if($apklausaSK!=0)
			{
		?>
		<br>
		<br>
		<img class="icons" src='Icons/Apklausos.png'>
		<br>
		<br>
		<?php
			}
		?>
		<?php
			for($i=1;$i<=$apklausaSK;$i++)
			{
		?>
			<a style="display:block" href="</?php echo $Anuorodos[$i];?>" target="_blank"><?php echo $apklausos[$i];?></a>
		<?php
			}
		?>
		</div>
	<div>

	<div class = "miestai">
	<?php	
			if(((isset($oro_uostas) && $oro_uostas !== '') || (isset($uostas) && $uostas !== '')) || $miestuSK!=0)
			{
		?>
		<img class="icons vienas" src='Icons/Miestai.png' >
		<br>
		<?php
			}
		?>
		<?php	
			if($miestuSK!=0)
			{
		?>
		<br>
		<h5>Didesni miestai: <br> (gyv. sk.)</h5>
		<br>
		<?php
			}
		?>
		<?php

			for($i=0;$i<$miestuSK;$i++)
			{
		?>
				<h6><?php echo $miestai[$i];?></h6>
		<?php
			}
		?>
		<br>
		<?php	
			if(isset($uostas) && $uostas !== '')
			{
		?>
				<h6><?php echo $uostas;?></h6>
		<?php
			}
		?>
		<?php	
			if(isset($oro_uostas) && $oro_uostas !== '')
			{
		?>
				<h6><?php echo $oro_uostas;?></h6>
		<?php
			}
		?>
	</div>

	<div class = "faktai">
		<?php	
			if($faktaiSK!=0)
			{
		?>
		<img class="icons" src='Icons/Ar_žinai_kad.png'>
		<br>
		<br>
		<h5>Ar žinai, kad...</h5>
		<?php
			}
		?>
		<?php
			for($i=0;$i<$faktaiSK;$i++)
			{
		?>
			<h6><?php echo $faktai[$i];?></h6>
		<?php
			}
		?>
		<br>
		<?php
			if (isset($user) && $user !== '') 
			{
		?>
		<form method="POST" action='index?stories'>
		<button id="go" style="linear-gradient(-45deg, #4481eb 0%, #04befe 100%)" class="btn btn-primary btn-lg btn-block" type="submit" >Peržiūrėti vartotojų kelionių įspūdžius</button>
		<input style='display:none' type='text' name='countryID' readonly value='<?php echo $pavadinimasEN ?>'></input>
		</form>
		<?php
			}else{
		?>
		<form method="POST" action='index?stories'>
		<button style="linear-gradient(-45deg, #4481eb 0%, #04befe 100%)" id="go1" class="btn btn-primary btn-lg btn-block" type="submit" >Peržiūrėti vartotojų kelionių įspūdžius</button>
		<input style='display:none' type='text' name='countryID' readonly value='<?php echo $pavadinimasEN ?>'></input>
		</form>
		<?php
			}
		?>
	</div>
  
	<!-- KOMENTARAI -->
	<?php for($y=0;$y<$VI1;$y++) { ?>
	<div class="media komentarai" style="display:none;">
		<img src="" class="align-self-start mr-3" alt="">
		<div class="media-body">
			<h5 class="mt-0"><?php echo $VI3[$y] ?></h5>
			<p><?php echo $VI4[$y] ?></p>
			<br>
			<?php if(!empty($VI5[$y])) { ?>
			<img loading="lazy" style="display:inline;" src="<?php echo $VI5[$y] ?>" class="align-self-start mr-3" alt="" width="40%">
			<?php } ?>
			<?php if(!empty($VI6[$y])) { ?>
			<img loading="lazy" style="display:inline;" src="<?php echo $VI6[$y] ?>" class="align-self-start mr-3" alt="" width="40%">
			<?php } ?>
			<?php if(!empty($VI7[$y])) { ?>
			<img loading="lazy" style="display:inline;" src="<?php echo $VI7[$y] ?>" class="align-self-start mr-3" alt="" width="40%">
			<?php } ?>
			<?php if(!empty($VI8[$y])) { ?>
			<img loading="lazy" style="display:inline;" src="<?php echo $VI8[$y] ?>" class="align-self-start mr-3" alt="" width="40%">
			<br>
			<br>
			<?php } ?>
			<h4>Bendras įrašo įvertinimas : <?php echo $VI9[$y] ?></h4>
			<br>
			<h5>Įvertinkite įrašą : </h5>
			<form method='POST' action='rating.php'>
			<input name='storyID' style='display:none' type='text' readonly value='<?php echo $VI2[$y] ?>'></input>
			<input name='countryID2' style='display:none' type='text' readonly value='<?php echo $pavadinimasEN ?>'></input>
			<button id="button1" name='value' value='1'>1</button>
			<button id="button2" name='value' value='2'>2</button>
			<button id="button3" name='value' value='3'>3</button>
			<button id="button4" name='value' value='4'>4</button>
			<button id="button5" name='value' value='5'>5</button>
			</form>
		</div>
	</div>
	<?php } ?>
	<br style="display:none" class="pateikti">
	<br style="display:none" class="pateikti">
	<!--</?php if (isset($user) && $user !== '') { ?>
	<a href='index.php?status=user?result'><button style="display:none" class="btn btn-primary btn-lg btn-block pateikti">Grįžti</button></a>
	</?php }else{ ?>
	<a href='index.php?result'><button style="display:none" class="btn btn-primary btn-lg btn-block pateikti">Grįžti</button></a>
	</?php }?>
	<br style="display:none" class="pateikti">
	<br style="display:none" class="pateikti">-->
	

	<!-- PATEIKTI FORMA-->
	<?php if(!empty($ID)) {?>
		<div class="pateikti logged" style="display:none; max-width:60%; margin:0 auto;">
		<h3 style="text-align:center">Pasidalinkite savo įspūdžiais šioje šalyje</h3>
		<br>
		<form method="POST" action="stories.php" enctype="multipart/form-data">
		<input class="form-control form-control-lg" type="text" placeholder="Pavadinimas" name='IstoPavadinimas' required>
		<br>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Įspūdžiai" name='IstoTekstas' required></textarea>
		<br>
		<h6 style="text-align:center; color:red">Nuotraukų formatas PNG, JPEG ir JPG <br>Maksimalus 1 failo dydis 10 MB</h6>
		<br>
		<div class="form-group pirma">
			<label for="failas1">1 nuotrauka</label>
			<input type="file" class="form-control-file" name='IstoFailas1' id="failas1">
		</div>
		<br class="antra" style="display:none">
		<div class="form-group antra" style="display:none">
			<label for="failas2">2 nuotrauka</label>
			<input type="file" class="form-control-file" name='IstoFailas2' id="failas2">
		</div>
		<br class="trecia" style="display:none">
		<div class="form-group trecia" style="display:none">
			<label for="failas3">3 nuotrauka</label>
			<input type="file" class="form-control-file" name='IstoFailas3' id="failas3">
		</div>
		<br class="ketvirta" style="display:none">
		<div class="form-group ketvirta" style="display:none">
			<label for="failas4">4 nuotrauka</label>
			<input type="file" class="form-control-file" name='IstoFailas4' id="failas4">
		</div>
		<button id="more" class="btn btn-primary" type='button'>+</button>
		<br>
		<br>
		<input style='display:none' type='text' name='countryID1' readonly value='<?php echo $pavadinimasEN ?>'></input>
		<input style='display:none' type='text' name='countryID3' readonly value='<?php echo $pavadinimasLT ?>'></input>
		<button class="btn btn-primary btn-lg btn-block" type='submit'>Išsaugoti</button>
		<button class="btn btn-primary btn-lg btn-block" type='reset'>Trinti</button>
		</form>
		</div>

	<br style="display:none" class="pateikti">
	<br style="display:none" class="pateikti">
		
	<?php }else{ ?>
	<a style="color:#3399FF;" href='log'><button style="display:none;" class="btn btn-primary btn-lg btn-block pateikti">Norėdami pasidalinti įspūdžiais prisijunkite</button></a>
	<br style="display:none" class="pateikti">
	<br style="display:none" class="pateikti">
	<?php } ?>

	<!-- INFORMACIJA -->
	<div class="account_info" style="background-color:white;">
	 	<h5><strong>Vardas : </strong><?php echo $user;?></h5>
		<h5><strong>El. paštas : </strong><?php echo $email;?></h5>
		<h5><strong>Aktyvacijos kodas : </strong><?php echo $code;?></h5>
		<h5><strong>Slaptažodis : </strong><?php for($i=0; $i<mb_strlen($password, "UTF-8"); $i++){echo "•";}?></h5>
		<br>
		<br>
		<form class="change_email" action="change.php" method="POST">
			<input name='change1' style="display:none;" type="text" value='<?php echo $ID;?>'></input>
			<input name='change2' class="form-control" type="email" placeholder="Įveskite naują el. paštą" required></input>
			<br>
			<button style="justify:center; text-align: center;" class=" navbar-brand btn btn-outline-success" name="action" value="1" type="submit">Keisti</button>
    	</form>
		<br>
		<br>
    	<form class="change_password" action="change.php" method="POST">
			<input name='change1' style="display:none;" type="text" value='<?php echo $ID;?>'></input>
			<input name='change2' id="change2" class="form-control" type="text" placeholder="Įveskite naują slaptažodį" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Slaptažodis privalo atitikti reikalavimus"></input>
			<br>
			<div id="message">
              <p id="letter" class="invalid">Viena <b>mažoji </b> raidė</p>
              <p id="capital" class="invalid">Viena <b>didžioji raidė</b> raidė</p>
              <p id="number" class="invalid">Vienas <b>skaičius</b></p>
              <p id="length" class="invalid">Mažiausiai <b>8 simboliai</b></p>
            </div>
			<br>
			<button style="justify:center; text-align: center;" class=" navbar-brand btn btn-outline-success" name="action" value="2" type="submit">Keisti</button>
		</form>
	</div>

  
  
</body>
</html>