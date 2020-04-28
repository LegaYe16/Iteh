<?php
    require 'config.php';
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<div class="form_row">
        <form action="result__update.php" method = "post" class="form">
            <input name="change__project" class="form__input" type="text" placeholder=" name project">
            <input name="time__start__project" class="form__input" type="text" placeholder=" new time start">
            <input name="time__end__project" class="form__input" type="text" placeholder=" new time end">
            <input name="description__project" class="form__input" type="text" placeholder=" description">
            <button name='main__button' id="button">Button</button>
        </form>
    </div>
</body>

</html>



