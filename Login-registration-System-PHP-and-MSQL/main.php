<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNGS Jiffen Gales</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
img {
    aspect-ratio: 2/3;
    object-fit: contain;
    width: 80px;
    height: 80px;
    mix-blend-mode: none;
}
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

    <!-- This is for Programming Languages -->
    <container2>
        <text3>
            Learn Programming Languages and Database &nbsp;
                <img src="logo/web-development-html-logo-world-wide-web-consortium-create-html-signature.jpg"/> &nbsp;
                <img src="logo/CSS-Logo.jpg"/> &nbsp;
                <img src="logo/JS_Logo.png"/> &nbsp;
                <img src="logo/php.jpg"/> &nbsp;
                <img src="logo/mysql php.jpg"/>
        </text3>
    </container2>

    <main>
            <p><a href="html.php">Html</a> - is the standard markup language for Web pages.
                        With HTML you can create your own ...</p><br/>
            <p><a href="css.php">CSS</a> - is the language we use to style an HTML document. 
                        CSS describes how HTML elements should be displayed...</p><br/>
            <p><a href="js.php">JavaScript</a> - is the world's most popular programming language. 
                        JavaScript is the programming language of the Web. 
                        JavaScript is easy to learn.</p><br/>
            <p><a href="">PHP</a> - is a server scripting language, and a powerful tool for making dynamic and interactive ...</p><br/>
            <p><a href="">MySQL</a> - is a widely used relational database management system (RDBMS). Free and open ...</p>
    </main>

    <container2>
        <text3>
            Useful Tools - Text to Speech, Device Image Viewer, Stop Watch, World Clock, Calendar, Compass and &nbsp; <a href="tools.php"><button>more</button></a> ... &gt; 
        </text3>
    </container2>

    <main>
            <p><a href="text_to_speech.php">Text to Speech</a> - Turn text into Voice/Speech</p><br/>
            <p><a href="tool_img_viewer.php">Device Image Viewer</a> - View your devices images directly in this page</p><br/>
            <p><a href="">Stop Watch</a> - Useful stop watch you can use anytime online</p><br/>
            <p><a href="">World Clock</a> - Be updated on your schedules everyday using our builtin clock</p><br/>
            <p><a href="tool_compass.php">Compass</a> - Find exactly the location of true north in your journeying around earth</p>
    </main>

<!-- This is for Programming Languages -->
<container2>
    <text3>
    About JN GS 
    </text3>
</container2>

<main>
        <p>
            This is JNGS saying Hello World! <br/>
            Thanks for taking your time visiting me here . . . <br/><br/>
            
            Happy Learning with the informations we compiled just for you. <br/>
            Enjoy your stay here and have fun!!!
        </p><br/>
</main>

<!-- This is for Services -->
<container2>
    <text3>
    Contact Us 
    </text3>
</container2>

<main>
        <p>
            <form action="mailto:jiffgals1530@gmail.com" method="post" enctype="text/plain">
                Name: <br/>
                <input type="text" name="name"> <br/>

                E-mail: <br/>
                <input type="text" name="mail"> <br/>

                Comment: <br/>
                <input type="text" name="comment" size="50px"> <br/><br/>

                <button type="submit">Send</button> <button type="reset">Reset</button>
            </form>
        </p><br/>

        <p>or Call directly here 639610000000</p>
</main>

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