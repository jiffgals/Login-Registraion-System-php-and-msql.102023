<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Tutorial - Elements & Attributes</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
</style>
</head>
<body>

<container>
    <nav>
        <h1>JN GS</h1>
    </nav>
    <aside>
        <header>
        <a href="main.php" class="logo">JN GS</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="main.php">Home</a></li>
                <li><a href="tools.php">Tools</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                    <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
        </div>
        <div class="searchBox">
            <input type="text" placeholder="Search...">
        </div>
        </header>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="js/navigation.js"></script>

    </aside>
</container>

    <navheader>
            Basic Web Development - HTML Elements and Attributes
    </navheader>

    <container2>
        <main2>
            <h2>HTML Elements</h2>
            - An HTML Elements usually consists of a start tag and end tag with the content inserted in between<br/>
            - HTML elements with no content are called empty elements. Empty elements do not have an end tag, such as the "br" element: {which indicate a line break} <br/><br/>
            - Attributes provide additional information about an element <br/>
            - Attributes are always specified in the start tag <br/> 
            - Attributes usually come in name value pairs like: name="value"
        </main2>
    </container2>

<script src="js/hamburger.js"></script>

<footer>
    Copyright &copy; 2023 <NAME>JN GS</NAME>
</footer>
</body>
</html>

<?php
}else{
header("Location: index.php");
exit();
}
?>