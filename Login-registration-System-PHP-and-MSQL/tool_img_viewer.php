<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Viewer</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
    .imgcontainer {
        display: flex;
        background: linear-gradient(160deg, white, gray, black 100%);
        align-items: center;
        justify-content: center;
        border: 1px solid orange;
        border-radius: 10px;
        padding: 10px;
    }

    input {
        border: 1px solid black;
        border-radius: 4px;
        margin: 20px;
        margin-left: 1px;
        padding: 6px;
        color: orange;
        background-color: whitesmoke;
        width: 96.7vw;
    }

    .button {
        background: gray;
        cursor: pointer;
    }

    img {
        border-radius: 4px;
        border: 1px solid orange;
        box-shadow: 50px 10px 50px rgba(90, 0, 0, 0.5);
        padding: 2px;
    }

    img:hover {
        display: flexbox;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        border: 1px solid orange;
        box-shadow: 50px 10px 50px rgba(90, 0, 0, 0.5);
        padding: 2px;
        width: 95vw;
        transition: 80ms ease-in-out;
        transform: translateX(10ms);
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
                <a href="tools.php"><text1>&lt;</text1></a>
            </td>
            <td>
                <text1>IMAGE VIEWER</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            This tool can be useful in viewing images from any of your devices.
            <input class="button" id="input" type="file">
            </text2>
        </main2>

<content1>
    <div class="imgcontainer">
        <img id="img" src="https://phiewer.com/build/images/stage.ac2720ba.png" height="90%" width="90%">
    </div>

    <br/><br/>

<script>
    let img = document.getElementById('img');
    let input = document.getElementById('input');

    input.onchange = (e) => {
        if (input.files[0])
            img.src = URL.createObjectURL(input.files[0]);
    };
</script>
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