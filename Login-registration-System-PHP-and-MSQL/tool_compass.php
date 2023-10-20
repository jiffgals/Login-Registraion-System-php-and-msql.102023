<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compass</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
    #compass-container {
      background: linear-gradient(skyblue, transparent, transparent, transparent, transparent, transparent, transparent, transparent, skyblue);
      box-shadow: 5px 5px 5px 5px rgba(5,0,0,0.5);
      width: 420px;
      height: 420px;
      max-width: 100%;
      max-height: 100%;
      border: 2px solid yellow;
      border-radius: 50%;
      position: relative;
    }
    
    .compass-container {
      background: linear-gradient(yellow, white, white, white, white, white, yellow);
      box-shadow: 5px 5px 5px 5px rgba(0,5,0,0.3);
      width: 420px;
      height: 420px;
      max-width: 100%;
      max-height: 100%;
      border: 2px solid black;
      border-radius: 50%;
      position: relative;
    }
    
    #compass-needle {
      width: 5px;
      height: 160px;
      background-color: red;
      position: absolute;
      top: 50%;
      left: 50%;
      transform-origin: bottom center;
      transform: translate(-50%, -50%) rotate(0deg);
      transition: transform 0.5s;
    }
    
    #compass-heading {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px;
      font-weight: bold;
      color: red;
    }
    
   .textarea {
      background: silver;
      border-radius: 10px;
      position: absolute;
      width: 97%;
      margin: 10px;
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
                <text1>Compass</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            Find the True North with this simple program 
            </text2>
        </main2>

<content1>
  <div class="compass-container">
  <div id="compass-container">
    <div id="compass-needle"></div>
    <div id="compass-heading">N</div>
  </div>
  </div>
  
  <script>
        window.addEventListener('deviceorientation', handleOrientation);
    
    function handleOrientation(event) {
      var alpha = event.alpha;
      if (alpha !== null) {
        var compassNeedle = document.getElementById("compass-needle");
        compassNeedle.style.transform = "translate(-50%, -50%) rotate(" + alpha + "deg)";
        var compassHeading = document.getElementById("compass-heading");
        compassHeading.innerText = getCardinalDirection(alpha);
      }
    }
    
    function getCardinalDirection(alpha) {
      var directions = ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW'];
      var index = Math.round(alpha / 45) % 8;
      return directions[index];
    }
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