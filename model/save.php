<?php 
session_start(); 
include "./config/db_conn.php";

if (isset($_POST['Gmail']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Gmail']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}
	else{
		
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE Gmail='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Gmail'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Gmail'] = $row['inp_Gmail'];
            	$_SESSION['Full_Name'] = $row['inp_Full_Name'];
				$_SESSION['Birthday'] = $row['inp_Birthday'];
				$_SESSION['Gender'] = $row['inp_Gender'];
				$_SESSION['Age'] = $row['inp_Age'];
				$_SESSION['Contact_Num'] = $row['inp_Contact_Num'];
				$_SESSION['Password'] = $row['inp_Password'];
                

            	header("Location: profile.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}