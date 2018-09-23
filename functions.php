<?php
function submitData(){
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$retypepassword=$_POST['retypepassword'];
	if(empty($username)||empty($password)||empty($retypepassword)){
		echo "<p class='bg bg-warning'>Please complete all the fields</p>";
	}elseif($password!==$retypepassword){
		echo "<p class='bg bg-danger'>Password doesn`t match </p>";
	}else{
		echo "<p class='bg bg-success'>Password match!</p><br>";
		echo "<p class='bg bg-primary'>The username is: ".$username."<br>And the password is: ".$password."</p>";
	}
	}
}






?>