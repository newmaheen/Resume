<?php 
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="main">
		<div class="left">
			<img src="image/Maheen.jpg" alt="Image not found" class="image" border="3"><br><br>
			
	<div class="heading3"></div><br>
	<img class="ab" src="image/about.png">
	
	<hr class="new4">

	<p class="aboutprofile"> I am an Information Technology student. Now I have some well knowledge about computer technology and programming languages. I am skilled in C, Java SE, database design and etc.  
I'm a very enthusiastic person that like to try and learn new things. For me, that is a challenge I must overcome. To accomplish any instruction given, I try to be creative and thinks outside the box.  </p><br>

	

<img  src="image/mail.PNG"> <font class="cn1">newmaheen@gmail.com</font><br>
<img  src="image/phone.PNG"> <font class="cn1">+8801776945050</font><br>
<img src="image/location.PNG"> <font class="cn1">66/2 west razabazar, tejgaon, Dhaka.</font><br>

<img class="cn" src="image/web.PNG"> <font class="cn1">http://linkedin.com/maheen.absar</font><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<button id="login" value="LogIn" onclick=<?php

$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userlogin1');
$sql="select email from user ";
$result=mysqli_query($con,$sql);
while($res = mysqli_fetch_array($result)){
	echo $res['email'];
} ?>


>Update</button>



</div>

<div class="right"> 
       <h2 id="headin2">Maheen Absar</h2>
       <h4 id="heading4">Web Developer</h4>
       <img class="ed" src="image/Education.PNG">
	   <hr class="new">


	<div class="test">
		
		<div class="edtetails">
			<h3> Secondary School certificate</h3>
			<p>Patharia Chutolikha High School <br>Science <br>2014</p>
		
		</div>

	</div>
	

	<div class="test">
		
		<div class="edtetails">
			<h3>Higher Secondary School Certificate</h3>
			<p>Barlekha Govt College <br>Science <br> 2016</p>
		</div>
	</div>
	<div class="test">
		
		<div class="edtetails">
			<h3>Bachelor of Science </h3>
			<p>Daffodil International University(8th semester) <br>Software Engineering ,<br> 2017-Present</p>
		
		</div>
	</div>
	
	

<div class="right"> 
	<img class="wo" src="image/Work.PNG">
       
	   <hr class="new">

<div class="education">
	<div class="test">
		
		<div class="edtetails">
			<h3> Programming Skill</h3>
			<p>Java, C#, C,HTML,CSS,PHP</p>
		
		</div>
	</div>
	<div class="test">
		
		<div class="edtetails">
			<h3> Programming Contest</h3>
			<p> I am very Interest to programming contest.I also try to join programming contest. In every year there held some programming contest in our department. I cordially attend there.</p>
		
		</div>
	</div>
	<div class="test">
		
		<div class="edtetails">
			<h3> Project</h3>
			<p>I already develop some individual project using C,C# and PHP. Meal Management, e-Ticketing, Digital store etc.</p>
		
		</div>
	</div>
	
	
</div>

	</div>
	<!-- end sub class div-->


	</div>
	


       





        

       
        

       </div>




	</div>


<!-- end main class div-->
	
</body>
</html>