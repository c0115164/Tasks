<html>
<head>
    <title>sql_del</title>
</head>
<body>
    <?php
        $dsn = 'mysql:host=localhost:3307;dbname=c0115164';
        $user = 'c0115164';
        $password = 'pass';

        try{
            $dbh = new PDO($dsn,$user,$password);
            print("接続に成功しました。<br>");
            $dbh->query("DROP TABLE IF EXISTS my_table");
        }catch (PDOException $e){
            print($e);
        }
    ?>
</body>
</html>