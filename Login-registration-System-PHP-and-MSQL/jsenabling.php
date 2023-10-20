<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enabling</title>
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
                <text1>ENABLING</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            All the modern browsers come with built-in support for JavaScript. Frequently, you may need to enable or disable this . . . 
            </text2>
        </main2>

<content1>
        All the modern browsers come with built-in support for JavaScript. Frequently, you may need to enable or disable this support manually. 
        This chapter explains the procedure of enabling and disabling JavaScript support in your browsers: Internet Explorer, Firefox, Chrome, and Opera. <br/><br/>

        <text3>
            JavaScript in Internet Explorer
        </text3>

        Here are the steps to turn on or turn off JavaScript in Internet Explorer: <br/>
        * Follow Tools -> Internet Options from the menu. <br/>
        * Select Security tab from the dialog box. <br/>
        * Click the Custom Level button. <br/>
        * Scroll down till you find the Scripting option. <br/>
        * Select Enable radio button under Active scripting.<br/>
        * Finally click OK and come out.<br/>
        To disable JavaScript support in your Internet Explorer, you need to select Disable radio button under Active scripting.<br/><br/>

        <text3>
            JavaScript in Firefox
        </text3>

        Here are the steps to turn on or off JavaScript in Firefox: <br/>
        * Open a new tab -> type about: config in the address bar. <br/>
        * Then you will find the warning dialog. Select I'll be careful, I promise! <br/>
        * Then you will find the list of configure options in the browser. <br/>
        * In the search bar, type javascript.enabled. <br/>
        * There you will find the option to enable or disable javascript by rightclicking on the value of that option -> select toggle. <br/>
        If javascript.enabled is true; it converts to false upon clicking toogel. If javascript is disabled; it gets enabled upon clicking toggle. <br/><br/>

        <text3>
            JavaScript in Chrome
        </text3>

        Here are the steps to turn on or turn off JavaScript in Chrome: <br/>
        * Click the chrome menu at the top right hand corner of your browser.<br/>
        * Select Settings. <br/>
        * Click Show advance settings at the end of the page. <br/>
        * Under the privacy section, click the Content settings button. <br/>
        * In the "JavaScript" section, select "Do not allow any site to run JavaScript" or "Allow all site to run JavaScript (recommended)". <br/><br/>

        <text3>
            JavaScript in Opera
        </text3>

        Here are the steps to turn on or turn off JavaScript in Opera: <br/>
        * Follow Toos-> Preferences from the menu. <br/>
        * Select Advanced option from the dialog box. <br/>
        * Select Content from the listed items. <br/>
        * Select Enable JavaScript checkbox. <br/>
        * Finally click OK and come out. <br/>
        To disable JavaScript support in Opera, you should not select the Enable JavaScript checkbox. <br/><br/>

        <text3>
            Warning for Non-JavaScript Browsers
        </text3>

        If you have to do something important using JavaScript, then you can display a warning message to the user using < n o s c r i p t > tags. <br/><br/>
        
        You can add a noscript block immediately after the script block as follows: <br/>
        <text5>
            <div class="border">
        < h t m l > <br/>
        < b o d y > <br/><br/>

        < s c r i p t language="javascript" type="text/javascript"> <br/>
        < ! - - <br/>
        &nbsp; &nbsp; document.write ("Hello World!") <br/>
        / / - - > <br/>
        < / s c r i p t > <br/><br/>

        < n o s c r i p t > <br/>
        &nbsp; &nbsp; Sorry...JavaScript is neede to go ahead. <br/>
        < / n o s c r i p t > <br/>
        < / b o d y > <br/>
        < / h t m l >
            </div>
        </text5> <br/>
        Now, if the user's browser does not support JavaScript or JavaScript is not enabled, then the message from < / n o s c r i p t > will be displayed on the screen. <br/><br/>

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