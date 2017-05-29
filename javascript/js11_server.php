<?php
$file = fopen("table.txt", "a+");
while ($line = fgets($file)) {
    $table[] = json_decode($line,true);
}
fclose($file);
print(json_encode($table,JSON_UNESCAPED_UNICODE));
?>