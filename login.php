<?php 
session_start(); 
include("connect.php");

if (isset($_POST['name']) && isset($_POST['pass'])) {

	// function validate($data){
    //    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if (empty($name)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        //ekhane vul chilo
		$sql = "SELECT * FROM users WHERE name='$name' AND pass='$pass'";

		    $result = $con->query($sql);
            if ($row = $result->fetch_row()) {
                echo json_encode($row);
                //er ekhane vul chilo 
                /**R Sob pray thik chilo */
            	$_SESSION['user_name'] = $row[2];
            	$_SESSION['name'] = $row[1];
            	$_SESSION['id'] = $row[0];
            	header("Location: home.php");
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}
	
}else{
	header("Location: index.php");
	exit();
}