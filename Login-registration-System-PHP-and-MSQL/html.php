<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
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
                <a href="main.php"><text1>&lt;</text1></a>
            </td>
            <td>
                <text1>What is Html?</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            HTML is the standard markup language for Web pages. 
            With HTML you can create your own Website. 
            HTML is easy to learn - You will enjoy it! 
            </text2>
        </main2>

        

    <!-- This is for Html Examples -->
<content1>
<text type="button" onclick="document.getElementById('document').style.display='block'">HTML Document</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="document" style="display:none">
            <! DOCTYPE html>
            < html>
            < body>
            < h1> My First Heading < /h1>
            < p> My first paragraph. < /p>
            < /body>
            < /html>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('headings').style.display='block'">HTML Headings</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="headings" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < h1>This is heading 1< /h1>
            < h2>This is heading 2< /h2>
            < h3>This is heading 3< /h3>
            < h4>This is heading 4< /h4>
            < h5>This is heading 5< /h5>
            < h6>This is heading 6< /h6>
            < /body>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('paragraphs').style.display='block'">HTML Paragraphs</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="paragraphs" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < p>This is a paragraph.< /p>
            < p>This is another paragraph.< /p>
            < /body>
            < /html>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('links').style.display='block'">HTML Links</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="links" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < h2>HTML Links< /h2>
            < p>HTML links are defined with the a tag:< /p>
            < a href="https://www.sellprog.blogspot.com">This is a link< /a>
            < /body>
            < /html>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('images').style.display='block'">HTML Images</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="images" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < h2>HTML Images< /h2>
            < p>HTML images are defined with the img tag:< /p>
            < img src="https://www.sellprog.blogspot.com/img/image1.jpg" alt="JN GS" width="104" height="142">
            < /body>
            < /html>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('buttons').style.display='block'">HTML Buttons</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="buttons" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < h2>HTML Buttons< /h2>
            < p>HTML buttons are defined with the button tag:< /p>
            < button>Click me< /button>
            < /body>
            < /html>
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('lists').style.display='block'">HTML Lists</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="lists" style="display:none">
            < !DOCTYPE html>
            < html>
            < body>
            < h2>An Unordered HTML List< /h2>
            < ul>
            < li>Coffee< /li>
            < li>Tea< /li>
            < li>Milk< /li>
            < /ul>  
            < h2>An Ordered HTML List< /h2>
            < ol>
            < li>Coffee< /li>
            < li>Tea< /li>
            < li>Milk< /li>
            < /ol> 
            < /body>
            < /html>
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