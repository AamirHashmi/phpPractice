<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript" src="javaSkript.js"></script>
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="https://www.w3schools.com/html/">PLACEHOLDER</a></li>
            <li><a href="https://www.w3schools.com/html/">PLACEHOLDER</a></li>
            <li><a href="https://www.w3schools.com/html/">PLACEHOLDER</a></li>
            <li><input type = "image" src="media/search_icon.png" id="searchBtn" onclick="showSearchBar()" height="20px" width="20px" alt="search"></li>
            <li><input type="text" name="searchBar" id="searchBar"></li>
            <a id ="loginBtn" href="login_page.php">LOGIN</a>
        </ul>
    </div>

    <div id="register-box">
        <form action="welcome_get.php" method ="post">
        NAME<br> <input type="text" name="name"><br>
        EMAIL<br><input type="text" name="email"><br>
        PASSWORD<br> <input type="text" name="password"><br>
        <input type="submit">
        </form>
    </div>
</body>
</html>