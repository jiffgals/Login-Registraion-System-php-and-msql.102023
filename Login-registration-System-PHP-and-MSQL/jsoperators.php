<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
table {
    border: 1px solid blue;
    font-family: sans-serif;
}

thead th {
    padding: 10px;
}

tbody td {
    padding: 10px;
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

    <container2>
        <table>
            <td>
                <a href="js.php"><text1>&lt;</text1></a>
            </td>
            <td>
                <text1>Operators</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            What is an Operators?
            </text2>
        </main2>

<content1>
    <text5>
        Let us take a simple expression 4 + 5 is equal to 9. Here 4 and 5 are called operands and '+' is called the operator. 
        JavaScript supports the following types of operators. <br/>
        * Arithmetic Operators <br/>
        * Comparison Operators <br/>
        * Logical (or Relational) Operators <br/>
        * Assignment Operators <br/>
        * Conditional (or ternary) Operators <br/><br/>

    Let's have a look at all the operators one by one. <br/><br/>
    </text5>

        <text3>
            Arithmetic Operators
        </text3>

        JavaScript supports the following arithmetic operators: <br/>
        Assume variable A holds 10 and variable B holds 20, them: <br/><br/>

        <table border="2">
            <thead>
                <th>S. No.</th>
                <th>Operator adn Descripttion</th>
            </thead>

            <tbody>
                <td>1</td>
                <td>
                    + (Addition) <br/>
                    Adds two operands <br/>
                    Ex: A + B will give 30
                </td>
            </tbody>

            <tbody>
                <td>2</td>
                <td>
                    - (Subtraction) <br/>
                    Subtrcats the second operand from the first <br/>
                    Ex: A - B will give -10
                </td>
            </tbody>

            <tbody>
                <td>3</td>
                <td>
                    * (Multiplication) <br/>
                    Multiply both operands <br/>
                    Ex: A * B will give 200
                </td>
            </tbody>

            <tbody>
                <td>4</td>
                <td>
                    / (Division) <br/>
                    Divide the numerator by the denominator <br/>
                    Ex: A / B will give 2
                </td>
            </tbody>

            <tbody>
                <td>5</td>
                <td>
                    % (Modulus) <br/>
                    Outputs the remainder of an integer division <br/>
                    Ex: A % B will give 0
                </td>
            </tbody>

            <tbody>
                <td>6</td>
                <td>
                    ++ (Increment) <br/>
                    Increases an integer value by one <br/>
                    Ex: A++  will give 11
                </td>
            </tbody>
            </tbody>

            <tbody>
                <td>7</td>
                <td>
                    -- (Decrement) <br/>
                    Decreases an integer value by one <br/>
                    Ex: A--  will give 9
                </td>
            </tbody>
        </table> <br/>
        Note: Addition operator (+) works for numeric as well as String. e.g. "a" + 10 will give "a10". <br/><br/>

        Example <br/>
        The following code shows how to use arithmetic operator in JavaScript. <br/>
        <table border="2">
            <tbody>
                <td>
                    <text5>
                    < h t m l > <br/>
                    < b o d y > <br/><br/>

                    < s c r i p t type="text/javascript"> <br/>
                    < ! - - var a = 33; var b = <br/>
                    10; var c = "Test"; var <br/>
                    linebreak = "<br/>"; <br/><br/>

                    document.write("a + b = "); result <br/>
                    = a + b; document.write(result); <br/>
                    document.write(linebreak);
                    linebreak = "<br/>"; <br/><br/>

                    document.write("a - b = "); result <br/>
                    = a - b; document.write(result); <br/>
                    document.write(linebreak);
                    linebreak = "<br/>"; <br/><br/>

                    document.write("a / b = "); result <br/>
                    = a / b; document.write(result); <br/>
                    document.write(linebreak);
                    linebreak = "<br/>"; <br/><br/>

                    document.write("a % b = "); result <br/>
                    = a % b; document.write(result); <br/>
                    document.write(linebreak);
                    linebreak = "<br/>"; <br/><br/>

                    document.write("a + b + c = "); <br/>
                    result = a + b + c; 
                    document.write(result); <br/>
                    document.write(linebreak); <br/>
                    a = <br/>
                    a++; <br/>
                    document.write("a++ = "); result <br/>
                    = a++; document.write(result); <br/>
                    document.write(linebreak);
                    b = b-- <br/>
                    ; <br/>
                    document.write("b-- = "); result <br/>
                    = b--; document.write(result); <br/>
                    document.write(linebreak); <br/>
                    / / - - > <br/>
                    < / s c r i p t > <br/><br/>

                    <p>Set the variables to different values and then try...</p> <br/>
                    < / b o d y > <br/>
                    < / h t m l >
                    </text5>
                </td>
            </tbody>
        </table> <br/>
        Output <br/>
        <table border="2">
            <tbody>
                <td>
                    <text5>
                    a + b = 43 a - b <br/>
                    = 23 a / b = 3.3 <br/>
                    a % b = 3 a + b + <br/>
                    c = 43Test a++ = <br/><br/>
                    Set the variables to different values and then try...
                    </text5>
                </td>
            </tbody>
        </table> <br/>

        <text3>
            Comparison Operators
        </text3>

        JavaScript supports the following comparison operators: <br/><br/>
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