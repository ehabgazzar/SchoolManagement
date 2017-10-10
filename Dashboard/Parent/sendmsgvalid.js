function sendmsgvalid(){
var sendername=document.forms["sendmsg"]["SenderMail"].value	
var recivername=document.forms["sendmsg"]["RecieverMail"].value;
var subject=document.forms["sendmsg"]["subject"].value;
var msg=document.forms["sendmsg"]["comment"].value;

if (recivername==null || recivername==""){
				alert("Please Enter Reciver Email!");
return false;
			     }
				else if(subject==null||subject==""){
				alert("Please Enter Message Subject");
return false;
			}
			else if(sendername==null || sendername=="")
			{
				alert("Please Enter Your Email!");
return false;
			}
			else if(msg==null || msg=="")
			{
				alert("Please Enter Your Message!");
return false;
			}
				return true;
		
}
