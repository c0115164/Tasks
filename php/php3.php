<!DOCTYPE html>
<html>
<head>
	<title>php3</title>
</head>
<body>
		<?php
			$address= init_table();
			print_table($address);
		?>

		<form method="POST" action="">
		名前:<input type="name" name="name" value="工科太郎"><br />
		住所:<input type="address" name="address" value="東京都"><br />
		電話番号:<input type="tel" name="tel" value="00-000-0000"><br />
		メールアドレス:<input type="email" name="mail" value="hoge@hoge.jp"><br />
		<input type="submit" name="send" id="send" value="追加">
		</form>


		<?php
		function init_table(){
			$table[] = array('name' =>'東京太郎','address' => '東京都','tel'=>'012-345-6789','mail'=>'taro@hoge.jp');
			$table[] = array('name' =>'工科花子','address' => '北海道','tel'=>'987-654-3210','mail'=>'hana@hoge.jp');

			if($_POST != null){
			$table[] = array('name' =>$_POST["name"],'address' =>$_POST["address"],'tel' =>$_POST["tel"],'mail' =>$_POST["mail"]);
			}

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

			foreach ($table as $value) {
				print "<tr>";
				print "<td>".$value["name"]."</td>";
				print "<td>".$value["address"]."</td>";
				print "<td>".$value["tel"]."</td>";
				print "<td>".$value["mail"]."</td>";
				print "</tr>";
			}
			print '</table>';
		}
		?>
</body>
</html>