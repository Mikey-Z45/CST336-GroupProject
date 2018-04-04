<?php
        
        
        function displayEmployees() {
            
            $connUrl = getenv('JAWSDB_MARIA_URL');
            //$connUrl = "mysql://lmlkgspjc98rb5xs:mv5ahjobdzw8rbwr@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/y821o9vjmf1tu1yj";
            $hasConnUrl = !empty($connUrl);
            
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Company';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = "SELECT `name`, `email`, `phone` 
                    FROM `employee` 
                    ORDER BY `name` ASC
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            echo '<table style="centered">';
            while ($row = $stmt -> fetch())  {
                echo  '<tr>' . '<td>' . $row['name'] . "</td>" . " " . '<td>' . $row['email'] . '</td>'  . " " . '<td>' . $row['phone'] . '</td>'  .  '</tr>';
            }
            echo '</table>';
        }

        function displayPay() {
            
            $connUrl = getenv('JAWSDB_MARIA_URL');
            //$connUrl = "mysql://lmlkgspjc98rb5xs:mv5ahjobdzw8rbwr@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/y821o9vjmf1tu1yj";
            $hasConnUrl = !empty($connUrl);
            
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Company';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = "SELECT `salary_id`, `name`
                    FROM `employee` 
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            while ($row = $stmt -> fetch())  {
                if($row['name'] == $user) {
                    $sal = $row['salary_id'];
                }
            }
            
            $sql = "SELECT `salary_id`, `amount`
                    FROM `Salary` 
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            while ($row = $stmt -> fetch())  {
                if($row['salary_id'] == $sal) {
                    $salAm = $row['amount'];
                }
            }
            echo $salAm;
        }
        
        function displayName () {
            
            $connUrl = getenv('JAWSDB_MARIA_URL');
            //$connUrl = "mysql://lmlkgspjc98rb5xs:mv5ahjobdzw8rbwr@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/y821o9vjmf1tu1yj";
            $hasConnUrl = !empty($connUrl);
            
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Company';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = "SELECT `deviceName`, `deviceType`, `price`, `status` 
                    FROM `device` 
                    ORDER BY `deviceName` ASC
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            echo '<table style="centered">';
            while ($row = $stmt -> fetch())  {
                echo  '<tr>' . '<td>' . $row['deviceName'] . "</td>" . " " . '<td>' . $row['deviceType'] . '</td>'  . " " . '<td>' . $row['price'] . '</td>'  . " " . '<td>' .  $row['status'] . '</td>'  . '</tr>';
            }
            echo '</table>';
        }
        
        function displayEmail() {
            
            $connUrl = getenv('JAWSDB_MARIA_URL');
            //$connUrl = "mysql://lmlkgspjc98rb5xs:mv5ahjobdzw8rbwr@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/y821o9vjmf1tu1yj";
            $hasConnUrl = !empty($connUrl);
            
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Company';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = "SELECT `deviceName`, `deviceType`, `price`, `status` 
                    FROM `device` 
                    ORDER BY `deviceName` ASC
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            echo '<table style="centered">';
            while ($row = $stmt -> fetch())  {
                echo  '<tr>' . '<td>' . $row['deviceName'] . "</td>" . " " . '<td>' . $row['deviceType'] . '</td>'  . " " . '<td>' . $row['price'] . '</td>'  . " " . '<td>' .  $row['status'] . '</td>'  . '</tr>';
            }
            echo '</table>';
        }
        
        function displaySalary() {
            
            $connUrl = getenv('JAWSDB_MARIA_URL');
            //$connUrl = "mysql://lmlkgspjc98rb5xs:mv5ahjobdzw8rbwr@am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/y821o9vjmf1tu1yj";
            $hasConnUrl = !empty($connUrl);
            
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Company';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = "SELECT `deviceName`, `deviceType`, `price`, `status` 
                    FROM `device` 
                    ORDER BY `deviceName` ASC
                    LIMIT 0, 50 ";
        
            $stmt = $dbConn -> prepare ($sql);
            $stmt -> execute ();
            
            echo '<table style="centered">';
            while ($row = $stmt -> fetch())  {
                echo  '<tr>' . '<td>' . $row['deviceName'] . "</td>" . " " . '<td>' . $row['deviceType'] . '</td>'  . " " . '<td>' . $row['price'] . '</td>'  . " " . '<td>' .  $row['status'] . '</td>'  . '</tr>';
            }
            echo '</table>';
        }
?>
        