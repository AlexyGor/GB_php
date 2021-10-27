<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "menu.php"
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

            <h1>Галерея фотографий</h1>
            <?php
            $images = scandir('img/');
            foreach ($images as $image) {
                if (is_file('img/'.$image)) {
            ?>
            <div class="">

                <a href="img/<?php echo $image; ?>" target="_blank"</a>
                <img src="img/<?php echo $image; ?>" width="100px" height="100px" alt="">


            </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
}

<?php
include "footer.php"
?>

</body>
</html>