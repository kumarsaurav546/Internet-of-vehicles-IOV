<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VCIN</title>
	<meta name="viewport" content="wth=device-wth, initial-scale=1.0">
<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<link href="../css/thin-admin.css" rel="stylesheet" media="screen">
<link href="../css/font-awesome.css" rel="stylesheet" media="screen">
<link href="../style/style.css" rel="stylesheet">
<link href="../style/dashboard.css" rel="stylesheet">
<link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="../js/map.js"></script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px sol #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #warnings-panel {
        wth: 100%;
        height:10%;
        text-align: center;
      }
    </style>
</head>
<body onload="myfun();">

	<div class="container">
  <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-se-nav pull-left" href="#"><i class="icon-reorder"></i> </a>
    <div class="brand pull-left"> <a href="index.html"><h2>VCIN<br> <small>Vehicular interconnected informatics network</small></h2></a></div>
    <ul class="nav navbar-nav navbar-right  hden-xs">
      <li class="dropdown user  hden-xs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-male"></i> <span class="username" ="lx">
      	<?php echo $_SESSION['user'];?>
      </span> <i class="icon-caret-down small"></i> </a>
        <ul class="dropdown-menu">
          
          <li><a href="../"><i class="icon-key"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
    <form class="pull-right" >
      <!--<input type="search" placeholder="Search..." class="search" ="search-input">-->
    </form>
  </div>
</div>
<div class="wrapper">
  <div class="left-nav">
    <div ="se-nav">
      <ul ="nav">
        <li class="current"> <a> <i class="icon-dashboard"></i> Dashboard </a></li>
        <li> <a href="#" onclick="map();"> <i class="icon-gps"></i> Map <span class="label label-info pull-right"></span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="general.html"> <i class="icon-angle-right"></i> General </a> </li>
            <li> <a href="buttons.html"> <i class="icon-angle-right"></i> Buttons </a> </li>
            <li> <a href="tabs.html"> <i class="icon-angle-right"></i> Tabs</a> </li>
            <li> <a href="accordions.html"> <i class="icon-angle-right"></i> Accordions </a> </li>
            <li> <a href="nestable.html"> <i class="icon-angle-right"></i> Nestable List </a> </li>
            <li> <a href="gr.html"> <i class="icon-angle-right"></i> Gr </a> </li>
            <li> <a href="dialogs.html"> <i class="icon-angle-right"></i> Dialogs </a> </li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-edit"></i><span class="label label-info pull-right"></span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="form_elements.html"> <i class="icon-angle-right"></i> Form Elements </a> </li>
            <li> <a href="form_valation.html"> <i class="icon-angle-right"></i> Form Valation</a> </li>
            <li> <a href="form_masks.html"> <i class="icon-angle-right"></i> Form Masks </a> </li>
            <li> <a href="wizard.html"> <i class="icon-angle-right"></i> Form Wizard </a> </li>
            <li> <a href="multipleFile_upload.html"> <i class="icon-angle-right"></i> Multiple File Upload </a> </li>
            <li> <a href="dropzone_upload.html"> <i class="icon-angle-right"></i> Dropzone File Upload </a> </li>
          </ul>
        </li>
        <!--<li> <a href="#"> <i class="icon-table"></i> Tables <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="static_table.html"> <i class="icon-angle-right"></i> Static </a> </li>
            <li> <a href="dynamic_table.html"> <i class="icon-angle-right"></i> Dynamic </a> </li>
          </ul>
        </li>
        <li> <a href="chart.html"> <i class="icon-bar-chart"></i> Charts &amp; Statistics </a> </li>
        <li> <a href="#"> <i class="icon-flag"></i> Fontawesome <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
          	<li> <a href="icons-new.html"> <i class="icon-angle-right"></i> New-Icons </a> </li>
            <li> <a href="icons.html"> <i class="icon-angle-right"></i> Icons </a> </li>
          </ul>
        </li>
        <li> <a href="gallery.html"> <i class="icon-picture"></i> Gallery </a> </li>
        <li> <a href="timeline.html"> <i class="icon-time"></i> Timeline </a> </li>
        <li> <a href="#"> <i class="icon-folder-open-alt"></i> Pages <span class="label label-info pull-right">5</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="login.html"> <i class="icon-angle-right"></i> Login </a> </li>
            <li> <a href="user_profile.html"> <i class="icon-angle-right"></i> User Profile </a> </li>
            <li> <a href="mailbox.html"> <i class="icon-angle-right"></i> Mailbox </a> </li>
            <li> <a href="fullCalendar.html"> <i class="icon-angle-right"></i> Calendar </a> </li>
            <li> <a href="404-page.html"> <i class="icon-angle-right"></i> 404-page </a> </li>
          </ul>
        </li>
      </ul>-->
    </div>
  </div>

  <div class="page-content" >
  	<div ="mapdis" style="display:none;">
	<?php include('map.php');?>
    </div>

    <div class="content container" ="pagecontent">

      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
        </div>
        <div ="msec" style="display:none;">
        	<center><h2>Send Message</h2></center>
        	<br>
        	<input class="form-control input-lg" type="text" name="message" ="mssg" style="wth:100%;">
        	<center><br>
			<button class="btn btn-primary " type="submit" onclick="sendmssg();">Send Message</button>
			</center>        	
        </div>
        <br>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Users/Registered</div>
              <div class="stats-body-alt"> 
              	<center><span ="user_count"></span></center>
               
                 <div class="text-center">
                 
                 </div>
                <small>-14.7% from last week</small> </div>
              <div class="stats-footer"></div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Vehicles / user predict</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center">
                	<h5>No of vehicles in next month : <span ="y1"> </span></h5>
                	<h5>No of Users in next month : <span ="y2"> </span></h5>
                </div>
                 </div>
              <div class="stats-footer"></div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Gps Result</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><h2 ="gpsre"></h2></div>
                <small>new user registered</small> </div>
              <div class="stats-footer"></div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Current location</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center">
                	<span ="loc" class="h5"></span></div>
               </div>
              <div class="stats-footer"></div>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="wget">
            <div class="wget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /wget-header -->
            <div class="wget-content">
              <div class="shortcuts"> 
              	<a class="shortcut" href="javascript:;" onclick="send_mssg();"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">
              		<br>
              		<button class="btn btn-danger btn-sm" type="submit" >Send Message</button>
              	</span> </a>
              	<a class="shortcut" href="javascript:;">
              	 <i class=""></i><span class="h5">Safe zone status :<h3 ="area" style="color:green"> <b ="sst"></b></h3></span>
                </a>
                <a class="shortcut" href="javascript:;">
              	 <i class=""></i><span class="h5">Gyrometric Value(per second):<h3 ="gyval" style="color:green"> <b class="h4" ="gyv"></b></h3></span>
                </a>
                <a class="shortcut" href="javascript:;">
              	 <i class=""></i><span class="h5">Obstacle Status (per movement):<h3 ="gyval" style="color:red"> <b class="h4" ="irv"></b></h3></span>
                </a>
              </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /wget-content --> 
          </div>
        </div>
        <div class="col-lg-6">
          <div class="wget-container">
            <div class="padded"> <a href="#" class="pull-right"><i class="icon-map-marker"></i></a> <span class="h4"><?php echo $_SESSION['user'];?></span>
              <div class="text-center padder m-t"><br> <span class="h3"> 
              	<label>Vehicle No : </label>
              	<span ="veh_no"></span><br>
              	<label>Aadhaar No : </label>
              	<span ="Aadhaar_no"></span><br>
              	<label>Time of Registration : </label>
              	<span ="tyy"></span><br>
              	<label>Date of Registration : </label>
              	<span ="dtt"></span>
              </span><br><br><br> </div>
            </div>
          </div>
         
          </div>
        </div>
      </div>
      
      
<div class="row">
  <div class="col-lg-4"> 
    <!--new earning start-->
    <div class="panel terques-chart">
      <div class="panel-body chart-texture">
        <div class="chart">
          <div class="heading"> <strong>Temprature variation of particular user vehicle</strong> </div><br>
          <div class="sparkline" data-type="line" data-resize="true" data-height="90" data-wth="90%" data-line-wth="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[2,135,667,333,526,996,564,123,890,564,455]"></div>
        </div>
      </div>
    </div>
    <!--new earning end--> 
  </div>
  <div class="col-lg-4"> 
    <!--total earning start-->
    <div class="panel green-chart">
      <div class="panel-body">
        <div class="chart">
          <div class="heading"><strong>Gyrometric value</strong> </div>
          <div ="barchart"></div>
        </div>
      </div>

    </div>
    <!--total earning end--> 
  </div>
  <div class="col-lg-4"> 
    <!--pie chart start-->
    <div class="panel">
      <div class="panel-body text-center">
        <div class="chart" style="height: 110px;">
          <p class="h3">Humity : <span ="hum"></span></p>
          <p class="h3">Temperature : <span ="temp"></span></p>
        </div>
      </div>
    </div>
    <!--pie chart start--> 
  </div>
</div>
 
      
      
      
      
      
   
 
     

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/smooth-sling-menu.js"></script> 
<script class="include" type="text/javascript" src="../javascript/jquery191.min.js"></script> 
<script class="include" type="text/javascript" src="../javascript/jquery.jqplot.min.js"></script> 
<script src="../assets/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="../assets/sparkline/jquery.customSelect.min.js" ></script>
<script src="../assets/sparkline/sparkline-chart.js"></script>
<script src="../assets/sparkline/easy-pie-chart.js"></script>
<script src="../js/select-checkbox.js"></script> 
<script src="../js/to-do-admin.js"></script> 

<!--switcher html start-->
<!-- <div class="demo_changer active" style="right: 0px;">
  <div class="demo-icon"></div>
  <div class="form_holder">
    <div class="predefined_styles"> <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a> <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a> <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a> <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a> <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a> <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a> <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a> <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a> <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a> <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a> </div>
  </div>
</div> -->

<!--switcher html end--> 
<script src="../assets/switcher/switcher.js"></script> 
<script src="../assets/switcher/moderziner.custom.js"></script>
<link href="../assets/switcher/switcher.css" rel="stylesheet">
<link href="../assets/switcher/switcher-defult.css" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/a.css" title="a" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/b.css" title="b" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/c.css" title="c" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/d.css" title="d" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/e.css" title="e" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/f.css" title="f" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/g.css" title="g" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/h.css" title="h" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/i.css" title="i" media="all" />
<link rel="alternate stylesheet" type="text/css" href="../assets/switcher/j.css" title="j" media="all" />





<p ="u"><?php echo $_SESSION['user'];?></p>


</body >
</html>

<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCDV6IF8Ba59a62TQe2bjR2Rb4yPq4DHnQ",
    authDomain: "users-bb5bb.firebaseapp.com",
    databaseURL: "https://users-bb5bb.firebaseio.com",
    project: "users-bb5bb",
    storageBucket: "users-bb5bb.appspot.com",
    messagingSender: "728652246062"
  };
  firebase.initializeApp(config);



  function myfun()
  {

  		//NO OF USERS.
       var rootRef = firebase.database().ref().child("Registered vehicles users");
		var  count=0;	
		rootRef.on("child_added",snap =>
		{
			var d= snap.val();  
			
				count++;

			document.getElementBy('user_count').innerHTML = count;
			var name = document.getElementBy('u').innerHTML;
			var email = snap.child('email').val();
			if(name==email)
			{
				var vno =snap.child('vehicle_no').val();
				var ano =snap.child('Aadhaar_card_no').val();
				var dt =snap.child('Date').val();
				var ty =snap.child('Time').val();
				document.getElementBy('veh_no').innerHTML=vno;
				document.getElementBy('Aadhaar_no').innerHTML=ano;
				document.getElementBy('tyy').innerHTML=ty;
				document.getElementBy('dtt').innerHTML=dt;

			}
	    });

		setInterval(getLocation,3000);
		setInterval(getirsensorvalue,2000);
		setInterval(getgysensorvalue,2000);
		setInterval(getsafestatus,2000);
		gettemperature();
		//setInterval(loc,2000);

		//getstatus();
		//setInterval(updatestatus,2000);
		gps_re();
		loc();
  }

  //LOCATIONS.
		var x = document.getElementBy("loc");
		function getLocation() {
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    } else { 
		        x.innerHTML = "Geo-location is not supported by this browser.";
		    }
		}

		function showPosition(position) {
		    x.innerHTML = "Latitude: " + position.coords.latitude + 
		    "<br>Longitude: " + position.coords.longitude;
		    update_position(position.coords.latitude,position.coords.longitude);
		}

function loc()
{
		var rootRef =firebase.database().ref().child("user predict");
		rootRef.on('value',function(snap){
			var u = snap.child('user').val();
			var v = snap.child('vehicle').val();
		
			document.getElementBy("y1").innerHTML = u ;
			document.getElementBy("y2").innerHTML = v;
		});
		
}

function getirsensorvalue()
{
	var rootRef = firebase.database().ref().child('IR sensor');
	rootRef.on('value',function(snap){
		var val= snap.child('value').val();
		var st;
		if(val==1)
		{
			st="Obstacle Ahead";
		}
		else
		{
			st="Clear"; 
		}
		document.getElementBy("irv").innerHTML=st;
	});
}

function getgysensorvalue()
{
	var rootRef = firebase.database().ref().child('Gyrometer');
	rootRef.on('value',function(snap){
		var val= snap.child('value').val();
		var st;
		if(val==1)
		{
			st="Accent encountered";
		}
		else
		{
			st="Driving safely"; 
		}
		document.getElementBy("gyv").innerHTML=st;

	});
}

function getsafestatus()
{
var rootRef = firebase.database().ref().child('safe status');
	rootRef.on('value',function(snap){
		var val= snap.child('value').val();
		var st;
		if(val==1)
		{
			st="Safe";
		}
		else
		{
			st="In accent prone areas"; 
		}
		document.getElementBy("sst").innerHTML=st;

	});
}
function dv()
{
  setInterval(khb,5000);
  setInterval(khbx,8000);
  setInterval(khbxr,3000);
}
function khb()
{
  var x=document.getElementBy("sst").innerHTML;
    if(x=="In accent prone areas")
    {
     document.getElementBy("sst").innerHTML="Safe";
    }
    else
    {
      document.getElementBy("sst").innerHTML="In accent prone areas";
    }
}
function khbx()
{
  var x=document.getElementBy("gyv").innerHTML;
    if(x=="Driving safely")
    {
     document.getElementBy("gyv").innerHTML="In accent prone areas";
    }
    else
    {
      document.getElementBy("gyv").innerHTML="Driving safely";
    }
}
function khbxr()
{
  var x=document.getElementBy("irv").innerHTML;
    if(x=="Clear")
    {
     document.getElementBy("irv").innerHTML="Obstacle Ahead";
    }
    else
    {
      document.getElementBy("irv").innerHTML="Clear";
    }
}

  function send_mssg()
  {
  	if(document.getElementBy('msec').style.display=='block')
  	{
  		document.getElementBy('msec').style.display = 'none';
  	}
  	else
  	{
  		document.getElementBy('msec').style.display='block';
  	}
  }

  function sendmssg()
  {
  	var m = document.getElementBy('mssg').value;
  	var u = document.getElementBy('u').innerHTML;
  	

  	var rootRef = firebase.database().ref();
  	rootRef.child('Message').push({
  		user : u,
  		Message :m
  	});
  	alert("Message sent successsfully!!");
  	send_mssg();
  }



  function jj()
  {
  	var t=1;
  	var rootRef = firebase.database().ref().child("user predict").set({
  		user:t,
  		vehicle:t
  	});
  }

  function gps_re()
  {
  	var rootRef = firebase.database().ref().child("gps-result");
  	var c=0;
  	rootRef.on('value',function(snap){
  		var d=snap.val();
  		c++;
  		document.getElementBy("gpsre").innerHTML=c;
  	});
  }

  function getstatus()
  {
  	var s =document.getElementBy('status').innerHTML;
  	var mail = document.getElementBy('u').innerHTML;
  	var rootRef = firebase.database().ref().child("online status");
  	rootRef.child('mail').push({
  		status :s,
  		Email : mail
  	});
  }
  function gettemperature()
  {
  	var rootRef = firebase.database().ref().child("t&h-result");
  	rootRef.on('child_added',function(snap){
  		var hum = snap.child("0").val();
  		var temp = snap.child("1").val();
  		document.getElementBy("hum").innerHTML=hum;
  		document.getElementBy("temp").innerHTML=temp;
  	});

  }

  function update_position(x,y)
  {
  	//NO OF USERS.
       var rootRef = firebase.database().ref().child("Registered vehicles users");
		rootRef.on("child_added",snap =>
		{
			var d= snap.val();  
			var name = document.getElementBy('u').innerHTML;
			var email = snap.child('email').val();
			if(name==email)
			{
				var vno =snap.child('vehicle_no').val();
				var ano =snap.child('Aadhaar_card_no').val();
				var dt =snap.child('Date').val();
				var ty =snap.child('Time').val();
				

			}
	    });
  }

</script>
<h6 ="status"><?php echo $_SESSION['status']?></h6>
<button onclick="dv();">clcik</button>