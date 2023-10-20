<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
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
                <text1>What is CSS?</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            CSS is the language we use to style an HTML document. 
            CSS describes how HTML elements should be displayed...
            </text2>
        </main2>

        

    <!-- This is for Html Examples -->
<content1>
<text type="button" onclick="document.getElementById('syntax').style.display='block'">CSS Syntax - 
            A CSS rule consists of a selector and a declaration block.</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="syntax" style="display:none">
            Selector &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Declaration &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; Declaration <br/>
            &nbsp; h 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; { c o l o r :  b l u e ;  
            &nbsp; &nbsp; f o n t - s i z e :  1 2 p x ; } <br/>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            Property Value &nbsp; &nbsp; &nbsp; Property &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Value <br/><br/>

            The selector points to the HTML element you want to style. <br/>
            The declaration block contains one or more declarations separated by semicolons. <br/>
            Each declaration includes a CSS property name and a value, separated by a colon. <br/>
            Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces. 
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('example').style.display='block'">
            Example - In this example all < p > elements will be center-aligned, with a red text color: 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        </text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="example" style="display:none">
            < ! D O C T Y P E &nbsp; h t m l > <br/>
            < h t m l > <br/>
            < h e a d > <br/>
            < s t y l e > <br/>
            p {  <br/>
            c o l o r : &nbsp; r e d ; <br/>
            t e x t - a l i g n : &nbsp; c e n t e r ;  <br/>
            }  <br/>
            < / s t y l e > <br/>
            < / h e a d > <br/>
            < b o d y > <br/>
            < p > Hello World! < / p > <br/>
            < p > These paragraphs are styled with CSS.< / p > <br/>
            < / b o d y > <br/>
            < / h t m l >
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('explained').style.display='block'">Example Explained:</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="explained" style="display:none">
            <font color="red">p</font> 
            &nbsp; is a selector in CSS (it points to the HTML element you want to style: <font color="red">< / p ></font> ).<br/>
            <font color="red">c o l o r</font> &nbsp; is a property, and &nbsp; <font color="red">r e d</font> &nbsp; is the 
            property value <br/>
            <font color="red">t e x t - a l i g n</font> &nbsp; is a property, and center is the property value
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('wcss').style.display='block'">What is CSS?</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="wcss" style="display:none">
            CSS stands for Cascading Style Sheets <br/>
            CSS describes how HTML elements are to be displayed on screen, paper, or in other media  <br/>
            CSS saves a lot of work. It can control the layout of multiple web pages all at once <br/>
            External stylesheets are stored in CSS files
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('selector').style.display='block'">CSS Selectors</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="selector" style="display:none">
            A CSS selector selects the HTML element(s) you want to style. <br/>
            CSS selectors are used to "find" (or select) the HTML elements you want to style.
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('selectorcategory').style.display='block'">
            We can divide CSS selectors into five categories:
        </text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="selectorcategory" style="display:none">
            1. Simple selectors (select elements based on name, id, class) <br/>
            2. <a href="">Combinator selectors</a> (select elements based on a specific relationship between them) <br/>
            3. <a href="">Pseudo-class selectors</a> (select elements based on a certain state) <br/>
            4. <a href="">Pseudo-elements selectors</a> (select and style a part of an element) <br/>
            5. <a href="">Attribute selectors</a> (select elements based on an attribute or attribute value)
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