<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript" src="javaSkript.js"></script>
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php">PLACEHOLDER</a></li>
            <li><a href="https://www.w3schools.com/html/">PLACEHOLDER</a></li>
            <li><a href="https://www.w3schools.com/html/">PLACEHOLDER</a></li>
            <li><input type = "image" src="media/search_icon.png" id="searchBtn" onclick="showSearchBar()" height="20px" width="20px" alt="search"></li>
            <li><input type="text" name="searchBar" id="searchBar"></li>
            <a id ="loginBtn" href="login_page.php">LOGIN</a>
        </ul>
    </div>
    <div>
    <?php
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


       /* //create database
        $sql = "CREATE DATABASE myDB";
        if($conn->query($sql) === TRUE)
        {
            echo "DATABASE CREATED";
        }
        else
        {
            echo "ERROR DATABASE NOT CREATED" .$conn->error;
        }

        //create table
              $sql = "CREATE TABLE Pokemon(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            type VARCHAR(30) NOT NULL,
            level INT(2) UNSIGNED
        )";

        if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
        } else {
        echo "Error creating table: " . $conn->error;
        }


        //insert into table
        $name = "Squirtle";
        $type = "Water";
        $level = 5;
        
        $sql = "INSERT INTO Pokemon (name, type, level)
        VALUES ('$name', '$type', '$level')";

        if ($conn->query($sql) === TRUE) {
        echo "New pokemon created successfully";
        } 
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $sql = "SELECT id, name, type FROM Pokemon";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo  $row["id"]. " - Pokemon: " . $row["name"]. " " . $row["type"]. "<br>";
            }
        } 
        
        else {
            echo "0 results";
        }

        $conn->close();
        */
    ?>
</div>
</body>
</html>