function signup()
{
	var email_s = document.getElementById('email_s').value;
	var pass_1 = document.getElementById('pass_1').value;
	var pass_2 = document.getElementById('pass_2').value;
	var veh_no = document.getElementById('veh_no').value;
	var aad_no = document.getElementById('aad_no').value;
	if(email_s==''&&pass_1==''&&pass_2==''&&veh_no==''&&aad_no=='')
	{
		alert("Any field is missing");
	}
	else
	{
		if(pass_1!=pass_2)
		{
			alert("Password do not match");
		}
		else
		{
			if(aad_no.toString().length!=12)
			{
				alert("Invalid aadhaarcard no.");
			}
			else
			{
				ahead(email_s,pass_1,veh_no,aad_no);
			}
		}
	}
}


function ahead(a,b,c,d)
{
	var date = new Date();

    var hour = date.getHours();
    hour = (hour < 10 ? "0" : "") + hour;

    var min  = date.getMinutes();
    min = (min < 10 ? "0" : "") + min;

    var sec  = date.getSeconds();
    sec = (sec < 10 ? "0" : "") + sec;

    var year = date.getFullYear();

    var month = date.getMonth() + 1;
    month = (month < 10 ? "0" : "") + month;

    var day  = date.getDate();
    day = (day < 10 ? "0" : "") + day;

  	time1= hour + "-" + min + "-" + sec;
  	date1= day + "/" + month + "/" + year;

	var lat=0;
	var long=0;
	var firebaseRef = firebase.database().ref();
    firebaseRef.child('Registered vehicles users').push({	
    email: a,
    Password : b,
    vehicle_no : c,
    Aadhaar_card_no : d,
    Time : time1,
    Date : date1,
    latitude :  lat,
    longtitude : long 
  });
    alert("Registration success :login to continue!!<br> Email : "+a+" Password :"+b);
    document.getElementById("login").style.display='block';
    document.getElementById("signup").style.display='none';
}
