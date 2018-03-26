
<?php
    // Start session
    session_start();

    // $_XXXXXX are objects provided by PHP
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $_POST will contain all values provided by 
        // inputs with name attributes
        $user = $_POST["username"];
        $password = $_POST["password"];
        
        // You would perform your login check here
        if ($password == "homework") {
            $_SESSION["username"] = $user;
            // If I take no action, I will go right back to login
            header('Location: '. 'index.php');
            exit();
        }
        else {
            // Do nothing
            // Maybe i show an error?
        }
        
        // var_dump($_POST);
    }
    else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    }
//test
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login to the team project.</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <a name="top"></a> 
        <h6 id="topButton" ><a id="topButton" href="#foot"><p align="right">to the bottom</p></a></h6>
        <header>
            <h1> Login </h1>
            <hr>
        </header>

        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "Login Failed";
                //var_dump($_SERVER);
            }
            ?>
        </div>
        
        <form method="POST" action="login.php">
            <div>
                <label>Username</label>
                <!--If there is no name attribute, the input does not go to the server-->
                <input type="text" name="username" value="<?php echo $user ?>"/>
            </div>
            <div>
                <label>Password (The password for this is password)</label>
                <!--If there is no name attribute, the input does not go to the server-->
                <input type="password" name="password"/>
            </div>
            <div>
                <input href="index.php" type="submit" name="submit" value="Login"/>
            </div>
        </form>
    


        <footer>
            <hr>
            CST 336 Internet Programming. 2018&copy;<br />
            <strong>Disclaimer:</strong>This is the team project. <br />
        </footer>
        <h6><a id="bottomButton" href="#top">back to the top</a></h6>
        <a name="foot"></a>
    </body>
</html>