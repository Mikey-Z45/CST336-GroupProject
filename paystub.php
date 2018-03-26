// create an html layout that will make a paystub table and have function calls in order to get the information for the person who is logged in
<?php
include "functions.php";
?>

<?php
    session_start();
    if (isset($_POST["message"])) {
        $message = $_POST["message"];
        $amount = $_POST["amount"];
        $display = $_POST["type"];
        $form = $_POST["displayForm"];
        $layout = $_POST["layout"];
        $size = $_POST["outputSize"];
        $button = $_POST["submit"];
    }
    if (!$_POST["message"]) {
        echo "There is an error.";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Team Project </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <a name="top"></a> 
        <h6 id="topButton" ><a id="topButton" href="#foot"><p align="right">to the bottom</p></a></h6>
        <header>
            <h1 align="center" > Home Page </h1>
            <hr>
        </header>

        <div id="options" class="jumbotron">
            echo paystub;
        </div>
          
           <br />
        </main>


        <footer>
            <hr>
            CST 336 Internet Programming. 2018&copy; Divis<br />
            <strong>Disclaimer:</strong>This is the paystub. <br />
            It is for academic pruposes only.
        </footer>
        <h6><a id="bottomButton" href="#top">back to the top</a></h6>
        <a name="foot"></a>
    </body>
</html>