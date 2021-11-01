<?php
session_start();
$path='phones.txt';

if($_POST['buy']) {
    unset($_SESSION['b']);
    unset($_SESSION['count_p']);
    echo "<p align='center'><span style='font-size: 20px; color: blue; border: 1px solid red;'>Thank you for purchasing :)!!!</span></p><br>";

}

if($_POST['clear']) {
    unset($_SESSION['count_p']);

    unset($_SESSION['b']);


    $fp = fopen($path, 'w');
    fputs($fp, "");
    fclose($fp);
}

if($_POST['s']) {

    for($i=0;$i<count($_POST['id']); $i++){

        $result= $_POST['id'][$i]."\\\n";

        $fp = fopen($path, 'a');
        fputs($fp, $result);
        fclose($fp);




    }
    if(!$_SESSION['count_p']) {
        $_SESSION['count_p'] = count($_POST['id']);

    }
    else {$_SESSION['count_p'] =  $_SESSION['count_p']+count($_POST['id']);}
}
?>




<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Корзина</title>

    <style type="text/css">
        .korzina {

            margin-left: 200px;
            background: grey;
            width: 200px;
            height: 200px;
            color: white;
            overflow: scroll;

        }
    </style>
<body>
<div class='korzina'>

    <?PHP

    if($_SESSION['count_p']) {

        echo "You added <span style='color: orange;'>$_SESSION[count_p] products</span> ";

        echo "Выберите продукт: <br>";


        $a = file_get_contents($path);

        echo "<span style='color: yellow;'>".$a."</span><br>";

        echo "<form action='' method='POST'><input type='submit'  name='buy' value='buy'></form>";
    }
    else {echo "Корзина пустая. Выберите продукты";}

    ?></div>


<div>
    <form action='' method='POST'>
        SAMSUNG(250$)<input value='SAMSUNG(250$)' type='checkbox' name='id[]' >
        NOKIA(150$)<input value='NOKIA(150$)'type='checkbox' name='id[]'  >
        APPLE(300$)<input value='APPLE(300$)' type='checkbox' name='id[]' >
        MOTOROLA(400$)<input  value='MOTOROLA(400$)'type='checkbox' name='id[]' >
        TESLA(500$)<input value='TESLA(500$)' type='checkbox' name='id[]' >
        <input type='submit' name='s' value='Add'>
        <input type='submit' name='clear' value='clear'>
</div>
</form>
</body>
</html>