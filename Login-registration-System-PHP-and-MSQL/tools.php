<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
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
                <text1>Tools</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            Useful Tools - Test to Speech, Device Image Viewer, Stop Watch, World Clock, Calendar, Compass and more . . . 
            </text2>
        </main2>

<content1>
        <text3>
            <a href="text_to_speech.php">Text to Speech</a>
        </text3>

        Turn your text into Speech/Audible with our simple Text to Speech tool <br/><br/>

        <text3>
            <a href="tool_img_viewer.php">Device Image Viewer</a>
        </text3>

        Browse and view your device images instantly with this simple program built in our platform. <br/><br/>

        <text3>
            <a href="">Stop Watch</a>
        </text3>

        Feel free to use this simple stop watch program anytime anywhere as long as you have access the internet. <br/><br/>

        <text3>
            <a href="">World Clock</a>
        </text3>

        Get appropriate time update from the location where you're at right now that you might not missed important schedule and calendar notes. <br/><br/>

        <text3>
            <a href="tool_compass.php">Compass</a>
        </text3>

        Track the exact direction by locating true north from your recent location with our simple compass program builted in here that you might now lose the direction your heading. <br/><br/>

<text type="button" onclick="document.getElementById('placement').style.display='block'"><text3>4. Placement</text3></text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="placement" style="display:none">
            There is a flexibility given to include JavaScript code anywhere in an HTML document. However . . . <a href="jsplacement.php">More</a> &nbsp; &gt;
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