<!DOCTYPE html>
<html>
<head>
    <title>sql2.php</title>
</head>
<body>
<?php
    $dsn = 'mysql:host=localhost:3307;dbname=c0115164';
    $user = 'c0115164';
    $password = 'pass';
     try{
            $dbh = new PDO($dsn,$user,$password);
            //mysql_select_db("address");
            print("通信に成功しました");
            //$table = sprintf("INSERT INTO address(id,name,address,email) VALUES('%d','%s','%s','%s')",$_GET['id'],$_GET['name'],$_GET['address'],$_GET['email']);
            $sql = sprintf("INSERT INTO address(id,name,address,email) VALUES(:id,:name,:address,:email)");
            $stmt = $dbh -> prepare($sql);
            $params = array(':id'=>$_POST['id'],':name'=>$_POST['name'],':address'=>$_POST['address'],':email'=>$_POST['email']);
            $stmt ->execute($params);
            //mysql_query($sql);
        }catch (PDOException $e){
            print($e);
        }
?>
</body>
</html>