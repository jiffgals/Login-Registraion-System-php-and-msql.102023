<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1> 
    <div class="welcome">Welcome to JN GS!</div>

    <a href="main.php" target="_blank">Enter Main</a> <br/> <a href="logout.php">Logout</a>

</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>