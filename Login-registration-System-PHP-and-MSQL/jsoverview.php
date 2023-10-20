<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
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
                <text1>Overview</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            The ECMA-262 Specification defined a standard version of the core JavaScript language. 
            </text2>
        </main2>

<content1>
<text type="button" onclick="document.getElementById('details').style.display='block'">* JavaScript is a lightweight,interpreted programming lang . . . &nbsp; <font color="blue">More</font> &gt; </text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="details" style="display:none">
            * JavaScript is a lightweight,interpreted programming language.<br/>
            * Designed for creating network-centric applications.<br/>
            * Complementary to and integrated with Java.<br/>
            * Complementary to and integrated with Html.<br/>
            * Open and cross-platform.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('clientside').style.display='block'">Client-Side JavaScript</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="clientside" style="display:none">
            Client-side JavaScript is the most common form of the language. The script should be included in or referenced by an HTML document for the code to be interpreted by the browser.<br/><br/>
            It means that a web page need not to be a static HTML, but can include programs that interact with the user, control the browser, and dynamically create HTML content.<br/><br/>
            The JavaScript client-side mechanism provides many advantages over traditional CGI server-side scripts. For example, you might use JavaScript to check if the user has entered a valid e-mail address in a form field.<br/><br/>
            The Javascript code is executed when the user submits the form, and only if all the entries are valid, they would be submitted to the Web Server.<br/><br/>
            JavaScript can be used to trap user-initiated events such as button clicks, link navigation, and other actions that the user initiates explicitly or implicitly.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('advantages').style.display='block'">Advantages of JavaScript</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="advantages" style="display:none">
            The merits of using JavaScript are:<br/>
            * Less server interaction: You can validate user input before sending the page off to the server. This saves server 
                traffic, which means less load on your server.<br/>
            * Immediate feedback to the visitors: They don't have to wait for a page reload to see if they have forgotten to enter something.<br/>
            * Increased interactivity: You can create interfaces that react when the user hovers over them with a mouse or activates them via the keyboard.<br/>
            * Richer interfaces: You can use JavaScript to include such items as dragand-drop components and sliders to give a Rich Interface to your site visitors.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('limitation').style.display='block'">Limitations of JavaScript</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="limitation" style="display:none">
            We cannot treat JavaScript as a full-fledged programming language. It lacks the following importance features:<br/>
            * Client-side JavaScript does not allow the reading or writing of files. This has been kept for security reason.<br/>
            * JavaScript cannot be used for networking applications because there is no such suppor available.<br/>
            * JavaScript doesn't have any multithreading or multiprocessor capabilities. Once again, JavaScript is a lightweight, 
                interpreted programming language that allows you to build interactivity into otherwise static HTML pages.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('devtools').style.display='block'">JavaScript Development Tools</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="devtools" style="display:none">
            One of major strengths of JavaScript is that it does not require expensive development tools. You can start with a simple 
            text editor such as Notepad. Since it is an interpreted language inside the context of a web browser, you don't even 
            need to buy a compiler. <br/><br/>
            To make our life simpler, various vendors have come up with very nice JavaScript editing tools. Some of them are listed here:<br/>
            * Microsoft FrontpPage: Microsoft has developed a popular HTML editor called FrontPage. FrontPage also provides web 
                developers with a number of JavaScript tools to assist in the creation of interactive websites.<br/>
            * Macromedia Dreamweaver MX: Macromedia Dreamweaver MX is a very popular HTML and JavaScript editor in the professional web development crowd. 
                It provides several handy prebuilt JavaScript components, integrates well with databases, and conforms to new standards such as XHTML and XML.<br/>
            * Macromedia HomeSite 5: Homesite 5 is a well-liked HTML and JavaScript editor from Macromedia that can be used to manange personal websites effectively.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('where').style.display='block'">Where is JavaScript Today?</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="where" style="display:none">
            The ECMAScript Edition 5 standard will be the first update to be released in over four years. JavaScript 2.0 conforms 
                to Edition 5 of the ECMAScript standard, and the difference between the two is extremely minor.<br/><br/>
            The specification for JavaScript 2.0 can be found on the following site: <br/>
                <a href="https://www.ecmascript.org" target="_blank">https://www.ecmascript.org/</a> <br/><br/>
            Today, Netscape's JavaScript and Microsoft's JScript conform to the ECMAScript standard, although both the language still 
                support the features that are not apart of the standard. <br/><br/>
            JavaScript can be implemented using JavaScript statments that are placed within the <font color="red">< s c r i p t >...< / s c r i p t ></font> HTML tags in a web page.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('syntax').style.display='block'">2. SYNTAX</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="syntax" style="display:none">
            You can place the < s c r i p t > tags, containing your JavaScript, anywhere within your web page, but . . . <a href="jssyntax.php">More</a> &gt;
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