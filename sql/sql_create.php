<html>
<head>
    <title>sql_create</title>
</head>
<body>
    <?php
        $dsn = 'mysql:host=localhost:3307;dbname=c0115164';
        $user = 'c0115164';
        $password = 'pass';

        try{
            $dbh = new PDO($dsn,$user,$password);
            print("接続に成功しました。<br>");
            $dbh->query("CREATE TABLE address(id int NOT NULL auto_increment,name varchar(32) NOT NULL,address varchar(50) NOT NULL,email varchar(50) NOT NULL,PRIMARY KEY(id))");
        }catch (PDOException $e){
            print($e);
        }
    ?>
</body>
</html>