<?php
   $email='';
   $password='';
   $servername="localhost";
   $db_user="root";
   $db_pwd="";
   $db_name="training";
   $con=mysqli_connect($servername,$db_user,$db_pwd) or die("not connected to database server");
   $db=mysqli_select_db($con,$db_name) or die("not connected to database");
   if(isset($_POST['submit'])){
     $email=($_POST['email']);
	 $password=($_POST['password']);
	 $select="select * from login where email='$email' AND password='$password'";
	 $select_query=mysqli_query($con,$select) or die("orders table error detected");
	 $num_rows=mysqli_num_rows($select_query);
	 if($num_rows==1){
	 	 session_start();
	     $_SESSION['login_user']=$email;
		 echo "<script> document.location='dashboard.php' </script>";
		 }
	 else{
		 echo "<script> javascript: alert('Incorrect username or password') </script>";
		 echo "<script> document.location='index.html' </script>";
	 }
   }
?>