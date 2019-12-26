<?php
		session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
			
			
		
		if(isset($_POST["tuser"])&& isset($_POST["tpass"]))
		{
			$user=$_POST["tuser"];
			$pass=$_POST["tpass"];
			
			$qry=mysql_query("select * from login where user='$user' && pass='$pass'");
				if(mysql_num_rows($qry)>0)
				{
					//session_start();
					$_SESSION['user']=$user;
					$_SESSION['pass']=$pass;
					header("location:index.php");
				}
				else
				{
					header("location:login.php");
				}
				mysql_close($cn);
				
		}
?>