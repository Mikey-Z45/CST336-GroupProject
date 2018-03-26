<?php
    
        $sort;
        global $sort;
        global $button;
        
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
                ORDER BY `deviceName` ASC";
        
        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute ();
            
        // create functions here since the database is now initialized
        
        function displayPay() {
            
        }
        
        
        
?>
