<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
</style>
</head>
<body>
<container>
<headfloat>
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
</headfloat>
</container>

    <margintop></margintop>

    <container2>
        <table>
            <td>
                <a href="js.php"><text1>&lt;</text1></a>
            </td>
            <td>
                <text1>PLACEMENT</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            There is a flexibility given to include JavaScript code anywhere in an HTML document. However . . .
            </text2>
        </main2>

<content1>
        There is a flexibility given to include JavaScript code anywhere in an HTML document. However the most preferred ways to include JavaScript in an 
        HTML file are as follows: <br/>
        * Script in < h e a d > ... < / h e a d > section. <br/>
        * Script in < b o d y > ... < / b o d y > section. <br/>
        * Script in < b o d y > ... < / b o d y > and < h e a d > ... < / h e a d > section. <br/>
        * Script in an external file and then include in < h e a d > ... < / h e a d > section. <br/>
        In the following section, we will see how we can place JavaScript in an HTML file in different ways.<br/><br/>

        <text3>
            JavaScript in < h e a d > ... < / h e a d > Section
        </text3>

        If you want to have a script run on some event, such as when a user clicks somewhere, then you will place that scrit in the 
        head as follows. <br/>
        <text5>
            <div class="border">
                < h t m l > <br/>
                < h e a d > <br/>
                < s c r i p t language="javascript" type="text/javascript"> <br/>
                < ! - - <br/>
                function sayHello() { <br/>
                    alert("Hello World") <br/>
                } <br/>
                / / - - > <br/>
                < / s c r i p t > <br/>
                < / h e a d > <br/>
                < b o d y > <br/>
                Click here for the result <br/>
                < i n p u t type="button" onclick="sayHello()" value="Say Hello" /> <br/>
                < / b o d y > <br/>
                < / h t m l >
            </div> 
        </text5> <br/>
        This code will produce the following results: <br/>
        <text5>
            <div class="border">
                Click here for the result <br/>
                <button>Say Hello</button>
            </div> 
        </text5> <br/>

<text type="button" onclick="document.getElementById('variables').style.display='block'"><text3>5. Variables</text3></text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="variables" style="display:none">
            JavaScript Datatypes . . . <a href="jsvariables.php">More</a> &nbsp; &gt;
            </p>
            </div>
        </text5>
    </div>
</content1>

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