<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administatoriaus skydelis</title>

    <link rel="shortcut icon" href="dashboard(1).png" type="image/x-icon">
    <link rel="icon" href="dashboard(1).png" type="image/x-icon">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<style>
    @font-face {
	font-family: "CooperHewitt Medium";
	src: url("../CooperHewitt-WebFonts-public/CooperHewitt-Medium.eot");
	src:
	url("../CooperHewitt-WebFonts-public/CooperHewitt-Medium.woff") format("woff"),
	url("../CooperHewitt-WebFonts-public/CooperHewitt-Medium.otf") format("opentype"),
	url("../CooperHewitt-WebFonts-public/CooperHewitt-Medium.svg#filename") format("svg");
	}


    body{
    font-family : 'CooperHewitt Medium';
    }
</style>
<script>
    <?php
        session_start();
        $admin_name = $_SESSION['admin1'];
        $admin_last = $_SESSION['admin2'];
        $admin_email = $_SESSION['admin3'];
        $admin_pass = $_SESSION['admin4'];
    ?>
    $(document).ready(function(){
        
    });
</script>   
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">
                        <img src="computer.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="../logout" style="color:#fff;"><img href="../logout" src="logout.png"></img><?php echo $admin_name;?> <?php echo $admin_last;?></a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index" ><img src="dashboard.png" ></img>  Pagrindinis skydelis</a>
                    </li>
                   

                    <li>
                        <a href="?statistic"><img src="statistics.png" ></img>  Statistika</a>
                    </li>
                    <li>
                        <a href="?users"><img src="person.png" ></img>  Registruoti vartotojai</a>
                    </li>


                    <li>
                        <a href="?new"><img src="plus.png" ></img>  Nauja šalis</a>
                    </li>
                    <li>
                        <a href="?all"><img src="database.png" ></img>  Peržiūrėti šalis</a>
                    </li>

                    <li>
                        <a href="?upload"><img src="cloud-computing.png" ></img>  Įkelti failus</a>
                    </li>
                    <li>
                        <a href="?instruction"><img src="manual(1).png" ></img>  Instrukcija</a>
                    </li>
                    <li>
                        <a href="?change"><img src="change.png" ></img>  Keisti duomenis</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Pagrindinis skydelis</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?statistic" >
                           <img src="search.png"></img>
                      <h4>Statistika</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?users" >
                            <img src="group.png"></img>
                      <h4>Registruoti vartotojai</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?new" >
                            <img src="add.png"></img>
                      <h4>Nauja šalis</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?all" >
                    <img src="memory.png"></img>
                      <h4>Peržiūrėti šalis</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?upload" >
                    <img src="upload.png"></img>
                      <h4>Įkelti failus</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="?instruction" >
                        <img src="manual.png"></img>
                      <h4>Instrukcija</h4>
                      </a>
                      </div>
                     

                  </div>
              </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2020 ukg-geografija.bkworks.lt | Sukūrė: <a href="http://bkworks.lt" style="color:#fff;" target="_blank">www.bkworks.lt</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
