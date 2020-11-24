<?php
$fullname = $error_fullname = $username = $error_username = $password =$error_password  = $error_type = "";

$hasError = false;
function PassNum()
{

    $x = (strpos($_POST["password"], '1') + strpos($_POST["password"], '2') + strpos($_POST["password"], '3') + strpos($_POST["password"], '4') + strpos($_POST["password"], '5') + strpos($_POST["password"], '6') + strpos($_POST["password"], '7') + strpos($_POST["password"], '8') + strpos($_POST["password"], '9') + strpos($_POST["password"], '0'));

    return $x > 0; # x will never be zero if any one of the number exists in the string

}

	if(isset($_POST["register"])){
		if(empty($_POST["fullname"])){
			$error_fullname="Full name required";
			$hasError =true;
		}
		else{
			$fullname = htmlspecialchars($_POST["fullname"]);
		}


		if (empty($_POST["username"]))
	{
			$error_username = "*Username required";
			$hasError = true;
	}
	elseif (strlen($_POST["username"]) < 6)
	{
			$error_username = "*Username must be 6 characters long";
			$hasError = true;
	}
	elseif (strpos($_POST["username"], ' ') != false || $_POST["username"] != trim($_POST["username"]))
	{
			$error_username = "*Space is not allowed at start or inside or at end in Username.";
			$hasError = true;
	}
	else
	{
			$username = htmlspecialchars($_POST["username"]);
	}


	if (empty($_POST["password"]))
	 {
			 $error_password = "*Password required";
			 $hasError = true;
	 }
	 elseif (strlen($_POST["password"]) < 8)
	 {
			 $error_password = "*Password must be 8 characters long";
			 $hasError = true;
	 }

	 elseif (!PassNum())
	 {
			 $error_password = "*Password must contain a number ";
			 $hasError = true;
	 }
	 else
	{
		$password = htmlspecialchars($_POST["password"]);
	}
	 /*
	 elseif (strtolower($_POST["password"]) == $_POST["password"])
    {
        $error_password = "*Password must contain uppercase and lowercase alphabets ";
        $hasError = true;
    }



    else
    {
			if (strpos($_POST["password"], '#') == false && strpos($_POST["password"], '?') == false )
	 	 			{
	 			 $error_password = "*Password must  contain a special character. Ex : # ? ";
	 			 $hasError = true;
	 	 			}
			if	(strpos($_POST["password"], '#') == true ) {
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;

			}

			if (strpos($_POST["password"], '?') == true )
			{
				  $password = htmlspecialchars($_POST["password"]);
					$hasError = false;
			}

    }




		 if (empty ($_POST["password_repeated"]))
			{
						 $error_confirm_password = "Repeat password. ";
					$hasError = true;
			}
			if ( $_POST["password_repeated"]!= $password)
			 {
							$error_confirm_password = "Password dont match. ";
					 $hasError = true;
			 }
			 */

			
		/*
	if(!$hasError){
			$admins = simplexml_load_file("../xml/admins.xml");

			$admins = $admins->addChild("admin");
			$admins->addChild("username",$username);
			$admins->addChild("password",$password);
			$admins->addChild("gender",$gender);
			$admins->addChild("email",$email);
			$admins->addChild("phone","$phone_no");
			$admins->addChild("city",$city);
			$admins->addChild("type","customer");








			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($admins->asXML());


			$file = fopen("../xml_files/admins.xml","w");
			fwrite($file,$xml->saveXML());



				header("Location: ../html/login.php");
		}
		*/
		
		}
	}
	
	


?>
