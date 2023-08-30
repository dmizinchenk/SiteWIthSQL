<?php
    // session_start();
    // include_once ("pages/functions.php");
    // $conn = mysqli_connect(
    //     $hostname = "localhost",
    //     $username = 'root',
    //     $password = "",
    //     $database = "travelbase"
    // );

    // mysqli_query($conn,"CREATE TABLE Countries(id INTEGER AUTO_INCREMENT PRIMARY KEY, title VARCHAR(100))");

    // $res = mysqli_query($conn, "SELECT * FROM Countries");
    // while($row = mysqli_fetch_array($res)) //MYSQL_NUM    MYSQL_ASSOC   MYSQL_BOTH
    // {
    //     echo $row[0] . ' ' . $row[1] . "<br/>";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Agency</title>

    <link href="css/bootstrap.min.css"
    rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
</head>
<body>
    <div class="container" >
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12"></header>
        </div>
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12">
                <?php
                    include_once('pages/menu.php');
                ?>
            </nav>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php
                    if(isset($_GET['page']))
                    {
                        $page=$_GET['page'];
                        if($page==1)
                            include_once("pages/tours.php");
                        if($page==2)
                            include_once("pages/comments.php");
                        if($page==3)
                            include_once("pages/registration.php");
                        if($page==4)
                            include_once("pages/admin.php");
                    }
                ?>
            </section>
        </div>
        <div class="row">
            <footer>The company &copy;</footer>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>