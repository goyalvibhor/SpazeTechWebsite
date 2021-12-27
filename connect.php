<?php
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$subject = $_POST['Subject'];
	$message = $_POST['Message'];

	// Database connection
	$servername = "localhost";
    $database = "u392818579_Spazetech";
    $username = "u392818579_admin";
    $password = "X61QHGrXjNFYMaPKAvdE";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("Insert into Contact(Name, Email, Subject, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssis", $name, $email, $subject, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank You...";
		$stmt->close();
		$conn->close();
	}
?>