<?php
	/*include "connect.php";

		$ID = $_POST['email']; 
		$Password = $_POST['pwd']; 
			session_start();  
			if(!empty($_POST['email'])) 
			{ 
				$query = mysqli_query($bdd,"SELECT * FROM Membres where Email = '$_POST[email]' AND Mdp = '$_POST[pwd]'"); 
				$row = mysqli_fetch_assoc($bdd,$query); 
				if(!empty($row['email']) && !empty($row['pwd'])) 
				{ 
					$_SESSION['Email'] = $row['pwd']; echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
				} else { 
					echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
				}
			} 
			if(isset($_POST['Login'])) { 
				header("Location:Acceuil.php");
			} */
		include "connect.php";
		session_start(); // Starting Session 
		$error = ''; // Variable To Store Error Message 
		if (isset($_POST['Login'])) { 
		if (empty($_POST['email']) || empty($_POST['pwd'])) { 
			$error = "Username or Password is invalid"; 
		} 
		else
		{ 
			// Define $username and $password 
			$username = $_POST['email']; 
			$password = $_POST['pwd']; 
			// mysqli_connect() function opens a new connection to the MySQL server.  
			// SQL query to fetch information of registerd users and finds user match. 
			$query = "SELECT Email,Mdp from Membres where Email=? AND Mdp=? LIMIT 1"; 
					if($username != $_POST['email'] || $password != $_POST['pwd'] )
					{
						echo "Check your username or password" ;
					}
			// To protect MySQL injection for Security purpose 
			$stmt = $bdd->prepare($query); 
			$stmt->bind_param("ss", $username, $password); 
			$stmt->execute(); 
			$stmt->bind_result($username, $password); 
			$stmt->store_result(); 
			if($stmt->fetch()) 
			{ 
					$_SESSION['login_user'] = $username; 
					header("location: Profile.php"); 
			}
		} 
		mysqli_close($bdd);
	}
			
?>