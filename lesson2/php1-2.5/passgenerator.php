<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

	var numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]

	function readInt(){
		var number = document.getElementById("userAnswer").value;
		return parseInt(number);
	}

	function write(text){
			document.getElementById("info").innerHTML = text;
	}

	function hide(id){
			document.getElementById(id).style.display = "none";
	}

	function generate(){
		var password = []
		var userAnswer = readInt();
		for(var i = 0; i < userAnswer; i++){
			var rand = parseInt(Math.random() * numbers.length);
			var simb = numbers[rand]
			password.push(simb);
		}

		write("Ваш пароль: " + password.join(""));
		hide("button");
		hide("userAnswer");
	}

	</script>
</head>
<body>

<?php
include "menu.php"
?>
	
	<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Введите количество символов, из которого должен состоять пароль</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="generate();" id="button">Готово</a>				
			</div>

        </div>
    </div>
</div>
	
</div>

	
<?php
include "footer.php"
?>

</body>
</html>