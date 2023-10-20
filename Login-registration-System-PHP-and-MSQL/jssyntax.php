<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
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
                    <li><a href="tools.php">Contact</a></li>
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
                <text1>SYNTAX</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            You can place the < s c r i p t > tags, containing your JavaScript, anywhere within your web page, but . . . 
            </text2>
        </main2>

<content1>
    You can place the < s c r i p t > tags, containing your JavaScript, anywhere within your web page, but it is normally recommended that you should keep it within the < h e a d > tags.<br/><br/>

    The < s c r i p t > tag alert the browser program to start interpreting all the text between these tags as a script. A simple sytax of your JavaScript will appear as follows:<br/>
        <text5>
            <div class="border">
        < s c r i p t >  <br/>
            JavaScript Code
        < / s c r i p t >
            </div> <br/>
        </text5>

            The script tag takes two important attributes: <br/><br/>
            Language: This attribute specifies what scripting language you are using. <br/>
            Typically, its value will be javascript. Although recent versions of HTML (and XHTML, its successor) have phased out the use of this attribute.<br/>
            Type: This attribute is what is now recommended to indicate the scripting language in use and its value should be set to "text/javascript".<br/><br/>

            So your JavaScript syntax will look as follows.<br/>
        <text5>
            <div class="border">
        < s c r i p t language="javascript" type="text/javascript">
            JavaScript code 
        < / s c r i p t >
            </div> <br/>
        </text5>

    <text3>
        Your First JavaScript Code
    </text3>

        Let us take a simple example to print out "Hello World". We added an optional HTML comment that surrounds our JavaScript code. 
        This is to save our code from a browser that does not support JavaScript. The comment ends with a "//->". Here "//" signifies 
        a comment in JavaScript, so we add that to prevent a browser from reading the end of the HTML comment as a piece of 
        JavaScript code. Next, we call a function document.write which writes a string into our HTML document.<br/><br/>

        This function can be used to write text, HTML, or both. Take a look at the following code.<br/>
        <text5>
            <div class="border">
        < h t m l >
        < b o d y >
        < s c r i p t  l a n g u a g e = " j a v a s c r i p t "  t y p e = " t e x t / j a v a s c r i p t " >
        < ! - -
            document.write ("Hello World!")
        / / - - >
        < / s c r i p t >
        < / b o d y >
        < / h t m l >
            </div>
        </text5>
        This code will produce the following result: 
            <div class="border">
        <text5>Hello World!</text5>
            </div> <br/>

    <text3>
        Whitespace and Line Breaks
    </text3>

        JavaScript ignores spaces, tabs, and newlines that appear in JavaScript programs. You can use spaces, tabs, and newlines 
        freely in your program and you are free to format and indent your programs in a neat and consistent way that makes the code 
        easy to read and understand. <br/><br/>

    <text3>
        Semicolons are Optional
    </text3>

        JavaScript statements in JavaScript are generally followed by a semicolon character, just as they are in C, C++ and Java. 
        JavaScript, however, allows you to omit this semicolon if each of your statements are placed on a separate line. For example, 
        the following code could be written without semicolons. <br/>
        <text5>
            <div class="border">
        < s c r i p t  languge="javascript" type="text/javascript"> <br/>
        < ! - - <br/>
        var1 = 10 <br/>
        var2 = 20 <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div> <br/>
        </text5>

        But when formatted in a single line as follows, you must use semicolons: <br/>
        <text5>
            <div class="border">
        < s c r i p t language="javascript" type="text/javascript"> <br/>
        < ! - - <br/>
            var1 = 10; var2 = 20; <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div>
        </text5>
        Note: Care should be taken while writing variable and function names in JavaScript. <br/><br/>
        
    <text3>
        Case Sensitivity
    </text3>

        JavaScript is a case-sensitive language. This means that the language keywords, variables, function names, and any other identifiers 
        must always be typed with a consistent capitalization of letters.<br/><br/>

        So the identifiers Time and TIME will convey different meanings in JavaScript. <br/><br/>

        Note: Care should be taken while writing variable and function names in JavaScript. <br/>

    <text3>
        Comments in JavaScript
    </text3>

        JavaScript supports both C-style and C++-style comments. Thus: <br/>
        * Any text between a // and the end of a line is treated as a comment and is ignored by JavaScript.<br/>
        * Any text between the character /* and */ is treated as a comment. This may span multiple lines.<br/>
        * JavaScript also recognizes the HTML comment opening sequence < ! - - .<br/>
            &nbsp; JavaScript treats this as a single-line comment, just as it does the / / comment. <br/>
        * The HTML comment closing sequence - - > is not recognized by JavaScript so it be written as / / - - >.<br/><br/>

        Example <br/>
        The following example shows how to use comments in JavaScript.<br/>
            <div class="border">
        < s c r i p t language="javascript" type="text/javascript"> <br/>
        < ! - - <br/><br/>

        / / This is a comment. It is similar to comments in C++ <br/><br/>

        / * <br/>
        * This is a multiline comment in JavaScript <br/>
        * It is very similar to comments in C Programming <br/>
            * / <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div> <br/>

<text type="button" onclick="document.getElementById('enabling').style.display='block'">3. ENABLING</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="enabling" style="display:none">
            All the modern browsers come with built-in support for JavaScript. Frequently, you may need to enable or disable this 
            support manually . . . <a href="jsenabling.php">More</a> &nbsp; &gt;
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