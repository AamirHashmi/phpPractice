<!DOCTYPE html>
<html>
<body>
	<div>
	<?php
		//making a connection
		$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "mydb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully" . "<br><br>";

		$username = $_GET["name"];
		$email = $_GET["email"];
		$password = $_POST["password"];

	 	$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
        	echo "New acc created successfully";
        }

        else {
        	echo "Error: " . $sql . "<br>" . $conn->error;
        }

        

        $sql = "SELECT usernames
        VALUES ('$username')";

        $result = $conn->query($sql);

        if($result == nigu ){
        	echo "ACCOUNT FOUND";
    	}

    	?>

		Welcome <?php echo $_GET["name"]; ?><br>
		Your email address is: <?php echo $_GET["email"]; ?>
</div>

</body>
</html>