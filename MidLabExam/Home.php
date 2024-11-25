
<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['username']?></h1>
        
        <?php echo "Name:". $_SESSION['name']?> <br>
        <?php echo "Email:". $_SESSION['email']?> <br>
        <?php echo "Gender:". $_SESSION['gender']?> <br>
        <a href="logout.php"><h2>logout</h2></a>
         
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>
