<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        
    }

    .header {
        overflow: hidden;
        background-color: rgb(255, 255, 204);
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header .header-right a:hover {
      
        color: red;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }
    </style>
</head>

<body>
    <?php
$home="home";

?>


   

        <div class="header-right">
            <?php
            if(isset($_SESSION["Sname"]))
            {
                $home=$_SESSION["Sname"];
                echo "<a class='active' href='homepage.php'>Logged in as $home</a>";
            }
            else{
                echo "<a class='active' href='homepage.php'>$home</a>";
            }
            
        echo "
        <b> <a href='login.php'> <br> <b> login</a> </b> </b> <br>
        <a href='registration.php'>Registration</a>"; 
        ?>

        </div>
    </div>
</body>

</html>