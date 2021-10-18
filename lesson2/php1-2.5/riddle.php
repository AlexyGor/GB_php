<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<!--<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["двенадцать", "12"]);
			checkAnswer("userAnswer2", ["пять", "5"]);
			checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

			alert("Вы отгадали " + score + " загадок");

		

	</script>}-->
</head>
<body>

<?php
include "menu.php"
?>

	
	<div class="contentWrap">
    <div class="content">
       <div class="center">
          
          <h1>Игра в загадки</h1>
          <div class="box">
          <?php
        if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
            $userAnswer = $_GET["userAnswer1"];
            $score = 0;
            if($userAnswer == "двенадцать" || $userAnswer == "12"){
                $score++;
            }
            $userAnswer = $_GET["userAnswer2"];
            if($userAnswer == "пять" || $userAnswer == "5"){
                $score++;
            }
            $userAnswer = $_GET["userAnswer3"];
            if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
                $score++;
            }
        echo "Вы отгадали " . $score . " загадок";
            }
            ?>
<form metod="GET">
				<p>Сколько месяцев в году имеет 28 дней?</p>
				<input type="text" name="userAnswer1">

				<p>У квадратного стола отпилили один угол. Сколько углов у него стало?</p>
				<input type="text" name="userAnswer2">

				<p>Какой конь не ест овса?</p>
				<input type="text" name="userAnswer3">

				<br>
				<input type="submit" value="Ответить" name"">
</form>
			</div>
           
       </div>
        
    </div>
	    
	</div>

	
<?php
include "footer.php"
?>

</body>
</html>