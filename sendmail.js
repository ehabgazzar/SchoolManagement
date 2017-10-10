function loginvalidate (){
				var loginemail=document.forms["loginform"]["email"].value;
				var loginpassword=document.forms["loginform"]["password"].value;
				if (loginemail==null || loginemail==""){
				alert("Please Enter Your Email!");
return false;
			     }
				else if(loginpassword==null || loginpassword==""){
				alert("Please Enter Your password!");
return false;
			}
				return true;
		}
		
/*-------------------------*/

function sendmailvalid()
{
	var name=document.forms["contactform"]["name"].value;	
var email=document.forms["contactform"]["email"].value;
var subject=document.forms["contactform"]["subject"].value;
var msg=document.forms["contactform"]["message"].value;


	 if(name==null || name=="")
			{
				alert("Please Enter Your Name!");
return false;
			}
				else if (email==null || email==""){
				alert("Please Enter Your Email!");
return false;
			     }
				else if(subject==null||subject==""){
				alert("Please Enter Message Subject");
return false;
			}
		
				else if(msg==null || msg=="")
			{
				alert("Please Enter Your Message!");
return false;
			}
			
				return true;
		
}



