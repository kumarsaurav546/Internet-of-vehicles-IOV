function login()
{
	var email = document.getElementById('email').value;
	var password =document.getElementById('password').value;
	if(email==''||password=='')
	{
		alert('Field is missing!!');
	}
	else
	{
		var rootRef = firebase.database().ref().child("Registered vehicles users");

		rootRef.on("child_added",snap =>{
			//alert(snap.val());  return no of objects.
			var email_f=snap.child("email").val();
			var password_f=snap.child("Password").val();
			if(email==email_f&&password==password_f)
			{
				location.href = 'app/dashboard1.php';
				set_session(email);
			}
			else
			{
				document.getElementById("st").style.display='block';
				document.getElementById("st").innerHTML='Wrong Credentials';
			}
		});

	}
}

function set_session(p)
{
	 var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    var st = this.responseText;
			    if(st=='t')
			    {
			    	document.getElementById("st").style.display='block';
			    	document.getElementById("st").innerHTML='Success';
			    	document.getElementById("st").style.color='green';
			    }
		    }
		  };
		  xhttp.open("GET", "php/loginsuccess.php?e="+p, true);
		  xhttp.send();
}
