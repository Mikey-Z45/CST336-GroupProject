<?php
include "inc/functions.php";
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
        <title> Homework 2 </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <a name="top"></a> 
        <h6 id="topButton" ><a id="topButton" href="#foot"><p align="right">to the bottom</p></a></h6>
        <header>
            <h1 align="center" > Home Page </h1>
            <hr>
        </header>

    <div id="theForm" class="jumbotron">
          <form method="post">
          	 Enter some message : <input type="text" name="message" maxlength="15" value="" /> <br /><br />
          	  Select the amount you want to be shown: 
          	   <select name="amount">
          	   	  <option value="5"> 5 </option>
          	   	  <option value="10"> 10 </option>
          	   	  <option value="15"> 15 </option>
          	   	  <option value="20" selected> 20 </option>
          	   	  <option value="25"> 25 </option>
          	   	  <option value="52"> Show All </option>
          	   </select>
          	   <br /><br />
          	  Would you like to see the output in color or greyscale: 
          	  Color <input type="radio" name="type" value="color">
          	  Greyscale <input type="radio" name="type" value="grey">
          	  <br /><br />
          	  Display layout of the your search:<br />
          	  Listed <input type="radio" name="layout" value="list">
          	  Gallery <input type="radio" name="layout" value="gall">
          	    <br /><br />
          	     Select a list/gallery size: 
          	   <select name="outputSize">
          	   	  <option value="1"> 1 Column </option>
          	   	  <option value="2" selected> 2 Columns </option>
          	   	  <option value="3"> 3 Columns </option>
          	   	  <option value="4"> 4 Columns </option>
          	   </select>
          	   <br /><br />
          	 <input type="checkbox" name="displayForm" value="yes" checked> Display Form Again
          	    <br /><br />
          	  <input type="submit" class="btn btn-info" value="Display!!" name="submit" />
          </form>
        
          </div>
          
           <br />
        </main>


        <footer>
            <hr>
            CST 336 Internet Programming. 2018&copy; Divis<br />
            <strong>Disclaimer:</strong>This is a form page. <br />
            It is for academic pruposes only.
        </footer>
        <h6><a id="bottomButton" href="#top">back to the top</a></h6>
        <a name="foot"></a>
    </body>
</html>