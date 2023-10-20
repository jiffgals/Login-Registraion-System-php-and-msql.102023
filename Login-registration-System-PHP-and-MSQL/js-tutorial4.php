<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <li><a href="#">Tools</a></li>
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
            HTML Tutorial Series / Complete guide for beginners
    </navheader>

    <container2>
        <main2>
            <!--Syntax statements-->
            <h2>JavaScript Syntax - Statements</h2>
            
            <p>A <b>JavaScript program</b> is a list of <b>statements</b> to be executed by a computer.</p>
            
            <p id="synstatements"></p>
            
            <script>
            var x, y, z;  // Declare 3 variables
            x = 5;    // Assign the value 5 to x
            y = 6;    // Assign the value 6 to y
            z = x + y;  // Assign the sum of x and y to z
            
            document.getElementById("synstatements").innerHTML =
            "The value of z is " + z + ".";
            </script>
            
            <!--Syntax numbers-->
            <h2>JavaScript Syntax - Numbers</h2>
            
            <p>Number can be written with or without decimals.</p>
            
            <p id="synnumbers"></p>
            
            <script>
            document.getElementById("synnumbers").innerHTML = 10.50;
            </script>
            
            <!--Syntax strings-->
            <h2>JavaScript Strings</h2>
            
            <p>Strings can be written with double or single quotes.</p>
            
            <p id="synstrings"></p>
            
            <script>
            document.getElementById("synstrings").innerHTML = 'John Doe';
            </script>
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