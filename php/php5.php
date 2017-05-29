<!DOCTYPE html>
<html>
<head>
	<title>php5</title>
</head>
<body>
		<?php
			$address = init_table();
			print_table($address);
		?>

		<form method="POST" action="">
		名前:<input type="name" name="name" value="工科太郎"><br />
		住所:<input type="address" name="address" value="八王子"><br />
		電話番号:<input type="tell" name="tel" value="00-000-0000"><br />
		メールアドレス:<input type="email" name="email" value="taro@hoge.jp"><br />
		<input type="submit" name="send" id="send" value="追加">
		</form>

		<?php
		function init_table(){
			$file = fopen("table.txt", "a+");
			while ($line = fgets($file)) {
				$table[] = json_decode($line,true);
			}
			if($_POST != null){
				$add = array('name' =>$_POST["name"],'address' =>$_POST["address"],'tel' =>$_POST["tel"],'email' =>$_POST["email"]);
				if($add["name"] != null && $add["address"] != null){
					$table[] = $add;
					$buffer = json_encode($add);
					fwrite($file, $buffer."\r\n",4096);
				}
			}

			fclose($file);
			return $table;
		}

		function print_table($table){
			print '<table border="1">';
			print '<tr align="center">';
			print '<th>'."名前".'</th>';
			print '<th>'."住所".'</th>';
			print '<th>'."電話番号".'</th>';
			print '<th>'."メール".'</th>';
			print '</tr>';

			if($table==null){
			}else{
				foreach ($table as $value) {
					print "<tr>";
					print "<td>".$value["name"]."</td>";
					print "<td>".$value["address"]."</td>";
					print "<td>".$value["tel"]."</td>";
					print "<td>".$value["email"]."</td>";
					print "</tr>";
				}
			}
			print '</table>';
		}

	?>
</body>
</html>