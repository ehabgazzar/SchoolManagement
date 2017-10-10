<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/courses.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>courses</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
		<div id="section">
				<div class="addforms">
					<div class="addcourse">
						<form action="addcourse.php" method="POST">
							<input name="coursename" type="text" placeholder="Course name" class="input"><br>
							<input name="teacherID" type="text" placeholder="teacher ID" class="input"><br>
							<button class="add-btn" type="submit" name="addcourse">Add Course</button>
					    </form>
					</div>
					<div class="addstudent">
						<form action="addCourse2Student.php" method="POST">
							<input name="coursename1" type="text" placeholder="Course name" class="input"><br>
							<input name="coursename2" type="text" placeholder="Course name" class="input"><br>
							<input name="coursename3" type="text" placeholder="Course name" class="input"><br>
							<input name="coursename4" type="text" placeholder="Course name" class="input"><br>
							<input name="studentid" type="text" placeholder="Student id" class="input"><br>
							<button name="finish" type="submit" class="add-btn">Add student</button>
						</form>
				   </div>
				</div>
                    
               
		
                   
				<div class="coursestable">
                                    
					<table style="width:70%" border="3px">
                                                 <?php
                    
                    $fileName="Courses.txt";
                    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
                   $i=0;
		while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
        $ArrayLine[$i]=$line;
        
        $i++;
        }
        $Line1=explode('~',$ArrayLine[0]);
        $Line2=explode('~',$ArrayLine[1]);
        $Line3=explode('~',$ArrayLine[2]);
        $Line4=explode('~',$ArrayLine[3]);
        
        ?>
       
						  <tr>
						    <td>Course name</td>
						    <td>Teacher name</td> 
						  
						  </tr>
						  <tr>
						    <td><?php echo $Line1[0]?></td>
						    <td><?php echo $Line1[2]?></td> 
						    
						  </tr>
						  <tr>
						   <td><?php echo $Line2[0]?></td>
						    <td><?php echo $Line2[2]?></td> 
						    
						  </tr>
                                                   <tr>
						   <td><?php echo $Line3[0]?></td>
						    <td><?php echo $Line3[2]?></td> 
						    
						  </tr>
                                                   <tr>
						   <td><?php echo $Line4[0]?></td>
						    <td><?php if($Line4[0]=="")echo $Line4[0]?></td> 
						    
						  </tr>
					</table>
				</div>
		
			<!--<div class="add-section">
				<form action="addcourse.php" method="POST">
					<button class="add-btn" type="submit" name="addcourse">Add Course</button>
				</form>
				<div class="courses">
					<table style="width:70%" border="1px">
					  <tr>
					    <td>Course name</td>
					    <td>teacher</td> 
					    <td>number of students</td>
					    <td>Add Student</td>
					  </tr>
					  <tr>
					    <td>Physics</td>
					    <td>mohamed Ali</td> 
					    <td>94</td>
					    <td>
						    <?php
		                     // include('addstudentbutton.php')
		                    ?>
					    </td>
					  </tr>
					  <tr>
					    <td>name</td>
					    <td>techer</td> 
					    <td>00</td>
					    <td>
							<?php
		                      //include('addstudentbutton.php')
		                    ?>
					    </td>
					  </tr>
					</table>
				</div>
			</div>-->
		</div>
	</body>
</html>
