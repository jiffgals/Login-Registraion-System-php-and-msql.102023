<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
.table {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
    align-items: top;
    justify-content: top;
    width: 100%;
    border: 1px solid blue;
    border-radius: 4px;
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
                <text1>VARIABLES</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            . . .
            </text2>
        </main2>

<content1>

        <text3>
            JavaScript Datatypes
        </text3>

        One of the most fundamental characteristics of a programming language is the set of data types it supports. These are 
        the type of values that can be represented and manipulated in a programming language. <br/>
        JavaScript allows you to work with three primitive language. <br/>
        * Numbers, e.g., 123, 120.50 etc. <br/>
        * String of text, e.g. "This text string" etc. <br/>
        * Boolean, e.g. true or false. <br/>
        JavaScript also defines two trivial data types, null and undefined, each of which defines only a single value. 
        In addition to these primitive data types, JavaScript supports a composite data type known as object. We will cover objects in 
        detail in a separate chapter.<br/>
        Note: Java does not make a distinction between integer values and floatingpoint values. All numbers in JavaScript are represented 
        as floating-point values. <br/>
        JavaScript represents number using the 64-bit floating-point format defined by the IEEE 754 standard. <br/><br/>

        <text3>
            JavaScript Variables
        </text3>

        Like many other programming languages, JavaScript has variables. Variables can be thought of as named containers. You can 
        place data into these containers and then refer to the data simply by namming the container. <br/><br/>

        Before you use a variable in a JavaScript program, you must declare it. Variables are declared with the var keyword as follows. <br/>

        <text5>
            <div class="border">
        < s c r i p t type="text/javascript"> <br/>
        < ! - - <br/>
        money; <br/>
        var name; <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div> 
        </text5> <br/>

        You can also declare multiple variables with the same var keyword as follows: <br/>
        <text5>
            <div class="border">
        < s c r i p t type="text/javascript"> <br/>
        < ! - - var money, name; <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div> 
        </text5> <br/><br/>
        
        Storing a value in a variable is called variable initialization. You can do variable initialization at the time of variable 
        creation or at a later point in time when you need that variable. <br/><br/>

        For instance, you might create a variable named money and assign the value 2000.50 to it later. For another variable, you can assign a value at 
        the time of initialization as follows.<br/>
        <text5>
            <div class="border">
        < s c r i p t type="text/javascript"> <br/>
        < ! - - <br/>
        var name = <br/>
        "Ali"; var <br/>
        money; money = <br/>
        2000.50; <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div>
        </text5> <br/>
        Note: Use the var keyword only for declaration or initialization, once for the life of any variable name in a document. You 
        should not re-declare same variable twice. <br/><br/>

        JavaScript is untyped language. This means that a JavaScript variable can hold a value of any data type. Unlike many other languages, 
        don't have to tell JavaScript during variable declaration what type of value the variable will hold. The value type of a variable 
        can change durint the execution of a program and JavaScript takes care of it automatically. <br/><br/>

        <text3>
            JavaScript Variable Scope
        </text3>

        The scope of a variable is the region of your program in which it is defined. <br/>
        JavaScript variables have oly two scopes. <br/>
        * Global Variables: A global variable has global scope which means it can be defined anywhere in your JavaScript code. <br/>
        * Local Variables: A local variable will be visible only within a function where it is defined. Function parameters are always 
        &nbsp; &nbsp; local to that function.<br/>
        Within the body of a function, a local variable takes presedence over a global variable with the same name. If you declare 
        a local variable or function parameter with the same name as a global variable, you effectively hide the global variable.<br/><br/>
        Take a look into the following example. <br/>
        <text5>
            <div class="border">
        < s c r i p t type="text/javascript"> <br/>
        < ! - - <br/> 
        var myVar = "global"; / / Declare a global variable fucntion checkscope() <br/>
        { <br/>
        &nbsp; &nbsp; var myVar = "local"; / / Declare a local variable <br/>
        document.write(myVar); <br/> 
        } <br/>
        / / - - > <br/>
        < / s c r i p t >
            </div>
        </text5> <br/>
        It will produce the following result: <br/>
        <text5>
            <div class="border">
        Local
            </div>
        </text5> <br/>

        <text3>
            JavaScript Variable Names
        </text3>

        While naming your variables in JavaScript, keep the following rules in mind. <br/>
        * You should not use any of the JavaScript reserved keywords as a variable name. These keywords are mentioned in the next 
        &nbsp; &nbsp; section. For example, break or boolean variable names are not valid. <br/>
        * JavaScript variable names should not start with a numeral (0-9). They must begin with a letter or an underscore character. 
        &nbsp; &nbsp; For example, 123test is an invalid variable name but _123test is a valid one.<br/>
        * JavaScript variable names are case-sensitive. For example, Name and name are two different variables. <br/><br/>

        <text3>
            JavaScript Reserved Words
        </text3>

        A list of all the reserved words in JavaScript are given in the following table. They cannot be used as JavaScript variables, 
        functions, methods, loop labels, or any object names. <br/> 
        <text5>
            <div class="border">
                <table>
                    <td>
                        <div class="table">
                        abstract <br/>
                        boolean <br/>
                        break <br/>
                        byte <br/>
                        case <br/>
                        catch <br/>
                        char <br/>
                        class <br/>
                        const <br/>
                        continue <br/>
                        debugger <br/>
                        default <br/>
                        delete do <br/>
                        double
                        </div>
                    </td>
                    <td>
                        <div class="table">
                        else <br/>
                        enum <br/>
                        export <br/>
                        extends <br/>
                        false <br/>
                        final <br/>
                        finally <br/>
                        float for <br/>
                        function <br/>
                        goto <br/>
                        if <br/>
                        implements <br/>
                        import <br/>
                        in
                        </div>
                    </td>
                    <td>
                        <div class="table">
                        Instanceof <br/>
                        int <br/>
                        interface <br/>
                        long <br/>
                        native <br/>
                        new <br/>
                        null <br/>
                        package <br/>
                        private <br/>
                        protected <br/>
                        public <br/>
                        return <br/>
                        short <br/>
                        static <br/>
                        </div>
                    </td>
                    <td>
                        <div class="table">
                        super <br/>
                        switch <br/>
                        syncrhonized <br/>
                        this <br/>
                        throw <br/>
                        throws <br/>
                        transient <br/>
                        true try <br/>
                        typeof <br/>
                        var void <br/>
                        volatile <br/>
                        while <br/>
                        with <br/>
                        ...
                        </div>
                    </td>
                </table>
            </div>
        </text5> <br/>

<text type="button" onclick="document.getElementById('operators').style.display='block'"><text3>6. Operators</text3></text>
    <div class="jsresult">
        <text5>
            <div contenteditable="false">
            <p id="operators" style="display:none">
            JavaScript Datatypes . . . <a href="jsoperators.php">More</a> &nbsp; &gt;
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