<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $dsn = 'mysql:host=localhost:3307;dbname=c0115164';
    $user = 'c0115164';
    $password = 'pass';
     try{
            $dbh = new PDO($dsn,$user,$password);
            print("通信に成功しました");
            $sql = mysql_query("SELECT * FROM address");
            //$stmt = $dbh->query($sql);
            $doc = "";
            foreach ($sql as $row) {
                $doc += $row['id'].$row['name'];
            }
            print($doc);
        }catch (PDOException $e){
            print($e);
        }
?>
</body>
</html>