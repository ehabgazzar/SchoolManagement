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
		
/*-------------------------------*/




 function signupvalidate (){
				var signupname=document.forms["signupform"]["name"].value;
				var signupemail=document.forms["signupform"]["email"].value;
				var signuppassword=document.forms["signupform"]["password"].value;
				var accounttype=document.forms["signupform"]["acctype"].value;
				if (signupname==null || signupname==""){
				alert("Name field is required");
return false;
			     }
				else if(signupemail==null || signupemail==""){
				alert("Enter Your Email Adress");
return false;
			}
			   else if(signuppassword==null || signuppassword==""){
				alert("Please Enter a password for your account")
return false;
			}
			else if(accounttype==null || accounttype==""){
				alert("Please select your account type");
return false;
			}
				return true;
		}
		
/*-------------------------------*/
