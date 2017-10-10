function settingsvalid(){
var fullname=document.forms["settings-form"]["name"].value;
var gender=document.forms["settings-form"]["gender"].value;
var birthday=document.forms["settings-form"]["birthday"].value;
var address=document.forms["settings-form"]["address"].value;
var mobile=document.forms["settings-form"]["mobile"].value;
var lang=document.forms["settings-form"]["lang"].value;

    if (fullname==null || fullname==""){
		alert("Please Enter FullName !");
return false;
		}
	else if(gender==null||gender==""){
		alert("Please Choose Gender");
return false;
		}
		else if(birthday==null||birthday==""){
		alert("Please Enter Birthday");
return false;
		}
		else if(address==null||address==""){
		alert("Please Enter Address");
return false;
		}
		else if(mobile==null||mobile==""){
		alert("Please Enter Mobile Number")
return false;
		}
		else if(lang==null||lang==""){
		alert("Please Choose Language");
return false;
		}
		return true;
		
   

}