<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/schedules.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Schedules</h3>
		</div>
		<?php
		  include('sidebar.php');
                include ('controlusersfanc.php');
                
		$fileName="ClassesTables.txt";
		$Search1="1";
		$record1=searchUser($fileName,$Search1);
		if($record1==false)
                {
                    $ArrayLine1=  array(" "," "," "," "," "," "
                                       ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "," ");
                   
                }
        else {
            $ArrayLine1=explode('~',$record1);
                }
               
                
                
                $Search2="2";
		$record2=searchUser($fileName,$Search2);
		if($record2==false)
                {
                    $ArrayLine2=  array(" "," "," "," "," "," "
                                       ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "," ");
                   
                }
        else {
            $ArrayLine2=explode('~',$record2);
                }
		
                
                
                
                $Search3="3";
		
                $record3=searchUser($fileName,$Search3);
                if($record3==false)
                {
                    $ArrayLine3=  array(" "," "," "," "," "," "
                                       ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "
                        ," "," "," "," "," "," "," ");
                   
                }
        else {
            $ArrayLine3=explode('~',$record3);
                }
		
		?>
		<div id="section">
			<br><br>
			<form name="Class1" action="addclass.php" method="post" >
            <h3>Class1 Schedule</h3>
			<table style="width:100%">
                <tr>
                    <th>Days / Lectures</th>
                    <th>Lecture1</th>
                    <th>Lecture2</th>		
                    <th>Lecture3</th>
                    <th>Lecture4</th>
                    <th>Lecture5</th>
                    <th>Lecture6</th>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><input type="text" name="salec1" value="<?php echo $ArrayLine1[2]?>" ></td>
                    <td><input type="text" name="salec2" value="<?php echo $ArrayLine1[3]?>"></td>        
                    <td><input type="text" name="salec3" value="<?php echo $ArrayLine1[4]?>"></td>
                    <td><input type="text" name="salec4" value="<?php echo $ArrayLine1[5]?>"></td>      
                    <td><input type="text" name="salec5" value="<?php echo $ArrayLine1[6]?>"></td>
                    <td><input type="text" name="salec6" value="<?php echo $ArrayLine1[7]?>"></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><input type="text" name="sulec1" value="<?php echo $ArrayLine1[9]?>"></td>
                    <td><input type="text" name="sulec2" value="<?php echo $ArrayLine1[10]?>"</td>        
                    <td><input type="text" name="sulec3" value="<?php echo $ArrayLine1[11]?>"</td>
                    <td><input type="text" name="sulec4" value="<?php echo $ArrayLine1[12]?>"</td>      
                    <td><input type="text" name="sulec5" value="<?php echo $ArrayLine1[13]?>"></td>
                    <td><input type="text" name="sulec6" value="<?php echo $ArrayLine1[14]?>"></td>
                </tr>
                <tr>
                    <td>Monday</td>
                     <td><input type="text" name="molec1" value="<?php echo $ArrayLine1[16]?>"></td>
                    <td><input type="text" name="molec2" value="<?php echo $ArrayLine1[17]?>"></td>        
                    <td><input type="text" name="molec3" value="<?php echo $ArrayLine1[18]?>"></td>
                    <td><input type="text" name="molec4" value="<?php echo $ArrayLine1[19]?>"></td>      
                    <td><input type="text" name="molec5" value="<?php echo $ArrayLine1[20]?>"></td>
                    <td><input type="text" name="molec6" value="<?php echo $ArrayLine1[21]?>"></td>
                </tr>
                <tr>
                    <td>Teusday</td>
                     <td><input type="text" name="telec1" value="<?php echo $ArrayLine1[23]?>"></td>
                    <td><input type="text" name="telec2" value="<?php echo $ArrayLine1[24]?>"></td>        
                    <td><input type="text" name="telec3" value="<?php echo $ArrayLine1[25]?>"></td>
                    <td><input type="text" name="telec4"value="<?php echo $ArrayLine1[26]?>"></td>      
                    <td><input type="text" name="telec5"value="<?php echo $ArrayLine1[27]?>"></td>
                    <td><input type="text" name="telec6" value="<?php echo $ArrayLine1[28]?>"></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                     <td><input type="text" name="welec1" value="<?php echo $ArrayLine1[30]?>"></td>
                    <td><input type="text" name="welec2" value="<?php echo $ArrayLine1[31]?>"></td>        
                    <td><input type="text" name="welec3" value="<?php echo $ArrayLine1[32]?>"></td>
                    <td><input type="text" name="welec4" value="<?php echo $ArrayLine1[33]?>"></td>      
                    <td><input type="text" name="welec5" value="<?php echo $ArrayLine1[34]?>"></td>
                    <td><input type="text" name="welec6" value="<?php echo $ArrayLine1[35]?>"></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><input type="text" name="thlec1" value="<?php echo $ArrayLine1[37]?>"></td>
                    <td><input type="text" name="thlec2" value="<?php echo $ArrayLine1[38]?>"></td>        
                    <td><input type="text" name="thlec3" value="<?php echo $ArrayLine1[39]?>"></td>
                    <td><input type="text" name="thlec4" value="<?php echo $ArrayLine1[40]?>"></td>      
                    <td><input type="text" name="thlec5" value="<?php echo $ArrayLine1[41]?>"></td>
                    <td><input type="text" name="thlec6" value="<?php echo $ArrayLine1[42]?>"></td>
                </tr>
        </table>
		
        <br>
			<p>Table ID</p><input type="text" name="id" value="1" readonly>
			<input type="submit" name="Add Table" value="Add/Update Table">
                        
		</form>
                        
		<br><br>
        <form name="Class2" action="addclass.php" method="post" >
            <h3>Class2 Schedule</h3>
			<table style="width:100%">
                <tr>
                    <th>Days / Lectures</th>
                    <th>Lecture1</th>
                    <th>Lecture2</th>		
                    <th>Lecture3</th>
                    <th>Lecture4</th>
                    <th>Lecture5</th>
                    <th>Lecture6</th>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><input type="text" name="salec1" value="<?php echo $ArrayLine2[2]?>" ></td>
                    <td><input type="text" name="salec2" value="<?php echo $ArrayLine2[3]?>"></td>        
                    <td><input type="text" name="salec3" value="<?php echo $ArrayLine2[4]?>"></td>
                    <td><input type="text" name="salec4" value="<?php echo $ArrayLine2[5]?>"></td>      
                    <td><input type="text" name="salec5" value="<?php echo $ArrayLine2[6]?>"></td>
                    <td><input type="text" name="salec6" value="<?php echo $ArrayLine2[7]?>"></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><input type="text" name="sulec1" value="<?php echo $ArrayLine2[9]?>"></td>
                    <td><input type="text" name="sulec2" value="<?php echo $ArrayLine2[10]?>"</td>        
                    <td><input type="text" name="sulec3" value="<?php echo $ArrayLine2[11]?>"</td>
                    <td><input type="text" name="sulec4" value="<?php echo $ArrayLine2[12]?>"</td>      
                    <td><input type="text" name="sulec5" value="<?php echo $ArrayLine2[13]?>"></td>
                    <td><input type="text" name="sulec6" value="<?php echo $ArrayLine2[14]?>"></td>
                </tr>
                <tr>
                    <td>Monday</td>
                     <td><input type="text" name="molec1" value="<?php echo $ArrayLine2[16]?>"></td>
                    <td><input type="text" name="molec2" value="<?php echo $ArrayLine2[17]?>"></td>        
                    <td><input type="text" name="molec3" value="<?php echo $ArrayLine2[18]?>"></td>
                    <td><input type="text" name="molec4" value="<?php echo $ArrayLine2[19]?>"></td>      
                    <td><input type="text" name="molec5" value="<?php echo $ArrayLine2[20]?>"></td>
                    <td><input type="text" name="molec6" value="<?php echo $ArrayLine2[21]?>"></td>
                </tr>
                <tr>
                    <td>Teusday</td>
                     <td><input type="text" name="telec1" value="<?php echo $ArrayLine2[23]?>"></td>
                    <td><input type="text" name="telec2" value="<?php echo $ArrayLine2[24]?>"></td>        
                    <td><input type="text" name="telec3" value="<?php echo $ArrayLine2[25]?>"></td>
                    <td><input type="text" name="telec4"value="<?php echo $ArrayLine2[26]?>"></td>      
                    <td><input type="text" name="telec5"value="<?php echo $ArrayLine2[27]?>"></td>
                    <td><input type="text" name="telec6" value="<?php echo $ArrayLine2[28]?>"></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                     <td><input type="text" name="welec1" value="<?php echo $ArrayLine2[30]?>"></td>
                    <td><input type="text" name="welec2" value="<?php echo $ArrayLine2[31]?>"></td>        
                    <td><input type="text" name="welec3" value="<?php echo $ArrayLine2[32]?>"></td>
                    <td><input type="text" name="welec4" value="<?php echo $ArrayLine2[33]?>"></td>      
                    <td><input type="text" name="welec5" value="<?php echo $ArrayLine2[34]?>"></td>
                    <td><input type="text" name="welec6" value="<?php echo $ArrayLine2[35]?>"></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><input type="text" name="thlec1" value="<?php echo $ArrayLine2[37]?>"></td>
                    <td><input type="text" name="thlec2" value="<?php echo $ArrayLine2[38]?>"></td>        
                    <td><input type="text" name="thlec3" value="<?php echo $ArrayLine2[39]?>"></td>
                    <td><input type="text" name="thlec4" value="<?php echo $ArrayLine2[40]?>"></td>      
                    <td><input type="text" name="thlec5" value="<?php echo $ArrayLine2[41]?>"></td>
                    <td><input type="text" name="thlec6" value="<?php echo $ArrayLine2[42]?>"></td>
                </tr>
        </table>
		
        <br>
			<p>Table ID</p><input type="text" name="id" value="2" readonly>
			<input type="submit" name="Add Table" value="Add/Update Table">
		</form>
        <br><br>
        <form name="Class3" action="addclass.php" method="post" >
            <h3>Class3 Schedule</h3>
			<table style="width:100%">
                <tr>
                    <th>Days / Lectures</th>
                    <th>Lecture1</th>
                    <th>Lecture2</th>		
                    <th>Lecture3</th>
                    <th>Lecture4</th>
                    <th>Lecture5</th>
                    <th>Lecture6</th>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><input type="text" name="salec1" value="<?php echo $ArrayLine3[2]?>" ></td>
                    <td><input type="text" name="salec2" value="<?php echo $ArrayLine3[3]?>"></td>        
                    <td><input type="text" name="salec3" value="<?php echo $ArrayLine3[4]?>"></td>
                    <td><input type="text" name="salec4" value="<?php echo $ArrayLine3[5]?>"></td>      
                    <td><input type="text" name="salec5" value="<?php echo $ArrayLine3[6]?>"></td>
                    <td><input type="text" name="salec6" value="<?php echo $ArrayLine3[7]?>"></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><input type="text" name="sulec1" value="<?php echo $ArrayLine3[9]?>"></td>
                    <td><input type="text" name="sulec2" value="<?php echo $ArrayLine3[10]?>"</td>        
                    <td><input type="text" name="sulec3" value="<?php echo $ArrayLine3[11]?>"</td>
                    <td><input type="text" name="sulec4" value="<?php echo $ArrayLine3[12]?>"</td>      
                    <td><input type="text" name="sulec5" value="<?php echo $ArrayLine3[13]?>"></td>
                    <td><input type="text" name="sulec6" value="<?php echo $ArrayLine3[14]?>"></td>
                </tr>
                <tr>
                    <td>Monday</td>
                     <td><input type="text" name="molec1" value="<?php echo $ArrayLine3[16]?>"></td>
                    <td><input type="text" name="molec2" value="<?php echo $ArrayLine3[17]?>"></td>        
                    <td><input type="text" name="molec3" value="<?php echo $ArrayLine3[18]?>"></td>
                    <td><input type="text" name="molec4" value="<?php echo $ArrayLine3[19]?>"></td>      
                    <td><input type="text" name="molec5" value="<?php echo $ArrayLine3[20]?>"></td>
                    <td><input type="text" name="molec6" value="<?php echo $ArrayLine3[21]?>"></td>
                </tr>
                <tr>
                    <td>Teusday</td>
                     <td><input type="text" name="telec1" value="<?php echo $ArrayLine3[23]?>"></td>
                    <td><input type="text" name="telec2" value="<?php echo $ArrayLine3[24]?>"></td>        
                    <td><input type="text" name="telec3" value="<?php echo $ArrayLine3[25]?>"></td>
                    <td><input type="text" name="telec4"value="<?php echo $ArrayLine3[26]?>"></td>      
                    <td><input type="text" name="telec5"value="<?php echo $ArrayLine3[27]?>"></td>
                    <td><input type="text" name="telec6" value="<?php echo $ArrayLine3[28]?>"></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                     <td><input type="text" name="welec1" value="<?php echo $ArrayLine3[30]?>"></td>
                    <td><input type="text" name="welec2" value="<?php echo $ArrayLine3[31]?>"></td>        
                    <td><input type="text" name="welec3" value="<?php echo $ArrayLine3[32]?>"></td>
                    <td><input type="text" name="welec4" value="<?php echo $ArrayLine3[33]?>"></td>      
                    <td><input type="text" name="welec5" value="<?php echo $ArrayLine3[34]?>"></td>
                    <td><input type="text" name="welec6" value="<?php echo $ArrayLine3[35]?>"></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><input type="text" name="thlec1" value="<?php echo $ArrayLine3[37]?>"></td>
                    <td><input type="text" name="thlec2" value="<?php echo $ArrayLine3[38]?>"></td>        
                    <td><input type="text" name="thlec3" value="<?php echo $ArrayLine3[39]?>"></td>
                    <td><input type="text" name="thlec4" value="<?php echo $ArrayLine3[40]?>"></td>      
                    <td><input type="text" name="thlec5" value="<?php echo $ArrayLine3[41]?>"></td>
                    <td><input type="text" name="thlec6" value="<?php echo $ArrayLine3[42]?>"></td>
                </tr>
        </table>
		
        <br>
			<p>Table ID</p><input type="text" name="id" value="3" readonly>
			<input type="submit" name="Add Table" value="Add/Update Table">
		</form><br><br>
                <form name="Deleteform" action="deltable.php" method="POST">
             Delete Table <input type="text" name="keyword" placeholder="Enter Table ID">
             <input type="submit" value="Delete" name="delete" ></></form><br><br>
		</div>
            
            
	</body>
</html>
