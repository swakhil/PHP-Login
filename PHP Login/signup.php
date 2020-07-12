<?php
   $servername="localhost";
   $db_user="root";
   $db_pwd="";
   $db_name="training";
   $con=mysqli_connect($servername,$db_user,$db_pwd) or die("not connected to database server");
   $db=mysqli_select_db($con,$db_name) or die("not connected to database");
   if(isset($_POST['submit'])){
     $name=($_POST['name']);
	 $email=($_POST['email']);
	 $password=($_POST['password']);
	 $query="INSERT INTO `login`(`name`,`email`,`password`) VALUES ('$name','$email','$password')";
	 $sql=mysqli_query($con,$query) or die("Registration error detected");
	 if($sql){
		   echo "<script> javascript: alert('Registration Successful') </script>";
		   echo "<script> document.location='index.html' </script>";
		 }
	 else{
		 echo "<script> javascript: alert('Please try again') </script>";
	 }
   }
?>