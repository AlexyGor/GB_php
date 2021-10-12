<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

   		var answer = parseInt(Math.random() * 100);
    	var tryCount = 0;
    	var user = "Игрок 1";
    	var maxTryCount = 10;

    	function readInt (){
       	 	var number = document.getElementById("userAnswer").value;
        	return number;
    	}

    	function write (text){
        	document.getElementById("info").innerHTML = text;
		}

	    function hide (id){
	        document.getElementById(id).style.display = "none";
    	}

	    function changePlayer(player){
			if(user == "Игрок 1"){
				user = "Игрок 2";
			} else {
				user = "Игрок 1";
			}
			return user;
		}

	    function guess(){
	        tryCount++;

	        var userAnswer = readInt();
	        if (userAnswer == "esc"){
	        	write("Обновите страницу, чтобы сыграть еще")
	            hide ("button");
	            hide ("userAnswer");
	        } else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if (userAnswer == answer){
	            write (user + ", поздравляю, вы угадали!<br>Игра окончена");
	            hide ("button");
	            hide ("userAnswer");
	        } else if (userAnswer > answer){
	            write (user + ", вы ввели слишком большое число<br>Очередь другого игрока. Введите число от 1 до 100");
	            changePlayer(user);
	        } else if (userAnswer < answer){    
	            write (user + ", вы ввели слишком маленькое число<br>Очередь другого игрока. Введите число от 1 до 100");
	            changePlayer(user);
	        }
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

	        <h1>Игра угадайка</h1>

	        <div class="box">
	            <p id="info">Угадайте число от 0 до 100<br>Играют 2 игрока. Ваша задача - по очереди вводить варианты ответа.<br> Начинает Игрок 1. <br> Для выхода из игры введите esc.</p>
	            <input type="text" id="userAnswer">  
	            <br>
	            <a href="#" onclick="guess();" id="button">Угадать</a>

	        </div>

	    </div>
	</div>
	</div>

	
<?php
include "footer.php"
?>

</body>
</html>