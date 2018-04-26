<!DOCTYPE html>
<html>
<head>
<title>IOV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/thin-admin.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.css" rel="stylesheet" media="screen">
<link href="style/style.css" rel="stylesheet">
<link rel='shortcut icon' type='image/x-icon' href='lo.jpg' />

<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/signup.js"></script>
<script type="text/javascript" src="config.js"></script>

</head>
<body>
<div class="login-logo">
	<h4 style="color:white;"><h2 style="color:white;">VCIN</h2>(VEHICULAR INTERCONNECTED INFORMATICS NETWORK)</h4>
    </div>

<div class="widget">
<div class="login-content">
  <div class="widget-content" style="padding-bottom:0;">
  <div class="no-margin" id="login">
                <h3 class="form-title">Login to your account</h3>
                <center>
                    <h4 id="st" style="display:none;color:red"></h4>
                </center>
                
                <fieldset>
                    <div class="form-group no-margin">
                        <label for="email">Email</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>
                            <input type="email" placeholder="Your Email" class="form-control input-lg" id="email">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Your Password" class="form-control input-lg" id="password">
                        </div>

                    </div>
                </fieldset>
               <div class="form-actions">
				<label class="checkbox">
				<div class="checker"><span><input type="checkbox" value="1" name="remember"></span></div> Remember me
				</label>
				<button class="btn btn-warning pull-right" type="submit" onclick="login();">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button> 
                <div class="forgot"><a href="#" class="forgot">Forgot Username or Password?</a><br><a href="#" onclick="cred();">or signup?</a></div>           
			</div>
            
            
            </div>
            <div class="no-margin" id="signup" style="display:none;">
                <h3 class="form-title">Signup to your account</h3>
                  <fieldset>
                    <div class="form-group no-margin">
                        <label for="email">Email</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>
                            <input type="email" placeholder="Your Email" class="form-control input-lg" id="email_s">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Choose Password" class="form-control input-lg" id="pass_1">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="password">Confirm Password</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Confirm Password" class="form-control input-lg" id="pass_2">
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="password">Registered Vehicle No</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Registered Vehicle No" class="form-control input-lg" id="veh_no">
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="password">Aadhaar Card No</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Aadhaar Card No" class="form-control input-lg" id="aad_no">
                        </div>
                    </div>

                </fieldset>
                <button class="btn btn-warning pull-right" type="submit" onclick="signup();">
                Register <i class="m-icon-swapright m-icon-white"></i>
                </button> 
             <br><br>
            </div>
  
  
  </div>
   </div>
</div>

<script type="text/javascript">
    function cred()
    {
        if(document.getElementById('login').style.display=='block')
        {
            document.getElementById('login').style.display = 'none';
            document.getElementById('signup').style.display = 'block';  
        }
        else
        {
            document.getElementById('login').style.display = 'block';
            document.getElementById('signup').style.display = 'none'; 
        }
    }
</script>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 



 

<!--switcher html start-->
<div class="demo_changer active" style="right: 0px;display:none;">
                <div class="demo-icon"></div>
                <div class="form_holder">
                        

                    <div class="predefined_styles">
                        <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a>	
                        <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a>
                        <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a>
                        <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a>
                        <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a>
                        <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a>
                        <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a>
                        <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a>
                        <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a>
                        <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a>
                    </div>
					                    
                </div>
            </div>
            
            
    <!--switcher html end-->
<script src="assets/switcher/switcher.js"></script> 
<script src="assets/switcher/moderziner.custom.js"></script> 
<link href="assets/switcher/switcher.css" rel="stylesheet">
<link href="assets/switcher/switcher-defult.css" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/a.css" title="a" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/b.css" title="b" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/c.css" title="c" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/d.css" title="d" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/e.css" title="e" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/f.css" title="f" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/g.css" title="g" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/h.css" title="h" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/i.css" title="i" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/j.css" title="j" media="all" />

</body>
</html>



<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCDV6IF8Ba59a62TQe2bjR2Rb4yPq4DHnQ",
    authDomain: "users-bb5bb.firebaseapp.com",
    databaseURL: "https://users-bb5bb.firebaseio.com",
    projectId: "users-bb5bb",
    storageBucket: "users-bb5bb.appspot.com",
    messagingSenderId: "728652246062"
  };
  firebase.initializeApp(config);
</script>